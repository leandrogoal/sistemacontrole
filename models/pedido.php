<?php
class pedido extends model{
    function selectPedidoUltimo(){ 
        $sql ="SELECT * FROM pedido WHERE id =(select max(id) from pedido)";
           $sql = $this->db->query($sql);
           
           if($sql->rowCount() > 0){
            $array = $sql->fetch();           
            }
           
             return $array;
       }
    
       function inserirItens($pedido, $prod, $valor, $quant, $total){
        $sql = "INSERT INTO item_pedido (pedido , produto, valor, quant, total )
        VALUES (:pedido, :prod,:valor, :quant, :total)";
        
       $sql = $this->db->prepare($sql);
       $sql->bindValue(':pedido', $pedido);
       $sql->bindValue(':prod', $prod);
       $sql->bindValue(':valor', $valor);
       $sql->bindValue(':quant', $quant);
       $sql->bindValue(':total', $total);
       $sql->execute();
       }

       Public function selectPedidos($ped){
        $array="";
        $sql = "SELECT * ,         
        (select produtos.nome from produtos where produtos.id = item_pedido.produto ) as nome_prod
        FROM item_pedido WHERE pedido= :pedido ORDER BY id DESC";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':pedido', $ped);
        $sql->execute();
        
        if($sql->rowCount() > 0){
         $array = $sql->fetchALL();           
         }
            
        return $array;
    }
    public function excluirItemPedido($id_prod){
        $sql = "DELETE FROM item_pedido WHERE id = '$id_prod'";
        $sql = $this->db->query($sql);
    }

    public function somaPedido($ped){
        $sql = "SELECT SUM(total) as total FROM item_pedido WHERE pedido = '$ped'"; 
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':pedido',$ped);
        $sql->execute();
        $row = $sql->fetch(); 
        $array = $row['total'];
      
        return $array;
    }

    public function alterarPedido($id,$total,$forma_pag,$pagamento){
        
        $sql = "UPDATE rifa SET nome_sort = :nome, email = :email, telefone = :telefone, confirma = :confirma  WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':confirma', $confirma);
		$sql->bindValue(':id', $id);
		$sql->execute();

    }

}


