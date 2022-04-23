<?php
class estoqueController extends controller {

	public function index() {
		$produtos = new produtos();
		$estoque = new estoque();
		$dados = array();

		if(isset($_POST['estoque_mais'])){
			$id_prod = $_POST['produto'];
			$quantidade = $_POST['estoque_mais'];
			$estoque1 = $_POST['estoque'];
			$inserirEstoque= $estoque->inserirEstoque($id_prod, $quantidade, $estoque1);
		}

		$selectProdutos= $produtos->selectProdutosTotal();
		$dados['produtos'] = $selectProdutos;

		

		$this->loadTemplate('estoque', $dados);
	}

}