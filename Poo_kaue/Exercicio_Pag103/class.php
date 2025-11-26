<?php

class Conta
{
    private  $valor;
    private $tempo;

    public function __construct($valor, $tempo){
        $this->SetTempo($tempo);
        $this->SetValor($valor);
    }

    // setters
    public function SetValor($valor)
    {
        $this->valor = $valor;
    }
    public function SetTempo($tempo)
    {
        $this->tempo = $tempo;
    }

    // getters
    public function GetValor()
    {
        return $this->valor;
    }
    public function GetTempo()
    {
        return $this->tempo;
    }

    public function Deposito($valor, $tempo)
    {
        $this->SetValor($valor);
        $this->SetTempo($tempo);
    }

    public function Calcular()
    {
        return 0;
    }

}

class ContaPoupanca extends Conta
{
    public function Calcular()
    {
        return $this->GetValor() * (1 + 0.007) ** $this->GetTempo();
    }
}

class ContaFundos extends Conta
{   
    public function Calcular()
    {
        return $this->GetValor() * (1 + 0.0075) ** $this->GetTempo();
    }
}

?>