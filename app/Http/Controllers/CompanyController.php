<?php

namespace App\Http\Controllers;

use App\Services\CompanyService;
use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController as BaseController;
use App\Providers\CompanyServiceProvider;
use App\Interfaces\CompanyServiceInterface;

class CompanyController extends BaseController
{
    public function __construct(CompanyServiceInterface  $companyService)
    {
        $this->companyService = $companyService;
    }
    public function getTotalNumberCompany($numberload)
    {
        $count = $this->companyService->count();
        $result = $this->companyService->show($numberload);
        $perpage = $this->companyService->perpage($numberload);
        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
    public function detailCompany($id)
    {
        $detailShow = $this->companyService->detailShow($id);
        return response($detailShow);
    }
}
