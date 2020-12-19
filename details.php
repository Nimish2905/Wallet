<!doctype html>
<html lang="en">

<?php
    include("functions.php");
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="profile.css">

   
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

      <div class="container my-4">
        <?php
            if(isset($_GET['customer_id'])) {
                $c_id = $_GET['customer_id'];
                $get_customers = "select * from wallet where id='$c_id'";
                $run_customers = mysqli_query($con, $get_customers);

                while ($row_customers = mysqli_fetch_array($run_customers)) {
                    $customer_id = $row_customers['ID'];
                    $customer_name = $row_customers['NAME'];
                    $customer_email = $row_customers['EMAIL'];
                    $current_balance = $row_customers['AMOUNT'];
                    $customer_image = $row_customers['IMAGE'];
                    echo "
                          <section>
                              <div class='content_left'>
                                  <div class='image_name'>
                                      <img src='images/customers/$customer_image'>
                                      <h2>$customer_name</h2>
                                  </div>
                              </div>
                                              
                              <div class='content_top'>
                                  <div class='top'>   
                                      <h3 >Email :</h3>
                                  </div>
                                  <div class='top_email'>   
                                      <h2>$customer_email</h2>
                                  </div>
                              </div>  
                              <div class='content_bottom'>
                                  <div class='bottom'>   
                                      <h3>Current Balance :</h3>
                                  </div>
                                  <div class='bottom_balance'>   
                                      <h2>$current_balance</h2>
                                  </div>
                              </div>    
                              <div class='buttons'>
                                  <button class='btn_transfer'>
                                      <a href='customers.php' style='text-decoration: none;'>Back to Customers</a>
                                  </button>
                                  <button class='btn_transfer'>
                                      <a href='transfer.php?customer_id=$c_id'>Transfer Money</a>
                                  </button>
                              </div> 
                          </section>
                    ";
                }
            }
        ?>
    </div>







  




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>


</body>

</html>

