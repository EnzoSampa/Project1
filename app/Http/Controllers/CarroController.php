<?php

namespace App\Http\Controllers ;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller {

    public function index() {
        $carros = Carro::all();
        return response()->json($carros);
    }

    public function show($id) {
        $carro = Carro::find($id);
        return response()->json($carro);
    }

    public function create(Request $request) {
        $carro = new Carro();

        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->tipo_combustivel = $request->tipo_combustivel;
        $carro->ano = $request->ano;
        $carro->preco = $request->preco;
        $carro->ultimo_dono = $request->ultimo_dono;
        $carro->motor = $request->motor;

        $carro->save();

        return response()->json("carro add com sucesso");
    }
}