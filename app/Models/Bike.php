<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    protected $table = "bike";
    protected $fillable = [ 'bike_no' , 'engine_no' , 'chassis_no' , 'color' , 'purchase_date' , 'purchase_price' , 'sold_price' , 'purchase_from' , 'sold_date' , 'sold_to' , 'sold_price' , 'sold_type' , 'credit_type' ];

    public function credit(){
        return $this->hasMany(Credit::class , 'bike_id' , 'id');
    }
}
