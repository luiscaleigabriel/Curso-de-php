<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract protected function sacar();
    abstract protected function depositar();

}

class BNA extends Banco {
    public function sacar() {
        echo 'Sacou';
    }

    public function depositar() {
        echo 'Depositou';
    }
}

class BAI extends Banco {
    public function sacar() {
        echo 'Sacou';
    }

    public function depositar() {
        echo 'Depositou';
    }
}

$bna = new BNA();
$bna->sacar();
 
