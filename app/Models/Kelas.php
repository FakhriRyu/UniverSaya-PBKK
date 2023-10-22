<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    protected $fillable = ["matkul", "image", "status"];

    protected $table = 'kelas';


    public $timestamps = false;
}
