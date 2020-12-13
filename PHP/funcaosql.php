<?php
    function logar($conexao, $email, $password) {
        $sql = "SELECT * FROM tb_usuario WHERE tb_user_email = '$email' AND tb_user_senha = '$password';";
        $return = mysqli_query($conexao, $sql);
        $rows = mysqli_fetch_array($return);
        if ($rows)
        {
            header('Location: eventos.php');
        }
        else
        {
            $_SESSION['nao_autorizada'] = true;
            header('Location: ../login.php');
        }
    }
?>