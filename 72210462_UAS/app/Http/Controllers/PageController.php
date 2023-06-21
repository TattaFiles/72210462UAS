<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Tbl_462;

class PageController extends Controller
{
    public function form1 (){
        return view ('form1');
    }

    public function simpan (Request $request){
        $custom = $request->input('customRadio');

        return view ('simpan',['simpan'=>$custom]);
    }

    public function form2 (){
        return view ('form2');
    }

    public function simpancek (Request $request){
        $konsen=implode(' ',$request->key);
        return view ('simpancek',['key'=>$konsen]);
    }

    public function desc (){
        $satu = Tbl_462::orderBy('id','desc')->get();

        return view ('desc', ['desc'=> $satu]);
    }
    
    public function challenge(){
        return view ('challenge');
    }
}