<?php

namespace App\Services;

use App\Model\Produtos;

class ProdutoService
{
    private function getService(){

        $funcao = new Produtos();
        $funcao = $funcao->paginate(15);
        return $funcao;
    }

    private function storeService($data){

        $funcao = new Produtos();
        $funcao->nome = $data['nome'];
        $funcao->preco = $data['preco'];
        $funcao->peso = $data['peso'];
        $funcao->save();

        return $funcao;
    }
}
