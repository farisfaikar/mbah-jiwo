<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use App\Models\Inventory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'updated_at' => now(),
        ]);

        $users = User::findOrFail($user->id);
        $users->update($data);

        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $selected = User::findorfail($user->id);
        $selected->delete();
        return back();
    }
}
