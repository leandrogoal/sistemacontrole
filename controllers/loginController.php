<?php
class loginController extends controller {

	public function index() {
		$dados = array();
		$login = new login();
		if(isset($_POST['usuario'])){
			$usuario = $_POST['usuario'];
			$senha =md5($_POST['senha']);

			$senha = $login->usuario($usuario ,$senha);
			$dados['senha'] = $senha;
			if($senha > 0){
				$_SESSION['login'] = $senha;
				header("Location: home");
				exit();

			}else{
				$notification= 1;
				$dados['notification'] = $notification;
			
			}
		}
		

		$this->loadView('login', $dados);

	}public function sair(){
		session_destroy();
		header("Location: /modelos/login");
	}

}