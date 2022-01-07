<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controller\FilesController;

class Goodscontroller extends Controller
{
    public function index(){

        return view('backstage.goods.goods');
    }

    public function create(){

        return view('backstage.goods.goods-create');
    }

    public function store(Request $request){

        //儲存表單的資料

        Storage::disk('local')->put('goods', $request->images);




        redirect('/product');
    }
}
