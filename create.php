
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
        <a class="nav-link active" href="create.php">Cadastrar clientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Clientes cadastrados</a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>

  </div>
</nav>

<div id="content" class="container bg-white p-4 mt-3 rounded">
        <h3> <i class="fa-solid fa-user-check"></i> Cadastrar um novo cliente </h3>
        <hr>
        <form action="insertUsers.php" class="col-md-12 mt-3" method="post">
            <label for="nome"><strong>Nome</strong></label>
            <input id="nome"autocomplete="of" autofill="off" type="text" name="nome" placeholder="Digite seu nome" class="form-control">
            <br>
            <label for="cidade"><strong>Cidade</strong></label>
            <input id="cidade" autocomplete="of" type="text" name="cidade" placeholder="Digite sua cidade" class="form-control">
            <br>
            <label for="email"><strong>E-mail</strong></label>
            <input id="email" autocomplete="off" type="email" name="email" placeholder="Digite seu e-mail aqui" class="col-6 form-control">
            <br>
            
            <div class="row col-md-12 m-0 justify-content-end">
            <button type="reset" class="btn btn-warning col-1 m-2">Limpar</button>
            <button type="submit" class="btn btn-primary col-1 m-2">Cadastrar</button>
            </div>

            
            
        </form>

    
</div>

  
	




   
  
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>