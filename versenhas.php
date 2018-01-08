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
<script type="text/javascript">
 
 function verSenha(el,senha){

  var checked = el.checked;
  console.log("textosenha"+senha);
  if(checked){

   document.getElementById("textosenha"+senha).type = 'text';

   // Change the Text
   document.getElementById("verTexto").textContent= "Esconder";
  }else{
   // Changing type attribute
   document.getElementById("textosenha"+senha).type = 'password';

   // Change the Text
   document.getElementById("verTexto").textContent= "Mostrar";
  }

 }
 
 function Alterar(idsenha){
     var senha = document.getElementById("textosenha" + idsenha).value;
     window.location.replace("alterasenha.php?cd_id_senha="+idsenha+"&senha='"+senha+"'");
 }
 function Excluir(idsenha){
     window.location.replace("deletasenha.php?cd_id_senha="+idsenha);
 }
</script>


       <div class="container">
            <legend><h2>Senhas</h2></legend>
            <div class="row">
                <div class="col-md-4 offset-md-4">  
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Associção</td>
                            <td>Senha</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conexao.php';
                        $selecao = "select * from Senhas";
                        $resultado = $mysqli->query($selecao) or die ($mysqli->error);
                        
                        if (mysqli_num_rows($resultado) > 0) {
                            while($row = $resultado->fetch_assoc()) {
                                    echo "<tr id='".$row["cd_id_senha"]."'>";
                                    echo    "<td>".$row["nm_associacao_senha"]."</td>";
                                    echo    "<input type='hidden' id='cd_id_senha' value=".$row["cd_id_senha"].">";
                                    echo    "<td><input type='password' id='textosenha".$row["cd_id_senha"]."' value=".$row["cd_senha"].">";
                                    echo "<input type='checkbox' id='ver' value='0' onchange='verSenha(this,".$row["cd_id_senha"].");'>&nbsp; <span id='verTexto'>Mostrar</span></td>";
                                    echo "<td><button onclick='Alterar(".$row["cd_id_senha"].")' class='btn btn-primary' value='Alterar' id='botaoAlt'>Alterar</button></td>";
                                    echo "<td><button onclick='Excluir(".$row["cd_id_senha"].")' class='btn btn-primary' value='Excluir' id='botaoEx'>Excluir</button></td>";
                                    echo "</tr>";
                                }
                            
                        } else {
                            echo "Nenhum Resultado";
                        }
                        
                        ?>
                    </tbody>
                </table>    
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
