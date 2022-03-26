<?php

   class Movie {

      public $id;
      public $title;
      public $description;
      public $image;
      public $trailer;
      public $category;
      public $length;
      public $users_id;

      public function imageGenerateName() {
         return bin2hex(random_bytes(60)) . ".jpg";
      }
   }

   interface MovieDAOInterface {

      public function buildMovie($data); // Construir objeto de filme
      public function findAll(); // Encontrar todos os filmes
      public function getLatestMovies(); // Pegar todos os filmes em ordem decrescente
      public function getMoviesByCategory($category); // Pagar os filmes de uma determinada categoria
      public function getMoviesByUserId($id); // Pegar filmes do usuário específico
      public function findById($id); // Encontrar um filme por id
      public function findByTitle($title); // Encontrar um filme por um título específico - Busca
      public function create(Movie $movie); // Criar
      public function update(Movie $movie); // Atualizar
      public function destroy($id); // Deletar

   }