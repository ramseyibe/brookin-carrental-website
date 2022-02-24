<?php
if(isset($_POST['carname'])){
    $carname=$_POST['carname']; 
}
if(isset($_POST['seat'])){
    $seat=$_POST['seat']; 
}
if(isset($_POST['door'])){
    $door=$_POST['door'];
}
if(isset($_POST['stearing'])){
    $stearing=$_POST['stearing'];
}
if(isset($_POST['dailyprice'])){
    $dailyprice=$_POST['dailyprice'];
}
if(isset($_POST['speed'])){
    $speed=$_POST['speed'];
}
if(isset($_POST['platenumber'])){
    $platenumber=$_POST['platenumber'];
}
if(isset($_POST['driver'])){
    $driver=$_POST['driver'];
}
if(isset($_POST['days'])){
    if(!preg_match("/^[0-9]/",$_POST['days'])){
        $day="Only numbers needed!";
    }
        else{
            if($_POST['days']>="1"){
                if($_POST['days']<"30"){
                    $day=$_POST['days'];
                    $tax='500';    
                    $subtotal= $tax+($dailyprice*$day);
                    $discount='0%';
                    $total=$subtotal;
                }
                elseif($_POST['days']<"60"){
                    $day=$_POST['days'];
                    $tax='1000';    
                    $subtotal= $tax+($dailyprice*$day);
                    $discount='11%';
                    $total=$subtotal-(($subtotal*11)/100);
                }
                elseif($_POST['days']>="60"){
                    $day=$_POST['days'];
                    $tax='3000';    
                    $subtotal= $tax+($dailyprice*$day);
                    $discount='27%';
                    $total=$subtotal-(($subtotal*27)/100);
                }
            }
            
            elseif($_POST['days']<"1") {
                $day="Days must be > 0";
                $tax='0';    
                $subtotal= '0';
                $discount='0%';
                $total='0';
            }
        }
}
?>

<!Doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../css/maincss.css" type="text/css">
<title>BOOKING</title>
</head>
<body>
<!--start of topnav-->    
<?php include('header.php') ?> 
<!--End of topnav-->

<div class="container-header z-1">
    <img src="../cars/mitsubishi-asx-4-wheel-drive-suv-dubai-hire-now.jpg" class="col" height="300px">
    <div class="container-text">
        <h1 class="bold t-c f-22">BROKIN CAR RENTING WEBSITE</h1>
        <p1 class="bold ">Brokin car rental is one of the best car renting company in cameroon. We offer our cars in good health and also ensure the savety of our clients. Some of our cars are also given out with drivers inorder to of service of those who can't drive.</p1>
        <br><br><br>
        <br><br><p2>Popular Searches &#160&#160<a href="cars.php#bmw"><btn-blur>BMW</btn-blur></a>&#160&#160&#160&#160<a href="cars.php#niss"><btn-blur>Nissan Patrol</btn-blur></a>&#160&#160&#160&#160<a href="cars.php#nissa"><btn-blur>Nissan Sunny</btn-blur></a> &#160&#160&#160&#160<a href="cars.php#hyu"><btn-blur class="hide">Hyunda</btn-blur></a></p2>
    </div>
</div>
<!--start of body with sidenav -->
<div class="main-body"><br>
    <div class="row"> 
        <!-- start of sidnav-->
        <?php include('sidebar.php') ?>
         <!--end of sidenav-->   
        <!--column containing the body-->    
        <div class="c0l-lg pm">
            <!--part to be tempare with-->
            <h2 class="center bold t-c">BOOKING PAGE</h2>
            <div class="row row-s">
                <form action="../confirm.php" method="post"></form>
                <div class="col-md p-5 col-md-lg bd-1 bg-g col-md-s-s">
                <form action="email.php" method="post">
                    <input type="name" name="carname" value="<?php echo $carname; ?>" class="t-c center bold input col m-10 p-5" readonly><br><br>
                    <?php echo "<img src='../cars/$platenumber.jpg' width='100%' height='250px'" ?><br>
                    <h3 class="left bold t-c">&#160&#160<u>Car Details</u></h3>
                    &#160&#160Plate number <input type="name" name="platenumber" value="<?php echo $platenumber; ?>" class="input bold" size="8" readonly><br><br>
                    &#160&#160Number of seats <input type="name" name="seat" value="<?php echo $seat; ?>" size="1" class="input bold" readonly><br><br>
                    &#160&#160Number of doors <input type="name" name="door" value="<?php echo $door; ?>" size="1" class="input bold" readonly><br><br>
                    &#160&#160Stearing position <input type="name" name="stearing" value="<?php echo $stearing; ?>" size="1" class="input bold" readonly><br><br>
                    &#160&#160Speed <input type="name" name="speed" value="<?php echo $speed; ?>" size="3" class="input bold" readonly><br><br>
                    &#160&#160Need a driver? <input type="name" name="driver" value="<?php echo $driver; ?>" size="2" class="input bold" readonly><br><br>
                </div>
                <div class="col-md p-5 col-md-lg bd-1 bg-g col-md-s-s">
                    <h3 class="left bold t-c">&#160&#160<u>Receiver Info</u></h3>
                    <table>
                        <tr><td class="bold">Reserve by</td><td><input type="name" name="reserveby" size="15" placeholder="Enter full name" required></td></tr>
                        <tr><td><br><td><br></td></tr>
                        <tr><td class="bold">Tel</td><td><input type="name" name="tel" size="15" placeholder="+237 6********" required></td></tr>
                        <tr><td><br><td><br></td></tr>
                        <tr><td class="bold">Gender</td><td><select><option>Female</option><option>Male</option><option>More</option></select></td></tr>
                        <tr><td><br><td><br></td></tr>
                        <tr><td class="bold">ID or Passport N<sup><u>o</u></sup></td><td><input type="name" name="id" size="15" placeholder="*****************" required></td></tr>
                        <tr><td><br><td><br></td></tr>
                        <tr><td class="bold">Email</td><td><input type="name" name="email" size="15" placeholder="brokin@gmail.com" required></td></tr>
                        <tr><td><br><td><br></td></tr>
                        <tr><td class="bold">Age</td><td><input type="name" name="age" size="15" placeholder="+18" required></td></tr>
                    </table> 
                    <br><b>NB:</b><i>The infomation above should be fill exactly as on your id card or Passport</i><br>
                    <table>
                        <h3 class="left bold t-c">&#160&#160<u>Delivery Info</u></h3>
                        <tr><td class="bold">City</td><td><td><input type="name" name="city" size="15" placeholder="buea" required></td></tr>
                        <tr><td class="bold">Street address</td><td><td><input type="name" name="Street" size="15" placeholder="molyko" required></td></tr>
                        <tr><td class="bold">Date</td><td><td><input type="date" name="date" size="15" required></td></tr>
                        <tr><td class="bold">Time</td><td><td><input type="time" name="time" size="15" placeholder="" required></td></tr>
                        <tr><td colspan="3"><input type="checkbox" required>&#160 I accept the <a href="privacy.php#rentin">renting policy.</a></td></tr>
                    </table>
                    <br>
                </div>
            </div><br>
            <div class="payment">
                <br><h3 class="left bold t-c center">&#160&#160<u>Payment</u></h3>
                <table>
                    <tr><td>N<sup><u>o</u></sup> of days</td><td><input type="days" name="day" value="<?php echo $day; ?>" class="bold input" readonly></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td>Rate per day</td><td><input type="days" name="day" value="<?php echo $dailyprice; ?> FCFA" class="bold input" readonly></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td>Tax rate</td><td><input type="tax" name="tax" value="<?php echo $tax; ?> FCFA" size="9"class="bold input" readonly></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td>Sub total</td><td><input type="subtotal" name="subtotal" value="<?php echo $subtotal; ?> FCFA" size="13"class="bold input" readonly></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td>Discount</td><td><input type="discount" name="discount" value="<?php echo $discount; ?>" size="13"class="bold input" readonly></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td>Total</td><td><input type="total" name="total" value="<?php echo $total; ?> FCFA" size="13"class="bold input" readonly></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td>Payment Method</td><td><select name="payment" required><option>Cash in Office</option><option>Paypay</option><option>Mobile Money</option><option>Credit Card</option><option>Bank Account</option></select></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td colspan="2"><input type="checkbox" required>&#160 I accept the <a href="privacy.php#payment">payment policy.</a></td></tr>
                    <tr><td><br><td><br></td></tr>
                    <tr><td colspan="2"><btn-login><input type="submit" value="Place Order" class="white bg-c bold"></td></btn-login></tr>
                </table>
                </form>
            </div>
            <!--end of temparing part-->
            <!--start of footer-->
            <?php include('footer.php') ?>
            <!--end of footer-->
        </div>             
    </div>
</div>



</body>
</html>