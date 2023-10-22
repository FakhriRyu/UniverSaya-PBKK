<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;


class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable = ["judul", "isi", "kelas_id"];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public $timestamps = false;

}
