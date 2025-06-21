<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'master_pekerjaan';

    public function Nonmember()
    {
        return $this->hasMany(Nonmember::class);
    }
}
