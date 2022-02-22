<?php
  require "connection.php";

  $query = "SELECT * from cadastro";
  $stmt  = $conn->prepare($query);
  $stmt->execute();
  $clientes = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>sistema de notificação</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light pl-3">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="create.php">Cadastrar clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Clientes cadastrados</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Hypersystem</a>
      </li>
    </ul>

  </div>
</nav>

  
	
 <div  class="container p-2 bg-white mt-3 rounded">

 
 <h1 class="display-5 text-dark"><i class="fa-solid fa-user-astronaut"></i> CLIENTES CADASTRADOS</h1>

 <table class="table table-white rounded">
  <thead class="bg-secondary">
    <tr class="text-white">
      <th scope="col">#</th>
      <th scope="col">NOME</th>
      <th scope="col">CIDADE</th>
      <th scope="col">E-MAIL</th>
    </tr>
  </thead>
  <tbody id="listUsers">

  <?php
      foreach ($clientes as $cliente):
  ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $cliente->nome ?></td>
      <td><?= $cliente->cidade ?></td>
      <td><?= $cliente->email ?></td>  
    </tr>
  <?php endforeach; ?>

  
  </tbody>
</table>
 </div>




 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

  <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('30435b40f08263425cae', {
      cluster: 'sa1'
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        //alert(JSON.stringify(data));
        
        $.ajax({url: "listUsers.php", success: function(result){
          $("#listUsers").html(result);
        }});


      });
  </script>
  




  </body>
</html>