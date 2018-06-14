<?php

namespace Chat\Http\Controllers;

use Illuminate\Http\Request;
use Chat\Peca;
use Chat\Fornecedor;
use Chat\Estoque;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('peca.index', [
            'pecas' => Peca::orderBy('nome')->get(),
            'fornecedores' => Fornecedor::all(),
            'estoques' => Estoque::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peca.create', [
            'fornecedores' => Fornecedor::orderBy('nome')->get(),
            'estoques' => Estoque::orderBy('nome')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peca = new Peca($request->all());
        if ($peca->save()) {
            return redirect()->route('peca.index')->with('message', 'Peça criada com sucesso!');
        } else {
            return redirect()->route('peca.index')->with('message', 'Erro na criação da peça!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Peca $peca)
    {
        return view('peca.show', [
            'peca' => $peca,
            'fornecedores' => Fornecedor::all(),
            'estoques' => Estoque::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peca $peca)
    {
        return view('peca.edit', array(
            'peca' => $peca,
            'fornecedores' => Fornecedor::orderBy('nome')->get(),
            'estoques' => Estoque::orderBy('nome')->get()
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peca $peca)
    {
        $peca->update($request->all());
        return redirect()->route('peca.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peca $peca)
{
    $peca->delete();
    return redirect()->route('peca.index');
}
}
