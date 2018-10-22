<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Nil
 */
class Pessoa {
    //atributos encapsulados
   private  $nome;
   private $idade;
   private $sexo;
   //método para acrescentar + 1 à idade
   public function fazerAniversario(){
       $this ->idade ++;
   } 
   
   //métodos especiais
   //construtor
   function Pessoa($nome, $idade, $sexo) {
       $this->nome = $nome;
       $this->idade = $idade;
       $this->sexo = $sexo;
   }
   //getters & settters
   function getNome() {
       return $this->nome;
   }

   function getIdade() {
       return $this->idade;
   }

   function getSexo() {
       return $this->sexo;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setIdade($idade) {
       $this->idade = $idade;
   }

   function setSexo($sexo) {
       $this->sexo = $sexo;
   }


}
