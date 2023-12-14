<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
  
    public function index()
    {
        //
        $produtosN = produtos::ALL();
        return view('page2',compact('productosN'));
    }

 
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
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(produtos $produtos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produtos $produtos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(produtos $produtos)
    {
        //
    }
}
