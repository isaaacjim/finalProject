<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
       $insert = Card::create(['name' => $request->name, 'prize' => $request->prize]);
       
       
       return response()->json(["result" => $insert]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("cardupdate", compact('id'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $card = Card::findOrFail($id);
        $card->name = $request->name;
        $card->prize = $request->prize;
        $card->save();
    
        return view("cardupdate", compact('id', 'card'));
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    
        $user = Card::findOrFail($id)->delete();
        
        
        return response()->json([
            "result"=> $user
        ]);    
    }
 
public function getCardNameAndId()
{
    $cards = DB::table('cards')->select('id', 'name', 'prize')->get();
    return view('card-names', ['cards' => $cards]);
}

}
    

