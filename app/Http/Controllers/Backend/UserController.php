<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Contracts\Support;

use App\Http\Requests\Request as Request;


class UserController extends Controller
{





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response $user;
     * @param int id
     */
    public function get($id)
    {

            $user = User::find($id);
            return $user;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request $_request
     */
    public function put(Request $request)
    {
        
        User::create($request->request);
        var_dump($request);
        return 1;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
    }


}