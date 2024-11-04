<?php

namespace App\Http\Controllers;

use App\Models\Boardgame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class BoardgameController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['show', 'index']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boardgames = Boardgame::orderBy('name', 'asc')->get();
        return view('boardgame.index', compact('boardgames'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('boardgame.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Boardgame::create([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'img' => $request->has('img') ? $request->file('img')->store('images', 'public') : Null,
            'user_id' => Auth::id(),
        ]);
        return redirect()->route('boardgame.create')->with('success', 'Gioco inserito correttamente');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Boardgame $boardgame)
    {
        return view('boardgame.show', compact('boardgame'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Boardgame $boardgame)
    {
        return view('boardgame.edit', compact('boardgame'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boardgame $boardgame)
    {
        $boardgame->update([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
        ]);
        if ($request->has('img')) {
            $boardgame->update(['img' => $request->file('img')->store('images', 'public')]);
        }
        return redirect()->route('boardgame.edit', compact('boardgame'))->with('success', 'Gioco da tavolo modificato');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boardgame $boardgame)
    {
        $boardgame->delete();
        return redirect()->route('boardgame.index')->with('success', 'Scheda rimossa');
        //
    }
}
