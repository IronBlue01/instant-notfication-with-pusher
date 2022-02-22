<?php
    require "connection.php";
    require __DIR__ . '/vendor/autoload.php';

    //OPÇÕES PADRÃO DO PUSHER
    $options = array(
        'cluster' => 'sa1',
        'useTLS' => true
      );
      $pusher = new Pusher\Pusher(
        '30435b40f08263425cae',
        '0f0b2003e5a46663714d',
        '1348638',
        $options
      );
    
  
    //Recebe os dados do formulário
    $nome   = isset($_POST['nome']) ? $_POST['nome'] : '';
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
    $email  = isset($_POST['email']) ? $_POST['email'] : '';

    //Envia os dados para o pusher
    $data['nome'] = $nome.'-'.$cidade.'-'.$email;

    $pusher->trigger('my-channel', 'my-event', $data);

    
    // echo $nome . ' - ' . $cidade . ' - ' . $email;

    $query = "INSERT INTO cadastro VALUES (default,:nome,:cidade,:email)";
    $stmt  = $conn->prepare($query);
    $stmt->bindValue(':nome',$nome);
    $stmt->bindValue(':cidade',$cidade);
    $stmt->bindValue(':email',$email);
    $stmt->execute();

    header("Location:".$_SERVER['HTTP_REFERER']);
















?>