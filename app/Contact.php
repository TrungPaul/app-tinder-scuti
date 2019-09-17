<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $filltable = [
        'phone',
        'email',
        'facebook'
    ];
    public function candidates()
    {
        return $this->hasOne('App\Candidate', 'candidate_id', 'id');
    }
}
