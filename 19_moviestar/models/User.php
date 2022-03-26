<?php

   class User {

      public $id;
      public $name;
      public $lastname;
      public $email;
      public $password;
      public $image;
      public $bio;
      public $token;

      public function getFullName($user) {
         return $user->name . " " . $user->lastname;
      }

      public function generateToken() {
         return bin2hex(random_bytes(50));
      }

      public function generatePassword($password) {
         return password_hash($password, PASSWORD_DEFAULT);
      }

      public function imageGenerateName() {
         return bin2hex(random_bytes(60)) . ".jpg";
      }

   }

   interface UserDAOInterface {

      public function buildUser($data); // Construir objeto usuário
      public function create(User $user, $authUser = false); // Criar usuário no BD
      public function update(User $user, $redirect = true); // Atualizar usuário no BD
      public function verifyToken($protected = false); // Verificar token do usuário
      public function setTokenToSession($token, $redirect = true); // Definir token na sessão
      public function authenticateUser($email, $password); // Autenticar usuário
      public function findByEmail($email); // Encontrar Email
      public function findById($id); // Encontrar o id
      public function findByToken($token); // Encontrar o token
      public function destroyToken(); // Destruir token
      public function changePassword(User $user); // Mudar senha

   }