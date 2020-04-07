<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use \App\Mail\SendMail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto = Contacto::get();
        echo json_encode($contacto);
        
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
        $contacto = new Contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->tel = $request->input('tel');
        $contacto->email = $request->input('email');
        $contacto->coment = $request->input('coment');
        $contacto->save();
        echo json_encode($contacto);
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
        //
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
