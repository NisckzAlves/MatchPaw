<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
    <style>
        .login-block{
        background: #DE6262;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, purple, pink);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom,#FFD3FA, pink); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        float:left;
        width:100%;
        padding : 50px 0;
        }

        .banner-sec{background:url("https://cdn.pixabay.com/photo/2018/10/01/09/21/pets-3715733_960_720.jpg")  no-repeat left bottom; background-size:cover; min-height:645px; border-radius: 0 10px 10px 0; padding:0;}
        .container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
        .carousel-inner{border-radius:0 10px 10px 0;}
        .carousel-caption{text-align:left; left:5%;}
        .login-sec{padding: 50px 30px; position:relative;}
        .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
        .login-sec .copy-text i{color:#FEB58A;}
        .login-sec .copy-text a{color:#E36262;}
        .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: pink;}
        .login-sec h2:after{content:" "; width:100px; height:5px; background:pink; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
        .btn-login{background: pink; color:#fff; font-weight:600;}
        .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
        .banner-text h2{color:#fff; font-weight:600;}
        .banner-text h2:after{content:" "; width:100px; height:5px; background:pink; display:block; margin-top:20px; border-radius:3px;}
        .banner-text p{color:#fff;}
        .text-center{color:pink;}
        </style>
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION["idUser"])) {
      header("Location:home.php");
    } // Verifica se foi feito login


    if (isset($_POST)) {
      $ok = false;
      include("connection.php");
      $usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
      $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
      // varivel = condicao ? valor verdadeiro : valor falso;

      if ($usuario != "" && $senha != "") {

        // Prepara o SELECo
        $stmt = $connection->prepare("SELECT * FROM user WHERE usuario=:usuario AND senha=md5(:senha)"); // "=?" para 
        $stmt->bindParam(':usuario', $usuario);                                                         // evitar que manipulem senha.
        $stmt->bindParam(':senha', $senha);                                                         // evitar que manipulem senha.
        $stmt->execute();
        $user = $stmt->fetch();
        // fetch = Buscar

        if (isset($user["idUser"])) {
          $_SESSION["idUser"] = $user["idUser"];
          $_SESSION["nome"] = $user["nome"];
          echo "OK";
          header("Location:home.php");
        } else {
    ?>
          <script>
            // success error warning info question
            Swal.fire({
              icon: 'error',
              title: 'Erro!',
              text: 'Login ou senha invalidos',
            })
          </script>
    <?php

        }
      }
    }


    ?>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login</h2>
		    <form class="login-form" action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Usuário</label>
    <input type="text" class="form-control" placeholder="" name="usuario" id="usuario">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Senha</label>
    <input type="password" class="form-control" placeholder="" name="senha" id="senha">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Lembrar-me</small>
    </label>
    <button type="Submit" value="Login" name="Submit" class="btn btn-login float-right">Entrar</button>
  </div>
  
</form>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
     
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Encontre seu pet!</h2>
            <p>Seu amigo de quatro patas esta a sua espera! </p>
        </div>	
  </div>
    </div>
</div>	   
		    
		</div>
	</div>
</div>
</section>
</body>
</html>
