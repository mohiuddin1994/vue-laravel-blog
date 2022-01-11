<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class user_loginController extends Controller
{
    //

    public function index(){
        return view('auth.admin.adminLogin');
    }

    public function loginPage(){
        return view("auth.admin.adminLogin");
    }

    public function registerPage(){
        return view("auth.admin.adminRegister");
    }

    public function userLogin(Request $request){

        // dd($request->all());
        $user = User::where("email",$request->email)->first();
        if($user){
           $password =  Hash::check($request->password, $user->password);
            if(!$password){
                Session()->put("user",$user);
                return redirect()->route('dashboard')->with("success","email already register");
            }else{
                return redirect()->back()->with("success","email already register");
            }

        }else{
            return redirect()->back()->with("success","email already register");
        }



    }

    public function userRegister(Request $request){

        // dd($request->all());
        $userCheck = User::where('email',$request->email)->first();
            if($userCheck){
                return redirect()->back()->with("success","email already register");
            }else{

                $user = new User();
                    $user->name = $request->name;
                    $user->email = $request->email;
                if($request->password === $request->confirm_password){

                    $user->password = Hash::make($request->password);
                }else{
                    return redirect()->back()->with("success","password not match ");
                }


            }
            $user->save();
            return redirect()->route('dashboard')->with("success","successfuly register ");

        }


        public function logOut(){
            Auth::logout();
            Session()->forget('user');
            return redirect()->route('index')->with("success","successfuly register ");
        }

}
