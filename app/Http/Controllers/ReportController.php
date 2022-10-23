<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Order;
use App\Models\Spending;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $firstDayofPreviousMonth = Carbon::now()->startOfMonth()->toDateTimeString();
        $lastDayofPreviousMonth = Carbon::now()->endOfMonth()->toDateTimeString();

        return view('dashboard.report.index',[
            'title' => 'Laporan',
            'orders' => Order::where('created_at','<',$lastDayofPreviousMonth)->where('created_at','>',$firstDayofPreviousMonth)->get(),
            'spendings' => Spending::where('created_at','<',$lastDayofPreviousMonth)->where('created_at','>',$firstDayofPreviousMonth)->get()
        ]);
    }

    public function action(Request $request, $type){
        return redirect("/dashboard/reports/$request->startDate/$request->endDate/?type=$type");
    }

    public function print(Request $request ,$startdate, $enddate){
        $type = $request->query('type');
        if ($type == 'Assets') {
            $datas = Asset::where('created_at','>=',$startdate)->where('created_at','<=',$enddate)->latest()->get();
        }else{
            $datas = Order::where('created_at','>=',$startdate)->where('created_at','<=',$enddate)->latest()->get();
        }

        return view('dashboard.report.print',[
            'title' => 'Print',
            'type' => $type,
            'datas' => $datas
        ]);
    }
}
