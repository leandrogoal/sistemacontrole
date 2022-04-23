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



<div class="corpoCaixa container-fluid ">
  <div class="caixa">
    <div class='fechamento_dados_empresa'>
      Dados da Empresa
    </div>
      
  
    <hr>
    <div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Produto</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor Unid</th>
            <th scope="col">Total</th>
            
          </tr>
        </thead>
        <tbody>

        <?php if($pedidos<>""){
        foreach( $pedidos as $pedido): ?>
          <tr>      
            <th><?=$pedido['nome_prod']; ?> </th>
            <td><?=$pedido['quant']; ?></td>
            <td><?=number_format($pedido['valor'], 2, ',','.'); ?></td>
            <td><?=number_format($pedido['total'], 2, ',','.'); ?></td>
            
          </tr>
          <?php endforeach; 
          }; ?> 
        </tbody>
      </table>
          <div class='total_fecha'>Total : R$ <?=number_format($total, 2, ',','.'); ?></div>
    </div>
    <hr>
    <div class='fecha_bot'>
      <a href="#" type="button" class="btn btn-info">Imprimir </a>
      <a href="<?php echo BASE_URL; ?>caixa" type="button" class="btn btn-info">Novo Pedido </a>
    </div>
    <hr>
    <div>
    
    </div>
  </div>
</div>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>
