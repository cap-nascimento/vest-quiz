<!DOCTYPE html>
<html lang="en-us">
 
 <!-- head begin -->
 <head>
  <title>VEST QUIZ</title>

  <!-- custom styles and bootstrap -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

  <!-- scripts -->
  <script src="../js/index.js"></script>
  <script src="../js/bootstrap/bootstrap.min.js"></script>
 </head>
 <!-- head end -->

 <!-- body begin -->
 <body>
  <?php
   $test_title = $_GET['test'];
   echo "<h3>Questions from $test_title exam.</h3>";
  ?>
 </body>
 <!-- body end-->

</html>
