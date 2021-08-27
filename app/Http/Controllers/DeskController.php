<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeskResource;
use App\Models\Desk;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return DeskResource::collection(Desk::with('lists')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return DeskResource
     */
    public function store(Request $request)
    {
        $created_desk = Desk::create($request->all());
        return new DeskResource($created_desk);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function show($id)
    {
       return DeskResource::collection(Desk::with('lists')->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
