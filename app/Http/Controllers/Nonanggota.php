<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Job;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Nonmember;


class Nonanggota extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nonmember.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = Job::all();
        $edu = Pendidikan::all();
        $event = Event::all();
        return view ('nonmember.create', compact('jobs','edu','event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:2',
            'Profesi_id'=>'required',
            'jenis_kelamin'=>'required','in:1,2',
            'PendidikanTerakhir_id'=>'required',
            'alamat'=>'required',
        ], [
            'nama.required' => 'Nama Pengunjung Harus Diisi',
            'Profesi_id.required' => 'Jenis Profesi Harus Dipilih',
            'jenis_kelamin.required' => 'Jenis Kelamin Pengunjung Harus Dipilih',
            'PendidikanTerakhir_id.required' => 'Pendidikan Terakhir Pengunjung Harus Dipilih',
            'alamat.required' => 'Alamat Pengunjung Harus Diisi',
            ]
    
    );
        
        $data = [
            'Nama'=>$request->nama,
            'event_id'=>$request->event_id,
            'gender_id'=>$request->jenis_kelamin,
            'job_id'=>$request->Profesi_id,
            'pendidikan_id'=>$request->PendidikanTerakhir_id,
            'Alamat'=>$request->alamat
        ];
        Nonmember::create($data);

        Alert::success('Berhasil', 'Data anda berhasil ditambahkan ke Buku Tamu');
        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(nonmember $nonanggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(nonmember $nonanggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nonanggota $nonanggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nonanggota $nonanggota)
    {
        //
    }
}
