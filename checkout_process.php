<?php
session_start();
// connection with database
include "db.php";
// cart checking
if (isset($_SESSION["uid"])) {
	$f_name = $_POST["firstname"];
	$email = $_POST['email'];
	$address = $_POST['address'];
    $city = $_POST['city'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardNumber'];
    $expdate = $_POST['expdate'];
    $user_id = $_SESSION["uid"];
    $cardnumberstr = (string)$cardnumber;
    $total_count = $_POST['total_count'];
    $prod_total = $_POST['total_price'];
    //showing order id
    $sql0 = "SELECT order_id from `orders_info`";
    $runquery = mysqli_query($con,$sql0);
    if (mysqli_num_rows($runquery) == 0) {
        echo( mysqli_error($con));
        $order_id = 1;
    } else if (mysqli_num_rows($runquery) > 0) {
        $sql2 = "SELECT MAX(order_id) AS max_val from `orders_info`";
        $runquery1 = mysqli_query($con,$sql2);
        $row = mysqli_fetch_array($runquery1);
        $order_id = $row["max_val"];
        $order_id = $order_id+1;
        echo( mysqli_error($con));
    }
  // insering order info
	$sql = "INSERT INTO `orders_info`
	(`order_id`,`user_id`,`f_name`, `email`,`address`,
	`city`, `cardname`,`cardnumber`,`expdate`,`prod_count`,`total_amt`)
	VALUES ($order_id, '$user_id','$f_name','$email',
    '$address', '$city', '$cardname','$cardnumberstr','$expdate','$total_count','$prod_total')";
    // checking connection
    if (mysqli_query($con,$sql)) {
        $i = 1;
        $prod_id_ = 0;
        $prod_price_ = 0;
        $prod_qty_ = 0;
        while ($i <= $total_count && $prod_qty_ > 0) {
            $str = (string)$i;
            $prod_id_ + $str = $_POST['prod_id_'.$i];
            $prod_id = $prod_id_+$str;
            $prod_price_ + $str = $_POST['prod_price_'.$i];
            $prod_price = $prod_price_ + $str;
            $prod_qty_ + $str = $_POST['prod_qty_'.$i];
            $prod_qty = $prod_qty_ + $str;
            $sub_total = (int)$prod_price * (int)$prod_qty;
            // order products
						$sql1="INSERT INTO `order_products`
            (`order_pro_id`,`order_id`,`product_id`,`qty`,`amt`)
            VALUES (NULL, '$order_id','$prod_id','$prod_qty','$sub_total')";
            // delete from cart
						if (mysqli_query($con,$sql1)) {
                $del_sql = "DELETE from cart where user_id = $user_id";
								// payment success
                if (mysqli_query($con,$del_sql)) {
                    echo"<script>window.location.href='pay.php'</script>";
                } else{
                    echo(mysqli_error($con));
                }
            } else {
                echo(mysqli_error($con));
            }
            $i++;
        }
    } else {
        echo(mysqli_error($con));
    }
} else {
    echo"<script>window.location.href='pay.php'</script>";
}
?>
