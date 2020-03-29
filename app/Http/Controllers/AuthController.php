<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('Pages.Auth.login');
    }


    public function processLogin(Request $request){
        // return $request->except('_token'); 
        // return $request->only('_token');
        // return $request->all();

        $validator = Validator::make($request->all(), [  //have to include "use Illuminate\Support\Facades\Validator;"
            'email'        => 'required | email ',
            'password'    => 'required ',
        ]);
        
        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials= [
            'email'    => strtolower($request->Email),
            'password' => md5 ($request->Password),
        ];

        if (auth()->attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
        }
        return redirect()->back();


        // $data= [
        //     'FirstName'   => $request->FirstName,
        //     'LastName'    => $request->LastName,
        //     'Email'       => strtolower($request->Email),
        //     'UserName'    => $request->UserName,
        //     'Password'    => md5 ($request->Password),
        //     'Gender'      => $request->gndr,
        //     'Photo'      => $request->Photo,
        //     'Birthday'    => $request->brtdte,
        // ];
        // return $data['Email'];
    }
}
