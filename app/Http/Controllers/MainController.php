<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('signin');
    }
    function register(){
        return view('login');
    }
    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:admins',
            'psw'=>'required|min:8|max:20',
            'repeat'=>'required'
        ]);

        $admin=new Admin;
        $admin->name=$request->name;
        $admin->lname=$request->lname;
        $admin->email=$request->email;
        $admin->psw=Hash::make($request->psw);
        $admin->repeat=$request->repeat;
        $save=$admin->save();

        if($save){
            return back()->with('success','New user has been successfully added to database');
        }else{
            return back()->with('fail','Something went wrong,try again later!');
        }
    }
    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'psw'=>'required|min:8|max:20'
        ]);
        $userInfo = Admin::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            if(Hash::check($request->psw,$userInfo->psw)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
    function dashboard(){
        $data=['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('/dashboard',$data);
    }
}
