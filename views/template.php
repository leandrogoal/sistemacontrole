<?php

if(!isset($_SESSION['login'])){
    header("Location: login");
    exit();
}
 
?>
<html>

<head>
    <title>Sistema Controle de Vendas</title>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/all.css" integrity="sha384-eLT4eRYPHTmTsFGFAzjcCWX+wHfUInVWNm9YnwpiatljsZOwXtwV2Hh6sHM6zZD9" crossorigin="anonymous"/>
</head>

<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a href="<?php echo BASE_URL; ?>" class="navbar-brand navbar-logo" href="#">Controle de Sistema</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>"><i class="far fa-chart-bar"></i>Relatórios</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>produto/index"><i class="far fa-chart-bar"></i>Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>estoque"><i class="far fa-chart-bar"></i>Estoque</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-copy"></i>Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-btn btn-info" href="login/sair">Sair</a>
                </li>
            </ul>
        </div>
    
    </nav>
	<body>
				
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>