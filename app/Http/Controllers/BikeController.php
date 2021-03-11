<?php

namespace App\Http\Controllers;

use App\DataTables\BikeDataTable;
use App\Models\Bike;
use App\Models\UserList;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BikeDataTable $dataTable)
    {
        /*$purchase_user = UserList::select('id' , 'first_name' , 'last_name')->whereIn('id' , Bike::groupBy("purchase_from")->pluck("purchase_from"))->orderBy('id' , 'desc')->get()->toArray();
        $sold_user = UserList::select('id' , 'first_name' , 'last_name')->whereIn('id' , Bike::groupBy("purchase_from")->pluck("sold_to"))->orderBy('id' , 'desc')->get()->toArray();*/

        $purchase_user = UserList::select('id' , 'first_name' , 'last_name')->whereIn('id' , Bike::groupBy("purchase_from")->pluck("purchase_from"))->orderBy('id' , 'desc')->get()->toArray();
        $sold_user = UserList::select('id' , 'first_name' , 'last_name')->whereIn('id' , Bike::groupBy("sold_to")->pluck("sold_to"))->orderBy('id' , 'desc')->get()->toArray();

//                dd($purchase_user , $sold_user);
        return view('bike.index', compact('purchase_user' , 'sold_user'));
//        return $dataTable->render('bike.index');
    }

    /*public function index()
    {
        return view("bike.index");
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_list = UserList::select('id' , 'first_name' , 'last_name' , 'phone_no' , 'cnic_no')->orderBy('id' , 'desc')->get();
        return view("bike.create" , compact('user_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function data(){
//        dd($_GET["columns"][6]["search"]["value"]);
        $jobQuery = Bike::query();

//        $jobQuery = $jobQuery->orderBy('id', 'desc');
        return DataTables::of($jobQuery)
            ->addColumn('action', function (Bike $bike) {
//                return '<a href="' . route("user_list.edit", $UserList->id) . '" class="btn listActionButton btn-success">Details</a><a href="' . route("user_list.edit", $UserList->id) . '" class="btn listActionButton btn-info">Edit</a>';
                return '<a href="' . route("user_list.edit", $bike->id) . '" class="btn listActionButton btn-success">Details</a><a href="' . route("user_list.edit", $bike->id) . '" class="btn listActionButton btn-info">Edit</a>';
            })
            ->editColumn('created_at', function (Bike $bike) {
                return $bike->created_at->diffForHumans();
            })
            ->editColumn('purchase_from', function (Bike $bike) {
                $user = @UserList::where('id' , $bike->purchase_from)->first();
                if ($user != null){
                    return $user->first_name . " ". $user->last_name;
                }
                return null;
            })
            ->editColumn('sold_to', function (Bike $bike) {
                $user = @UserList::where('id' , $bike->sold_to)->first();
                if ($user != null){
                    return $user->first_name . " ". $user->last_name;
                }
                return null;
            })
            ->editColumn('purchase_date', function (Bike $bike) {
                $created_at = new \DateTime($bike->purchase_date);
                return date_format($created_at, "d-M-Y");
            })
            ->editColumn('sold_date', function (Bike $bike) {
                $created_at = new \DateTime($bike->sold_date);
                return date_format($created_at, "d-M-Y");
            })
            ->rawColumns(['action'])
            ->setRowId(function (Bike $bike) {
                return $bike->id;
            })
            ->make(true);
    }


    public function UserListModuleBikedata($purchase_from = null){
//        dd($_GET["columns"][6]["search"]["value"]);
        $jobQuery = Bike::query();
        if($purchase_from != null){
            $jobQuery = $jobQuery->where('purchase_from' , $purchase_from);
        }
        $jobQuery = $jobQuery->orderBy('id', 'desc');
        return DataTables::of($jobQuery)
            ->addColumn('action', function (Bike $bike) {
//                return '<a href="' . route("user_list.edit", $UserList->id) . '" class="btn listActionButton btn-success">Details</a><a href="' . route("user_list.edit", $UserList->id) . '" class="btn listActionButton btn-info">Edit</a>';
                return '<a href="' . route("user_list.edit", $bike->id) . '" class="btn listActionButton btn-success">Details</a><a href="' . route("user_list.edit", $bike->id) . '" class="btn listActionButton btn-info">Edit</a>';
            })
            ->editColumn('created_at', function (Bike $bike) {
                return $bike->created_at->diffForHumans();
            })
            ->editColumn('purchase_from', function (Bike $bike) {
                $user = @UserList::where('id' , $bike->purchase_from)->first();
                if ($user != null){
                    return $user->first_name . " ". $user->last_name;
                }
                return null;
            })
            ->editColumn('sold_to', function (Bike $bike) {
                $user = @UserList::where('id' , $bike->sold_to)->first();
                if ($user != null){
                    return $user->first_name . " ". $user->last_name;
                }
                return null;
            })
            ->editColumn('purchase_date', function (Bike $bike) {
                $created_at = new \DateTime($bike->purchase_date);
                return date_format($created_at, "d-M-Y");
            })
            ->editColumn('sold_date', function (Bike $bike) {
                $created_at = new \DateTime($bike->sold_date);
                return date_format($created_at, "d-M-Y");
            })
            ->rawColumns(['action'])
            ->setRowId(function (Bike $bike) {
                return $bike->id;
            })
            ->make(true);
    }

}