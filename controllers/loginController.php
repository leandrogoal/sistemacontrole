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
				if($senha['nivel']==2){
					$_SESSION['login'] = $senha;
					header("Location: /sistemaControle/caixa");
				exit();
				}else{
					$_SESSION['login'] = $senha;
					header("Location: /sistemaControle/home");
				exit();
				}
				

			}else{
				$notification= 1;
				$dados['notification'] = $notification;
			
			}
		}
		

		$this->loadView('login', $dados);

	}public function sair(){
		session_destroy();
		header("Location: /sistemaControle/login/");
    	exit();
	}

}