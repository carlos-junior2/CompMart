<?php

    require_once ('conexao.php');

    $nome = $_POST['nome'];
    $carga = $_POST['carga'];
    $descricao = $_POST['descricao'];
    $conteudo = $_POST['conteudo'];
    
    $sql_cadastro = mysqli_query($conexao, " INSERT INTO curso(nome, carga_horaria, descricao, conteudo) VALUES ('$nome', '$carga', '$descricao', '$conteudo')");
        
    
    if ($sql_cadastro == true){

        echo " <script> 
        
        alert('Curso cadastrado com sucesso');
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