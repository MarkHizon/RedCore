<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class BaseController extends Controller
{
    public function sendResponse($data, $message){
    
        $response = [
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ];

        return response()->json(array_filter($response), 200);

    }

    public function sendError($error, $errorMessages = [], $code = 404){
       
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);

    }

}
