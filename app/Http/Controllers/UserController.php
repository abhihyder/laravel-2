<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.Auth.reg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               // return $request->except('_token'); 
        // return $request->only('_token');
        // return $request->all();

        // $validatedData = $request->validate([
        //     'FirstName'   => 'required',
        //     'LastName'    => 'required',
        //     'Email'       => 'required | email',
        //     'UserName'    => 'required | min:4 | max:12',
        //     'Password'    => 'required | min:6 |confirmed| max:12',
        //     //'Photo'       => 'required | mimes:jpg, png, PNG',
        //     'brtdte'      => 'required',
        // ],[
        //     'FirstName.required'   => 'You have to insert your first name', //custom error message, if want to show custom message
        //     'brtdte.required'   => 'Birth date is mendatory', 
        // ]);

        $validator = Validator::make($request->all(), [
            'name'        => 'required',
            'Email'       => 'required | email',
            'UserName'    => 'required | min:4 | max:12',
            'Password'    => 'required | min:6 |confirmed| max:12',
            //'Photo'       => 'required | mimes:jpg, png, PNG',
            'brtdte'      => 'required',
        ],[
            'name.required'   => 'You have to insert your first name', //custom error message, if want to show custom message
            'brtdte.required'      => 'Birth date is mendatory', 
        ]);
        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $img=$request->Photo;
        $imgExt= $img->getClientOriginalExtension();
        //$imgPrefix= Str::random(20);
        $imgPrefix= date('ymdHis');
        $imgFullName= $imgPrefix.'.'.$imgExt;
        $data= [
            'name'                      => $request->name,
            'email'                     => strtolower($request->Email),
            'user'                      => $request->UserName,
            'password'                  => md5 ($request->Password),
            'gender'                    => $request->gndr,
            'photo'                     => $imgFullName,
            'birthday'                  => $request->brtdte,
            'email_verification_token'  => Str::random(32),
        ];

        $user=User::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
