<?php

namespace App\Http\Controllers;

use App\Models\Nonmember;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Pendidikan;
use RealRashid\SweetAlert\Facades\Alert;

class nonmember_metaverse extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nonmember_metaverse.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = Job::all();
        $edu = Pendidikan::all();
        return view ('nonmember_metaverse.create', compact('jobs','edu'));
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
            'gender_id'=>$request->jenis_kelamin,
            'job_id'=>$request->Profesi_id,
            'event_id'=>$request->event_id,
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
    public function show(Nonmember $nonmember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nonmember $nonmember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nonmember $nonmember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nonmember $nonmember)
    {
        //
    }
}
