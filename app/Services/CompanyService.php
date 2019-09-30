<?php

namespace App\Services;

use App\Company;
use App\Contact;
use App\Jds;
use App\Interfaces\CompanyServiceInterface;

class CompanyService implements CompanyServiceInterface
{
    public function getTotalNumberCompany()
    {
        $count = Company::all()->count();
        return $count;
    }
    public function show($numberload, $request)
    {
        $perpage = $this->perpageCompany($numberload);
        if (($request->location == null) && ($request->main_business==null)) {
            $result = Company::offset(0)->limit($perpage)->get();
        } elseif (($request->location != null) && ($request->main_business==null)) {
            $result = Company::where('location', 'like', $request->location)->offset(0)->limit($perpage)->get();
        } elseif (($request->location == null) && ($request->main_business != null)) {
            $result = Company::where('main_business', 'like', $request->main_business)->offset(0)->limit($perpage)->get();
        } else {
            $result = Company::where('location', 'like', $request->location)->where('main_business', 'like', $request->main_business)->offset(0)->limit($perpage)->get();
        }
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
}
