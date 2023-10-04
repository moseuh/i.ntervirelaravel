<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;
    public function admins()
{
    return $this->belongsToMany(Admin::class);
}

public function users()
{
    return $this->hasMany(User::class);
}

}
