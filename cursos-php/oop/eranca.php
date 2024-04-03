<?php

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo '<br> Adando...';
    }

    public function parar() {
        echo '<br> Parrou';
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
$carro->cor = 'Azul';
$carro->ano = '2020';
$carro->ligarlimpador();

$moto = new Moto();
$moto->cor = 'Verde';
$moto->ano = '2000';
$moto->darRoda();