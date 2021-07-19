<?php

namespace App\Http\Controllers;

use App\Models\vegetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vegetables = DB::table('vegetables')->orderBy('quantity','asc')->get();
        return view('pages.vegetables',compact('vegetables'));
    }
    public function indexback()
    {
        $vegetables = DB::table('vegetables')->orderBy('quantity','asc')->get();
        return view('pages.back.vegetables',compact('vegetables'));
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
        $store = new Vegetable;
        $store->name=$request->name;
        $store->quantity=$request->quantity;
        $store->save();
        return redirect('/setvegetables');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function show(Vegetable $vegetable)
    {
        $show = $vegetable;
        return view('pages.show.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Vegetable $vegetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vegetable $vegetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vegetable $vegetable)
    {
        $vegetable->delete();
        return redirect()->back();
    }
}
