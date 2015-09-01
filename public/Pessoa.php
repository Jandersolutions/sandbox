<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $peso;

    public function __construct($nome,$idade,$peso)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;

    }
    public function correr($km)
    {
        echo $this->nome." esta correndo";
        for($i = 0; $km > $i; $i++){
            echo ".";
        }
        echo $this->nome." terminou de correr";
    }
    public function imc($alt){
        $total =  $this->peso / ( $alt * 2 );
        echo $total;
    }
}