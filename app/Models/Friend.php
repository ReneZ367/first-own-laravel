<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Friend extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        'user_friend_id',
        'friend_name',
        'friend_id',
        'accepted',
    ];
}
