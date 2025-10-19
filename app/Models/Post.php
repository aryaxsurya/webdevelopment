<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Kolom yang boleh diisi mass assignment 192.168.0.108
    protected $fillable = ['title', 'content'];

    // --- Accessor (ambil data dalam format tertentu) ---
    public function getTitleUppercaseAttribute()
    {
        return strtoupper($this->title);
    }

    // --- Mutator (ubah data sebelum disimpan) ---
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucfirst($value);
    }

    // --- Cast (konversi tipe data otomatis) ---
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i',
    ];
}

