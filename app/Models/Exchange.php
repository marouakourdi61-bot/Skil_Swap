<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    //



    protected $fillable = [
        'sender_id',
        'receiver_id',
        'skill_id',
        'status',
        'scheduled_at'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }


    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }


    public function skillOffered()
    {
        return $this->belongsTo(Skill::class, 'skill_offered_id');
    }

    public function skillWanted()
    {
        return $this->belongsTo(Skill::class, 'skill_wanted_id');
    }


    public function review()
    {
        return $this->hasOne(Review::class);
    }
}

