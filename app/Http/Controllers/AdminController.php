<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Finance;
use App\Models\Inventory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        $auth_user = Auth::user();
        $user = User::where('id', $auth_user->id)->first();
        $admin = Admin::where('user_id', $auth_user->id)->first();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'photo' => $user->photo,
            'job' => $admin->job,
            'salary' => $admin->salary,
        ];

        return view('admin.admin', [
            'title' => 'Admin | Dashboard',
            'data' => $data,
        ]);
    }

    public function user()
    {
        return view('admin.user', ['title' => 'Admin | User', 'users' => User::all()]);
    }

    public function inventory(string $id)
    {
        $inventory = Inventory::where('user_id', $id)->get();

        return view('inventory.inventory', [
            'title' => 'Inventory',
            'inventory' => $inventory
        ]);
    }

    public function finance(string $id)
    {
        // Retrieve the necessary data from the 'inventory' table for the current user
        $inventoryData = Inventory::where('user_id', $id)->get();

        // Perform the calculations and update the 'finance' table
        $totalPengeluaran = 0;
        $totalPemasukan = 0;

        foreach ($inventoryData as $item) {
            $totalPengeluaran += $item->harga_beli * ($item->jumlah_stok + $item->jumlah_terjual);
            $totalPemasukan += $item->harga_jual * $item->jumlah_terjual;
        }

        $totalKeuntungan = $totalPemasukan - $totalPengeluaran;

        // Update or create a record in the 'finance' table
        Finance::updateOrCreate(
            [],
            [
                'total_pengeluaran' => $totalPengeluaran,
                'total_pemasukan' => $totalPemasukan,
                'total_keuntungan' => $totalKeuntungan,
            ]
        );

        return view('finance', [
            'title' => 'Finance',
            'totalPengeluaran' => $totalPengeluaran,
            'totalPemasukan' => $totalPemasukan,
            'totalKeuntungan' => $totalKeuntungan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-user', ['title' => 'Admin | Create User']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file('photo')->storeAs('photos', $request->file('photo')->hashName());
        $filename = basename($path);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo' => $filename,
            'role' => $request->role,
            'email_verified_at' => now(),
        ]);

        if ($request->role == 'admin') {
            Admin::create([
                'user_id' => User::where('email', $request->email)->first()->id,
                'job' => $request->job,
                'salary' => $request->salary,
            ]);
        } else if ($request->role == 'client') {
            Client::create([
                'user_id' => User::where('email', $request->email)->first()->id,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
        }

        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = User::findorfail($user->id);
        return view('admin.edit-user', [
            'title' => 'Admin | Edit User',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Remove previous image if it exists
        if ($user->photo && Storage::exists('photos/' . $user->photo)) {
            Storage::delete('photos/' . $user->photo);
        }

        $user_new = $request->except('photo');

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->storeAs('photos', $request->file('photo')->hashName());
            $filename = basename($path);
            $user_new['photo'] = $filename;
        }

        $data = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $users = User::findOrFail($user->id);
        $users->update($user_new);

        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $selected = User::findorfail($user->id);
        // Delete the user's photo from storage
        if ($selected->photo) {
            Storage::delete('photos/' . $selected->photo);
        }
        $selected->delete();
        return back();
    }
}
