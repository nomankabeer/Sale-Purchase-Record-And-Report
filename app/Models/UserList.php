<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    use HasFactory;
    protected $table = "user_list";

    protected $fillable = ['first_name' , 'last_name' , 'phone_no' , 'address' , 'address2' ,'cnic_no' , 'cnic_front' , 'cnic_back' , 'user_picture'];
}
