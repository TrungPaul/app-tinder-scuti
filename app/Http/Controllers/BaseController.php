<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    public function sendResponse($result, $count, $perpage)
    {
        $response = [
            'success' => true,
            'total' => $count,
            'perpage' => $perpage,
            '_embedded' => $result
        ];
        return response()->json($response, 200);
    }
}
