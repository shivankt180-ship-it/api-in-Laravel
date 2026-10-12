<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class users extends Model
{
    use HasApiTokens;

    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'passward',
    ];
}
