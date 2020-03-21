<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegForm(){
        return view('Pages.Auth.reg');
    }
    public function processRegister(Request $request){
        // return $request->except('_token'); 
        // return $request->only('_token');
        // return $request->all();

        $validatedData = $request->validate([
            'FirstName'   => 'required',
            'LastName'    => 'required',
            'Email'       => 'required | email',
            'UserName'    => 'required | min:4 | max:12',
            'Password'    => 'required | min:6 |confirmed| max:12',
            'Photo'       => 'required | mimes:jpg, png, PNG',
            'brtdte'      => 'required',
        ],[
            'FirstName.required'   => 'You have to insert your first name', //custom error message, if want to show custom message
            'brtdte.required'   => 'Birth date is mendatory', 
        ]);

        $data= [
            'FirstName'   => $request->FirstName,
            'LastName'    => $request->LastName,
            'Email'       => strtolower($request->Email),
            'UserName'    => $request->UserName,
            'Password'    => md5 ($request->Password),
            'Gender'      => $request->gndr,
            'Photo'      => $request->Photo,
            'Birthday'    => $request->brtdte,
        ];
        return $data['Email'];
    }
}
