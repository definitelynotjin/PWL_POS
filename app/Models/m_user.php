<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class m_user extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table ="m_user";
public $timestamps = false;
protected $primaryKey ='user_id';

protected $fillable = [
    'level_id',
    'username',
    'name',
];
}
