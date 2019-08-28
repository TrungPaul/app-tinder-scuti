<?php

namespace App\Interfaces;

interface AuthServiceInterface
{
    public function login();
    public function signin();
    public function logout();

}
