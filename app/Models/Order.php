<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
    'full_Name'	,
    'food_name'	,
    'order_detaille',	
    'Your_adress',	
    'Numbre',	
    'How_much',	
    'when_you_want'	,
    ];
}
