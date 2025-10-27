<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class ProdutosController extends Controller
{
    public Function __construct(Produto $produto) 
    {
            $this->produto = $produto;
    }

    public function index (Request $request) 
    {
        $pesquisar = $request->pesquisar;
        $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');
                
        return view('pages.produtos.paginacao', compact('findProduto'));

    }
}
