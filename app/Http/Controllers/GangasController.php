<?php

namespace App\Http\Controllers;

use App\Models\Ganga;
use Illuminate\Http\Request;

class GangasController extends Controller
{
    public function index()
    {
        $gangas = Ganga::orderBy('id', 'desc')->get();
        return view('gangas.index', ['gangas' => $gangas]);
    }

    public function show($id)
    {
        $ganga = Ganga::findorFail($id);
        return view('gangas.show', compact('ganga'));
    }

    public function create()
    {
        return view('gangas.create');
    }

    public function store(Request $request)
    {
        Ganga::create([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'category' => $request->category,
            'likes' => 0,
            'unlikes' => 0,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'available' => true,
            'user_id' => $request->user_id,
        ]);

        return redirect(route('gangas.index'));
    }

    public function edit($id)
    {
        return view('gangas.edit');
    }

    public function update(Request $request, $id)
    {
        Ganga::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'category' => $request->category,
            'likes' => $request->likes,
            'unlikes' => $request->unlikes,
            'price' => $request->price,
            'price_sale' => $request->price_sale,
            'available' => $request->available,
            'user_id' => $request->user_id,
        ]);
    }

    public function delete($id)
    {
        $ganga = Ganga::findOrFail($id);
        Ganga::destroy($id);
        return redirect()->route('gangas.index');
    }
}
