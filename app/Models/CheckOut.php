<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'address1',
        'address2',
        'city',
        'zip',
        'paymentMethod',
        'cardName',
        'cardNumber',
        'expiryDate',
        'cvv',
    ];
}
