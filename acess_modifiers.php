<?php
/* 
    MODIFICADORES DE ACESSO

public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com "public" serão acessíveis
por todos que quiserem acessá-los

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos
como se fossem públicos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja visível só e somente só
pela classe que a declarou

*/

class Veiculo {
    private $modelo;
    protected $roda;
    public $cor;

    public function Andar() {
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($n){
        $this->modelo = $n;
    }

    // function EnviarDados(){
    //     echo $this->modelo;
    //     echo "<br>", $this->roda;
    // }
}


class Carro extends Veiculo {

    public function ligarLimpador(){
        echo "Limpando em 3, 2, 1...";
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($n){
        $this->modelo = $n;
    }

    
}

class Moto extends Veiculo{

    public $tripe;

    function Empinar () {
        echo "<br> A moto foi empinada";
    }

    public function getRoda(){
        return $this->roda;
    }
    public function setRoda($r){
        $this->roda = $r;
    }
}

$veiculo = new Veiculo();
$veiculo->setModelo("Ferrari");
echo $veiculo->getModelo();

echo "<br>"; var_dump($veiculo); echo "<br>";

$carro = new Carro();
$carro->setModelo("<br> Fiat");
echo $carro->getModelo();

echo "<br>"; var_dump($carro); echo "<br>";

$moto = new Moto();
$moto->setRoda("Aro 28");
echo $moto->getRoda();

echo "<br>"; var_dump($moto);
