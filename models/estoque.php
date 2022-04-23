<?php
class estoque extends model{
    public function inserirEstoque($id_prod, $quantidade, $estoque){
        $dt = date('Y-m-d');
        $estoque = $estoque + $quantidade;
        

        $sql = "INSERT INTO inserir_estoque (id_prod, quantidade, dt) VALUES (:id_prod, :quantidade, :dt )"; 
           $sql = $this->db->prepare($sql);
           $sql->bindValue(':id_prod', $id_prod);
           $sql->bindValue(':quantidade', $quantidade);
           $sql->bindValue(':dt', $dt);
           $sql->execute();


        $sql = "UPDATE produtos SET estoque = :estoque WHERE id= :id" ;
           $sql = $this->db->prepare($sql);
           $sql->bindValue(':id', $id_prod);
           $sql->bindValue(':estoque', $estoque);
           $sql->execute();

    
    }

    public function baixaEstoque($selectPedidos){
        foreach($selectPedidos as $pedidos){
            $estoque = $pedidos['estoque_produto'] - $pedidos['quant'];
            $id_prod = $pedidos['produto'];

        $sql = "UPDATE produtos SET estoque = :estoque WHERE id= :id" ;
           $sql = $this->db->prepare($sql);
           $sql->bindValue(':id', $id_prod);
           $sql->bindValue(':estoque', $estoque);
           $sql->execute();

        }
    }

}