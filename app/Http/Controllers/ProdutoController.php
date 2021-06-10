<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

	public function __construct(){
		$this->middleware('autorizador');
	}

	public function listarProdutos(){
		$produtos = Produto::all();
		return view('ListagemProduto')->with('produtos', $produtos);
	}

	public function detalheProduto($id){
		$produto= Produto::find($id);
		return view('DetalheProduto')->with('p', $produto);
	}

	public function novoProduto(){
		return view('FormularioProduto');
	}

	public function adicionarProduto(ProdutoRequest $request){
		Produto::create($request->all());
		return redirect('/produtos')->withInput();
	}

	public function removerProduto($id){
		$produto= Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@listarProdutos');

	}
}
