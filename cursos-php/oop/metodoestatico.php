<?php

// class Pessoa {
//     const NOME = 'Luís';

//     public function exibirNome() {
//         echo self::NOME;
//     }
// }

// class Gabriel extends Pessoa {
//     const NOME = 'Gabriel';

//     public function exibirNome() {
//         echo self::NOME;
//     }
// }

// $gabriel = new Gabriel();
// $gabriel->exibirNome();    

class Login {
    public static $user;

    public static function verificaLogin() {
        echo 'O usuário '. self::$user .' está Logado';
    }

    public function sairSistema() {
        echo 'O usuário deslogou';
    }
}

Login::$user = 'admin';
Login::verificaLogin();