<?php

/**
 * Classe de manipulação de arrays.
 * Esta classe têm por objetivo ajudar a manipulação de arrays.
 * 
 * @author Vinicius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package util
 */

namespace OpenMarketplace\Util;

class ArrayHelper {
	/**
	 * Retorna um valor dentro de um array com base na chave passada por parâmetro.
	 * 
	 * @param array $data
	 * @param $path
	 * @return mixed
	 */
	public static function get($data, $path) {
		if ( empty($data)) {
			return null;
		}
		if ( is_string($path) || is_numeric($path)) {
			$parts = explode('.', $path);
		}
		else {
			$parts = $path;
		}
		foreach ($parts as $key) {
			if ( is_array($data)) {
				$data = &$key;
			}
			else {
				return null;
			}
		}
		return $data;
	}
	
	/**
	 * Insere valores dentro de um array referenciado por $path
	 * 
	 * @param array $data
	 * @param string $source
	 * @return array
	 */
	public static function insert(array $data, array $source) {
		$result = array_merge($source, $data);
		return $result;
	}
	
	/**
	 * Verifica se uma determinada chave bate com um determinado token
	 * 
	 * @param string $key
	 * @param string $token
	 * @return boolean
	 */
	protected static function _matchToken($key, $token) {
		if ($token === '{n}') {
			return is_numeric($key);
		}
		if ($token === '{s}') {
			return is_string($key);
		}
		if (is_numeric($token)) {
			return ($key == $token);
		}
		return ($key === $token);
	}
	
	/**
	 * Verifica se determinada chave existe dentro de um array
	 * 
	 * @param string | int $key
	 * @param array $data
	 * @param boolean $recursive
	 * @return boolean
	 */
	public static function keyExists($key, array $data, $recursive = false) {
		if ( is_array($data) && count($data) > 0) {
			foreach ($data as $k => $v) {
				if ($k == $key) {
					return true;
				}
			}
		}
		return false;
	}
	
	/**
	 * Limpa elementos vazios dentro de um array.
	 * 
	 * @param array $arr
	 * @return array
	 */
	public static function clean(array $arr) {
		// Indica se o array contém chaves numéricas
		$numeric = true;
		
		$keys = array_keys($arr);
		foreach ($keys as $key) {
			if (!is_numeric($key)) {
				$numeric = false;
			}
		}
		
		reset($arr);
		
		foreach ($arr as $k => $i) {
			if ( ($i === false || $i == '' || $i == ' ') && $i !== 0 ) {
				unset($arr[$k]);
			}
		}
		$numeric == true ? ksort($arr) : $numeric;
		return $arr;
	}
	
	/**
	 * Atualiza valores que tenham a mesma chave nos dois arrays
	 * 
	 * @param array $arr1
	 * @param array $arr2
	 * @return array
	 */
	public static function mergeEqualKeys($arr1, $arr2) {
		$keys = array_keys($arr1);
		for ($i = 0; $i < count($keys); $i++) {
			key_exists($keys[$i], $arr2) ? $arr1[$keys[$i]] = $arr2[$keys[$i]] : $keys;
		}
		return $arr1;
	}
	
	/**
	 * Converte as chaves de um array para chaves numéricas.
	 * 
	 * @parma array $arr
	 * @return $arr
	 */
	public static function convertsToNumericKeys($arr) {
		$newArr = array();
		$i = 0;
		foreach ($arr as $value) {
			$newArr[] = $value;
		}
		$newArr = self::clean($newArr);
		return $newArr;
	}
	
	/**
	 * Ordena um array numérico colocando suas chaves em ordem crescente partindo do zero.
	 * 
	 * @param array $arr
	 * @return array
	 */
	public static function arrangeArray($arr) {
		$newArr = array();
		$i = 0;
		foreach ($arr as $value) {
			$newArr[] = $value;
		}
		$newArr = self::clean($newArr);
		return $newArr;
	}
	
	/**
	 * Remove todas as ocorrências de uma array dentro de uma matriz.
	 * 
	 * @param array $entrie
	 * @param array $source
	 * @param boolean $recursive
	 * @return array
	 */
	public static function removeArrayFromMatriz($entrie, $source, $recursive = false) {
		foreach ($source as $k => $i) {
			$difference = array_diff($entrie, $source[$k]);
			if ( count($difference) <= 0) {
				unset($source[$k]);
			}
			else if ( true == $recursive && self::arrayExists($source[$k]) ) {
				$source[$k] = self::removeArrayFromMatriz($entrie, $source[$k], true);
			}
		}
		return $source;
	}
	
	/**
	 * Verifica se existe algum array dentro do array principal.
	 * 
	 * @param array $source
	 * @return boolean
	 */
	public static function arrayExists($source) {
		foreach ($source as $entrie) {
			if ( is_array($entrie)) {
				return true;
			}
		}
		return false;
	}
	
	/**
	 * Substitui as chaves de um array por novas chaves passadas por parâmetro.
	 * 
	 * @param array $keys
	 * @param array $source
	 * @return array
	 */
	public static function changeKeys(array $keys, array $source) {
		$new_array = array();
		$i = 0;
		
		if ( count($source) > 0 && count($keys) > 0) {
			foreach ($source as $element) {
				!isset($keys[$i]) ? $keys[$i] = $i : $keys;
				$new_array[$keys[$i]] = $element;
				$i++;
			}
		}
		return $new_array;
	}
}