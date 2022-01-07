<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $product_id
 * @property int $qty
 * @property int $price
 * @property int $order_id
 * @property string $created_at
 * @property string $updated_at
 */
class OrderDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Order_details';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'qty', 'price', 'order_id', 'created_at', 'updated_at'];

    public function order()
    {
        //每張詳情都隸屬於一張訂單
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function product()
    {

        return $this->hasOne(product::class,'id','product_id');
    }


}
