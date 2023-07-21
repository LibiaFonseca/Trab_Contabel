<?php

include_once "./conexao.php";

//Carregar arquivo com xml e transfromando arquivo xml em objeto

$xml = simplexml_load_file('arquivo.xml');

//Ler o que está dentro do xml com a função endforeach

foreach ($xml->usuario as $registro) :
    echo "Nome: " . $registro->nome . "<br>";
    echo "cnpj: " . $registro->cnpj . "<br>";


   $query_usuario =  "INSERT INTO usuarios (nome, cnpj) VALUES (:nome, :cnpj )";
   $cadastrar_usuario = $conn->prepare($query_usuario);
    $cadastrar_usuario->bindParam(':nome', $registro->nome);
    $cadastrar_usuario->bindParam(':cnpj', $registro->cnpj);
    $cadastrar_usuario->execute();

    if($cadastrar_usuario->rowCount()){
        echo "<p style= 'color: green; '> Usuário cadastrado com sucesso!</p>";
    }else{
         echo "<p style= 'color: #f00; '>Erro:  Usuário não cadastrado com sucesso!</p>";

    }



    echo "<hr>";
endforeach;
