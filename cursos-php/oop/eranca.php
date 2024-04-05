<?php

class Veiculo {
    private $modelo;
    private $cor;
    private $ano;

    public function andar() {
        echo '<br> Adando...';
    }

    public function parar() {
        echo '<br> Parrou';
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo(string $modelo) {
        return $this->modelo = $modelo;
    }
}

class Carro extends Veiculo {
    
    public function ligarlimpador() {
        echo "<br> Limpando em 3 2 1 ...";
    }

}

class Moto extends Veiculo {
    
    public function darRoda() {
        echo "<br> Rodando em 3 2 1 ...";
    }

}

$carro = new Carro();
$carro->setModelo('Tp');
$carro->ligarlimpador();

$moto = new Moto();
$moto->setModelo('mm');
$moto->darRoda();