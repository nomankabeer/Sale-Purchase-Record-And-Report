<?php

namespace App\Http\Controllers;


use App\Models\Bike;
use App\Models\Credit;
use App\Models\UserList;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller{

    public function index(){

        $from = date('2021-03-13 00:00:00');
        $to = date('2021-03-13 00:00:00');

        
        $credit_bike_id = Bike::whereBetween('sold_date' , [$from, $to])->where('sold_to', "<>" ,"null")->where('sold_type' , 'Credit')->pluck('id')->toArray();
        $credit_amount = Credit::whereIn('bike_id' , $credit_bike_id)->where('is_paid' , 0)->sum('payment_price');
        $credit_pait_amount = Credit::whereIn('bike_id' , $credit_bike_id)->where('is_paid' , 1)->sum('payment_price');


        $data = [];
        $data['total_purchase_bikes_today'] = Bike::whereBetween('purchase_date' , [$from, $to])->count();
        $data['total_purchase_amount_today'] = Bike::whereBetween('purchase_date' , [$from, $to])->sum('purchase_price');
        $data['total_sold_bikes_today'] = Bike::whereBetween('sold_date' , [$from, $to])->where('sold_to', "<>" ,"null")->count();
        $data['total_sold_amount_today'] = Bike::whereBetween('sold_date' , [$from, $to])->sum('sold_price');

        $data['total_sold_on_credit'] = Bike::whereBetween('sold_date' , [$from, $to])->where('sold_type' , 'Credit')->count();
        $data['total_sold_on_cash_sale_credit'] = Bike::whereBetween('sold_date' , [$from, $to])->where('credit_Type' , 'Cash Sale Credit')->count();
        $data['total_sold_on_installment'] = Bike::whereBetween('sold_date' , [$from, $to])->where('credit_Type' , 'Installment')->count();
        $data['total_credit_paid_amount'] = $credit_pait_amount;

        $data['total_sold_on_cash'] = Bike::whereBetween('sold_date' , [$from, $to])->where('sold_type' , 'Paid')->count();
        $data['total_paid_amount_today'] = Bike::whereBetween('sold_date' , [$from, $to])->where('sold_type' , "Paid")->sum('sold_price');
        $data['total_credit_amount_today'] = $credit_amount;


//        dd($data);
        return view('dashboard', compact('data'));
    }

}
