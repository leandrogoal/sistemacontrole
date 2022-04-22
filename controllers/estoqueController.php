<?php
class estoqueController extends controller {

	public function index() {
		$dados = array();

		$this->loadTemplate('estoque', $dados);

	}

}