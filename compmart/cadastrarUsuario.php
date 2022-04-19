<?php

    require_once ('conexao.php');

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dataNasc = $_POST['dataNascimento'];
    $tipo = $_POST['tipoConta'];

    $numero = $_POST['numero'];
    $validade = $_POST['validade'];
    $codigoCartao = $_POST['codigoCartao'];

    
    $sql_cadastro = mysqli_query($conexao, " INSERT INTO usuario(nome, cpf, endereco, email, senha, data_nascimento, tipo) VALUES ('$nome', '$cpf', '$endereco', '$email', '$senha', '$dataNasc', '$tipo')");
        
    $sql_cod = mysqli_query($conexao, "SELECT id FROM usuario WHERE cpf = $cpf");
    
    $cod = mysqli_fetch_array($sql_cod);

    $sql_cadastro1 = mysqli_query($conexao, " INSERT INTO cartao(numero, validade, cod_seguranca, id_usuario) VALUES ('$numero', '$validade', '$codigoCartao', '$cod[0]') ");

    
    if ($sql_cadastro == true && $sql_cadastro1 == true ){

        echo " <script> 
        
        alert('Usuário cadastrado com sucesso');
        window.location.href= 'index.html';
        
        </script> ";

    }

    else {

        echo " <script> 
        
        alert('Falha no cadastrado');
        window.location.href= 'login.html';
        
        </script> ";

    }

?>