<?php

/*
 * Interface para a Entidade Marketplace
 * Esta interface provê para a entidade Marketplace os principais métodos e ações presentes em todos marketplaces
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace
 */

namespace OpenMarketplace\Marketplace;

interface MarketplaceInterface {
    /**
     * Conecta ao Marketplace.
     * 
     * @return boolean
     */
    public function connect();
    
    /**
     * Envia um produto ao Marketplace.
     * 
     * @param Product $Product
     * @return void
     */
    public function sendProduct($Product);
    
    /**
     * Atualiza um produto no Marketplace
     *
     * @param Product $Product
     * @return boolean
     */
    public function updateProduct($Product);
    
    /**
     * Atualiza estoque no Marketplace
     * 
     * @param Product $Product
     * @return boolean
     */
    public function updateStock($Product);
    
    /**
     * Envia um pedido ao Marketplace
     * 
     * @param Order $Order
     * @return void
     */
    public function sendOrder($Order);
    
    /**
     * Atualiza um Pedido no Marketplace
     * 
     * @param Order $Order
     * @return boolean
     */
    public function updateOrder($Order);
    
    /**
     * Retorna um conjunto de Produtos
     * Se offset for igual a 0, então o método retornará todos os produtos
     * 
     * @param int $offset
     * @return Collection Coleção de Produtos
     */
    public function getProducts($offset = 0);
    
    /**
     * Retorna um conjunto de Pedidos
     * Se offset for igual a 0, então o método retornará todos os pedidos
     * 
     * @param int $offset
     * @return Collection Coleção de Pedidos
     */
    public function getOrders($offset = 0);
}
