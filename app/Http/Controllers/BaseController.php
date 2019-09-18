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
    public function sendError($error = "", $errorMessages = [], $code = 404)
    {
        $response = [
            'code' => $code,
            'messages' => $errorMessages,
            'errors' => $error
        ];
        return response()->json($response, $code);
    }
}
