<?php

/*
 * Interface para a Entidade Marketplace
 * Esta interface provê para a entidade Marketplace os principais métodos e ações presentes em todos marketplaces
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace
 */

namespace OpenMarketplace\Marketplace;
use OpenMarketplace\Marketplace\ExternalItem\ExternalItem as ExternalItem;

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
      * Retorna se o Marketplace está sendo usado em modo sandbox.
      * 
      * @return boolean
      */
    public function isSandbox();
    
    /**
     * Seta o Marketplace para o modo sandbox
     * 
     * @param boolean $mode
     * @return void
     */
    public function setSandboxMode($mode);
    
    /**
     * Adiciona um item ao Marketplace.
     * 
     * @param ExternalItem $ExternalItem
     * @return void
     */
    public function addExternalItem(ExternalItem $ExternalItem);
    
    /**
     * Retorna um conjunto de itens
     * 
     * @return Collection Coleção de ExternalItems
     */
    public function getExternalItems();
}
