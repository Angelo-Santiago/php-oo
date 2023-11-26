<?php

class Pessoa {
    public $nome;
    public $idade;
    public $peso;

    public function Falar(){
        echo $this->nome. " de " .$this->idade. " anos, acabou de falar <br>";
    }

    public function Somar(){
        $n1 = 10;
        $n2 = 5;
        $somar = $n1 + $n2;
        echo $this->nome. " acabou de somar esses numeros: $n1. + $n2 \n e teve esse resultado : " .$somar. "<br>";
    }

    public function VerificarIdade(){
    if( $this->idade < 18){
        echo $this->nome. " é menor de idade".'<br>';
    }else{
        echo "É maior de idade". '<br>';
    }

}
};

$leticia = new Pessoa();
$leticia->nome = "Leticia Yohranna";
$leticia->idade = 17;
$leticia->peso = 55;
$leticia->falar();
$leticia->Somar();
$leticia->VerificarIdade();

$angelo = new Pessoa();
$angelo->nome = "Ângelo Santiago";
$angelo->idade = 19;
$angelo->peso = 85;
$angelo->falar();
$angelo->Somar();
$angelo->VerificarIdade();


