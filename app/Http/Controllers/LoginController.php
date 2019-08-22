<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function __construct(LoginInterface $LoginInterface) {
         $this->LoginInterface = $LoginInterface;
    }
    
    public function GetLogin(){
            $this->LoginInterface->get();

    }
}
