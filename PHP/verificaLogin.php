<?php
    include('conexao.php');
    include('funcaosql.php');
    session_start();
    if(isset($_POST['login']))
    {
        $email = mysqli_escape_string($conexao, $_POST['email']);
        $password = mysqli_escape_string($conexao, $_POST['password']);
        $_SESSION['email']= $email['email'];
        $_SESSION['password']= $email['password'];
        logar($conexao,$email,$password);
    }
    
    if(isset($_POST['sair']))
    {
        session_destroy();
        header("Location: ../login.php");
    }
?>