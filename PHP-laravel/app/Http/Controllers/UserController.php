<?php

namespace App\Http\Controllers;
use App\Models\human;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function retrieve(){
        $human = human::all();
        return view('mypage', ['humans' =>$human]);
    }
    public function add(){
        $data = ['first_name'=>'Grace','middle_name'=>'Paredes','last_name'=>'Laborada','email'=>'g@mail.com','age'=>19,'gender'=>2,'address'=>'Talisay City, Cebu'];
        $data = ['first_name'=>'Jakeniel','middle_name'=>'Remitre','last_name'=>'Erim','email'=>'jacky@gmail.com','age'=>20,'gender'=>1,'address'=>'canlaon'];
        $data = ['first_name'=>'Cristina','middle_name'=>'Gwapa','last_name'=>'Bustamante','email'=>'tanya@gmail.com','age'=>20,'gender'=>2,'address'=>'Caleriohan,Dalaguete'];
        DB::table('humans')->insert($data);
    }
}



?>
