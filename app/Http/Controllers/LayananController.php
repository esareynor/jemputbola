<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Layanan;
use App\Models\LayananItem;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function detail($no)
    {
        $layanan = Layanan::where('no_antrian', $no)->get();
        $item = LayananItem::where('no_antrian', $no)->get();
        $biodata = Biodata::get();

        return view('pages/layanan/detaillayanan', compact('layanan', 'item', 'biodata'));
    }
}
