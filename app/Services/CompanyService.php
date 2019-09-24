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
    public function getInfoCompany()
    {
        $id = Auth::user()->id;
        $user = User::with('candidates', 'company')->find($id)->toArray();
        $company = Company::where('user_id', $id)->first();
        $company =  $company->load('jds');
        $idCompany = $company['id'];

        return $idCompany;
    }
    public function addCompany($request)
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
        $dataContactCompany = $request->only([
            'phone',
            'email',
            'facebook',
            'candidate_id',
            'company_id'
        ]);
        if ($user['company'] !== null) {
            $company = Compnany::where('user_id', $id)->first();
            $company->updateInfoCompany($dataCompany);
        } else {
            $company = $this->addInfoCompany($dataCompany);
            $dataJds['company_id'] = $company->id;
            $dataContactCompany['company_id'] = $company->id;
        }
        $newJds->updateInfoJds($dataJds, $company);
        $newContactCompany->updateInfoContactCompany($dataContactCompany, $company);
    }
    public function addInfoCompany($dataCompany)
    {
        return Company::create($dataCompany);
    }
    public function updateInfoCompany($dataCompany)
    {
        return Company::update($dataCompany);
    }
}
