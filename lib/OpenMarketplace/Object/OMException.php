<?php

/*
 * Classe base para Exceptions
 * Este tipo de exceção será lançado sempre que ocorrer uma exeção genérica no sistema
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Object
 */

namespace OpenMarketplace\Object;
    
class OMException extends \Exception {
    /**
     * Construtor da classe pai.
     * 
     * @see http://php.net/manual/pt_BR/class.exception.php
     */
    public function __construct($message = null, $code = 0) {
        parent::__construct($message, $code);
    }
}
