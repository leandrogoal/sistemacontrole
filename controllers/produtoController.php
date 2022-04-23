<?php
class produtoController extends controller {

	public function index() {
		$produtos = new produtos();
		$dados = array();
		
		$selectProdutos= $produtos->selectProdutosTotal();
		$dados['produtos'] = $selectProdutos;

		if(isset($_GET['id_prod'])){
			$id_prod = $_GET['id_prod'];
			$excluirProduto= $produtos->excluirProduto($id_prod);
			header("Location: produto ");

		}
		$this->loadTemplate('produto', $dados);
	}
	public function inserirProduto() {
		$produtos = new produtos();

		$dados = array();
		$dados['aviso'] = "";
		if(isset($_POST['nome'])){
			$nome =  $_POST['nome'];
			$codigo =  $_POST['codigo'];
			$preco = str_replace(',','.',str_replace('.','',$_POST['preco']));
			echo $preco; 
			$inserirProdutos= $produtos->produtosInserir($nome, $codigo, $preco);
			
			$dados['aviso'] = $inserirProdutos;
					
		}
		
		$this->loadTemplate('inserirProduto', $dados);

	}
	public function alterar(){
		$produtos = new produtos();
		$dados = array();
		$dados['aviso'] = "";

		if(isset($_GET['prod'])){
			$prod =  $_GET['prod'];
			
			$produto= $produtos->selecProduto($prod);
			
			$dados['produto'] = $produto;		
		}
		

		if(isset($_POST['nome']) || isset($_POST['cod'])  || isset($_POST['preco']) ){
			$nome = ($_POST['nome'])? $_POST['nome'] : $produto['nome'];
			$cod = ($_POST['cod'])? $_POST['cod'] : $produto['cod'];
			$preco = ($_POST['preco'])? str_replace(',','.',str_replace('.','',$_POST['preco'])) : $produto['preco'];

			$alterarProduto= $produtos->alterarProduto($prod, $nome, $cod, $preco);

			$produto= $produtos->selecProduto($prod);
			$dados['aviso'] = $alterarProduto;
			$dados['produto'] = $produto;	

		}

	$this->loadTemplate('alterar', $dados);
	}	

}