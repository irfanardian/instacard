<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AppsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'room');
    }

    public function index()
    {
        $Cabang = DB::table('tag')
                ->select('tagid','tagname')
                ->where('tagtype','=','1')
                ->where('gender','=','0')
                ->orderBy('tagid')
                ->get();
    
        return view('apps.index', ['cabang'=>$Cabang]);
    }

    public function room($id)
    {
        $room = DB::table('roomgroup')
                ->select('*')
                ->orderBy('idroom')
                ->get();
        
        $voucher = DB::table('voucher')
                ->join('roomgroup','voucher.roomid','=','roomgroup.idroom')
                ->where('voucher.cnid','=',$id)
                ->select('voucher.*','roomgroup.namagroup')
                ->get();

        return view('apps.room', ['room'=>$room, 'voucher' => $voucher]);
    }
    public function konfirmasi($id)
    {
        $voucher = DB::table('voucher')
                ->join('roomgroup','voucher.roomid','=','roomgroup.idroom')
                ->where('voucher.kode','=',$id)
                ->select('voucher.*','roomgroup.namagroup')
                ->first();
        
        return view('apps.konfirmasi',['voucher'=>$voucher]);
    }
}
