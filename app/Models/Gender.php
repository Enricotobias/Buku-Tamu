<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'jenis_kelamin';

    public function Nonmember()
    {
        return $this->hasMany(Nonmember::class);
    }
}
