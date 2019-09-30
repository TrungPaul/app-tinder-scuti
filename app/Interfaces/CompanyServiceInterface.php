<?php

namespace App\Interfaces;

interface CompanyServiceInterface
{
    public function getTotalNumberCompany();
    public function show($perpage, $request);
    public function detailShow($id);
    public function perpageCompany($numberload);
    public function getListLike();
    public function getListDislike();
}
