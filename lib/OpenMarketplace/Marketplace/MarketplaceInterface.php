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
     * Seta um token para o Marketplace
     * 
     * @param string $token
     * @return void
     */
    public function setToken($token);
    
     /**
     * Seta o token de sandbox
     * 
     * @param string $sandboxToken
     * @return void
     */
    public function setSandboxToken($sandboxToken);
    
    /**
     * Seta o Marketplace para o modo sandbox
     * 
     * @param boolean $mode
     * @return void
     */
    public function setSandboxMode($mode);
    
    /**
     * Adiciona um produto ao Marketplace.
     * 
     * @param Product $Product
     * @return void
     */
    public function addProduct($Product);
    
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
     * Atualiza um Pedido no Marketplace
     * 
     * @param Order $Order
     * @return boolean
     */
    public function updateOrder($Order);
    
    /**
     * Retorna um conjunto de Produtos
     * 
     * @return Collection Coleção de Produtos
     */
    public function getProducts();
    
    /**
     * Retorna um conjunto de Pedidos
     * 
     * @return Collection Coleção de Pedidos
     */
    public function getOrders();
}
