<?php
 include_once 'C:/xampp/htdocs/projeto1/PHP01/model DB/LivroController';
 include_once 'C:/xampp/htdocs/projeto1/PHP01/DAO/daoLivro';

    class LivroController{
        public function inserirLivro($idLivro,$titulo ,$autor,$editora,$qtdEstoque){
        
            $livro = new Livro();
            $livro->setIdLivro($idLivro);  
            $livro->setTitulo($titulo);
            $livro->setAutor($autor);
            $livro->setEditora($editora);
            $livro->setQtdEstoque($qtdEstoque);

            $daolivro = new Daolivro();
           return $daolivro->inserir($livro);
  
        }
            function listarLivro(){
            $daolivro = new daolivro();
            return $daolivro ->listarLivroDAO();
            }
    }
?>

