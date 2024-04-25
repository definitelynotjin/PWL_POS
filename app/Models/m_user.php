<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;

class m_user extends Model
{
    protected $table ="m_user";
public $timestamps = false;
protected $primaryKey ='user_id';

protected $fillable = [
    'level_id',
    'username',
    'name',
];
}
