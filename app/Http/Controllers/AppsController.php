<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AppsController extends Controller
{
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

    public function room()
    {
        $room = DB::table('roomgroup')
                ->select('*')
                ->orderBy('idroom')
                ->get();
        
        $voucher = DB::table('voucher')
                ->select('*')
                ->get();

        return view('apps.room', ['room'=>$room, 'voucher' => $voucher]);
    }
}
