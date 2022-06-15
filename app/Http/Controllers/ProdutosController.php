<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Produtos;
use App\Services\ProdutoService;

class ProdutosController extends Controller
{
    protected function index(){
        try {
            $response = ProdutoService::getService();
            return response()->json($response);
        } catch (\Exception $th) {
            return $th;
        }
    }

    protected function store(Request $request){
        try {
            $response = ProdutoService::storeService($request);
            return response()->json($response);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
