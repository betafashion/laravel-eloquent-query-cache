<?php

namespace Rennokki\QueryCache\Test\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function getCacheBaseTags(): array
    {
        return [
            //
        ];
    }
}
