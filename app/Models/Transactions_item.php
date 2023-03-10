<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'stripe_id',
        'product_id',
        'quantity',
    ];
}
