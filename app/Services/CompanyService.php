<?php

namespace App\Services;

use App\Company;
use App\Contact;
use App\Jds;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\CompanyServiceInterface;

class CompanyService implements CompanyServiceInterface
{
    public function getTotalNumberCompany()
    {
        $count = Company::all()->count();
        return $count;
    }
    public function show($numberload)
    {
        $perpage = $this->perpageCompany($numberload);
        $result = Company::offset(0)->limit($perpage)->get();
        $result = $result->load('jds');
        $result = $result->load('contacts');
        return $result;
    }
    public function detailShow($id)
    {
        $detailCompany = Company::find($id);
        return $detailCompany;
    }
    public function perpageCompany($numberload)
    {
        $numberCompany = 10;
        $perpage = $numberload*$numberCompany;
        return $perpage;
    }
    public function addCompany($request)
    {
        $id = Auth::user()->id;
        $user = User::with('candidates', 'company')->find($id)->toArray();
        $company = Company::where('user_id', $id)->first();
        $idCompany= $company['id'];
        $input = $request->only([
            'name',
            'current_working',
            'main_business',
            'company_size',
            'regime_treatment',
            'user_id',
            'image'
        ]);
        $jds = $request->only([
            'job_title',
            'position',
            'rank_salary',
            'skill_set',
            'company_id'
        ]);
        $information = $request->only([
            'phone',
            'email',
            'facebook',
            'candidate_id',
            'company_id'
        ]);
        if ($user['company'] == null) {
            $this->addInfoCompany($input);
            $newJds= new Jds();
            $addJds = $newJds->addJdsCompany($jds);
            $newContact = new Contact();
            $addContact = $newContact->addContactCompany($information);
        } else {
            $updateContact = $company->updateInfoCompany($input);
            $updateInfonJds= Jds::where('company_id', $idCompany)->first();
            $updateJds = $updateInfonJds->updateInfonJds($jds);
            $updateInforContactCompany= Contact::where('company_id', $idCompany)->first();
            $updateContact = $updateInforContactCompany->updateInforContactCompany($information);
        }
    }
    public function addInfoCompany($input)
    {
        return Company::create($input);
    }
    public function updateInfoCompany($input)
    {
        return Company::update($input);
    }
}
