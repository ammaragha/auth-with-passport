<?php

namespace App\Http\Controllers;

use App\Auther;
use App\Http\Resources\AuthersResource;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class AuthersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthersResource::collection(Auther::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faker = Faker::create(1);
        $auther = Auther::create([
            // 'name'=>$request->name
            'name'=>$faker->name(),
        ]);

        return new AuthersResource($auther);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function show(Auther $auther)
    {
        return new AuthersResource($auther);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function edit(Auther $auther)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auther $auther)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auther  $auther
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auther $auther)
    {
        //
    }
}
