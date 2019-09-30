<?php

namespace App;

use App\Jds;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Contact;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'name',
        'current_working',
        'main_business',
        'company_size',
        'location',
        'user_id',
        'image'
    ];

    public function jds()
    {
        return $this->hasOne('App\Jds', 'company_id', 'id');
    }
    public function contacts()
    {
        return $this->hasOne('App\Contact', 'company_id', 'id');
    }
    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }
    public function company()
    {
        return $this->hasMany('App\CompanyLike', 'company_id', 'id');
    }
    public function companyLike()
    {
        return $this->hasMany('App\CompanyLike', 'company_id', 'id');
    }
    public function companyDislike()
    {
        return $this->hasMany('App\DislikeCompany', 'company_id', 'id');
    }
    public function addInfoCompany($input)
    {
        return Company::create($input);
    }
    public function updateInfoCompany($input)
    {
        return Company::update($input);
    }
    public function getInfoCompany()
    {
        $id = Auth::user()->id;
        $user = User::with('candidates', 'company')->find($id)->toArray();
        $company = Company::where('user_id', $id)->first();
        $company =  $company->load('jds');
        $idCompany = $company['id'];

        return $idCompany;
    }
    public function infoCompany($request)
    {
        $id = Auth::user()->id;
        $user = User::with('candidates', 'company')->find($id)->toArray();
        $newJds = new Jds();
        $newContactCompany = new Contact();
        $dataCompany = $request->only([
            'name',
            'current_working',
            'main_business',
            'company_size',
            'location',
            'user_id',
            'image'
        ]);
        $dataJds = $request->only([
            'job_title',
            'position',
            'rank_salary',
            'skill_set'
        ]);
        $dataContactCompany = $request->only([
            'phone',
            'email',
            'facebook',
            'candidate_id'
        ]);
        if ($user['companies'] !== null) {
            $company = Company::where('user_id', $id)->first();
            $company->updateInfoCompany($dataCompany);
        } else {
            $company = $this->addInfoCompany($dataCompany);
            $dataJds['company_id'] = $company->id;
            $dataContactCompany['company_id'] = $company->id;
        }
        $newJds->updateInfoJds($dataJds, $company);
        $newContactCompany->updateInfoContactCompany($dataContactCompany, $company);
    }
}
