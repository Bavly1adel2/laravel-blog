<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function index(){
if(Auth::id()){
$usertype=Auth::user()->usertype;
if($usertype=='user'){
    return view('home.index');
}
else if ($usertype=='admin') {
    return view('admin.index');
}
else{
    return redirect()->back();
}
    }
}

public function  test(){
   
    return view('test');
}
}
