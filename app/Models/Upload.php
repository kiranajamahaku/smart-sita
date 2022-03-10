<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Upload extends Model
{
    use HasFactory;

    protected $table = 'upload';
    protected $guarded = [];
    protected $fillable = [
        'proposal', 'laporan', 'makalah', 'file_coding', 'file_database'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->created_by = Auth::id();

            return $model;
        });

        self::updating(function ($model) {
            $model->updated_by = Auth::id();

            return $model;
        });
    }
}
