<?php
  require "connection.php";

  $query = "SELECT * from cadastro";
  $stmt  = $conn->prepare($query);
  $stmt->execute();
  $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);



foreach ($clientes as $cliente){
    $nome   =  $cliente->nome;
    $cidade =  $cliente->cidade;
    $email  =  $cliente->email;

    echo '<tr>'; 
    echo '<th scope="row">1</th>';
    echo '<td>'.$nome.'</td>';
    echo '<td>'.$cidade.'</td>';
    echo '<td>'.$email.'</td>';
    echo '</tr>';
}#end foreach







?>