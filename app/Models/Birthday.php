<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
    /** @use HasFactory<\Database\Factories\BirthdayFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'user_id',
        'present-idea',
        'relationship',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
