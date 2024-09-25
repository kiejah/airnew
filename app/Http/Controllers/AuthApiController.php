<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthApiController extends Controller
{
    //
     public function logout(Request $request){
         $request->user()->currentAccessToken()->delete();
 
         return [
             'message'=>'Logged Out!'
         ];
     }
     public function login(Request $request){
 
         $fields = $request->validate([
          'email'=>'required|string',
          'password'=>'required|string'
         ]); 
 
         //check email
         $user = User::where('email',$fields['email'])->first();
         if(!$user || !Hash::check($fields['password'],$user->password)){
             return response([
                 'message' => 'baad creds!!'
             ],401);
         }
         $token = $user->createToken('myapptoken')->plainTextToken;
  
         $response = [
          'user'=>$user,
          'token'=>$token
         ];
  
         return response($response,201);
      }
}
