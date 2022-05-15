<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$this->loadTemplate('home', $dados);

	}
	public function relatoriofechamento() {
		$dados = array();

		$this->loadTemplate('relatoriofechamento', $dados);

	}


}