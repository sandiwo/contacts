<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDescription extends Model
{
    protected $fillable = ['description'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
