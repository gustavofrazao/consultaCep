<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EndereController extends Controller
{
    public function returEndereco(Request $request)
    {
        return Endereco::where('cep', $request['cep'])->get();
    }

    public function saveEndereco(Request $request)
    {
        $endereco              = new Endereco;
        $endereco->cep         = $request['cep'];
        $endereco->logradouro  = $request['logradouro'];
        $endereco->complemento = $request['complemento'];
        $endereco->bairro      = $request['bairro'];
        $endereco->localidade  = $request['localidade'];
        $endereco->uf          = $request['uf'];
        $endereco->ibge        = $request['ibge'];
        $endereco->gia         = $request['gia'];
        $endereco->ddd         = $request['ddd'];
        $endereco->siafi       = $request['siafi'];
        $endereco->save();
    }
}
