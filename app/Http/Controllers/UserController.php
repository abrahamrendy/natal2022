<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DNS2D;
use Storage;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('checkuserlogin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = session('user');
        $currUser = session('currUser');
        $ibadah = DB::table('ibadah')->get();
        return view('dashboard', ['user'=>$user, 'currUser' => $currUser, 'ibadah'=>$ibadah]);
    }

    public function login(Request $request)
    {
        return redirect('user/');

    }

    public function logout () {
        session()->flush();
        return redirect('/')->with('success','Log out successful!');
    }

}
