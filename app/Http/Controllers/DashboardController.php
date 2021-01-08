<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    
    //Halaman Dashboard Admin
    public function index()
    {
        $odermasuk =  Transaksi::where('status', '1')->get();
        $orderonproses =  Transaksi::where('status', '2')->get();
        $orderselesai =  Transaksi::where('status', '4')->get();
        $income = Transaksi::sum('total_harga');
        return view('admin.index')
        ->with('ordermasuk', $odermasuk)
        ->with('orderonproses', $orderonproses)
        ->with('orderselesai', $orderselesai)
        ->with('income', $income);
    }
}
