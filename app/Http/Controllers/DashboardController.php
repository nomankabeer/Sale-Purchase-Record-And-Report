<?php

namespace App\Http\Controllers;


use App\Models\Bike;
use App\Models\Credit;
use App\Models\UserList;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller{

    public function index(){
        $today_date = date_format(today() , "Y-m-d");
        $from = date($today_date.' 00:00:00');
        $to = date($today_date.' 23:59:59');
        $from = date('2021-03-14 00:00:00');

        if(@$_GET['from'] != null && @$_GET['to'] != null){
            $from = date(date_format( new \DateTime($_GET['from']), "Y-m-d").' 00:00:00');
            $to = date(date_format( new \DateTime($_GET['to']), "Y-m-d").' 23:59:59');
        }
        elseif(@$_GET['from'] != null && @$_GET['to'] == null){
            $from = date(date_format( new \DateTime($_GET['from']), "Y-m-d").' 00:00:00');
        }

        $data = [];

        self::getReportByDate($from , $to , $data);
        $data['total_purchased_bikes_stock'] = Bike::where('sold_to' , null)->count();
        $data['total_purchased_bikes_amount'] = Bike::sum('purchase_price');
        $data['total_sold_bikes_amount'] = Bike::where('sold_to' , "<>" , null)->sum('sold_price');
        $data['total_purchased_bikes'] = Bike::count();
        $data['total_sold_bikes'] = Bike::where('sold_to' , "<>" , null)->count();
        $data['total_credit'] = Credit::where('is_paid' ,  0)->sum('payment_price');
        $data['total_paid_amount'] = (int)Credit::where('is_paid' ,  1)->sum('payment_price') + (int)Bike::where('sold_type' , 'Paid')->sum('sold_price');
        $data['total_sold_bikes_on_credit'] = Bike::where('sold_to' , "<>" , null)->where('sold_type' , "Credit")->count();
        $data['total_sold_bikes_on_cash'] = Bike::where('sold_to' , "<>" , null)->where('sold_type' , "Paid")->count();


        return view('dashboard', compact('data'));
    }

    public static function getReportByDate($from , $to , &$data){

        $credit_bike_id = Bike::whereBetween('sold_date' , [$from, $to])->where('sold_to', "<>" ,"null")->where('sold_type' , 'Credit')->pluck('id')->toArray();
        $credit_amount = Credit::whereIn('bike_id' , $credit_bike_id)->where('is_paid' , 0)->sum('payment_price');
        $credit_pait_amount = Credit::whereIn('bike_id' , $credit_bike_id)->where('is_paid' , 1)->sum('payment_price');

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
    }

}