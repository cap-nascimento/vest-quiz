<!DOCTYPE html>
<html lang="en-us">

 <!-- head begin -->
 <head>
  <title>VEST QUIZ</title>

  <!-- custom styles and bootstrap -->
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">

  <!-- scripts -->
  <script src="../js/index.js"></script>

 </head>
 <!-- head end -->

 <!-- body begin -->
 <body>
  <div class="container">
   <div class="row">
    <ul class="list-group">
     <?php
      $test_titles = array(
       "Concurso Banco do Brasil",
       "ENEM",
       "Vestibular UNB",
       "ITA"
      );
      
      for($i = 0; $i < count($test_titles); $i++)
      {
       echo "<a href='exam.php?test=" . $test_titles[$i] . "'>";
       echo "<li class='list-group-item'>Simulado " .  $test_titles[$i] . "</li>";
       echo "</a>";
      }
     ?>
    </ul>
   </div>
  </div>
 </body>
 <!-- body end -->

</html>
