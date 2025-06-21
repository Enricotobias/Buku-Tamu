<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\rombongan;
use RealRashid\SweetAlert\Facades\Alert;

class rombongancontroller extends Controller
{

    public function createMeta()
    {
        $event = Event::all();
        return view ('rombongan.metaverse', compact('event'));
    }

    public function Addrombongan(Request $req)
    {
        $users = $req->validate(
            [
                'NamaKetua' => 'required|max:255',
                'NomerTelponKetua' => 'required|max:15',
                'AsalInstansi' => 'required|max:255',
                'AlamatInstansi' => 'required|max:255',
                'EmailInstansi' => 'required|email|max:255',
                'TeleponInstansi' => 'required|max:15',
                'CountPersonel' => 'required|max:255',
            ],
            [
                'NamaKetua.required' => 'Nama Ketua Rombongan Harus Diisi',
                'NomerTelponKetua.required' => 'Nama Telepon Ketua Rombongan Harus Diisi',
                'AsalInstansi.required' => 'Asal Instansi Harus Diisi',
                'AlamatInstansi.required' => 'Alamat Instansi Harus Diisi',
                'EmailInstansi.required' => 'Email Instansi Harus Diisi',
                'TeleponInstansi.required' => 'Nomor Telepon Instansi Harus Diisi',
                'CountPersonel.required' => 'Jumlah Personil Harus Diisi',
            ]
        );
        $users = new rombongan;
        $users->NamaKetua = $req->NamaKetua;
        $users->event_id = $req->event_id;
        $users->NomerTelponKetua = $req->NomerTelponKetua;
        $users->AsalInstansi = $req->AsalInstansi;
        $users->AlamatInstansi = $req->AlamatInstansi;
        $users->TeleponInstansi = $req->TeleponInstansi;
        $users->EmailInstansi = $req->EmailInstansi;
        $users->JumlahPersonil = $req->CountPersonel;
        $users->JumlahLaki = $req->CountLaki;
        $users->JumlahPerempuan = $req->CountPerempuan;
        $users->JumlahPNS = $req->CountPNS;
        $users->JumlahPSwasta = $req->CountPSwasta;
        $users->JumlahPeneliti = $req->CountPeneliti;
        $users->JumlahGuru = $req->CountGuru;
        $users->JumlahDosen = $req->CountDosen;
        $users->JumlahPensiunan = $req->CountPensiunan;
        $users->JumlahTNI = $req->CountTNI;
        $users->JumlahWiraswasta = $req->CountWiraswasta;
        $users->JumlahPelajar = $req->CountPelajar;
        $users->JumlahMahasiswa = $req->CountMahasiswa;
        $users->JumlahLainnya = $req->CountLainnya;
        $users->JumlahSD = $req->CountSD;
        $users->JumlahSMP = $req->CountSMP;
        $users->JumlahSMA = $req->CountSMA;
        $users->JumlahD1 = $req->CountD1;
        $users->JumlahD2 = $req->CountD2;
        $users->JumlahD3 = $req->CountD3;
        $users->JumlahS1 = $req->CountS1;
        $users->JumlahS2 = $req->CountS2;
        $users->JumlahS3 = $req->CountS3;

        $users->save();
        Alert::success('Berhasil', 'Rombongan Telah Berhasil Didaftarkan');
        return redirect()->to('/');
    }
}
