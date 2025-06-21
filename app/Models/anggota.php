<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $table = 'pengguna';

    protected $fillable = ['namaPengguna', 'nomorAnggota'];

    public function event(){
        return $this ->belongsTo(Event::class);
    }
}
