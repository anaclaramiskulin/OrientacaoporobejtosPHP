<?php
/**
 * esta classe é criada pra uma entidade pessoa, que possui nome, data de nascimento, cpf e rg
 * @author Ana Clara Barcella Miskulin
 * @access public
 */
 
/** 
    * criando a classe pessoa com atributos e metodos para a entidade pessoa
    * @access public 
*/ 
    class Pessoa {
        public $nome;
        private $dtnasc;
        private $cpf;
        private $rg;
    
    /** 
    * retorno para o metodo getNome
    * @access public 
    * @param String $nome
    */ 
        public function getNome(){
            return $this->nome;
           }
    /** 
    * recebe o parametro do get e define na variável $nome
    * @access public 
    * @param String $nome
    */       
        public function setNome($nome){
                   $this->nome = $nome;
           }

    /** 
    * retorno para o metodo getDtnasc
    * @access public 
    * @param String $dtnasc
    */   
           public function getDtnasc(){
               return $this->dtnasc;
           }
    /** 
    * recebe o parametro do get e define na variável $dtnasc
    * @access public 
    * @param String $dtnasc
    */    
           public function setDtnasc($dtnasc) {
               $this->dtnasc = $dtnasc;
           }
        
    /** 
    * retorno para o metodo getCpf
    * @access public 
    * @param String $cpf
    */       
           public function getCpf(){
               return $this->cpf;
           }
    /** 
    * recebe o parametro do get e define na variável $cpf
    * @access public 
    * @param String $cpf
    */     
           public function setCpf($cpf) {
               $this->cpf = $cpf;
           }

    /** 
    * retorno para o metodo getRg
    * @access public 
    * @param String $rg
    */ 
           public function getRg(){
               return $this->rg;
           }
    /** 
    * recebe o parametro do get e define na variável $rg
    * @access public 
    * @param String $rg
    */    
           public function setRg($rg) {
               $this->rg = $rg;
           }
        }
?>