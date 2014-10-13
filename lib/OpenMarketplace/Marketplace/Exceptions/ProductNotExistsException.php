<?php

/*
 * Excessão padrão lançada quando o produto referido não existir no Marketplace
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace.Exceptions
 */

namespace OpenMarketplace\Marketplace\Exceptions;

use OpenMarketplace\Object\OMException;

class ProductNotExistsException extends OMException {
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
