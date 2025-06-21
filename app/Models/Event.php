<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';

    public function Nonmember()
    {
        return $this->hasMany(Nonmember::class);
    }

    public function member()
    {
        return $this->hasMany(anggota::class);
    }

    public function group()
    {
        return $this->hasMany(rombongan::class);
    }
}
