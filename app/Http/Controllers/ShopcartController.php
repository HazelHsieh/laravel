<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShopcartController extends Controller
{
    public function index(){
        $productData = Product::with('imgs')->get();

        return view('backstage.shopcart.shopcart',compact('productData'));

    }

    public function create(){

        return view('backstage.shopcart.shopcart-create');

    }

    public function store(Request $request)
    {
        //dd($request->all());

        //儲存資料到product
        $requestData = $request->all();
        $productData = Product::create($requestData);



        //上傳多張圖片
        //->連到的name
        //dd($requestData);
        if($request->img){
            //dd($request->images);


            //宣告path 圖片變成亂碼
            //$path = $this->fileUpload($request->images, 'product');
            //$requestData['images'] = $path;
            //dd($requestData['images']);上面是換路徑
            foreach($request->img as $item){
                Product_img::create([
                    //對應資料庫資料欄位名稱
                    'product_id'=>$productData->id,
                    'image_path'=>$item,
                    //或是 'image_path'=>$path
                ]);
            }

        }
        return redirect('/product');
    }

    //php 取值然後字串相加
    public function imgUpload(Request $request)
    {
        $path = '[';
        foreach ($request->img as $value){
            $path = $path .'"'. $this->fileUpload($value, 'product').'",';
            //dump($path);
        }
        $path = rtrim($path,',');
        $path = $path.']';
        return $path;
    }

    public function edit($id) {
        //productData放欄位資料 ＝ Product 資料表找到符合id的資料欄位 with('imgs')資料表也符合id的資料  所以得到名字和有符合的照片
        $productData = Product::with('imgs')->find($id);
        //dd($productData);
        return view('backstage.shopcart.shopcart-edit',compact('productData'));
    }

    public function update($id, Request $request){

        //dd($request->all());

        //從資料Product表，找到符合id的，資料都更新
        $productData = Product::find($id)->update($request->all());
        //上面取到的productData是布林值，下面是才是資料
        $productData = Product::find($id);

        // $productData->name = $request->name;
        // $productData->desc = $request->desc;
        // $productData->price = $request->price;
        // $productData->qty = $request->qty;
        // $productData->save();

        //儲存新增的圖片
        if($request->img){
            foreach ($request->img as $value){
                Product_img::create([
                    'image_path' => $value,
                    'product_id' => $productData->id,
                ]);
            }
        }


        return redirect('/product');
    }

    public function delete($id){
        //產品資料刪除
        Product::find($id)->delete();
        //產品圖片 先刪資料會讓檔案留在系統裡 永遠...
        $img = Product_img::where('product_id',$id)->get();

        foreach($img as $value){
            File::delete(public_path(). $value->image_path);
            $value->delete();
        }

        //所以要先刪檔案
        return redirect('/product');

    }





    public function imgDelete(Request $request)
    {
        //dd($request->all());


        //File=php內建刪除檔案用的 找到
        //public_path＝public資料夾 找到 $request-> img_path（路徑的亂碼）  ->取值or當成的

        // Product_img::where('image_path', $request-path)->delete();
        File::delete(public_path().$request->img_path);
        return 'success';

    }

    private function fileUpload($file, $dir)
    {
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path() . '/upload/' . $dir . '/' . $filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/' . $dir . '/' . $filename;
    }
}
