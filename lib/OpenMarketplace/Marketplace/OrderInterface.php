<?php

/*
 * Interface padrão para Pedidos
 * Esta interface fornecerá os principais métodos relacionados aos Pedidos de cada Marketplace
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace
 */

namespace OpenMarketplace\Marketplace;
    
interface OrderInterface {
    /**
     * Atualiza o status de um pedido.
     * 
     * @param string $status
     * @return boolean
     */
    public function updateStatus();
    
}
