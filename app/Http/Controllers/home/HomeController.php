<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use AdinanCenci\Climatempo\Climatempo;
use App\Models\Imovei;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Categoria::orderby('id', 'DESC')->get();
        $imoveisV = Imovei::orderby('id', 'DESC')->limit(6)->get();
        return view('home.pages.index', compact('cat', 'imoveisV'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function quemsomos()
    {
        return view('home.pages.quem-somos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function contatos()
    {
        $cat = Categoria::orderby('id', 'DESC')->get();
        return view('home.pages.contatos.index', compact('cat'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
