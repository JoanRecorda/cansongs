<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return response()->json($songs);
    }

    public function store(Request $request){
        $song = Song::create($request->post());
        return response()->json([
            'song'=>$song
        ]);
    }

    public function show(Song $song){
        return response()->json($song);
    }

    public function update(Request $request, Song $song){
        $song->fill($request->post()->save());
        return response()->json([
            'song'=>$song
        ]);
    }

    public function destroy(Song $song){
        $song->delete();
        return response()->json([
            'message'=> 'Songs has been successfully DESTROYED'
        ]);
    }
}
