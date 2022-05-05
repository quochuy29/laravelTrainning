<?php

namespace App\Models;

use App\Scope\TestScope;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "users";

    protected $fillable = ['name','email','age','gender','programming_language'];

    protected static function booted()
    {
        static::addGlobalScope(new TestScope);
    }
}
