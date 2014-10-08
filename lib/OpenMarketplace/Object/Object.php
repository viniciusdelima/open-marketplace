<?php

/*
 * Classe base para qualquer entidade dentro do sistema.
 * Esta classe têm por objetivo prever métodos padrões como __to_string, entre outros
 *
 * @author Vinícius C. de Lima <vinicius.c.lima03@gmail.com>
 * @package Object
 */

namespace OpenMarketplace\Object;
    
abstract class Object {
    /**
     * Saída exibida quando houver a conversão da classe para string
     * @name strObj
     * @access private
     * @var array | Object
     */
    private $strObj = array();
    
    /**
     * Imprime os dados do objeto em formato json.
     * 
     * @return string
     */
    public function __toString() {
        return json_encode($strObj);
    }
}
