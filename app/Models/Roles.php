<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = ['title','discription', 'image', 'slug'];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function classes() {

        return $this->belongsToMany(Classes::class, 'classes_roles');
    }
}
