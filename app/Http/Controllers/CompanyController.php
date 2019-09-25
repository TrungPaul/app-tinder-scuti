<?php

namespace App\Http\Controllers;

use App\Services\CompanyService;
use App\User;
use Illuminate\Http\Request;
use App\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController as BaseController;
use App\Providers\CompanyServiceProvider;
use App\Interfaces\CompanyServiceInterface;
use App\Jds;
use App\Contact;

class CompanyController extends BaseController
{
    public function __construct(CompanyServiceInterface  $companyService)
    {
        $this->companyService = $companyService;
    }
    public function getTotalNumberCompany($numberload)
    {
        $count = $this->companyService->getTotalNumberCompany();
        $result = $this->companyService->show($numberload);
        $perpage = $this->companyService->perpageCompany($numberload);
        return $this->sendResponse($result->toArray(), $count, $perpage);
    }
    public function detailCompany($id)
    {
        $detailShow = $this->companyService->detailShow($id);
        return response($detailShow);
    }
    public function addInfoCompany(Request $request)
    {
        $newCompany = new Company();
        $addInfoCompany = $newCompany->infoCompany($request);

        return response()->json('update successfull' ,200);
    }
}
