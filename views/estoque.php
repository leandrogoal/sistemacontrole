<div class="pag_prot">
    <center><h1>Estoques</h1></center>

    <hr>
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Produto</th>
                <th scope="col">Valor</th>
                <th scope="col">Estoque</th>
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
                <td><?=$produto['estoque']?></td>
                <td>

                    <form class='flex'  method = 'POST'>
                        <input type="hidden" name="estoque" value='<?=$produto['estoque']?>'>
                        <input type="hidden" name="produto" value='<?=$produto['id']?>'>
                        <input name ='estoque_mais' type="number"> 
                        <input type="submit" class="btn btn-info btestoque">
                    </form>
                    
                </td>
            </tr>
            <?php endforeach;
            } 
            ?>  
            
            </tbody>
        </table>
    </div>
</div>