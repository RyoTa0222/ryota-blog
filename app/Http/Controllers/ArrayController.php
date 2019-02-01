<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function index(){

        #カテゴリの内容
        $category_array = [
            [
                "id" => 1,
                "title" => "Matsumoto",
                "link_name" => "http://aaa.com",

                "description" => "Lorem ipsum dolor sit amet, 
                consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                 Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                 In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                 Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                 Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,",

                 "date_time" => "2018/05/01"
            ],
            [
                "id" => 2,
                "title" => "Ryota",
                "link_name" => "http://bbb.com",

                "description" => "A wonderful serenity has taken possession of my entire soul, 
                like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, 
                which was created for the bliss of souls like mine. I am so happy, my",
                "date_time" => ""
            ],
            [
                "id" => 3,
                "title" =>"Laravel",
                "link_name" => "http://ccc.com",

                "description" => "The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. 
                Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.
                 Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. 
                 Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. 
                 Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two",
                
                 "date_time" => "2019/01/25"
            ]
        ];

         return view('view.index' ,compact('category_array'));
        
    }


    public function search(Request $request){

        #カテゴリの内容
        $category_array = [
            [
                "id" => 1,
                "title" => "Matsumoto",
                "link_name" => "http://aaa.com",

                "description" => "Lorem ipsum dolor sit amet, 
                consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                 Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                 In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                 Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                 Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,",

                 "date_time" => "2018/05/01"
            ],
            [
                "id" => 2,
                "title" => "Ryota",
                "link_name" => "http://bbb.com",

                "description" => "A wonderful serenity has taken possession of my entire soul, 
                like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, 
                which was created for the bliss of souls like mine. I am so happy, my",
                "date_time" => ""
            ],
            [
                "id" => 3,
                "title" =>"Laravel",
                "link_name" => "http://ccc.com",

                "description" => "The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. 
                Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.
                 Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. 
                 Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. 
                 Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two",
                
                 "date_time" => "2019/01/25"
            ]
        ];

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

        #カテゴリの内容
        $category_array = [
            [
                "id" => 1,
                "title" => "Matsumoto",
                "link_name" => "http://aaa.com",

                "description" => "Lorem ipsum dolor sit amet, 
                consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                 Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                 Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. 
                 In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                 Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. 
                 Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,",

                 "date_time" => "2018/05/01"
            ],
            [
                "id" => 2,
                "title" => "Ryota",
                "link_name" => "http://bbb.com",

                "description" => "A wonderful serenity has taken possession of my entire soul, 
                like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, 
                which was created for the bliss of souls like mine. I am so happy, my",
                "date_time" => ""
            ],
            [
                "id" => 3,
                "title" =>"Laravel",
                "link_name" => "http://ccc.com",

                "description" => "The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. 
                Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs.
                 Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. 
                 Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. 
                 Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two",
                
                 "date_time" => "2019/01/25"
            ]
        ];
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