<?php

/*
 * Entidade responsável por gerenciar uma coleção de produtos.
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace
 */

namespace OpenMarketplace\Marketplace;

use OpenMarketplace\Object\Collection;
use OpenMarketplace\Marketplace\Exceptions\ProductNotExistsException;

class ProductsCollection extends Collection {
    /**
     * Tipo da coleção
     * @see Collection
     */
    private $type = 'Product';
    
    /**
     * Procura um produto dentro da coleção com base em seu id e retorna-o
     * 
     * @param string $id
     * @return Product
     * @throws ProductNotExistsException
     */
    public function getProductById($id) {
        foreach ($this->elements as $Product) {
            if ($Product->getId() === $id) {
                return $Product;
            }
        }
        throw new ProductNotExistsException();
    }
    
    /**
     * Remove um produto da coleção
     * 
     * @param Product $Product
     * @return void
     * @throws ProductNotExistsException
     */
    public function remove(Product $Product) {
        foreach ($this->elements as $key => $element) {
            if ( $element->getId() == $Product->getId()) {
                unset($this->elements[$key]);
                return ;
            }
        }
        throw new ProductNotExistsException();
    }
    
    /**
     * Atualiza um produto na coleção de produtos, substituindo-o por um novo.
     * 
     * @param Product $Product
     * @return void
     */
    public function update($Product) {
        $this->remove($Product);
        $this->push($Product);
    }
}
