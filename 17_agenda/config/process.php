<?php

   ini_set('default_charset', 'utf-8');//Definindo a conexão para o tipo de caracteres UTF-8

   session_start();

   include_once("connection.php");
   include_once("url.php");

   $data = $_POST;

   //MODIFICAÇÕES NO BANCO
   if (!empty($data)) {

      //CRIAR CONTATO
      if ($data["type"] === "create") {
         
         $name = $data["name"];
         $phone = $data["phone"];
         $observations = $data["observations"];

         $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

         $stmt = $conn->prepare($query);

         $stmt->bindParam(":name", $name);
         $stmt->bindParam(":phone", $phone);
         $stmt->bindParam(":observations", $observations);

         try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";

         } catch(PDOException $e) {
            //Erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
         }

      //ATUALIZAR CONTATO
      } else if($data["type"] === "edit") {

         $name = $data["name"];
         $phone = $data["phone"];
         $observations = $data["observations"];
         $id = $data["id"];

         $query = "UPDATE contacts 
                   SET name = :name, phone = :phone, observations = :observations 
                   WHERE id = :id";

         $stmt = $conn->prepare($query);

         $stmt->bindParam(":name", $name);
         $stmt->bindParam(":phone", $phone);
         $stmt->bindParam(":observations", $observations);
         $stmt->bindParam(":id", $id);

         try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";

         } catch (PDOException $e) {
            //Erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
         }

      //DELETAR CONTATO
      } else if($data["type"] === "delete") {

         $id = $data["id"];

         $query = "DELETE FROM contacts WHERE id = :id";
         $stmt = $conn->prepare($query);
         $stmt->bindParam(":id", $id);

         try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
         
         } catch (PDOException $e) {
            //Erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
         }
         
      }

      // Redirect HOME
      header("Location:" . $BASE_URL . "/../index.php");

   //SELEÇÃO DE DADOS
   } else {

      $id;
      $search;

      if (!empty($_GET["id"])) {
         $id = $_GET["id"];
      }
      if (!empty($_GET["input_search"])) {
         $search = $_GET["input_search"];
      }

      //RETORNA O DADO DE UM CONTATO
      if (!empty($id)) {

         $query = "SELECT * FROM contacts WHERE id = :id";
         $stmt = $conn->prepare($query);
         $stmt->bindParam(":id", $id);
         $stmt->execute();
         $contact = $stmt->fetch();

      //PESQUISA CONTATOS
      } else if(!empty($search)) {

         $contacts = [];
         $query = "SELECT * FROM contacts WHERE name LIKE '$search%' OR phone LIKE '$search%' OR id = '$search'";
         $stmt = $conn->prepare($query);
         $stmt->execute();
         $contacts = $stmt->fetchAll();

      } else {

         //RETORNA TODOS OS CONTATOS
         $contacts = [];
         $query = "SELECT * FROM contacts";
         $stmt = $conn->prepare($query);
         $stmt->execute();
         $contacts = $stmt->fetchAll();

      }
   }

   //FECHAR CONEXÃO
   $conn = null;//forma de fechar a conexão do PDO

?>