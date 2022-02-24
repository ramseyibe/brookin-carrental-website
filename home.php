<!Doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/maincss.css" type="text/css">
<title>BROKIN CAR RENTAL</title>
</head>
<body>
<!--start of topnav-->    
<?php include('header.php') ?>
<!--End of topnav-->

<div class="container-header z-1">
    <img src="cars/mitsubishi-asx-4-wheel-drive-suv-dubai-hire-now.jpg" class="col" height="300px">
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
            <h2 class="center t-c">Rent Cars</h2>
            <P3 class="Ccenetr m-10 p-5 t-c bold f-20-m f-md-14">Browse the wildest selection of cars Available in cameroon. We got you cover where ever you are. All you need is place and order letting us know when you will need the car and the location. Also, we over free cancellation and full refund within 24 hours.</P3><br><br>
            <!--start of row-->
            <div class="row row-s">
              <!--each separated column-->
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                    <div class="bd-1 right bold t-c p-5">Available</div>
                    <img src="cars/SW5463B74.jpg"width="100%"height="200px">
                    <form action="booking.php" method="post">
                        <input type="name" name="carname" value="Audi A6 2018" class="input center t-c bold f-22-m" size="13"readonly><br>
                        <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                        <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                        <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                        <input type="name" name="dailyprice" value="11000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                        &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                        &#160Plate No<input type="name" name="platenumber" value="SW5463B74" class="input center" size="8" readonly><br><br> 
                        &#160Days needed <input type="interger" name="days"pattern="[0-9]{1,3}" class="center" size="2"required><br><br>
                        &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                        <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                    </form>
                </div>  
              <!--end of each separated column-->
              <!--each separated column-->
              <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                <div class="bd-1 right bold t-c p-5">Available</div>
                <img src="cars/LT5963B74.jpg"width="100%"height="200px">
                <form action="booking.php" method="post">
                    <input type="name" name="carname" value="Audi Q8 2019" class="input center t-c bold f-22-m" size="13"readonly><br>
                    <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                    <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                    <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                    <input type="name" name="dailyprice" value="5000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                    &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                    &#160Plate No<input type="name" name="platenumber" value="LT5963B74" class="input center" size="8" readonly><br><br> 
                    &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                    &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                    <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                </form>
            </div>  
          <!--end of each separated column-->
          <!--each separated column-->
          <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
            <div class="bd-1 right bold t-c p-5">Available</div>
            <img src="cars/SW5403A64.jpg"width="100%"height="200px">
            <form action="booking.php" method="post">
                <input type="name" name="carname" value="BMW 4 Series Convertible" class="input center t-c bold f-22-m" size="13"readonly><br>
                <br><butt><input type="name" name="seat" value="2" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                <butt><input type="name" name="door" value="2" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                <input type="name" name="dailyprice" value="7000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                &#160Plate No<input type="name" name="platenumber" value="SW5403A64" class="input center" size="8" readonly><br><br> 
                &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
            </form>
        </div>  
      <!--end of each separated column-->
      <!--each separated column-->
      <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
        <div class="bd-1 right bold t-c p-5">Available</div>
        <img src="cars/CR0063B74.jpg"width="100%"height="200px">
        <form action="booking.php" method="post">
            <input type="name" name="carname" value="Chevrolet Corvette Grand Sport 2019" class="input center t-c bold f-22-m" size="13"readonly><br>
            <br><butt><input type="name" name="seat" value="2" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
            <butt><input type="name" name="door" value="2" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
            <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
            <input type="name" name="dailyprice" value="12000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
            &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
            &#160Plate No<input type="name" name="platenumber" value="CR0063B74" class="input center" size="8" readonly><br><br> 
            &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
            &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
            <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
        </form>
    </div>  
  <!--end of each separated column-->
            </div>
            <!--end of row-->
            <!--start of row-->
            <div class="row row-s">
                <!--each separated column-->
                  <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                      <div class="bd-1 right bold t-c p-5">Available</div>
                      <img src="cars/CR9463B74.jpg"width="100%"height="200px">
                      <form action="booking.php" method="post">
                          <input type="name" name="carname" value="Chevrolet Malibu 2020" class="input center t-c bold f-22-m" size="13"readonly><br>
                          <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                          <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                          <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                          <input type="name" name="dailyprice" value="8000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                          &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                          &#160Plate No<input type="name" name="platenumber" value="CR9463B74" class="input center" size="8" readonly><br><br> 
                          &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                          &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                          <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                      </form>
                  </div>  
                <!--end of each separated column-->
                <!--each separated column-->
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                  <div class="bd-1 right bold t-c p-5">Available</div>
                  <img src="cars/SW54054B74.jpg"width="100%"height="200px">
                  <form action="booking.php" method="post">
                      <input type="name" name="carname" value="hyunda creta crossover" class="input center t-c bold f-22-m" size="13"readonly><br>
                      <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                      <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                      <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                      <input type="name" name="dailyprice" value="11000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                      &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                      &#160Plate No<input type="name" name="platenumber" value="SW54054B74" class="input center" size="8" readonly><br><br> 
                      &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                      &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                      <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                  </form>
              </div>  
            <!--end of each separated column-->
            <!--each separated column-->
            <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
              <div class="bd-1 right bold t-c p-5">Available</div>
              <img src="cars/SW5460Y70.jpg"width="100%"height="200px">
              <form action="booking.php" method="post">
                  <input type="name" name="carname" value="hyundai accent" class="input center t-c bold f-22-m" size="13"readonly><br>
                  <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                  <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                  <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                  <input type="name" name="dailyprice" value="6000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                  &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                  &#160Plate No<input type="name" name="platenumber" value="SW5460Y70" class="input center" size="8" readonly><br><br> 
                  &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                  &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                  <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
              </form>
          </div>  
        <!--end of each separated column-->
        <!--each separated column-->
        <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
          <div class="bd-1 right bold t-c p-5">Available</div>
          <img src="cars/NW5063B74.jpg"width="100%"height="200px">
          <form action="booking.php" method="post">
              <input type="name" name="carname" value="Kia Seltos 2020" class="input center t-c bold f-22-m" size="13"readonly><br>
              <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
              <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
              <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
              <input type="name" name="dailyprice" value="9000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
              &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
              &#160Plate No<input type="name" name="platenumber" value="NW5063B74" class="input center" size="8" readonly><br><br> 
              &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
              &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
              <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
          </form>
      </div>  
    <!--end of each separated column-->
              </div>
              <!--end of row-->
              <br><br><a href="cars.php"><btn-login class="left">VIEW ALL</btn-login></a>
              <br><br><h2 class="center t-c">Rent Cars With Driver</h2>
              <P3 class="Ccenetr m-10 p-5 t-c bold f-20-m f-md-14">This are special cars that can only be given out with our own drivers.</P3><br><br>
              <!--start of row-->
            <div class="row row-s">
                <!--each separated column-->
                  <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                      <div class="bd-1 right bold t-c p-5">Available</div>
                      <img src="cars/NW0463B74.jpg"width="100%"height="200px">
                      <form action="booking.php" method="post">
                          <input type="name" name="carname" value="Lexus RX Series 2021" class="input center t-c bold f-22-m" size="13"readonly><br>
                          <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                          <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                          <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                          <input type="name" name="dailyprice" value="7500" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                          &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                          &#160Plate No<input type="name" name="platenumber" value="NW0463B74" class="input center" size="8" readonly><br><br> 
                          &#160Days needed <input type="interger" name="days" class="center" pattern="[0-9]{1,3}"size="2"required><br><br>
                          &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                          <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                      </form>
                  </div>  
                <!--end of each separated column-->
                <!--each separated column-->
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                  <div class="bd-1 right bold t-c p-5">Available</div>
                  <img src="cars/SW5123C74.jpg"width="100%"height="200px">
                  <form action="booking.php" method="post">
                      <input type="name" name="carname" value="Mercedes Benz E200 2019" class="input center t-c bold f-22-m" size="13"readonly><br>
                      <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                      <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                      <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                      <input type="name" name="dailyprice" value="5000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                      &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                      &#160Plate No<input type="name" name="platenumber" value="SW5123C74" class="input center" size="8" readonly><br><br> 
                      &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                      &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                      <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                  </form>
              </div>  
            <!--end of each separated column-->
            <!--each separated column-->
            <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
              <div class="bd-1 right bold t-c p-5">Available</div>
              <img src="cars/LT5460B11.jpg"width="100%"height="200px">
              <form action="booking.php" method="post">
                  <input type="name" name="carname" value="Mercedes Benz E300 2019" class="input center t-c bold f-22-m" size="13"readonly><br>
                  <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                  <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                  <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                  <input type="name" name="dailyprice" value="6500" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                  &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                  &#160Plate No<input type="name" name="platenumber" value="LT5460B11" class="input center" size="8" readonly><br><br> 
                  &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                  &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                  <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
              </form>
          </div>  
        <!--end of each separated column-->
        <!--each separated column-->
        <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
          <div class="bd-1 right bold t-c p-5">Available</div>
          <img src="cars/SW0000B74.jpg"width="100%"height="200px">
          <form action="booking.php" method="post">
              <input type="name" name="carname" value="Mercedes Benz GLE63 AMG 2021" class="input center t-c bold f-22-m" size="13"readonly><br>
              <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
              <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
              <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
              <input type="name" name="dailyprice" value="15000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
              &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
              &#160Plate No<input type="name" name="platenumber" value="SW0000B74" class="input center" size="8" readonly><br><br> 
              &#160Days needed <input type="interger" name="days" class="center" pattern="[0-9]{1,3}"size="2"required><br><br>
              &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
              <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
          </form>
      </div>  
    <!--end of each separated column-->
              </div>
              <!--end of row-->
              <!--start of row-->
              <div class="row row-s">
                  <!--each separated column-->
                    <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                        <div class="bd-1 right bold t-c p-5">Available</div>
                        <img src="cars/SW5151R74.jpg"width="100%"height="200px">
                        <form action="booking.php" method="post">
                            <input type="name" name="carname" value="MG ZS 2020 6223" class="input center t-c bold f-22-m" size="13"readonly><br>
                            <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                            <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                            <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                            <input type="name" name="dailyprice" value="10000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                            &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                            &#160Plate No<input type="name" name="platenumber" value="SW5151R74" class="input center" size="8" readonly><br><br> 
                            &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                            &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                            <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                        </form>
                    </div>  
                  <!--end of each separated column-->
                  <!--each separated column-->
                  <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                    <div class="bd-1 right bold t-c p-5">Available</div>
                    <img src="cars/NW758G74.jpg"width="100%"height="200px">
                    <form action="booking.php" method="post">
                        <input type="name" name="carname" value="Mitsubishi ASX 2021" class="input center t-c bold f-22-m" size="13"readonly><br>
                        <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                        <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                        <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                        <input type="name" name="dailyprice" value="7000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                        &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                        &#160Plate No<input type="name" name="platenumber" value="NW758G74" class="input center" size="8" readonly><br><br> 
                        &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                        &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                        <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                    </form>
                </div>  
              <!--end of each separated column-->
              <!--each separated column-->
              <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
                <div class="bd-1 right bold t-c p-5">Available</div>
                <img src="cars/CT5763K74.jpg"width="100%"height="200px">
                <form action="booking.php" method="post">
                    <input type="name" name="carname" value="mitsubishi montero sports edition 2016" class="input center t-c bold f-22-m" size="13"readonly><br>
                    <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                    <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                    <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                    <input type="name" name="dailyprice" value="12000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                    &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                    &#160Plate No<input type="name" name="platenumber" value="CT5763K74" class="input center" size="8" readonly><br><br> 
                    &#160Days needed <input type="interger" name="days"pattern="[0-9]{1,3}" class="center" size="2"required><br><br>
                    &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                    <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                </form>
            </div>  
          <!--end of each separated column-->
          <!--each separated column-->
          <div class="col-smm p-5 col-md-lg bd-1 col-md-md">
            <div class="bd-1 right bold t-c p-5">Available</div>
            <img src="cars/SW54453S74.jpg"width="100%"height="200px">
            <form action="booking.php" method="post">
                <input type="name" name="carname" value="Nissan Micra 2020" class="input center t-c bold f-22-m" size="13"readonly><br>
                <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                <butt><input type="name" name="staering" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                <input type="name" name="dailyprice" value="4500" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                &#160Plate No<input type="name" name="platenumber" value="SW54453S74" class="input center" size="8" readonly><br><br> 
                &#160Days needed <input type="interger" name="days"pattern="[0-9]{1,3}" class="center" size="2"required><br><br>
                &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
            </form>
        </div>  
      <!--end of each separated column-->
                </div>
                <!--end of row-->
                <br><br><a href="cars.php"><btn-login class="left">VIEW ALL</btn-login></a><br><br>
               
            <!--end of temparing part-->
            <!--start of footer-->
            <?php include('footer.php') ?>
            <!--end of footer-->
        </div>             
    </div>
</div>



</body>
</html>