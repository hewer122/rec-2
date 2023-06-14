<?php

class Banco{
    private $url;
    private $usuario;
    private $senha;
    private $banco;
    private $con;
   function __construct(){
        $this->url="localhost";
        $this->usuario="root";
        $this->senha="";
        $this->banco="rec";
        $this->con=new mysqli($this->url,$this->usuario,$this->senha,$this->banco);
    }
    public function executar($sql)
    {
        $resp=$this->con->query($sql);
        if(!$resp){
            return false;
        }else {
            return true;
        }
    }
    public function consultar($sql)
    {
        $consulta=$this->con->query($sql);
        if ($consulta->num_rows>0) {
            return $consulta;
        }else {
            return false;
        }
    }
}
?>