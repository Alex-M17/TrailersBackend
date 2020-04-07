<?php

namespace App\Http\Controllers;

use App\Trailer;
use Illuminate\Http\Request;

class TrailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trailer = Trailer::get();
        echo json_encode($trailer);
        
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
        $trailer = new Trailer();
        $trailer->title = $request->input('title');
        $trailer->imgUrl = $request->input('imgUrl');
        $trailer->genero = $request->input('genero');
        $trailer->year = $request->input('year');
        $trailer->url = $request->input('url');
        $trailer->save();
        echo json_encode($trailer);
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
        $trailer = Trailer::find($trailerID);
        $trailer->title = $request->input('title');
        $trailer->imgUrl = $request->input('imgUrl');
        $trailer->genero = $request->input('genero');
        $trailer->year = $request->input('year');
        $trailer->url = $request->input('url');
        $trailer->save();
        echo json_encode($trailer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trailer  $trailerID
     * @return \Illuminate\Http\Response
     */
    public function destroy($trailerID)
    {
        $trailer = Trailer::find($trailerID);
        $trailer->delete();
    }
}
