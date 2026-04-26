<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //

    protected $fillable = [
        'name',
        'category',
        'description',
        'image'
    ];

     public function users()
    {
        return $this->belongsToMany(User::class, 'user_skills')
                    ->withPivot('type')
                    ->withTimestamps();
    }

    public function exchanges()
    {
        return $this->hasMany(Exchange::class);
    }

}
