<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$this->loadTemplate('home', $dados);

	}
	public function relatoriofechamento() {
		$dados = array();
		$relatorio = new relatorio();

		$selecRelatoriosDias= $relatorio->selecRelatoriosDias();
		$dados['datas'] = $selecRelatoriosDias;
		

		$this->loadTemplate('relatoriofechamento', $dados);

	}


}