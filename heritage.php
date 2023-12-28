<?php

/* 
 Herança é um recurso que permite que classes compartilhem atributos e métodos afim de reaproveitar 
 códigos ou comportamentos generalizados

*/

class Veiculo{
    public $modelo;
    public $rodas;
}

class Carro extends Veiculo{
    
    public $volante;

    function Andar(){
        echo "O carro andou";
    }

}

class Moto extends Veiculo{

    public $tripe;

    function Empinar () {
        echo "<br> A moto foi empinada";
    }
}

$fiat_Uno = new Carro;
$fiat_Uno->modelo = "Cevrolet";
$fiat_Uno->rodas = "Aro 28";
$fiat_Uno->Andar();
echo "<br>";
var_dump($fiat_Uno);

$Titan_150 = new Moto;
$Titan_150->modelo = 'Honda';
$Titan_150->tripe = 'pequeno';
$Titan_150->Empinar();
echo "<br>";
var_dump($Titan_150);

