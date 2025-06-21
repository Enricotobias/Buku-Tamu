<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rombongan extends Model
{
    use HasFactory;
    protected $table = 'rombongan';

    protected $fillable = ['NamaKetua ', 'NomerTelponKetua', 'AsalInstansi', 'AlamatInstansi', 'JumlahPersonil', 'JumlahPNS', 'JumlahPSwasta', 'JumlahPeneliti', 'JumlahGuru', 'JumlahPensiunan', 'JumlahTNI', 'JumlahWiraswasta', 'JumlahPelajar', ' JumlahMahasiswa', 'JumlahLainnya', 'JumlahSD', 'JumlahSMP', 'JumlahSMA', 'JumlahD1', 'JumlahD2', 'JumlahD3', 'JumlahS1', 'JumlahS2', 'JumlahS3', ' JumlahLaki', 'JumlahPerempuan', 'TeleponInstansi', 'EmailInstansi', ];

    public function event(){
        return $this ->belongsTo(Event::class);
    }
}
