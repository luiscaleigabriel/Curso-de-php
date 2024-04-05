<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    abstract protected function sacar($v);
    abstract protected function depositar($v);

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($v) {
        $this->saldo = $v;
    }

}

class BNA extends Banco {
    public function sacar($v) {
        
        if($this->getSaldo() >= $v) {
            $saque = $this->setSaldo($this->getSaldo() - $v);
            echo 'Saque efetuado com sucesso. Sacou '.$v;
        }else {
            echo 'Saldo insuficiente para sacar. Saldo actual '.$this->getSaldo();
        }

    }

    public function depositar($v) {
        $this->setSaldo($this->getSaldo() + $v);
    }
}

class BAI extends Banco {
    public function sacar($v) {
        echo 'Sacou';
    }

    public function depositar($v) {
        echo 'Depositou';
    }
}

$bna = new BNA();
$bna->depositar(1000);
$bna->sacar(1000);
echo '<br>';
echo $bna->getSaldo();
 
