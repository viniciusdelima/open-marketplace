<?php

/*
 * Descrição
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace
 */

namespace OpenMarketplace\Marketplace;

abstract class Marketplace implements MarketplaceInterface {
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
     * @name baseUrl
     * @access private
     * @var string
     */
    private $accessUrl;
    
    /**
     * Indica se o Marketplace estará sendo usado no modo sandbox
     * @name isSandbox
     * @access private
     * @var boolean
     */
    private $isSandbox = false;
    
    /**
     * Coleção de produtos
     * @name products
     * @access protected
     * @var ProductsCollection
     */
    protected $products;
    
    /**
     * Coleção de pedidos
     * @name orders
     * @access protected
     * @var OrdersCollection
     */
    protected $orders;
    
    /**
     * Construtor da classe
     * Cria as coleções de produtos e pedidos
     * 
     * @return void
     */
    public function __construct() {
        $this->products = new ProductsCollection();
        $this->orders   = new OrdersCollection();
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
        $this->sandbox = $mode;
    }
    
    /**
     * Adiciona um produo ao Marketplace, caso o produto não possa ser adicionado uma excessão será lançada
     * 
     * @see MarketplaceInterface::addProduct($Product)
     */
    public function addProduct(Product $Product) {
        if ( ProductValidation::validate($Product)) {
            $this->products->push($Product);  
        }
    }
    
    /**
     * Atualiza um produto no Marketplace
     * 
     * @see MarketplaceInterface::updateProduct($Product)
     */
    public function updateProduct(Product $Product) {
        
    }
}
