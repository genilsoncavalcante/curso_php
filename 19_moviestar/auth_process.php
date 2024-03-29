<?php

   require_once("globals.php");
   require_once("db.php");
   require_once("models/User.php");
   require_once("models/Message.php");
   require_once("dao/UserDAO.php");

   $message = new Message($BASE_URL);
   $userDao = new UserDAO($conn, $BASE_URL);

   // Resgata o tipo do formulário
   $type = filter_input(INPUT_POST, "type");

   // Verificação do tipo do formulário
   if($type === "register") {

      $name = filter_input(INPUT_POST, "name");
      $lastname = filter_input(INPUT_POST, "lastname");
      $email = filter_input(INPUT_POST, "email");
      $password = filter_input(INPUT_POST, "password");
      $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

      // Verificação de dados mínimos
      if($name && $lastname && $email && $password) {

         // Verifica se as senhas são iguais
         if($password === $confirmpassword) {

            // Verifica se o e-mail já está cadastrado no sistema
            if($userDao->findByEmail($email) === false) {

               $user = new User();

               // Criação de token e senha
               $userToken = $user->generateToken();
               $finalPassword = $user->generatePassword($password);

               $user->name = $name;
               $user->lastname = $lastname;
               $user->email = $email;
               $user->password = $finalPassword;
               $user->token = $userToken;

               $auth = true;

               $userDao->create($user, $auth);
               
            } else {

               // Enviar uma msg de erro, usuário já existe
               $message->setMessage("Usuário já cadastrado, tente outro email.", "error", "back");

            }
         } else {

            // Enviar uma msg de erro, as senhas não são iguais
            $message->setMessage("As senhas não são iguais.", "error", "back");

         }
      } else {

         // Enviar uma msg de erro, de dados faltantes
         $message->setMessage("Por favor, preencha todos os campos.", "error", "back");

      }
   }  else if($type === "login") {

      $email = filter_input(INPUT_POST, "email");
      $password = filter_input(INPUT_POST, "password");

      // Tenta autenticar usuários
      if ($userDao->authenticateUser($email, $password)) {
         
         $message->setMessage("Seja bem-vindo!", "success", "/editprofile.php");

      // Redireciona usuário, caso não consiga autenticar
      } else {

         $message->setMessage("Usuário e/ou senha incorreto(s).", "error", "back");
      
      }
   } else {

      $message->setMessage("Informações inválidas!", "error", "/index.php");

   }