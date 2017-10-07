<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

	public function lista()
	{
		$produtos = DB::select('select * from produtos');

		if (view()->exists('listagem'))
		{
			return view('listagem')->withProdutos($produtos);
		}
	}

	public function mostra($id)
	{
		// $id = Request::route('id');
		$produto = DB::select('select * from produtos where id = ?', [$id]);
		if (empty($produto))
		{
			return "Esse produto não existe";
		}
		return view('mostra')->withProduto($produto[0]);
	}
}