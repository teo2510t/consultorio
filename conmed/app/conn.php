<?php
  $conn = null;
  $servidor = 'localhost';
  $bd = 'registro';
  $user = 'root';
  $pass = '';
  try{
    $conn = new PDO('mysql:host='.$servidor.';$dbconmed='.$bd, $user, $pass);
  }catch (PDOExeption $e){
    echo "error de conexion!";
    exit;
  }
  return $conn;
?>