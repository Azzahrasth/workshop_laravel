<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramStudi;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'nim',
        'program_studis_id'
    ];

    public function program_studis() {
        return $this->belongsTo(ProgramStudi::class);
    }
}
