<?php

namespace App\Interfaces;

interface CompanyServiceInterface
{
    public function getTotalNumberCompany();
    public function show($perpage);
    public function detailShow($id);
    public function perpage($numberload);
}
