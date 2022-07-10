<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php

    /**
     * este arquivo mostra na tela os valor atrinuidos para a classe medico e engenheiro da classe pessoa, e os valores atribiidos especifico em cada classe 
     * @author Ana Clara Barcella Miskulin
     * @access public
     */

    /** 
    * incluindo as classes medico e engenheiro nesta classe test.php
    * @access public 
    */ 
            require_once 'medico.php';
            require_once 'engenheiro.php';

    /**         
    *etancia o objeto medico apartir da classe medico
    *seta od valores para os metodos set "Nome, Dtnasc, Cpf, Rg" da classe pessoa 
    *seta o valor para o metodo Crm  a partir da classe medico
    * @access public
    */
            $medico = new Medico;       
            $medico->setNome("Ana Clara");
            $medico->setDtnasc("21/07/2004");
            $medico->setCpf("029.695.000-94");
            $medico->setRg(31343852);
            $medico->setCrm(1224);
    /** 
    * retorno dos valores do metodo get do objeto medico
    * @access public 
    */      
            print("Nome do Medico: {$medico->getNome()} 
            Data nascimento: {$medico->getDtnasc()} 
            CPF: {$medico->getCpf()}  
            RG: {$medico->getRg()} 
            CRM:  {$medico->getCrm()}");
              
            echo nl2br(" \n ");

    /**         
    *etancia o objeto engenheiro apartir da classe engenehiro
    *seta od valores para os metodos set "Nome, Dtnasc, Cpf, Rg" da classe pessoa 
    *seta o valor para o metodo Crea  a partir da classe engenheiro
    * @access public
    */
            $engenheiro = new Engenheiro;
            $engenheiro->setNome("Pedro Marcos");
            $engenheiro->setDtnasc("12/02/2003");
            $engenheiro->setCpf("123.456.789-10");
            $engenheiro->setRg(62738469);
            $engenheiro->setCrea(01111);
    /** 
    * retorno dos valores do metodo get do objeto engenheiro
    * @access public 
    */     
            print("Nome do Engenheiro: {$engenheiro->getNome()}  
            Data nascimento: {$engenheiro->getDtnasc()} 
            CPF: {$engenheiro->getCpf()} 
            RG: {$engenheiro->getRg()} 
            CREA:  {$engenheiro->getCrea()}");
            
        ?>
        </pre>
</body>
</html>