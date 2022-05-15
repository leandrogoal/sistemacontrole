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
<div class="corpoCaixa container-fluid ">
  <div class="caixa">
    <center><h2>Caixa</h2></center>
    <hr>
   
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Produto</th>
          <th scope="col">Valor Unidade</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Valor Total </th>
          <th></th>
        </thead>
      <tbody>
        <form method="post">
          <tr >
            <td >
              <select required name="prod" class="formCaixa form-control">
                <option></option>
                <?php foreach($produtos as $produto): ?>
                <option value="<?=$produto['id']?>"><?php echo $produto['nome']."/ R$".number_format($produto['preco'], 2, ',','.') ;?></option>
                <?php endforeach; ?>
              </select> 
            </td>
            
            <td class="flex"> R$ <input required min="0" step="0.01" name="valor" type="number" class="form-control field" /></td>
            <td><input required min="1" name="quant" type="number" class="form-control field" /></td>
            <td class="flex">
              Total: <span class="total" id="total"></span>
            </td>
            <td>
              <input type="submit" class="btn btn-info" value="Inserir">
            </td>
          </tr>
        </form>  
      </tbody>
      </table>

    
    <?php if(isset($ultimoPedido['id'])){?>

    <div >
      <form method='post' class="resumoPed">
        <div><div>Pedido </div> <?=$ultimoPedido['id'];?></div>  
        <div> <div>TOTAL : </div>  R$ <?=number_format($total, 2, ',','.');?></div>
        <div>
          <div>Tipo de Pgto</div>
          <select name="forma_pag" >
            <option value=""></option>
            <option value="1">Dinheiro</option>
            <option value="2">Cartão</option>
          </select>
        </div>
        
        <input name="total" type="hidden" value="<?=number_format($total,2);?>" id="n1">
        <div>
          <div>Valor Pago</div>
          <div  class="flex"> <input  min="0" step="0.01" onBlur="calcular()" type="number" name="pagamento" id="n2"  ></div>
        </div>
        
        <div>
          <div>Troco</div>
          <div class="resultado" id="resultado"></div>
        </div>
       
        <div><input type="submit" class="btn btn-info" value="Fechar Pedido"></div>
        
      </form> 
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Produto</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Valor Unid</th>
          <th scope="col">Total</th>
          <th></th>
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
          <td><a href="<?php echo BASE_URL?>caixa?item_ped=<?=$pedido['id']; ?>" class="btn btn-danger">X</a></td>
        </tr>
        <?php endforeach; 
        }; ?> 
      </tbody>
    </table>
    <?php  
    } ?>
  </div>
  <div class='btsaircaixa'>
      <center><a class="btn btn-danger" href="login/sair">Sair</a></center>
  </div>
  
</div>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>