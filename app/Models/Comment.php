<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $fillable = [
        'uuid',
        'user_id',
        'parent_id',
        'nama',
        'hadir',
        'komentar',
        'created_at',
        'updated_at',
    ];
}
