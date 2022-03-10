<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bimbinganta extends Model
{
    use HasFactory;
    protected $table = 'bimbinganta';
    protected $fillable = [
        'userId',
        'tanggalUpload',
        'versi',
        'description',
        'alasanUpload',
        'uploadFile'
    ];
}
