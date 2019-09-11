<?php

namespace App\Services;

use App\Company;
use App\Interfaces\CompanyServiceInterface;

class CompanyService implements CompanyServiceInterface
{
    public function count()
    {
        $count = Company::all()->count();
        return $count;
    }

    public function show($numberload)
    {
        $perpage = $this->perpage($numberload);
        $result = Company::offset(0)->limit($perpage)->get();
        return $result;
    }

    public function detailShow($id)
    {
        $detailCompany = Company::find($id);
        return $detailCompany;
    }

    public function perpage($numberload)
    {
        $perpage = $numberload*10;
        return $perpage;
    }
}
