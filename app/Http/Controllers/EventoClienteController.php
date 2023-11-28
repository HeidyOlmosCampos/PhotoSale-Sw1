<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\EventoCliente;

class EventoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $eventoExistente = DB::table('eventos')->where('codigo', $request->input('codigo'))->first();

        if ($eventoExistente) {

            $idEvento = $eventoExistente->id_evento;
            $idCliente = DB::table('clientes')->where('id_user', '=', auth()->user()->id)->value('id_cliente');

            $eventoCliente = new EventoCliente();
            $eventoCliente->fecha = Carbon::now();;
            $eventoCliente->id_cliente = $idCliente;
            $eventoCliente->id_evento = $idEvento;
            $eventoCliente->save();


            return response()->json('Unido a evento', 200);
        } else {
            return response()->json('failed', 404);
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
