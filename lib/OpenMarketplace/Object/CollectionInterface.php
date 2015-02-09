<?php
/**
 * Interface padrão para coleção de objetos.
 * 
 * @author Vinicius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Object
 */

namespace OpenMarketplace\Object;
 
interface CollectionInterface {
	/**
	 * Insere um elemento na coleção.
	 * 
	 * @param Object $Element
	 * @return void
	 */
	public function push($Element);
	
	/**
	 * Seleciona elementos dentro da coleção com base em um método de callback.
	 * Se o método retorna true, então o elemento é adicionado ao array de elementos válidos.
	 * 
	 * @param string $method
	 * @param array $arguments
	 * @return array
	 */
	public function findByCallbackMethod($method, array $arguments);
	
	/**
	 * Retorna o número total de elementos presentes na coleção.
	 * 
	 * @return int
	 */
	public function getTotalElements();
	
}
