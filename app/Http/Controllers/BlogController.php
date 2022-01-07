<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;

class BlogController extends Controller
{
    //讀取資料的總頁面通常會叫 index / list
    public function index(){

        $news = DB::table('news')->get();

        //view找檔案
        return view('.backstage.blog.blog', compact('news'));
    }

    public function create(){
        return view('.backstage.blog.blog-create');
    }

    public function store(Request $request){
        //dd('我成功進來了!!' , $request->all());  // 輸出表單的所有資料

        //直接使用DB操作資料庫
        // DB::table('news')->insert([
        //     "title" => $request->title,
        //     "content" => $request->content,
        //     "auther" => $request->auther,
        //     "created_at" => \Carbon\Carbon::now(),
        //     "updated_at" => \Carbon\Carbon::now(),

        // ]);

        News::create([
            "title" => $request->title,
            "content" => $request->content,
            "auther" => $request->auther,
        ]);

        //如果表單的資料與request完全相符，可以用insert($request->all())直接建立
        //DB::table('news')->insert($request->all());

        return redirect('/blog');

    }

    public function edit($id) {
        //dd('我進來了,,,');

        //找到編輯的那個
        $news = News::find($id);

        return view('.backstage.blog.blog-edit',compact('news'));


    }

    public function update($id ,Request $request){


        //第一個寫法，是用query builder 比較正規
        //News::find($id)->update([
        //     "title" => $request->title,
        //     "content" => $request->content,
        //     "auther" => $request->auther,
        //]);

        //第二個寫法，使用orm，適用物件的方式
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->auther = $request->auther;
        $news->save();


        return redirect('/blog');
    }

    public function delete($id){

        //第一個寫法，是用query builder 比較正規
        //News::find($id)->delete();

        //第二個寫法，使用orm，適用物件的方式
        $news = News::find($id);
        $news->delete();



        return redirect('/blog');

    }
}
