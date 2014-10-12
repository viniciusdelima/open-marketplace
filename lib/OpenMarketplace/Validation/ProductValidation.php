<?php

/*
 * Entidade encarregada de realizar as validações internas do produto antes dele ser adicionado ao Marketplace
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Validation
 */

namespace OpenMarketplace\Validation;

use OpenMarketplace\Marketplace\Product;

class ProductValidation {
    /**
     * Verifica se o produto é válido e pode ser adicionado ao Marketplace
     * 
     * @param Product $Product
     * @return boolean
     */
    public static function validates(Product $Product) {
        
    }
}
