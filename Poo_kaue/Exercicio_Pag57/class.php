<?php

class Classe {
    public static $nome = "nome da classe";
    public int $n1;
    public int $n2;

    public function Soma(){
        return $this->n1 + $this->n2;
    }

    public function GetNome(){
        return self::$nome;
    }


}

?>