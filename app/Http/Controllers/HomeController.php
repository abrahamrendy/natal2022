<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('registrant')->join('ibadah', 'registrant.ibadah', '=', 'ibadah.id')->select('registrant.id as registrant_id', 'registrant.nama as registrant_name', 'registrant.*', 'ibadah.*')->orderBy('registrant.id', 'desc')->paginate(25)->withQueryString();
        return view('home',['data'=>$data]);
    }

    public function settings()
    {
        $data = DB::table('ibadah')->orderBy('nama')->get();
        return view('settings',['data'=>$data]);
    }

    public function submit_ibadah( Request $request ) {
        $id = $request->input('id');
        $qty = $request->input('qty');
        $status = $request->input('status');
        if ($status == null) {
            $status = 0;
        }

        DB::table('ibadah')->where('id',$id)->update(
                                                    [
                                                     'qty' => $qty,
                                                     'status' => $status
                                                    ] );
        return redirect('admin/settings/')->with('success','Berhasil melakukan edit ibadah!');
    }
}
