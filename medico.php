<?php
/**
 * esta classe é criada pra uma entidade medico que possui, além de dados básicos, um crm especificos para os médicos
 * @author Ana Clara Barcella Miskulin
 * @access public
 */

/** 
    * incluindo a classe pessoa nessa classe medico
    * @access public 
*/ 
require_once ('pessoa.php');

/** 
    * criando a classe medico que estende a classe pessoa, com o crm
    * @access public 
*/ 
    class Medico extends Pessoa {
        private $crm;
        
    /** 
    * retorno do metodo  getCrm
    * @access public 
    * @param String $crm
    */ 
        public function getCrm(){
            return $this->crm;
        }
    /** 
    * recebe o parametro do get e define na variavél $crm
    * @access public 
    * @param String $crm
    */    
        public function setCrm($crm) {
            $this->crm = $crm;
        }
}