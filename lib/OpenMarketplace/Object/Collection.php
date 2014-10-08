<?php
/**
 * Classe base par coleções dentro do sistema.
 * Esta classe têm como principal objetivo gerênciar e servir como classe base para a criação de 
 * coleções de objetos.
 * 
 * @author Vinicius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Object
 */

namespace OpenMarketplace\Object;

class Collection implements CollectionInterface {
	/**
	 * Coleção de Objetos.
	 * @name entries
	 * @access protected
	 * @var ArrayObject
	 */
	protected $entries;
	
	/**
	 * Tipo da coleção
	 * @name type
	 * @access protected
	 * @var string
	 */
	protected $type;
	
	/**
	 * Construtor da classe.
	 * 
	 * @return void
	 */
	public function __construct($type) {
		$this->type = $type;
		$this->entries = new ArrayObject();
	}
	
	/**
	 * Adiciona um elemento no final da coleção de elementos atual.
	 * 
	 * @see CollectionInterface::push($element)
	 */
	public function push($element) {
		if ($element instanceof $this->type) {
			$this->entries->append($element);
		}
		else {
			throw new TypeMismatchException();
		}
	}
	
	/**
	 * Procura um elemento dentro da coleção com base em um método
	 * de callback definido nas classes presentes na coleção.
	 * 
	 * @see CollectionInterface::findByCallbackMethod($method, array $arguments)
	 */
	public function findByCallbackMethod($method, array $arguments) {
		$elements = array();
		
		foreach ($this->entries as $entrie) {
			if ( method_exists($entrie, $method)) {
				if ( $entrie->$method($arguments)) {
					$elements[] = $entrie;
				}
			}
		}
		ArrayHelper::clean($elements);
		return $elements;
	}
	
	/**
	 * Retorna o número total de elementos presentes na coleção.
	 * 
	 * @see CollectionInterface::getTotalElements()
	 */
	public function getTotalElements() {
		return $this->entries->count();
	}
	
	/**
	 * Retorna os elementos da coleção.
	 * 
	 * @return mixed
	 */
	public function getEntries() {
		$elements = array();
		$iterator = $this->entries->getIterator();
		while ( $iterator->valid() ) {
			array_push($elements, $iterator->current());
			$iterator->next();
		}
		return $elements;
	}
	
	/**
	 * Retorna a coleção de elementos da Collection.
	 * 
	 * @return ArrayObject
	 */
	public function getCollection() {
		return $this->entries;
	}
}