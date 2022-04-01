<?php

class Review {

   public $id;
   public $rating;    // Nota
   public $review;    // Comentário do usuário
   public $users_id;  // Id do usuário que enviou a resposta
   public $movies_id; // Id do filme que será inserido a resposta

}

interface ReviewDAOInterface {

   public function buildReview($data);  // Construir objeto da Review
   public function create(Review $review);  // Criando a Review 
   public function getMoviesReview($id);  // Pegar um filme e saber todas as notas e reviews dele
   public function hasAlreadyReviewed($id, $userId);  // Verifica se o usuário já fez a review do filme
   public function getRatings($id);  // Receber todas as notas de um filme

}
