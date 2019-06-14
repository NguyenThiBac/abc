<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class handleController extends Controller{
    public  function  getForm(){
        return view('FormRequest');
    }
    public function handleRequest(Request $request){
        return $request->all();
        //nhan het du lieu co tron form
    }
//    public function handleRequest(Request $request){
//        return $request->input('inputname');
//        //lay du lieu theo name dinh san
//        //inputname la name cua input dat o form
//    }
//    public function handleRequest(Request $request){
//        return $request->('name', 'password');
//        // lay duw lieu cu nhieu name
//    }

}
