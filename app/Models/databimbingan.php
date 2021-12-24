<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databimbingan extends Model
{
    use HasFactory;
    protected $table = 'data_bimbingan';
    protected $fillable = [
        'userId',
        'npm',
        'judul',
        'judulEnglish',
        'formpersetujuan'
    ];
}
