<?php

/*
 * Entidade responsável por representar uma coleção de pedidos
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace.Order
 */

namespace OpenMarketplace\Marketplace\Order;

use OpenMarketplace\Object\Collection;

class OrdersCollection extends Collection {
    /**
     * Tipo da coleção
     * @see Collection
     */
    private $type = 'Order';
    
    /**
     * Procura um pedido dentro da coleção com base em seu id e retorna-o
     * 
     * @param string $id
     * @return Order
     * @throws OrderNotExistsException
     */
    public function getOrderById($id) {
        foreach ($this->elements as $Order) {
            if ($Order->getId() === $id) {
                return $Order;
            }
        }
        throw new OrderNotExistsException();
    }
    
    /**
     * Remove um pedido da coleção
     * 
     * @param Order $Order
     * @return void
     * @throws OrderNotExistsException
     */
    public function remove(Order $Order) {
        foreach ($this->elements as $key => $element) {
            if ( $element->getId() == $Order->getId()) {
                unset($this->elements[$key]);
                return ;
            }
        }
        throw new OrderNotExistsException();
    }
    
    /**
     * Atualiza um pedido na coleção de pdido, substituindo-o por um novo.
     * 
     * @param Order $Order
     * @return void
     */
    public function update($Order) {
        $this->remove($Order);
        $this->push($Order);
    }
}
