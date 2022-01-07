<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //綁哪一個資料表對應資料庫
    protected $table = 'products';

    //使用者可以純取的白名單[資料庫的欄位名稱]
    protected $fillable = ['id','name','desc','price','qty',];

    //關聯到image的資料表
        public function imgs()
        {
            //hasMany=1對多（想要連結的資料夾,對方的欄位,我們的欄位）
            return $this->hasMany('App\Product_img','product_id','id');
        }

    public function shoppingcart()
    {
        return $this->hasMany(Shopping::class,'product_id','id');
    }

    public function order_detail()
    {
        return $this(OrderDetail::class,'product_id','id');
    }
}
