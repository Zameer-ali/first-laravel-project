<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
class UserController extends Controller
{
    // Register a user || Register Function start's here
    // function register(Request $request ){
    //     $user = new User;
    //     $user->user_id=Str::random(10);
    //     $user->first_name=$request->input('first_name');
    //     $user->last_name=$request->input('last_name');
    //     $user->email=$request->input('email');
    //     $user->password=Crypt::encrypt($request->input('password'));
    //     $user->phone_number=$request->input('phone_number');
    //     $user->post_code=$request->input('post_code');
    //     $user->country=$request->input('country');
    //     $user->role=$request->input('role');
    //     $user->remember_token=Str::random(30);
    //     $user->save();      
    // }
    
    // Login a User ||Login Function start here
    // function login(Request $request ){
    //     $user=User::where('email',$request->input('email'))->get( );
    //     if(isset($user[0])){
    //         if (Crypt::decrypt($user[0]->password)==$request->input('password')) {
    //             echo "User Login Successfully";
    //         }else{
    //             echo "Invalid Password";
    //         }
    //     }else{
    //         echo "Invalid Email";
    //     } 
    // }

    
}
