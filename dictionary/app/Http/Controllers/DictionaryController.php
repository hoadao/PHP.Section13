<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 14/02/2019
 * Time: 16:32
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DictionaryController extends Controller
{
    public function translate(Request $request){
        $arr = array("Một"=>"one","Hai"=>"two","Ba"=>"three");
        $english = $request->english;
        $vietnamese = "";
        foreach ($arr as $key => $value){
            if($english == $value){
                $vietnamese = $key;
                break;
            }
            else{
                $vietnamese = "Không có kết quả.";
            }
        }

        //return redirect()->route('output', ['vietnamese' => $vietnamese]);
        return view('/output',compact('vietnamese'));
    }
}