<!doctype html>
<html lang="en">

<?php
    include("functions.php");
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="transfer.css">
 
   
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


<div class="container">
          <?php
              if(isset($_GET['customer_id'])) {
                  $c_id = $_GET['customer_id'];
                  $get_customers = "select * from wallet where id='$c_id'";
                  $run_customers = mysqli_query($con, $get_customers);
                  $row_customers = mysqli_fetch_array($run_customers);
                  $customer_id = $row_customers['ID'];
                  $customer_name = $row_customers['NAME'];
                  $current_balance = $row_customers['AMOUNT'];
                
                  echo "

                  <form action='transfer.php?customer_id=$c_id' method='post' enctype='multipart/form-data'>
                    <div class='main_content'>
                        <div class='left_side'>
                            <div class='title_left'> 
                                <label class='head_left' for='from' ></label>Transferring from</label>
                            </div>  
                       
                              <div class='info_left'>
                                <div class='top_left'>
                                  <label for='from_acc'>Customer Id:</label>
                                  <input type='number' class='form-control' name='from_acc' value='$customer_id' readonly>
                                </div>
                            
                              <div class='mid_left'>
                                  <label for='from_acc_name'>Customer Name</label>
                                  <input type='text' class='form-control' name='from_acc_name' value='$customer_name' readonly>
                              </div>
                              <div class='bottom_left'>
                                  <label for='curr_bal'>Current Balance</label>
                                  <input type='number' class='form-control' name='curr_bal' value='$current_balance' readonly>
                              </div>
                            </div>
                          </div>
                          <div class='right_side'>
                          <div class='title_right'>
                          <label class='head_right'for='to' style='font-size: 20px;'>Transferring to:</label>
                        </div>
                          <div class='info_right'>
                              <div class='top_right'>
                                  <label for='to_acc'>Customer ID</label>
                                  <select class='form-control' name='to_acc' required>
                                      <option value='0'>Select Name on Account</option>
                  ";
                                      $get_customers = "select * from wallet";
                                      $run_customers = mysqli_query($con, $get_customers);
                                      while($row_customers = mysqli_fetch_array($run_customers)) {
                                          $customer_id = $row_customers['ID'];
                                          $customer_name = $row_customers['NAME'];
                                          echo "<option value='$customer_id'>$customer_name</option>";
                                      }
                  echo "
                                  </select>
                              </div>
                              <div class='mid_right'>
                                  <label for='transfer_amt'>Transfer Amount</label>
                                  <input type='number' class='form-control' name='transfer_amt' placeholder='Amount' required>
                              </div> 
                          
                          <div class='bottom_right'>
                              
                                  <label for='transfer_msg'>Message for the reciever</label>
                                  <input type='text' class='form-control' name='transfer_msg' placeholder='Message'>
                              
                          </div>
                        </div>
                    </div>
                    </div>
                        <div class='btn_bott'>
                            <button type='submit' class='transf_now' name='transfer'>Transfer Now</button>
                          </div>
                      </form>
                          <div class='btn_bott_two'>
                            <button class='cancel_transf'>
                                <a href='customers.php' style='text-decoration: none;'></a>Cancel Transfer
                            </button>
                          </div>
                      </div>
                  ";
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

<?php
    if (isset($_POST['transfer'])) {
        $curr_bal = $_POST['curr_bal'];
        $transfer_date = date('d-m-Y H:i:s a');
        $from_acc = $_POST['from_acc'];
        $from_acc_name = $_POST['from_acc_name'];
        $to_acc = $_POST['to_acc'];
        $transfer_amt = $_POST['transfer_amt'];
        $transfer_msg = $_POST['transfer_msg'];
        
        if($to_acc != 0){
            $get_customer = "select AMOUNT from wallet where id=$from_acc";
            $run_customer = mysqli_query($con, $get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            
            if($transfer_amt <= $row_customer['AMOUNT']) {
                $f_customer = "update wallet set AMOUNT=$curr_bal-$transfer_amt where id=$from_acc";
                $run_f_customer = mysqli_query($con, $f_customer);

                $t_customer = "select AMOUNT from wallet where id=$to_acc";
                $run_t_customer = mysqli_query($con, $t_customer);
                $row_t_customer = mysqli_fetch_array($run_t_customer);
                $to_curr_bal = $row_t_customer['AMOUNT'];

                $t_customer_1 = "update wallet set AMOUNT=$to_curr_bal+$transfer_amt where id=$to_acc";
                $run_t_customer_1 = mysqli_query($con, $t_customer_1);
                
                $insert_transfer = "insert into transactions (TRANSFER_DATE, FROM_ACCOUNT, FROM_NAME, TO_ACCOUNT, AMOUNT_TRANSFER, MESSAGE) values ('$transfer_date', $from_acc, '$from_acc_name', $to_acc, $transfer_amt, '$transfer_msg')";
                $run_transfer = mysqli_query($con, $insert_transfer);
                if($run_f_customer && $run_t_customer && $run_t_customer_1 && $run_transfer) {
                    echo '<script>alert("Transfer Under Process...")</script>';
                    echo '<script>window.open("thanks.php", "_self")</script>';
                } else {
                    echo '<script>alert("Unable to transfer")</script>';
                }
            } else {
                echo '<script>alert("Insufficient funds")</script>';
            }
        } else {
            echo '<script>alert("Please select an account to transfer")</script>';
        }
    }
?>
