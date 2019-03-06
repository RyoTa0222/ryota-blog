<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Models\Article;

class ArrayController extends Controller
{
    protected $articles;
    
    public function __construct()
    {
        $this->articles = new Article();
    }

    public function index(){
        //すべてのデータを取得する
        $data = $this->articles->all();
        //dd($data);
        #カテゴリの内容
        $category_array = [];

        foreach($data as $d){
            $category_array[] = [
                'id' => $d->id,
                'title' => $d->title,
                'link_name' => $d->link_name,
                'images_path' => $d->images_path,
                'description' => $d->description,
                'date_time' => $d->date_time,
            ];
        }
         return view('view.index' ,compact('category_array'));
        
    }


    public function search(Request $request){
        //すべてのデータを取得する
        $data = $this->articles->all();
        //dd($data);
        #カテゴリの内容
        $category_array = [];

        foreach($data as $d){
            $category_array[] = [
                'id' => $d->id,
                'title' => $d->title,
                'link_name' => $d->link_name,
                'images_path' => $d->images_path,
                'description' => $d->description,
                'date_time' => $d->date_time,
            ];
        }
        #キーワード受け取り
        $keyword = $request->input('keywords');

        #もしキーワードがあったら
        if(!empty($keyword)){
            // 元配列にキーワードでフィルター
            $keywordFiltered = [];
            foreach ($category_array as $i => $search_item) {
                if(preg_match('/'.$keyword.'/',$search_item["title"]) or preg_match('/'.$keyword.'/',$search_item["description"])){
                    $keywordFiltered[] = $search_item;
                }
            }
            $category_array = $keywordFiltered;
        }
        return view('view.index' ,compact('category_array','keyword'));   
    }

    public function detail($id){
        //すべてのデータを取得する
        $data = $this->articles->all();
        //dd($data);
        #カテゴリの内容
        $category_array = [];

        foreach($data as $d){
            $category_array[] = [
                'id' => $d->id,
                'title' => $d->title,
                'link_name' => $d->link_name,
                'images_path' => $d->images_path,
                'description' => $d->description,
                'date_time' => $d->date_time,
            ];
        }
        #category_arrayのidの数字が同じものを探す
        $category = null;
        foreach ($category_array as $i => $item) {
            if(strpos($item["id"],"$id") !== false){
                $category = $item;
                break;
            } 
        }      
        if($category == null){
            return view('view.index', compact('category_array'));
        }
        return view('view.detail', compact('category'));
    }
}