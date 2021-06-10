<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdutoRequest extends Request {

	
	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'nome' => 'required',
			'quantidade' => 'required|numeric',
			'valor' => 'required|numeric',
			'datacompra' => 'required',
			'tamanho' => 'required|max:100'
		];
	}

	public function messages(){
		return [
			'nome.required' => 'O nome do produto é obrigatório!',
			'quantidade.required' => 'A quantidade do produto é obrigatória!',
			'valor.required' => 'O valor do produto é obrigatório!',
			'datacompra.required' => 'A data da compra é obrigadotória!',
			'tamanho.required' => 'O tamanho do produtos é obrigatório!'

		];
	}

}
