<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table='siswa';
    protected $fillable =['nama','tgl_lahir','jurusan','nilai'];

    public function Mentor(){
        return $this->belongsTo(Mentor::class); //setiap siswa dimiliki oleh satu mentor
    }
}
