<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'email',
        'password',
        'address1',
        'address2',
        'city',
        'zip',
        'paymentMethod',
        'cardNumber',
        'expiryDate',
        'cvv',
        // 'product_id',
        'status',
        'total',
        'tracking_no'
    ];
    public const STATUSES = [
        'pending' => 'Pending',
        'processing' => 'Processing',
        'completed' => 'Completed',
        'decline' => 'Decline',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsToMany(Product::class, 'order_item', 'product_id', 'checkout_id');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
