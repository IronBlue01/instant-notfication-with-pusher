<?php

    $host     = "localhost";
    $user     = "u135870044_teste_cadastro";
    $pass     = "Hiphop131998";
    $database = "u135870044_teste";

    try{

        $conn = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $user,$pass);

        // echo 'Banco de dados conectado com sucesso';


    }catch(PDOException $e){

        echo 'ERROR: ' . $e->getMessage();

    }

    




















?>