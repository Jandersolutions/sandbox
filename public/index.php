<?php
include("header.php");
require_once "Pessoa.php";
$pessoa1 = new Pessoa("Janderson",35,85);
$pessoa2 = new Pessoa("Maria", 30,70);
echo $pessoa1->correr(50);
echo "<br/>";
echo "O imc de: " . $pessoa1->nome . " e " . $pessoa1->imc(185);

include("footer.php");
