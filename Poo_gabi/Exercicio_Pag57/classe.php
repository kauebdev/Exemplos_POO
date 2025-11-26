<?php

class Classe {
    public static $nome = "nome";
    public int $n1;
    public int $n2;

    public function Somar(){
        return $this->n1 + $this->n2;
    }

    public function Get_nome(){
        return self::$nome;
    }


}

?>