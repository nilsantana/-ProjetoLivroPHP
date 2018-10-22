<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro
 *
 * @author Nil
 */
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //atributos encapsulados
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $abertto;
    private $leitor;
    
    //método
    
    public function detalhes(){
        echo "<hr> Livro ".$this->titulo." escrito por ".$this->autor;
        echo "<br> Páginas: ".$this->totPaginas." página atual ".$this->pagAtual;
        echo "<br> Sendo lido por ".$this->leitor->getnome();
    }
    //métodos especiais
    //construtor
    function Livro($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }
    //getters & setters
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAbertto() {
        return $this->abertto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAbertto($abertto) {
        $this->abertto = $abertto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->abertto = true;  
    }

    public function avancaPag() {
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->abertto = false;
    }

    public function folhear($p) {
        if ($p>$this->totPaginas){
            $this->pagAtual=0;
        }else{
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        
    }

}
