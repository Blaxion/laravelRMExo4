<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fruits = DB::table('fruits')->orderBy('quantity','asc')->get();
        $fruitscount = DB::table('fruits')->count();
        return view('pages.fruits',compact('fruits','fruitscount'));
    }
    public function indexback()
    {
        $fruits = DB::table('fruits')->orderBy('quantity','asc')->get();
        $fruitscount = DB::table('fruits')->count();
        return view('pages.back.fruits',compact('fruits','fruitscount'));
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.back.create.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Fruit;
        $store->name=$request->name;
        $store->quantity=$request->quantity;
        $store->save();
        return redirect('/setfruits');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function show(Fruit $fruit)
    {
        $show = $fruit;
        return view('pages.show.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
        $edit=$fruit;
        return view('pages.back.edit.edit',compact('edit'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fruit $fruit)
    { 
        $update = $fruit;
        $update->name = $request->name;
        $update->quantity = $request->quantity;
        $update->save();
        return redirect('/fruits/'.$update->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fruit $fruit)
    {
        $fruit->delete();
        return redirect()->back();
    }
}
