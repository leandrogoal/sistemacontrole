<div class="pag_prot">
  <center>
      <a href="<?php echo BASE_URL; ?>produto/inserirProduto" class="btn btn-info">Inserir </a>
      <hr>
      
  </center>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Produto</th>
        <th scope="col">Valor</th>
        
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <?php 
    if($produtos<>""){
    foreach($produtos as $produto): ?>  
      <tr>
        <th><?=$produto['cod']?></th>
        <td><?=$produto['nome']?></td>
        <td>R$ <?=number_format($produto['preco'],2, ',','.')?></td> 
          <td>
              <a href="<?php echo BASE_URL; ?>produto/alterar?prod=<?=$produto['id']?>" class="btn btn-info">Alterar</a> 
              <a href="<?php echo BASE_URL; ?>produto?id_prod=<?=$produto['id'];?>" type="button" class="btn btn-danger">Excluir</a>
          </td>
      </tr>
      <?php endforeach;
      } 
      ?>  
      
    </tbody>
  </table>
</div>
