<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nom"]; 
    $email = $_POST["email"];
    
    if (!isset($name)){
      die("Entrez votre pseudo");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      die("Entrez votre mail");
    }
    
    print "Bienvenue " . $name . "!, ton adresse mail : ". $email;
  }
?>