<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreFitnessClassRequest;
use App\Http\Requests\UpdateFitnessClassRequest;
use App\Models\FitnessClass;

class FitnessClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fitnessClass = FitnessClass::all();

        foreach($fitnessClass as $class) {
            $class['description'] = html_entity_decode($class['description']);
        }

        return response()
            ->json($fitnessClass)
            ->withHeaders([
                'content-type' => 'application/json'
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFitnessClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FitnessClass $fitnessClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FitnessClass $fitnessClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFitnessClassRequest $request, FitnessClass $fitnessClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FitnessClass $fitnessClass)
    {
        //
    }
}
