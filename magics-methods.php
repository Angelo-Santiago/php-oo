<?php

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);

    }
    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $this->email = $e;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }


    public function Logar() {
        if($this->email == 'angelo@gmail.com' and $this->senha == '123') {
            echo "Logado com sucesso ";
            var_dump($this->email);
            
        }else if($this->senha != "123"){
            echo "senha inválida";
            var_dump($this->senha, $this->email);
        }else{
            echo "email ou senha inválido";
        }
    }
}

$logar = new Login('angelo@gmail.com', '123', "Angelo");
$logar->Logar();
echo "<br>";
echo $logar->getNome();