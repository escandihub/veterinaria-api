<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\HorarioRequest;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::all();
        return response()->json($horarios, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HorarioRequest $request)
    {
        //
        $horario = new Horario();
        // Horario::create($request->all());
        $horario->fill($request->all());
        $horario->uuid = Str::uuid();
        $horario->save();
        return response()->json(['message' => 'Horario guardado'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
        return response()->json($horario, 200);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(HorarioRequest $request, Horario $horario)
    {
        //
        $horario->fill($request->all());
        $horario->save();
        return response()->json(['message' => 'Horario actualizado'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horario $horario)
    {
        //
        $horario->delete();
        return response()->json(['message' => 'Horario eliminado'], 201);
    }
}
