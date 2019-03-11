<?php

namespace App\Http\Controllers;

use App\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Hero::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $hero= new Hero();
        $hero->fill($data);
        $hero->save();
        return $data;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {

        return $hero;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $data = $request->all();
        $fillable= $hero->getFillable();
        foreach ($fillable as $key => $value) {
            if($request->has($value)){
              $hero->$value=$request->$value;
            }
          }
        $hero->save();
        return $hero;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();
        return $hero;

    }
}
