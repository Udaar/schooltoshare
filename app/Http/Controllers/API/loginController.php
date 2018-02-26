<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

//use Illuminate\Support\MessageBag;
class loginController extends Controller
{
    //
    public function postRegister(Request $request)
    {
        
        //$request = $_POST;
        $validation = Validator::make($request->all(),[ 
            'userName' => 'required',
            'email'    => 'required|unique:users',
            'password' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        else
        {
            $username = $_POST['userName'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            //i return \Hash::make($password);
            $user = User::create(['name'=>$username,'password'=>bcrypt($password),'email'=>$email]);
            return $user;
            //return json_encode(\Auth::attempt(['name'=>$username,'password'=>bcrypt($password)]));
        }
       

    }

    public function postLogin(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'email'    => 'required',
            'password' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        else
        {
            $_POST= $request->all();
            $email = $_POST['email'];
            $password = $_POST['password'];
            // return \Hash::make($password);
            try{
                $token = JWTAuth::attempt(['email'=>$email,'password'=>$password]);
                if(!$token)
                {
                    return response()->json(['error'=>'invalid email or password'], 401);
                }   
            }
            catch(JWTException $e){
                return response()->json(['error'=>'something went wrong'], 500);

            }
            $user = JWTAuth::toUser($token);
            return response()->json(['result'=>['status'=>200,'error'=>null],'data'=>$user,'token'=>$token],200);
            //return response()->json(['token'=>$token/*,'user'=>\Auth::user()*/], 200);
        }

    }
}
