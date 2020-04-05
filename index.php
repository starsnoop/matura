<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo.png" />
        <title>GGexpress</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Pozdravljeni na GGexpress</h1>
                       <p>Zaradi ekstremnih razmer vsi izdelki -30%.</p>
                       <a href="products.php" class="btn btn-danger">Kupi zdaj</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/laptop.png" alt="Prenosniki">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Prenosniki</p>
                                        <p>Izberite sebi najboljši prenosnik.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/pc4.png" alt="Racunalniki">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Računalniki</p>
                                    <p>Izberite si svoj novi namizni računalnik.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/keyboard.png" alt="Rac_oprema">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Računalniška oprema</p>
                                   <p>Izbiraje med novo in kakovostno opremo za svoj računalnik.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright © 2020-2020 Spletna trgovina GGexpress.</p>
                   <p>Stran narejena za šolske potrebe.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>