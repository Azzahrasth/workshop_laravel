<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;
use App\Models\Fakultas;

class ProgramStudi extends Model
{
    use HasFactory;
    protected $table = 'program_studis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'prodi',
        'fakultas_id'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

}
