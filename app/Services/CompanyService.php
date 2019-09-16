<?php

namespace App\Services;

use App\Company;
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
