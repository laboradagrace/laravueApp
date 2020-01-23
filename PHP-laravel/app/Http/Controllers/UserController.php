<?php

namespace App\Http\Controllers;
use App\Models\humansinfo;
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
        $human = humansinfo::all();
        return view('mypage', ['humansinfo' =>$human]);
    }
    public function add(){
       
        return view('create');
        // $data = ['first_name'=>'Grace','middle_name'=>'Paredes','last_name'=>'Laborada','email'=>'g@mail.com','age'=>19,'gender'=>2,'address'=>'Talisay City, Cebu'];
        // $data = ['first_name'=>'Jakeniel','middle_name'=>'Remitre','last_name'=>'Erim','email'=>'jacky@gmail.com','age'=>20,'gender'=>1,'address'=>'canlaon'];
        // $data = ['first_name'=>'Cristina','middle_name'=>'Gwapa','last_name'=>'Bustamante','email'=>'tanya@gmail.com','age'=>20,'gender'=>2,'address'=>'Caleriohan,Dalaguete'];
        // DB::table('humansinfos')->insert($data);
    }
    public function store(Request $request){ 
        $this->validate($request,[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required','unique',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            
        ]);

       $human = new humansinfo([
        'first_name' => $request->get('first_name'),
        'middle_name' => $request->get('middle_name'),
        'last_name' => $request->get('last_name'),
        'email' => $request->get('email'),
        'age' => $request->get('age'),
        'gender' => $request->get('gender'),
        'address' => $request->get('address'),
        ]);
        $human->save();
        // return redirect()->route('welcome');
        return redirect('/home');
        
    }
    public function edit($id){
        $infos = humansinfo::find($id);
        return view('edit',['humansinfos'=>$infos]);

    }
   
  
    public function update(Request $request,$id){
        $this->validate($request,[
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required','unique',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            
        ]);
        $human = new humansinfo([
            'first_name' => $request->get('first_name'),
            'middle_name' => $request->get('middle_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'address' => $request->get('address'),
            ]);
            DB::table('humansinfos')
            ->where('id', $id)  // find your user by their email
            ->limit(1)  // optional - to ensure only one record is updated.
            ->update(array('first_name' => $human['first_name'], 
            'middle_name' => $human['middle_name'],
            'last_name' => $human['last_name'],
            'email'=> $human['email'],
            'age'=>$human['age'],
            'gender'=>$human['gender'],
            'address'=>$human['address'])); 
             return redirect('/home');
             // update the record in the DB. 
    }
    public function destroy($id){
        DB::table('humansinfos')->where('id',$id)->delete();
        return redirect('/home');
    }
}



?>
