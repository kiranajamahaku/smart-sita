<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratanawal extends Model
{
    use HasFactory;
    protected $table = 'persyaratan';
    protected $fillable = [
        'userId',
        'totalsks',
        'mk_nilai_d',
        'ipk',
        'krs',
        'transkrip',
        'sertif1',
        'sertif2',
        'sertif3'
    ];
}
