<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <title>Login</title>
  </head>
  <body >
  <div class="signupFrm">
    <div class="wrapper">
    <form action="<?=url_to('login')?>" method="POST" class="form">
      <h1 class="title" ><center></center>Iniciar sesión</center></h1>
      <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                       <?php endif;?>

      <div class="inputContainer">
        <input type="text" name="usuario" class="input" placeholder="a" required="">
        <label for="usuario" class="label"><i class="bi bi-person-fill"></i>Usuario</label>
      </div>

      <div class="inputContainer">
        <input type="password" name="password" class="input"  placeholder="a" required="">
        <label for="password" class="label"><i class="bi bi-lock-fill"></i>Contraseña</label>
      </div>
      <div class="ub1">
<input type="checkbox" onclick="verpassword()" >Mostrar contraseña
 </div>
      

     

      <input type="submit" class="submitBtn" value="Entrar">
      
    </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script>
  function verpassword(){
      var tipo = document.getElementById("txtpassword");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>


</body>
</html>



    
    

 

   