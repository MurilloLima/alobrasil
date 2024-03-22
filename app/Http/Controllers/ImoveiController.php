<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Imovei;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImoveiController extends Controller
{
    private $imoveis;
    public function __construct(Imovei $imoveis)
    {
        $this->imoveis = $imoveis;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imoveis = Imovei::orderby('id', 'DESC')->get();
        return view('admin.pages.imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Categoria::orderby('id', 'DESC')->get();
        return view('admin.pages.imoveis.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cat_id' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'content' => 'required',
            'city' => 'required',
        ]);

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('upload/imoveis'), $imageName);
            $this->imoveis->img = $imageName;
            $this->imoveis->cat_id = $request->cat_id;
            $this->imoveis->name = $request->name;
            $this->imoveis->slug = Str::slug($request->name, '-');
            $this->imoveis->desc = $request->desc;
            $this->imoveis->content = $request->content;
            $this->imoveis->city = $request->city;
            $this->imoveis->save();
            return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Imovei $imovei)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imovei $imovei)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Imovei $imovei)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Imovei $imovei)
    {
        //
    }
}
