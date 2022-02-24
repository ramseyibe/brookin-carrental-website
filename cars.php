<!Doctype html>
<html lang="eng">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/maincss.css" type="text/css">
<title>ALL AVAILABLE CARS</title>
</head>
<body>
<!--start of topnav-->    
<?php include('header.php') ?>
<!--End of topnav-->
<!--start of body with sidenav -->
<div class="main-body"><br>
    <div class="row"> 
        <!-- start of sidnav-->
        <?php include('sidebar.php') ?>
         <!--end of sidenav-->   
        <!--column containing the body-->    
        <div class="c0l-lg pm">
            <!--part to be tempare with-->
            <br><br><h2 class="center t-c">Rent Cars</h2>
            <!--start of row-->
            <div class="row row-s">
              <!--each separated column-->
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="aud">
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
                        &#160Days needed <input type="interger" name="days" class="center" size="2" pattern="[0-9]{1,3}"required><br><br>
                        &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                        <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                    </form>
                </div>  
              <!--end of each separated column-->
              <!--each separated column-->
              <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="audi">
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
          <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="bmw">
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
      <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="chev">
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
                  <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="chevr">
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
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="hyu">
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
            <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="hyun">
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
        <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="kia">
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
            <!--start of row-->
           <div class="row row-s">
              <!--each separated column-->
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="nis">
                    <div class="bd-1 right bold t-c p-5">Available</div>
                    <img src="cars/LT5000Q74.jpg"width="100%"height="200px">
                    <form action="booking.php" method="post">
                        <input type="name" name="carname" value="Nissan Patrol Platinum 2020" class="input center t-c bold f-22-m" size="13"readonly><br>
                        <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                        <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                        <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                        <input type="name" name="dailyprice" value="16000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                        &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                        &#160Plate No<input type="name" name="platenumber" value="LT5000Q74" class="input center" size="8" readonly><br><br> 
                        &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                        &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                        <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                    </form>
                </div>  
              <!--end of each separated column-->
              <!--each separated column-->
              <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="niss">
                <div class="bd-1 right bold t-c p-5">Available</div>
                <img src="cars/LT5003B74.jpg"width="100%"height="200px">
                <form action="booking.php" method="post">
                    <input type="name" name="carname" value="Nissan Patrol Titanium 2020" class="input center t-c bold f-22-m" size="13"readonly><br>
                    <br><butt><input type="name" name="seat" value="5" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                    <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                    <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                    <input type="name" name="dailyprice" value="14000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                    &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                    &#160Plate No<input type="name" name="platenumber" value="LT5003B74" class="input center" size="8" readonly><br><br> 
                    &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                    &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                    <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                </form>
            </div>  
          <!--end of each separated column-->
          <!--each separated column-->
          <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="nissa">
            <div class="bd-1 right bold t-c p-5">Available</div>
            <img src="cars/SW0403H64.jpg"width="100%"height="200px">
            <form action="booking.php" method="post">
                <input type="name" name="carname" value="Nissan Sunny 2020" class="input center t-c bold f-22-m" size="13"readonly><br>
                <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                <input type="name" name="dailyprice" value="7000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                &#160Plate No<input type="name" name="platenumber" value="SW0403H64" class="input center" size="8" readonly><br><br> 
                &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
            </form>
        </div>  
      <!--end of each separated column-->
      <!--each separated column-->
      <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="nissan">
        <div class="bd-1 right bold t-c p-5">Available</div>
        <img src="cars/CR763B74.jpg"width="100%"height="200px">
        <form action="booking.php" method="post">
            <input type="name" name="carname" value="Nissan Sunny 2021" class="input center t-c bold f-22-m" size="13"readonly><br>
            <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
            <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
            <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
            <input type="name" name="dailyprice" value="10000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
            &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
            &#160Plate No<input type="name" name="platenumber" value="CR763B74" class="input center" size="8" readonly><br><br> 
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
                  <div class="col-smm p-5 col-md-lg bd-1 col-md-md"id="nissans">
                      <div class="bd-1 right bold t-c p-5">Available</div>
                      <img src="cars/SW5463B04.jpg"width="100%"height="200px">
                      <form action="booking.php" method="post">
                          <input type="name" name="carname" value="nissan sunny sedan" class="input center t-c bold f-22-m" size="13"readonly><br>
                          <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                          <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                          <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                          <input type="name" name="dailyprice" value="5000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                          &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                          &#160Plate No<input type="name" name="platenumber" value="SW5463B04" class="input center" size="8" readonly><br><br> 
                          &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}"size="2"required><br><br>
                          &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                          <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                      </form>
                  </div>  
                <!--end of each separated column-->
                <!--each separated column-->
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="rol">
                  <div class="bd-1 right bold t-c p-5">Available</div>
                  <img src="cars/SW51054B74.jpg"width="100%"height="200px">
                  <form action="booking.php" method="post">
                      <input type="name" name="carname" value="Rolls Royce Cullinan 2019" class="input center t-c bold f-22-m" size="13"readonly><br>
                      <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                      <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                      <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                      <input type="name" name="dailyprice" value="13000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                      &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                      &#160Plate No<input type="name" name="platenumber" value="SW51054B74" class="input center" size="8" readonly><br><br> 
                      &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                      &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                      <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                  </form>
              </div>  
            <!--end of each separated column-->
            <!--each separated column-->
            <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="roll">
              <div class="bd-1 right bold t-c p-5">Available</div>
              <img src="cars/SW5460J70.jpg"width="100%"height="200px">
              <form action="booking.php" method="post">
                  <input type="name" name="carname" value="Rolls Royce Wraith 2017" class="input center t-c bold f-22-m" size="13"readonly><br>
                  <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
                  <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
                  <butt><input type="name" name="stearing" value="R" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
                  <input type="name" name="dailyprice" value="8000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
                  &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
                  &#160Plate No<input type="name" name="platenumber" value="SW5460J70" class="input center" size="8" readonly><br><br> 
                  &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
                  &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
                  <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
              </form>
          </div>  
        <!--end of each separated column-->
        <!--each separated column-->
        <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="toy">
          <div class="bd-1 right bold t-c p-5">Available</div>
          <img src="cars/NW5153B74.jpg"width="100%"height="200px">
          <form action="booking.php" method="post">
              <input type="name" name="carname" value="toyota fortuner 2016" class="input center t-c bold f-22-m" size="13"readonly><br>
              <br><butt><input type="name" name="seat" value="4" class="input center butt bold" size="1"readonly><img src="logo/seat.png" width="20px" height="17px"></butt>
              <butt><input type="name" name="door" value="4" class="input center butt bold" size="1"readonly><img src="logo/door.png" width="17px" height="17px"></butt>
              <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
              <input type="name" name="dailyprice" value="9000" class="input center t-c" size="1" readonly>FCFA per day<br><br>
              &#160Speed<input type="name" name="speed" value="60km/h" class="input center" size="4" readonly><br><br> 
              &#160Plate No<input type="name" name="platenumber" value="NW5153B74" class="input center" size="8" readonly><br><br> 
              &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
              &#160Driver needed <select name="driver"><option>No</option><option>Yes</option></select><br><br>
              <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
          </form>
      </div>  
    <!--end of each separated column-->
              </div>
              <!--end of row-->
              <br><br><h2 class="center t-c">Rent Cars With Driver</h2>
              <!--start of row-->
            <div class="row row-s">
                <!--each separated column-->
                  <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="lex">
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
                          &#160Days needed <input type="interger" name="days"pattern="[0-9]{1,3}" class="center" size="2"required><br><br>
                          &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                          <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                      </form>
                  </div>  
                <!--end of each separated column-->
                <!--each separated column-->
                <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="mer">
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
            <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="merc">
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
        <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="merce">
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
              &#160Days needed <input type="interger" name="days" class="center"pattern="[0-9]{1,3}" size="2"required><br><br>
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
                    <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="mg">
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
                            &#160Days needed <input type="interger" name="days"pattern="[0-9]{1,3}" class="center" size="2"required><br><br>
                            &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                            <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                        </form>
                    </div>  
                  <!--end of each separated column-->
                  <!--each separated column-->
                  <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="mit" >
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
                        &#160Days needed <input type="interger" name="days"pattern="[0-9]{1,3}" class="center" size="2"required><br><br>
                        &#160Driver needed <select name="driver"><option>Yes</option></select><br><br>
                        <input type="submit" name="submit" value="Rent Car" class="center rent white bg-c p-5" ><br><br>
                    </form>
                </div>  
              <!--end of each separated column-->
              <!--each separated column-->
              <div class="col-smm p-5 col-md-lg bd-1 col-md-md" id="mits">
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
                <butt><input type="name" name="stearing" value="L" class="input center butt bold" size="1"readonly><img src="logo/steering.png" width="20px" height="17px"></butt><br><br>
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
                <br><br><t class="white">VIEW ALL</t><br><br>
            <!--end of temparing part-->
            <!--start of footer-->
            <?php include('footer.php') ?>
            <!--end of footer-->
        </div>             
    </div>
</div>



</body>
</html>