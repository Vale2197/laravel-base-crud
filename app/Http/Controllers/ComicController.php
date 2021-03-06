<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function adminIndex() {

        $comics = Comic::paginate(10);

        return view('comics.admin.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('comics.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated_comic = $request->validate([
            'title' => 'required | max:100',
            'image_url' => 'required',
            'series' => 'nullable | max:100',
            'price' => 'required | numeric',
            'description'=> 'nullable',
        ]);
        
        Comic::create($validated_comic);

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        
        return view('comics.admin.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $validated_comic = $request->validate([
            'title' => 'required | max:100',
            'image_url' => 'required',
            'series' => 'nullable | max:100',
            'price' => 'required | numeric',
            'description'=> 'nullable',
        ]);

        $comic->update($validated_comic);

        return redirect()->route('comics.admin.index', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //

        $comic->delete();

        return redirect()->route('comics.admin.index');

    }
}
