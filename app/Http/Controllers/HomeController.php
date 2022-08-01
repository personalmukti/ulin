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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perencanaanapprove = DB::table('perencanaan')->where('perencanaan','Approve')->count();
        $pelaksanaanapprove = DB::table('perencanaan')->where('pelaksanaan','Approve')->count();
        $pelaporanapprove = DB::table('perencanaan')->where('pelaporan','Approve')->count();
        //$lainnya = DB::table('tbaset')->where('kategori','Lainnya')->count();
        return view('home',compact('perencanaanapprove','pelaksanaanapprove', 'pelaporanapprove'));

    }
}
