<?php

namespace App\Http\Controllers;

use App\DataTables\UserListDataTable;
use App\Models\Bike;
use App\Models\User;
use App\Models\UserList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserListDataTable $dataTable)
    {
        $purchase_user = UserList::select('id' , 'first_name' , 'last_name')->whereIn('id' , Bike::groupBy("purchase_from")->pluck("purchase_from"))->orderBy('id' , 'desc')->get()->toArray();
        $sold_user = UserList::select('id' , 'first_name' , 'last_name')->whereIn('id' , Bike::groupBy("sold_to")->pluck("sold_to"))->orderBy('id' , 'desc')->get()->toArray();
        return view('user_list.index', compact('purchase_user' , 'sold_user'));
//        return view('user_list.index');
//        return $dataTable->render('user_list.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user_list.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['phone_no'] = $request->phone_no;
        $data['address'] = $request->address;
        $data['address2'] = $request->address2;
        $data['cnic_no'] = $request->cnic_no;
        $data['about_user'] = $request->about_user;
        $user = UserList::create($data);

        if($request->hasFile('cnic_front')){
            $cnic_front = self::uploadImage($request->file('cnic_front') , 'user_list/'.$user->id);
            $user->cnic_front = $cnic_front;
            $user->update();
        }

        if($request->hasFile('cnic_back')) {
            $cnic_back = self::uploadImage($request->file('cnic_back') , 'user_list/'.$user->id);
            $user->cnic_back = $cnic_back;
            $user->update();
        }

        if($request->hasFile('user_picture')) {
            $user_pictures = [];
            foreach ($request->user_picture as $index => $user_picture){
                if($index > 5){
                    break;
                }
                $user_pictures[$index] = self::uploadImage($user_picture , 'user_list/'.$user->id);
            }
            $user_pictures = implode(',' , $user_pictures);
            $user->user_picture = $user_pictures;
            $user->update();
        }

        if($request->image != null){

            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);


            $path = 'user_list/'.$user->id;
            $path = 'storage/images/'.$path;
            $file = $path;// . $fileName;
            $name = $path.'/'.uniqid().'.png';
            mkdir( public_path(str_replace('/' , '\\' , $file)) , '777');

            file_put_contents(public_path(str_replace('/' , '\\' , $name)), $image_base64);

            $user->user_picture = $name;

            $user->update();

        }

        if($request->type == "add_bike"){
            return redirect()->route('bike.create');
        }
        else{
            return redirect()->route('user_list.index');
        }
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

    public static function uploadImage($image , $path){
        $now = Carbon::now();
        $path = 'storage/images/'.$path;//.'/'.$now->year.'/'.$now->month;
        $name = $path.'/'.uniqid().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/').$path , $name);
        return $name;
    }

    public function data(){
        $jobQuery = UserList::query();//->orderBy('id', 'desc');
        return DataTables::of($jobQuery)
            ->addColumn('action', function (UserList $UserList) {
//                return '<a href="' . route("user_list.edit", $UserList->id) . '" class="btn listActionButton btn-success">Details</a><a href="' . route("user_list.edit", $UserList->id) . '" class="btn listActionButton btn-info">Edit</a>';
                return '<a href="' . route("user_list.detail", $UserList->id) . '" class="btn listActionButton btn-success">Details</a><a href="' . route("user_list.edit", $UserList->id) . '" class="btn listActionButton btn-info">Edit</a>';
            })
            ->addColumn('purchase', function (UserList $UserList) {
                return Bike::where( "purchase_from" ,$UserList->id)->count();
            })
            ->addColumn('sold', function (UserList $UserList) {
                return Bike::where( "sold_to" ,$UserList->id)->count();
            })
            ->editColumn('user_picture', function (UserList $UserList) {
                $images = explode(',' , $UserList->user_picture);
                if($images != null && $images[0] != ""){
                    return '<img style="width:100px; height: 70px" src="'.$images[0].'" />';
                }
                return null;
            })
            ->editColumn('created_at', function (UserList $UserList) {
                return $UserList->created_at->diffForHumans();
            })
            ->rawColumns(['action' , 'user_picture'])
            ->setRowId(function (UserList $UserList) {
                return $UserList->id;
            })
            ->make(true);
    }

    public function detail($id){
        $data = [];
        $data['user'] = UserList::where('id' , $id)->first();

        return view("user_list.detail" , compact('data'));
    }
}
