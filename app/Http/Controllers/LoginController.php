<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class LoginController extends Controller
{
    public function index()
    {
        $login = Login::get();
        echo json_encode($login);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    #public function create()
    #{
        
    #}
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function show(Trailer $trailer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trailer  $trailer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trailer $trailer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trailer  $trailerID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $trailerID)
    {
        $login = Login::find($trailerID);
        $login->password = $request->input('password');
        $login->save();
        echo json_encode($login);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trailer  $trailerID
     * @return \Illuminate\Http\Response
     */
    public function destroy($trailerID)
    {
        //
    }
}
