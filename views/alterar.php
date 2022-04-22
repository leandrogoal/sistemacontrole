<div class="pag_prot">
<center><h1>Alterar Produtos</h1></center>
<hr>

<?php 

if($aviso<>""){
    ?>
  <div class='alert alert-primary' role='alert'>
    <center><h2> Produto Alterado com Sucesso!</h2>
    <a href="<?php echo BASE_URL; ?>produto" class='btn btn-primary'>Voltar</a>
    </center>
  </div>
  <?php
  }
 ?>
<form  method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input name="nome" type="text" class="form-control" value="" placeholder="<?=$produto['nome']?>"  >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Codigo</label>
        <input name="cod" type="text" class="form-control" placeholder="<?=$produto['cod']?>" >
    </div>
    <div class="form-group">
        <label >Valor</label>
        <input name="preco" type="text" class="form-control" placeholder="R$ <?=number_format($produto['preco'],2, ',','.')?>" onKeyPress="return(MascaraMoeda(this,'.',',',event))">
    </div>
    <button type="submit" class="btn btn-info">Alterar</button>
</form>
</div>