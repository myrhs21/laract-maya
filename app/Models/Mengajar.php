<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    use HasFactory;

    protected $table = 'mengajars';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function guru()
    {
        return $this->belongTo(Guru::class,'guru_id', 'id');
    }
    public function mapel()
    {
        return $this->belongTo(Mapel::class,'mapel_id', 'id');
    }
    public function kelas()
    {
        return $this->belongTo(Kelas::class,'kelas_id', 'id');
    }
}
