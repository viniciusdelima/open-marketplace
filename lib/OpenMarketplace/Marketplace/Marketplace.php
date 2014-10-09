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
     * Construtor da classe
     * 
     * @return void
     */
    public function __construct() {
        
    }
}
