<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rehearsal;

class RehearsalController extends Controller
{
    public function index()
    {
        $rehearsals = Rehearsal::all();
        return response()->json($rehearsals);
    }

    public function store(Request $request){
        $rehearsal = Rehearsal::create($request->post());
        return response()->json([
            'rehearsal'=>$rehearsal
        ]);
    }

    public function show(Rehearsal $rehearsal){
        return response()->json($rehearsal);
    }

    public function update(Request $request, Rehearsal $rehearsal){
        $rehearsal->fill($request->post()->save());
        return response()->json([
            'rehearsal'=>$rehearsal
        ]);
    }

    public function destroy(Rehearsal $rehearsal){
        $rehearsal->delete();
        return response()->json([
            'message'=> 'Rehearsal has been successfully DESTROYED'
        ]);
    }

}
