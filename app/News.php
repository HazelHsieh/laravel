<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    //設定這個Model是連結到哪個資料夾
    protected $table = 'news';

    //Model白名單用法，只有寫在裡面的欄位可以被寫入資料
    protected $fillable = [
        'title', 'content', 'auther',
    ];

     //Model黑名單用法，除了寫在裡面的欄位外的可以被寫入資料
     //protected $guarded = [
     //   'id', 'created_at', 'updated_at',
     //];

     //黑名單與白名單，擇一使用


}
