<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GangasRequest;
use App\Http\Resources\GangaCollection;
use App\Http\Resources\GangasResource;
use App\Models\Ganga;
use Illuminate\Http\Request;

class GangaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gangas = Ganga::get();
        return new GangaCollection($gangas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GangasRequest $request)
    {
        $ganga = new Ganga();
        $ganga->title = $request->title;
        $ganga->description = $request->description;
        $ganga->url = $request->url;
        $ganga->likes = $request->likes;
        $ganga->unlikes = $request->unlikes;
        $ganga->price = $request->price;
        $ganga->price_sale = $request->price_sale;
        $ganga->available = $request->available;
        $ganga->user_id = $request->user_id;
        $ganga->save();
        return response()->json($ganga, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ganga  $ganga
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ganga = Ganga::find($id);
        return new GangasResource($ganga);
        // return GangaCollection::collection($items)->toResource();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ganga  $ganga
     * @return \Illuminate\Http\Response
     */
    public function update(GangasRequest $request, Ganga $ganga)
    {
        $ganga->title = $request->title;
        $ganga->description = $request->description;
        $ganga->url = $request->url;
        $ganga->likes = $request->likes;
        $ganga->unlikes = $request->unlikes;
        $ganga->price = $request->price;
        $ganga->price_sale = $request->price_sale;
        $ganga->available = $request->available;
        $ganga->user_id = $request->user_id;
        $ganga->save();
        return response()->json($ganga);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ganga  $ganga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ganga $ganga)
    {
        $ganga->delete();
        return response()->json($ganga, 204);
    }
}
