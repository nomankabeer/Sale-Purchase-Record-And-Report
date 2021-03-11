<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected $table = "credit";
    protected $fillable = ['payment_price' , 'payment_date' , 'is_paid'];
}
