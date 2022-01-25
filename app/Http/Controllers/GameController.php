<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Game;
use Symfony\Component\Console\Input\Input;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $games = Game::paginate('12');

        return view('games.index', compact('games'));
    }

    public function adminIndex() {

        $games = DB::table('games')
        ->orderBy('id', 'desc')
        ->paginate('12');

        return view('games.admin.index', compact('games'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //

        return view('games.admin.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Game $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //

        return view('games.admin.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Game $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
        $game->title = $request->title;
        $game->description = $request->description;
        $game->image = $request->image;

        $game->update();

        return redirect()->route('games.admin', compact('game'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Game $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //

        $game->delete();

        return redirect()->route('games.admin');
    }

    public function order(Request $request) {

        

       if($request->input('orderBy') == 'desc') {

        $games = DB::table('games')
        ->orderBy('id', 'desc')
        ->paginate('12');


        return view('games.admin.index', compact('games'));


       }
       else {

         $games = DB::table('games')
        ->orderBy('id', 'asc')
        ->paginate('12');


        return view('games.admin.index', compact('games'));

       }
      

    }
}
