<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\MasterLayanan;
use App\Models\MasterMenuLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $master_menu_layanan = MasterMenuLayanan::get();
        $master_layanan = MasterLayanan::get();
        $layanan = Layanan::where('id_user', Auth::user()->id)->limit(5)->orderBy('id', 'DESC')->get();
        return view('home', compact('layanan', 'master_menu_layanan', 'master_layanan'));
    }
}
