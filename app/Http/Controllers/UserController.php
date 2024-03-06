<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Response;
use App\Http\Controllers\BaseController;

class UserController extends BaseController
{

    public function index(){
        return $this->sendResponse('testing', Response::HTTP_OK); 
    }

    public function store(){

    }

    public function show(){
        return $this->sendResponse('testing', Response::HTTP_OK); 
    }
    
    

    public function list(){
        
    }

    public function update(){

    }

    public function delete(){

    }
}
