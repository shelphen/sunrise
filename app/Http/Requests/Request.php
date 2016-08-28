<?php

namespace App\Http\Requests;


//use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

use Illuminate\Http\Request as LaravelRequest;



class Request
{
    public $request;
    public  function __construct(LaravelRequest $request) {

        $this->request = $request->all();



    }



}




