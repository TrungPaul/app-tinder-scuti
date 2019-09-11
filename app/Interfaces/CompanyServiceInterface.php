<?php

namespace App\Interfaces;

interface CompanyServiceInterface
{
    public function count();
    public function show($perpage);
    public function detailShow($id);
    public function perpage($numberload);
}
