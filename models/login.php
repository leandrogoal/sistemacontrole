<?php
class login extends model{
    public function usuario($usuario ,$senha){
        $array="";
        $sql ="SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha"; 
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':usuario', $usuario);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
            
        }
        return $array;

        
    }
}