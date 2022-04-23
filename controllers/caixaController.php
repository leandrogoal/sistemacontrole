<?php
class caixaController extends controller {

	public function index() {
		$produtos = new produtos();
		$pedido = new pedido();
		$estoque = new estoque();
		$dados = array();


		
		$selectPedidoUltimo= $pedido->selectPedidoUltimo();
		$dados['ultimoPedido'] = $selectPedidoUltimo;
		if(isset($selectPedidoUltimo['id'])){
			$ped = $selectPedidoUltimo['id'];
		}
		
	
		$selectProdutos=$produtos->selectProdutos();
		$dados['produtos'] = $selectProdutos;
		
		
		if(isset($selectPedidoUltimo['id'])){
			if(isset($_POST['prod'])){
				$ped = $selectPedidoUltimo['id'];
				$prod = $_POST['prod'];
				$valor = $_POST['valor'];
				$quant= $_POST['quant'];
				$total = $quant * $valor;
				
				$inserirItens= $pedido->inserirItens($ped, $prod, $valor, $quant, $total);
			}

		}else{

			$inserirPedidos= $pedido->inserirPedido();
			header('Location: caixa');

		}	
			
		if(isset($ped)){
			$selectPedidos=$pedido->selectPedidos($ped);
			$dados['pedidos'] = $selectPedidos;
		}
		
		
		if(isset($_GET['item_ped'])){
			$item_ped = $_GET['item_ped'];
			$excluirPedido= $pedido->excluirItemPedido($item_ped);
			header("Location: caixa ");

		}
		if(isset($ped)){
			$somaPedido=$pedido->somaPedido($ped);
			$dados['total'] = $somaPedido;
		}
		
		
		if(isset($_POST['forma_pag'])){
			$id= $ped;
			$total = $somaPedido;
			$forma_pag = $_POST['forma_pag'];
			$pagamento = $_POST['pagamento'];

			$selectPedidos=$pedido->selectPedidos($ped);
			$baixaEstoque = $estoque->baixaEstoque($selectPedidos);
			
			$alterarPedido=$pedido->alterarPedido($id,$total,$forma_pag,$pagamento);
			
			header('Location: caixa/fechado?ped='.$ped);
			exit();
		}

		
		$this->loadView('caixa', $dados);

	}
	public function fechado(){
		$pedido = new pedido();
		$dados = array();
		$ped = $_GET['ped'];
		$selectPedidos=$pedido->selectPedidos($ped);
		$dados['pedidos'] = $selectPedidos;

		$somaPedido=$pedido->somaPedido($ped);
		$dados['total'] = $somaPedido;

		$this->loadView('fechado', $dados);
	}

}