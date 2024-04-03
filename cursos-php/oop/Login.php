<?php

//Getters and Setters

class Login {
    private $email;
    private $senha;

    public function __construct($email, $senha)
    {
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function logar() {
        if($this->email == 'luis@gmail.com' && $this->senha == '1234') {
            echo 'Logado com sucesso';
        }else {
            echo 'Dados inválidos';
        }
    }

    public function setEmail($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }
}

$logar = new Login('luis()@gmail.com', '1234');

$logar->logar();

echo '<hr>';
echo $logar->getEmail();