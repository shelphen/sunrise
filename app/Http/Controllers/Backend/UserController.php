<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request as Request;
use App\Models\User;
use Log;

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

        try {
            $user = User::find($id);

            return $user ? $user : json_encode(['status' => 'error'], true);

        } catch (\Exception $e) {

           Log::error($e);

        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request $_request
     */
    public function put(Request $request)
    {
        try {
            User::create($request->request);
            return json_encode(['status' => 'success'], true);
        } catch (\Exception $e) {
            Log::error($e);
        }

        return json_encode(['status' => 'error'], true);

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