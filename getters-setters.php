<?php

class Login {
    private $email;
    private $senha;
    private $senhaConfirm;

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
    public function getSenhaConfirm() {
        return $this->senhaConfirm;
    }

    public function setSenhaConfirm($sc) {
        $this->senhaConfirm = $sc;
    }
    
    public function Logar() {
        if($this->email == 'angelo@gmail.com' and $this->senha == '123' and $this->senhaConfirm == $this->senha) {
            echo "Logado com sucesso";
        }else{
            echo "Email ou senha inválidos";
        }
    }
}

$logar = new Login();
$logar->setEmail("angelo@gmail.com");
$logar->setSenha("123");
$logar->setSenhaConfirm("123");
$logar->Logar();
//Os valores abaixo funcionam apenas com as variaveis da classe definidas como "public"

//$logar->email = "angelo@gmail.com";
//$logar->senha = '123';
//$logar->senhaConfirm = '123';
//$logar->logar();