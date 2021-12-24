<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outline extends Model
{
    use HasFactory;
    protected $table = 'table_outline';
    protected $fillable = [
        'userId',
        'judul',
        'uploadOutline',
        'pilihanPembimbing',
        'pilihanTunggal',
        'pilihanTeam1',
        'pilihanTeam2'
    ];
}
