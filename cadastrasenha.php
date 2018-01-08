<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <title>Senhas</title>

    <link href="css/freelancer.css" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body id="page-top" class="index">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu
                </button>
                <a class="navbar-brand" href="index.html">Início</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.html">Cadastrar Senha</a>
                    </li>
                    <li>
                        <a href="cadastrar_cliente.php">Visualizar Senhas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

       <div class="container">
            <legend><h2>Cadastro de senha</h2></legend>
            <div class="row">
                <div class="col-md-4 offset-md-4">  
                    <form action="salvarsenha.php" name="f1" method="post">
                        <input type="hidden" id='email' name='email' value="<?php echo $_GET['perfil']; ?>">

                        <label>Digite ao que esta senha se associa:</label> 
                        <input type="text" class="form-control" name="associa" id="associa" size="20" required>
                        <br>
                        <label>Senha:</label> 
                        <input type="password" class="form-control" name="senha" id="idSenha" size="20" required>
                        <br>
                        <button type="submit" class="btn btn-primary" value="Enviar" id="botaoEnv">Enviar</button>
              
                    </form>
                </div>
            </div>
        </div>

   
    
<!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Theme JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-freelancer/3.3.7/js/freelancer.min.js"></script>


</body>

</html>
