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
    public function addContactCandidate($dataContact)
    {
        return self::create($dataContact);
    }
    public function updateInfoContact($dataContact,$candidate)
    {
        $contact = Contact::where('candidate_id', $candidate->id)->first();
        if ($contact) {
            return $contact->update($dataContact);
        }

        return $this->addContactCandidate($dataContact);
    }
    public function addContactCompany($dataContactCompany)
    {
        return self::create($dataContactCompany);
    }
    public function updateInfoContactCompany($dataContactCompany, $company)
    {
        $contact = Contact::where('company_id', $company->id)->first();
        if ($contact) {
            return $contact->update($dataContactCompany);
        }

        return $this->addContactCompany($dataContactCompany);
    }
}
