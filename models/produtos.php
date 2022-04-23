<?php
class produtos extends model{
    public function produtosInserir($nome, $codigo, $preco){
         $sql = "INSERT INTO produtos (nome,cod,preco ) VALUES (:nome,:cod,:preco )";
            
           $sql = $this->db->prepare($sql);
           $sql->bindValue(':nome', $nome);
           $sql->bindValue(':cod', $codigo);
           $sql->bindValue(':preco', $preco);
           $sql->execute();

           return "aviso1";
    }

    public function selectProdutos(){
        $sql ="SELECT * FROM produtos WHERE estoque > 0 ";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
         $array = $sql->fetchAll();           
         }else{
         $array= "";    
         }
        
     return $array;
    }

    public function selectProdutosTotal(){
        $sql ="SELECT * FROM produtos  ";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
         $array = $sql->fetchAll();           
         }else{
         $array= "";    
         }
        
     return $array;
    }

    public function excluirProduto($id_prod){
        $sql = "DELETE FROM produtos WHERE id = '$id_prod'";
        $sql = $this->db->query($sql);
    }

    public function selecProduto($prod){
            $id =$prod;
            $sql = "SELECT * FROM produtos WHERE id= :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();
    
            if($sql->rowCount() > 0){
                $array = $sql->fetch();
            }
            return $array;
    }
    public function alterarProduto($id, $nome, $cod, $preco){

            $sql = "UPDATE produtos SET nome = :nome, cod = :cod, preco = :preco WHERE id= :id" ;
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':cod', $cod);
            $sql->bindValue(':preco', $preco);
            $sql->execute();

            return "aviso1";
    }
   

    
}