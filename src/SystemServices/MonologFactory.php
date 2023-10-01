<?php

namespace App\SystemServices;

// Classes importadas: Level, Logger e Handler.
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MonologFactory {

    private static $logger;

    public static function getInstance() {
        // :: : Acessa os atributos e métodos estáticos.
        // -> : Acessa atributos e métodos de instância.
        // self: Se refere a uma variável estática dentro da própria classe.
        if (self::$logger == null) {
            self::$logger = new Logger('Meu App');
            self::$logger->pushHandler(new StreamHandler('meuslogs.log', Level::Error));
            return self::$logger;
        } else {
            return self::$logger;
        }
    }

}

?>