<!DOCTYPE html>
<html lang="en-US">

 <!-- head start -->
 <head>
  <title>VEST QUIZ</title>
  
  <!-- styles 
  <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

  <!-- scripts -->
  <script src="js/index.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

 </head>
 <!-- head end -->

 <!-- body start -->
 <body>
  <!-- container begin  -->
  <div class="container">
   <!-- row login form begin -->
   <div class="row">
    <!-- col login form begin-->
    <div class="col-md-4">

     <!-- login form begin -->
     <form action="php/login.php" method="post">
      <div class="form-group">
       <input type="email" class="form-control" name="email"
              placeholder="Email">
      </div>
      <div class="form-group">
       <input type="password" class="form-control" name="password"
              placeholder="Senha">
      </div>
      <button type="submit" class="btn btn-primary">Entrar!</button>
     </form>
     <!-- login form end -->

    </div>
    <!-- col login form end-->
   </div>
   <!-- row login form end -->
  </div>
  <!-- container end -->
 </body>
 <!-- body end -->

</html>

