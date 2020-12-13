<?php
session_start();

include_once 'conexao.php';

if(empty($_POST['cadnome']) || empty($_POST['cademail']) || empty($_POST['cadpass'])){

    header('Location: ../login.php');
    
}
else {
    $nome = mysqli_real_escape_string($conexao, $_POST['cadnome']);
    $email = mysqli_real_escape_string($conexao, $_POST['cademail']);
    $passw = mysqli_real_escape_string($conexao, $_POST['cadpass']);

    $sql = " CALL CAD_USER ('$nome', '$email', '$passw');";

    $result = mysqli_query($conexao, $sql);

    if($result == 1){
        header('Location: ../login.php');
        exit(); 
    }
    else {
        header('Location: ../login.php');
        exit();
    }
}