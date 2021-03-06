<?php

namespace App\Services;

use App\Models\Produtos;

class ProdutoService
{
    public static function getService(){

        $funcao = new Produtos();
        $funcao = $funcao->paginate(15);
        return $funcao;
    }

    public static function storeService($data){

        $funcao = new Produtos();
        $funcao->nome = $data['nome'];
        $funcao->preco = $data['preco'];
        $funcao->peso = $data['peso'];
        $funcao->save();

        return $funcao;
    }
}
