<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Order;
use App\Models\Packet;
use App\Models\Spending;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'title' => 'Dashboard',
            'packets' => Packet::all(),
            'orderSevenD' => Order::where('created_at','>',Carbon::today()->subDays(7))->latest()->get(),
            'orders' => Order::all(),
            'userCount' => User::count(),
            'sumSpending' => Spending::sum('total'),
            'sumAsset' => Asset::sum('price')
        ]);
    }
}
