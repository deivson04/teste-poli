<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobrevivente;
class SobreviventesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = sobrevivente::all();

        return response()->json(['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Htt\pResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();

        sobrevivente::create($data);

        return response()->json(['data'=> $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        
        $data = sobrevivente::findorFail($id);
         
        $data->update($dados);
        
        return response()->json(['msg'=> 'Dados atualizados com sucesso!', 'data'=> $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = sobrevivente::find($id);
        
        $data->delete($data);
        
        return response()->json(['msg'=> 'Dados excluido com sucesso!', 'data'=> $data]);
    }
}
