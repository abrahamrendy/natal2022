<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DNS2D;
use Storage;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ibadah_asal = DB::table('ibadah_asal')->get();
        $ibadah = DB::table('ibadah')->get();
        return view('index',['ibadah_asal'=>$ibadah_asal, 'ibadah'=>$ibadah]);
    }

    public function submit(Request $request) {
        $kaj = $request->input('kaj');
        $nama = $request->input('nama');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $dob = date('Y-m-d', strtotime($request->input('dob')));
        $m_class = $request->input('mclass');
        $ibadah_asal = $request->input('ibadah_asal');
        $ibadah = $request->input('ibadah');
        $created_at = date('Y-m-d H:i:s', strtotime('now + 7 hours'));

        $getService = DB::table('ibadah')->where('id', $ibadah)->first();

        $countUser = DB::table('registrant')->where('ibadah',$ibadah)->count();

        $existedUser = DB::table('registrant')->join('ibadah', 'registrant.ibadah', '=', 'ibadah.id')->where('registrant.nama',$nama)->select('registrant.id as registrant_id', 'registrant.nama as registrant_name', 'ibadah.*')->first();

        if (!empty($existedUser)) {
            return view('fail', ['code' => 0, 'name' => $existedUser->registrant_name,'ibadah' => ($existedUser->nama .' '. $existedUser->time), 'data' => $existedUser, 'id' => ($existedUser->registrant_id)]);
        }

        if ($countUser >= ($getService->qty)) {
            // USER EXCEEDED CAPACITY
            return view('fail', ['code' => 1]);
        } else {
            $id = DB::table('registrant')->insertGetId(
                                                ['kaj' => $kaj,
                                                 'nama' => $nama,
                                                 'email' => $email,
                                                 'phone' => $phone,
                                                 'dob' => $dob,
                                                 'm-class' => $m_class,
                                                 'ibadah_asal' => $ibadah_asal,
                                                 'ibadah' => $ibadah,
                                                 'created_at' => $created_at,
                                                ] );
            if ($id) {
                if ($kaj != '') {
                    $combine = $kaj;
                } else {
                    $combine = date('Y', strtotime('now + 7 hours')).$ibadah_asal.$id;
                }
                DB::table('registrant')->where('id',$id)->update(
                                                                        [
                                                                         'qr_code' => $combine
                                                                        ] );
                Storage::disk('public')->put('qrcodes/'.$combine.'.jpg',base64_decode(DNS2D::getBarcodePNG($combine, "QRCODE", 10,10)));
                // SET UP EMAIL
                // $this->registEmail($email, $attend_date, $temp_service, $nama, $id, $combine);
                return view('success', ['data' => $getService, 'id' => $id, 'name' => $nama, 'attend_date' => $attend_date]);
            } else {
                // GENERIC ERROR MESSAGE
                return view('fail', ['code' => 0]);
            }

        }
    }

    public function registEmail ($to, $date, $data, $name, $id, $code) {
        $subject = 'GBI Sukawarna Christmas Celebration Service Confirmation';
        $htmlBody = '<table width=700px style="background-color:#07121E; padding:40px 40px">';
        $htmlBody .= '<tr>
                        <td> 
                            <table width=100% style="background-color: #1d252f; padding:20px 20px;font-family: sans-serif;color: #fff !important"> 
                                <tr>
                                    <td>
                                        <br>
                                        <tr> 
                                            <td> 
                                                <div style="display: inline-block;width: 100%; text-align: center"> 
                                                    <img src="https://i.imgur.com/eb3pyoN.png" width="50%"> 
                                                </div>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td align="center"> 
                                                <br><br><p> 
                                                <h1 style="word-break: break-word;color: #fff !important">No.urut: '.$id.'</h1> 
                                                <h1 style="word-break: break-word;color: #fff !important">Terima Kasih, '.$name.'</h1>
                                                <h3 style="word-break: break-word; font-weight: normal;color: #fff !important">Anda telah terdaftar untuk mengikuti ibadah onsite.</h3>
                                                <h1 style="word-break: break-word;color: #fff !important">GBI Sukawarna '.$data->name.'</h1> 
                                                <h3 style="word-break: break-word; font-weight: normal; font-style: italic;color: #fff !important">'.$data->address.'</h3> 
                                                <h3 style="word-break: break-word; font-weight: normal; font-style: italic;color: #fff !important">'.$date.', '.$data->time.'</h3> 
                                                <h3 style="word-break: break-word; font-weight: normal; font-style: italic;color: #fff !important">Informasi: '.$data->contact_person.'</h3> 
                                                <h3 style="word-break: break-word; font-weight: normal;color: #fff !important">Mohon membawa tanda bukti pengenalan diri (KAJ/KTP/SIM) sehingga tim kami dapat mengkonfirmasi kehadiran anda.</h3> 
                                                </p>
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td align="center"> 
                                                <hr> <br>
                                                <p style="font-weight: bold"> <i>Tuhan Yesus Memberkati.</i></p><br>
                                            </td>
                                        </tr>
                                    <tr><td><br>';

        // Headers
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: GBI Sukawarna <gbisukawarna@gbisukawarna.org>';
        //End of send email//
        return mail($to, $subject, $htmlBody, implode("\r\n", $headers));
    }
}
