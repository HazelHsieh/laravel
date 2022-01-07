<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_img extends Model
{
    //綁哪一個資料表對應資料庫
    protected $table = 'product_imgs';

    //使用者可以純取的白名單[資料庫的欄位名稱]
    protected $fillable = ['id','image_path','product_id'];

    // public function product()
    // {
    //     return $this->belongsTo('App\Product', 'id');
    // }

}
