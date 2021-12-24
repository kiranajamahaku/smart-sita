<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persetujuandospem extends Model
{
    use HasFactory;
    protected $table = 'persetujuan_dospem';
    protected $fillable = [
        'userId',
        'uploadFile',
        'urlJurnal'
    ];
}
