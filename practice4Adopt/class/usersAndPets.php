<?php
class usersAndPets{
    //Indicamos el tipo de dato
    public $sql;
    public function __construct(){
        //clase sql
        //Es la conexión a la base de datos
        $this->sql=new sql();
    }

    public function adoption($id_user,$id_pet,$pets_number){
        $sqlUser = "update users set pets_number='".$pets_number."' where id_user ='".$id_user."'";
        $this->result= $this->sql->ejecutar($sqlUser);
       //echo $sqlUser;
        $sqlPet = "update pets set id_user_adopt ='".$id_user."',status = 0 where id_pet ='".$id_pet."'";
        $this->result= $this->sql->ejecutar($sqlPet);
        //echo $sqlPet;
    }

}
?>