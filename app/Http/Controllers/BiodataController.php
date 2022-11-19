<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function biodata()
    {
        $biodata = Biodata::where('id_user', Auth::user()->id)->get();
        return view('pages/users/biodata', compact('biodata'));
    }
    public function update(Request $request)
    {
        $res = Biodata::where('id_user', $request->id)->update([
            'nik' => $request->nik,
            'whatsapp' => $request->whatsapp,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'full_address' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $ress = User::where('id', $request->id)->update([
            'name' => $request->name,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        if ($res && $ress) {
            return back()->with('success', 'Sukses simpan Biodata');
        } else {
            return back()->with('error', 'Error!');
        }
    }
}
