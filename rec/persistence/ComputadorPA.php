<?php

require_once 'Banco.php';

class ComputadorPA{
    private $con;
    function __construct(){
        $this->con=new Banco();
    }
    public function cadastrar($computador)
    {
        $sql="insert into computador values(".
            $computador->getCod_cmp().",".
            $computador->getLaboratorio().",".
            $computador->getMemoria().",".
            $computador->getHd().",".
            $computador->getProcessador().",'".
            $computador->getCompra()."',".
            $computador->getPreco().")";
            $resp=$this->con->executar($sql);
            if (!$resp) {
                return false;
            }else {
                return true;
            }
    }
        public function retornaUltimo()
        {
            $sql="select max(cod_cmp) from computador";
            $consulta=$this->con->consultar($sql);
            if (!$consulta) {
                return false;
            }else {
                while ($linha=$consulta->fetch_assoc()) {
                    $cod_cmp=$linha['max(cod_cmp)'];
                }
                return $cod_cmp;
            }
        }
        public function listar()
        {
        $sql="select * from computador";
        $consulta=$this->con->consultar($sql);
        if (!$consulta) {
            return false;
        }else {
            return $consulta;
        }
    }
}

?>