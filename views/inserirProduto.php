<div class="pag_prot">
<center><h1>Inserir Produtos</h1></center>
<hr>
<?php 
if($aviso<>""){
    ?>
  <div class='alert alert-primary' role='alert'>
    <center><h2> Produto cadastrado com Sucesso!</h2>
    <a href="<?php echo BASE_URL; ?>produto" class='btn btn-primary'>Voltar</a>
    </center>
  </div>
  <?php
  }
 ?>
<form  method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input name="nome" type="text" class="form-control"  >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Codigo</label>
        <input name="codigo" type="text" class="form-control"  >
    </div>
    <div class="form-group">
        <label >Valor</label>
        <input type="text" name="preco" class="form-control"   onKeyPress="return(MascaraMoeda(this,'.',',',event))"> 
        
    </div>
    <button type="submit" class="btn btn-info">Inserir</button>
</form>

</div>
