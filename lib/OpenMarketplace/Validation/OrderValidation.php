<?php

/*
 * Entidade encarregada de realizar as validações internas dos pedidos antes deles serem adicionados ao Marketplace
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Validation
 */

namespace OpenMarketplace\Validation;

use OpenMarketplace\Marketplace\Order;

class OrderValidation {
    /**
     * Verifica se o pedido é válido e pode ser adicionado ao Marketplace
     * 
     * @param Order $Order
     * @return boolean
     */
    public static function validate(Order $Order) {
        
    }
}
