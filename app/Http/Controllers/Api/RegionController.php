<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::all();
        return $regions;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //reglas de validation
        $request->validate([
            'name' => 'required|max:100',

        ]);
        //agregando un nuevo registro en la BBDD con asignasion masiva
        $region = Region::create($request->all());
        return $region;
    }

    /**
     * Display the specified resource.
     */
    public function show(Region $region)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Region $region)
    {
        //
    }
}
