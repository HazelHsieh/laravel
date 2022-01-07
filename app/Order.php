<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $total_price
 * @property int $shipping_fee
 * @property int $user_id
 * @property string $address
 * @property string $phone
 * @property int $pay_way
 * @property int $ship_way
 * @property int $status
 * @property int $order_numder
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['total_price', 'shipping_fee', 'user_id', 'address', 'phone', 'pay_way', 'ship_way', 'status', 'order_numder', 'created_at', 'updated_at'];

    public function user()
    {
        //每張訂單都隸屬於一個使用者
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function detail()
    {
        //每張訂單有很多品項（訂單詳情）
        return $this->hasMany(OrderDetail::class,'order_id','id');
    }
}
