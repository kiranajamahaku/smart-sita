<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadwisuda extends Model
{
    use HasFactory;

    protected $table = 'table_upload_wisuda';
    protected $guarded = [];
    protected $fillable = [
        'userId', 'pengesahan', 'foto', 'ijazah', 'bayarWisuda'
    ];
}
