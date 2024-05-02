<?php

namespace App\Http\Controllers;

use App\Models\MedialFilm;
use App\Http\Requests\StoreMedialFilmRequest;
use App\Http\Requests\UpdateMedialFilmRequest;

class MedialFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedialFilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedialFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedialFilm  $medialFilm
     * @return \Illuminate\Http\Response
     */
    public function show(MedialFilm $medialFilm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedialFilm  $medialFilm
     * @return \Illuminate\Http\Response
     */
    public function edit(MedialFilm $medialFilm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedialFilmRequest  $request
     * @param  \App\Models\MedialFilm  $medialFilm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedialFilmRequest $request, MedialFilm $medialFilm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedialFilm  $medialFilm
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedialFilm $medialFilm)
    {
        //
    }
}
