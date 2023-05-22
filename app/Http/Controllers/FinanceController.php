<?php

namespace App\Http\Controllers;

use App\Models\FinanceModel;
use App\Models\InventoryModel;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        // Retrieve the necessary data from the 'inventory' table
        $inventoryData = InventoryModel::all();

        // Perform the calculations and update the 'finance' table
        $totalPengeluaran = 0;
        $totalPemasukan = 0;

        foreach ($inventoryData as $item) {
            $totalPengeluaran += $item->harga_beli * ($item->jumlah_stok + $item->jumlah_terjual);
            $totalPemasukan += $item->harga_jual * $item->jumlah_terjual;
        }

        $totalKeuntungan = $totalPemasukan - $totalPengeluaran;

        // Update or create a record in the 'finance' table
        FinanceModel::updateOrCreate(
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

    public function editFinance()
    {
        return view('finance.edit-finance', [
            'title' => 'Edit Finance'
        ]);
    }

    public function update()
    {

    }
}
