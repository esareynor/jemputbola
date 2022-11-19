<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Layanan;
use App\Models\LayananItem;
use App\Models\MasterLayanan;
use App\Models\MasterMenuLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLayananController extends Controller
{
    public function cetakulangkk()
    {
        $biodata = Biodata::where('id_user', Auth::user()->id)->get();
        $master_menu = MasterMenuLayanan::where('id', 2)->get();
        $master_layanan = MasterLayanan::where('id', 1)->get();
        return view('pages/layanan/cetakulangkk', compact('biodata', 'master_menu', 'master_layanan'));
    }
    public function cetakulangkk_add(Request $request)
    {
        $no = 'SMMPR-' . rand() . date('YmdHis');
        $ress = Layanan::insert([
            'no_antrian' => $no,
            'id_menu_layanan' => $request->mastermenu,
            'id_data_layanan' => $request->masterlayanan,
            'id_user' => $request->id,
            'akun_klampid' => $request->klampid,
            'status' => '1',
            'tgl_kunjungan' => $request->tgl_kunjungan,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        foreach ($request->data as $key => $d) {
            LayananItem::insert([
                'no_antrian' => $no,
                'item_name' => $key,
                'item' => $d
            ]);
        }
        if ($ress) {
            return redirect('home')->with('success', 'Sukses membuat Antrian');
        } else {
            return redirect('home')->with('error', 'Error!');
        }
    }
}
