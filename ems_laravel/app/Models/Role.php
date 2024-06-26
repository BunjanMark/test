<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';


    protected $fillable = [
        'role_name',
        'role_description',
        'permission_type'
    ];


    public function user() {
        return $this->hasMany('App\Models\User');
    }
}
