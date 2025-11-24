<?php

class Produto {

    private $nome;
    private $precoCusto;
    private $precoVenda;
    private $margemLucro;

    // stters
    public function SetNome($nome){
        $this->nome = $nome;
    }
    public function SetPrecoCusto($precoCusto){
        $this->precoCusto = $precoCusto;
    }    
    public function SetPrecoVenda($precoVenda){
        if ($this->precoCusto < $precoVenda) {
            $this->precoVenda = $precoVenda;
        } else {
            echo"nao pode sser menor que o preço de compra";
        }
        
    }   
    public function SetMargemLucro($margemLucro){
        $this->margemLucro = $margemLucro;
    }

    // getters
    public function GetNome(){
        return $this->nome;
    }    
    public function GetPrecoCusto(){
        return $this->precoCusto;
    }    
    public function GetPrecoVenda(){
        return $this->precoVenda ;
    }   
    public function GetMargemLucro(){
        return $this->margemLucro ;
    }
    public function GetMargemLucroPorcentagem(){
        return $this->GetPrecoCusto() / $this->GetPrecoVenda() * 100 ;
    }

    public function  __construct($nome, $precoCusto, $precoVenda, ){
        $this->SetNome($nome);
        $this->SetPrecoCusto($precoCusto);
        $this->SetPrecoVenda($precoVenda);
    }

    public function calcularMargemLucro(){
        $this->SetMargemLucro($this->precoVenda - $this->precoCusto);
    }

}

?>