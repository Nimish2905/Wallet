<?php
$con = mysqli_connect("localhost","root","","youtube");
    function getCustomers(){
        global $con;
        $get_customers = "select * from wallet";
        $run_customers = mysqli_query($con,$get_customers);

        while($row_customers = mysqli_fetch_array($run_customers)) {
            $customer_id = $row_customers['ID'];
            $customer_name = $row_customers['NAME'];
            $customer_email = $row_customers['EMAIL'];
            $customer_balance = $row_customers['AMOUNT'];
            echo"
                <tr>
                    <td>$customer_id</td>
                    <td><a href='details.php?customer_id=$customer_id'>$customer_name</a></td>
                    <td>$customer_email</td>
                    <td>$customer_balance</td>
                    </tr>
            ";
        }
    }
?>



