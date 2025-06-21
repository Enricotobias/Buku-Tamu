<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anggota;
use RealRashid\SweetAlert\Facades\Alert;


class anggotaController extends Controller
{

    public function nambahAnggota (Request $req) {
        $anggota = $req->validate(
            [
                'namaPengguna' => 'required|max:255',
                'nomorAnggota' => 'required|max:16',
               
            ],
            [
                'namaPengguna.required' => 'Nama Pengguna Harus Diisi',
                'nomorAnggota.required' => 'Nama Keanggotaan Harus Diisi',
                
            ]
        );
        $anggota = new anggota;
        $anggota->namaPengguna = $req->namaPengguna;
        $anggota->event_id = $req->event_id;
        $anggota->nomorAnggota = $req->nomorAnggota;
       
        $anggota->save();
        Alert::success('Berhasil', 'Anggota Telah Tercatat Hadir');
        return redirect('/');
    }
}
