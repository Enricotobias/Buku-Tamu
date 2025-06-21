<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nonmember extends Model
{
    use HasFactory;
    protected $fillable = ['Nama', 'job_id', 'pendidikan_id', 'gender_id','Alamat','event_id'];

    protected $table = 'memberguesses';

    public function gender(){
        return $this ->belongsTo(Gender::class);
    }
    public function pendidikan(){
        return $this ->belongsTo(Pendidikan::class);
    }

    public function job(){
        return $this ->belongsTo(Job::class);
    }

    public function event(){
        return $this ->belongsTo(Event::class);
    }
}
