<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index()
    {
        //
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:7',

        ]);

        try {
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], )) {
                Session::flash('success', 'Login Successfully');
                return redirect('dashboard');
            } else {
                Session::flash('error', 'Login Failed');
                return redirect('/');
            }
        } catch (\Exception $e) {
            return $e->getMessage() . "on line" . $e->getLine();

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function dashboard()
    {
        return view('Admin.Dashboard');
    }
    public function logout(Request $request){
            Auth::logout();
        Session::flash('success','Logout Successfully');
        return redirect('/');
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
