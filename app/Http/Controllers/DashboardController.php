<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;
use App\Models\Member;
use App\Models\Penjualan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_bayar = Penjualan::count();
        $jumlah_member = Member::count();
        $jumlah_barang = Sepatu::count();
        $penjualan = Penjualan::Select()->orderBy('tgl_bayar','desc')
                            ->limit(5)
                            ->get();
        $today = Carbon::today();
        $endDate = Carbon::today()->addDays(7);
        $total = Penjualan::Select(Penjualan::raw('SUM(jumlah_bayar) as total_price'))
        ->whereBetween('tgl_bayar', [$today, $endDate])->first();
        return view('home.dashboard', compact('penjualan','jumlah_member','jumlah_barang'),['total' => $total]);
                               
    }
}

