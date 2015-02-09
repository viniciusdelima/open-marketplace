<?php

/*
 * Entidade responsável por gerenciar uma coleção de items.
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Marketplace.ExternalItem
 */

namespace OpenMarketplace\Marketplace\ExternalItem;

use OpenMarketplace\Object\Collection;

class ExternalItemsCollection extends Collection {
    /**
     * Tipo da coleção
     * @see Collection
     */
    protected $type = 'OpenMarketplace\Marketplace\ExternalItem\ExternalItem';
}
