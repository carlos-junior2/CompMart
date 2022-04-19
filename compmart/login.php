<?php

include_once('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql_logar = mysqli_query($conexao, " SELECT * FROM usuario where email = '$email' and senha = '$senha' ");
$sql_user = mysqli_query($conexao, "SELECT * FROM usuario where email = '$email' ");

if (mysqli_num_rows($sql_logar) > 0){

    header('location: usuario.html');

}

else {

    if (mysqli_num_rows($sql_user) > 0){

        echo " <script>
        alert ('Senha Incorreta!');
        window.location.href = 'index.html';
        </script> ";

    }

    else {

        echo " <script>
        alert ('Usuário não registrado');
        window.location.href = 'index.html';
        </script> ";

    }
    
}

?>