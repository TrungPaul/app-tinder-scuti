<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'phone',
        'email',
        'facebook',
        'candidate_id',
        'company_id'
    ];
    public function candidates()
    {
        return $this->hasOne('App\Candidate', 'candidate_id', 'id');
    }
    public function company()
    {
        return $this->hasOne('App\Company', 'company_id', 'id');
    }
    public function addContactCandidate($input2)
    {
        return self::create($input2);
    }
    public function updateInfoContact($input2)
    {
        return Contact::update($input2);
    }
}
