<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pengirim()
    {
        return $this->belongsTo(Pengirim::class, 'pengirim_id');
    }

    public function penerima()
    {
        return $this->belongsTo(Penerima::class, 'penerima_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
