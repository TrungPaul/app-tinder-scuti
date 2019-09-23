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
    public function company()
    {
        return $this->hasOne('App\Company', 'company_id', 'id');
    }
    public function addContactCompany($information)
    {
        return self::create($information);
    }
    public function updateInforContactCompany($information)
    {
        return Contact::update($information);
    }
}
