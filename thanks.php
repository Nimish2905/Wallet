<!doctype html>
<html lang="en">

<?php
    header( "refresh:15;url=customers.php" );
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="thanks.css">

   
  <title>Wallet</title>
</head>

<body>
        <header>
            <a href="#" class="logo"><img src="images/logo.png"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="customers.php">Customer List</a></li>

            </ul>
        </header>
<?php

echo " 

    
        <div class='content'>
            <div class='title'>
                <h1>Transfer successful !</h1>
            </div>
            <div class='img_thanks'>
                <img src='images/thanks.png'>
            </div>
            <div class='statement'>
                <h3>Thank you for banking with us</h3>
            </div>
            <div id='counter'></div>
        </div>
         ";
        ?> 
    <script src='logic.js' async defer></script>
    </body>
</html>

