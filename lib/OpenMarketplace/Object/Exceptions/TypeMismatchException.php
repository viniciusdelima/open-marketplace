<?php

/**
 * Classe de Exceção de tipo incompatível.
 * Esta exceção será lançada toda vez que um elemento de tipo incompatível for usado em um array, coleção, parâmetro, etc.
 * 
 * @author Vinicius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Object
 */

namespace OpenMarketplace\Object;

use OpenMarketplace\Object\OMException;

class TypeMismatchException extends OMException {
	/**
     * Construtor da classe.
     * 
     * @see OMException::__construct($message = null, $code = 0)
     */
    public function __construct($message = null, $code = 0) {
        if ( empty($message)) {
            $message = 'Produto Inexistente';
        }
        parent::__construct($message, $code);
    }
}
