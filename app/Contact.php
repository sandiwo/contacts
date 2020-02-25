<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'group_id',
        'first_name',
        'last_name',
        'avatar',
        'address',
        'city',
        'zip',
        'country',
        'email',
        'phone',
        'note'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function contactDescription()
    {
        return $this->hasOne(ContactDescription::class);
    }
}