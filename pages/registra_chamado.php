<?php

    session_start();

    //Montagem do Texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

    //Abrindo/Criando aquivo
    $arquivo = fopen('arquivo.txt', 'a');
    //Escrevendo no arquivo
    fwrite($arquivo, $texto);
    //Fechando Arquivo
    fclose($arquivo);
    
    header("Location: abrir_chamado.php");
?>