<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    public function index (){
        dd('你找到專員了!');

        $lists = DB::table('news')->get();
            dd($lists);
            return view('page',compact(('list')));


    }


}
