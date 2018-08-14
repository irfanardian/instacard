<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AppsController extends Controller
{
    public function index()
    {
        $Cabang = DB::table('tag')
                ->select('tag.*')
                ->where('tagtype','=','1')
                ->where('gender','=','0')
                ->orderBy('tagid')
                ->get();
    
        return response()->json($Cabang);
    }
}
