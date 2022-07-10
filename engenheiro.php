<?php
/**
 * esta classe é criada pra uma entidade engenheiro que possui, além de dados básicos, um crea especifico paras os engenheiros
 * @author Ana Clara Barcella Miskulin
 * @access public
 */
 
/** 
    * incluindo a classe pessoa nessa classe engenheiro
    * @access public 
*/ 
require_once ('pessoa.php');

/** 
    * criando a classe egenheiro que estende a classe pessoa, com o crea
    * @access public 
*/ 
    class Engenheiro extends Pessoa {
        private $crea;
        
    /** 
    * retormando uma variavel string para o crea
    * @access public 
    * @param String $crea
    */ 
        public function getCrea(){
            return $this->crea;
        }

    /** 
    * recebe o parametro do get e define na variavél $crea
    * @access public 
    * @param String $crea
    */        
        public function setCrea($crea) {
            $this->crea = $crea;
        }
}