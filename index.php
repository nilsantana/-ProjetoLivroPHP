<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Livro</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
        
            $p[0] = new Pessoa("jose", 19, "M");
            $p[1] = new Pessoa("Maria", 21, "F");
            
            $l[0] = new Livro("PHP Básioo" , "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP" , "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado" , "Ana Paula", 800, $p[1]);
            
            print_r($l[0]);
            print_r($l[1]);
            print_r($l[2]);
            $l[2]->folhear(50);
            $l[2]->detalhes();
         ?>
        </pre>
    </body>
</html>
