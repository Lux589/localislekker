<?php

namespace App\Http\Controllers;

use App\Business;
use App\Http\Resources\BusinessCollection;
use App\Http\Resources\BusinessResource;
 
class BusinessAPIController extends Controller
{
    public function index()
    {
        return new BusinessCollection(Business::paginate());
    }
 
    public function show(Business $business)
    {
        return new BusinessResource($business->load(['category']));
    }

    public function store(Request $request)
    {
        return new BusinessResource(Business::create($request->all()));
    }

    public function update(Request $request, Business $business)
    {
        $business->update($request->all());

        return new BusinessResource($business);
    }

    public function destroy(Request $request, Business $business)
    {
        $business->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}