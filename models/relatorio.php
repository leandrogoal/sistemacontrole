<?php
class relatorio extends model{
    public function selecRelatoriosDias(){
        $sql ="SELECT DISTINCT data_fecha FROM pedido ";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
         $array = $sql->fetchAll();           
         }else{
         $array= "";    
         }
        
     return $array;
    }
}