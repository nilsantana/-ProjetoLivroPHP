<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Nil
 */
interface Publicacao {
   public function abrir();
   public function fechar();
   public function folhear($p);
   public function avancaPag();
   public function voltarPag();
 
}
