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
        $user = DB::table('registrant')->where('email', session('user'))->get();
        $currUser = session('currUser');
        $ibadah = DB::select('SELECT id, nama, qty, IFNULL(t.ct, 0) as ct FROM ibadah LEFT OUTER JOIN (SELECT ibadah, count(id) as ct FROM `registrant` GROUP BY ibadah) as t ON ibadah.id = t.ibadah');
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

    public function edit(Request $request) {
        $ibadah = $request->input('ibadah');
        $id = $request->input('user_id');

        for ($i=0; $i < count($id); $i++) {
            $tempId = $id[$i];
            $tempIbadah = $ibadah[$i];
            $existedUser = DB::table('registrant')->where('id', $tempId)->first();
            if (!empty($existedUser)) {
               if ($existedUser->ibadah != $tempIbadah) {
                    DB::table('registrant')->where('id',$tempId)->update(
                                                            [
                                                             'ibadah' => $tempIbadah
                                                            ] );

               }
            }
        }

        return redirect('user/')->with('success','Edit successful!');
    }

}
