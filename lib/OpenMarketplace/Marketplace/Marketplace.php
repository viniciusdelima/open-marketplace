<?php

/*
 * Descrição
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace
 */

namespace OpenMarketplace\Marketplace;
use OpenMarketplace\Marketplace\ExternalItem\ExternalItemsCollection as ExternalItemsCollection;
use OpenMarketplace\Marketplace\ExternalItem\ExternalItem as ExternalItem;

class Marketplace implements MarketplaceInterface {
    /**
     * Token usado na conexão com o Marketplace
     * @name token
     * @access private
     * @var string
     */
    private $token;
    
    /**
     * Token utilizado em ambiente sandbox
     * @name sandboxToken
     * @access private
     * @var string
     */
    private $sandboxToken;
    
    /**
     * URL base para acesso a API do Marketplace
     * @name endpoint
     * @access private
     * @var string
     */
    private $endpoint;
    
    /**
     * URL base para acesso a API de Sandbox do Marketplace
     * @name sandboxEndpoint
     * @access private
     * @var string
     */
    private $sandboxEndpoint;
    
    /**
     * Indica se o Marketplace estará sendo usado no modo sandbox
     * @name isSandbox
     * @access private
     * @var boolean
     */
    private $isSandbox = false;
    
    /**
     * Coleção de itens
     * @name externalItems
     * @access protected
     * @var externalItemsCollection
     */
    protected $externalItems;
    
    /**
     * Coleção de pedidos
     * @name orders
     * @access protected
     * @var OrdersCollection
     */
    protected $orders;
    
    /**
     * Construtor da classe
     * Cria as coleções de items e pedidos
     * 
     * @return void
     */
    public function __construct() {
        $this->externalItems = new ExternalItemsCollection();
        // $this->orders        = new OrdersCollection();
    }
    
    /**
     * Seta um token para o Marketplace
     * 
     * @see MarketplaceInterface::setToken($token)
     */
    public function setToken($token) {
        $this->token = $token;
    }
    
    /**
     * Seta o token de sandbox
     * 
     * @see MarketplaceInterface::setSandboxToken($sandboxToken)
     */
    public function setSandboxToken($sandboxToken) {
        $this->sandboxToken = $sandboxToken;
    }
    
    /**
     * Retorna o token usado no Marketplace
     * 
     * @return string
     */
    public function getToken() {
        return $this->token;
    }
    
    /**
     * Retorna o sandboxtoken
     * 
     * @return string
     */
    public function getSandboxToken() {
        return $this->sandboxtoken;
    }
    
    /**
     * Configura o Marketplace para o modo sandbox
     * 
     * @see MarketplaceInterface::setSandboxMode($mode)
     */
    public function setSandboxMode($mode) {
        $this->isSandbox = $mode;
    }
    
    /**
     * Retorna se o Marketplace está no modo sandbox
     * 
     * @see MarketplaceInterface::isSandbox()
     */
    public function isSandbox() {
        return $this->isSandbox;
    }
    
    /**
     * Adiciona um item ao Marketplace, caso o item não possa ser adicionado uma excessão será lançada
     * 
     * @see MarketplaceInterface::addExternalItem($ExternalItem)
     */
    public function addExternalItem(ExternalItem $ExternalItem) {
        // if ( ExternalItem::validate($ExternalItem)) {
            $this->externalItems->push($ExternalItem);  
        // }
    }
    
    /**
     * Retorna os items do Marketplace
     * 
     * @see MarketplaceInterface::getExternalItems()
     */
    public function getExternalItems() {
        return $this->externalItems->getEntries();
    }
}
