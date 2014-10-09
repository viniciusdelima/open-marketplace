<?php

/*
 * Interface para a Entidade Product
 * Esta interface irá fornecer os métodos necessários a qualquer Product dentro do Marketplace
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace
 */

namespace OpenMarketplace\Marketplace;
    
interface ProductInterface {
    /**
     * Seta os dados do produto.
     * 
     * @param array data
     * @return void
     */
    public function setData($data);
}
