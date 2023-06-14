<?php

class Computador{
    private $cod_cmp;
    private $laboratorio;
    private $memoria;
    private $hd;
    private $processador;
    private $compra;
    private $preco;
    public function setCod_cmp($cod_cmp)
    {
        $this->cod_cmp=$cod_cmp;
    }
    public function getCod_cmp()
    {
        return $this->cod_cmp;
    }
    public function setLaboratorio($laboratorio)
    {
        $this->laboratorio=$laboratorio;
    }
    public function getLaboratorio()
    {
        return $this->laboratorio;
    }
    public function setMemoria($memoria)
    {
        $this->memoria=$memoria;
    }
    public function getMemoria()
    {
        return $this->memoria;
    }
    public function setHd($hd)
    {
        $this->hd=$hd;
    }
    public function getHd()
    {
        return $this->hd;
    }
    public function setProcessador($processador)
    {
        $this->processador=$processador;
    }
    public function getProcessador()
    {
        return $this->processador;
    }
    public function setCompra($compra)
    {
        $this->compra=$compra;
    }
    public function getCompra()
    {
        return $this->compra;
    }
    public function setPreco($preco)
    {
        $this->preco=$preco;
    }
    public function getPreco()
    {
        return $this->preco;
    }
}
?>