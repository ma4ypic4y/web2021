<!doctype html>
<html lang = "en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Autorization form</title>
  <!-- Bootstrap connection -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <div class="container mt-4">
    <?php
     if ($_COOKIE['user']==''):
      ?>
      <div class="row">
         <div class="col">
           <h1>Create account</h1>
           <form  action="php/check.php" method="post">
             <input type="text" class="form-control" name="login" value="login" id="login" placeholder="login"><br>

             <input type="text" class="form-control" name="name" value="name" id="name" placeholder="name"><br>

             <input type="password" class="form-control" name="pass" value="pass" id="pass" placeholder="password"><br>

             <button class="btn btn-success"  type ="submit" >Register Now</button>
           </form>
         </div>


         <div class="col">
           <h1>Sign In</h1>
           <form  action="php/auth.php" method="post">
             <input type="text" class="form-control" name="login" value="login" id="login" placeholder="login"><br>

             <input type="password" class="form-control" name="pass" value="pass" id="pass" placeholder="password"><br>

             <button class="btn btn-success"  type ="submit" >Log In</button>
           </form>
         </div>

          <?php else:?>
             <p class="auth-page">Hello  <?= $_COOKIE['user'] ?>.  <a href="php/exit.php">exit</a> </p>
          <?php endif; ?>

      </div>
  </div>

</body>
</html>