<?php
require "verifica.php";

include_once 'conexao.php';

if(empty($_POST['cadevento']) || empty($_POST['caddata']) || empty($_POST['cadprof'])){

    header('Location: ../login.php');
    
}
else {
    $nomevento = mysqli_real_escape_string($conexao, $_POST['cadevento']);
    $datevento = mysqli_real_escape_string($conexao, $_POST['caddata']);
    $criador = mysqli_real_escape_string($conexao, $_POST['cadprof']);
    $cadimg = mysqli_real_escape_string($conexao, $_FILES['cadimg']);
    $cadesc = mysqli_real_escape_string($conexao, $_POST['cadesc']);

    $sql = " CALL CAD_EVENTO ('$nomevento', '$datevento', '$criador', '$cadimg', '$cadesc');";

    $result = mysqli_query($conexao, $sql);

    if($result == 1){
        header('Location: eventos.php');
        exit(); 
    }
    else {
        header('Location: ../index.php');
        exit();
    }
}
?>

