<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'gender' => 'required',
                'image' => 'required',
                'password' => ['required','confirmed'],
            ],
            [
                'name.required' => 'Name is required',
                'password.required' => 'Password is required',
                'password.confirmed' => 'Confirm Password must be same',
            ]
        );

        if ($request->hasfile('image')) {
            $file=$request->file('image');
            $filename=time().'-'.$file->getClientOriginalName();
            $path='image';
            $file->move($path, $filename);
            $image=$path.'/'.$filename;
        }

        User::create(
            [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'password' =>Hash::make($request->password),
            'image' => $image,
            ]
        );

        return back();
    }


    public function login(Request $request)
    {
        $request->validate(
            [
            'email' => 'required',
            'password' => 'required',
            ]
        );

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('registration')
                        ->withSuccess('Signed in');
        }

        return redirect("registration")->withError('Login details are not valid');
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
