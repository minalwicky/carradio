<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<title>CARRADIO</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="seller.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="bar">
            <img src="Capture.PNG" class="logo">
            <nav>
            <ul>
                <li><a class="active" href="sellerpage.php">Add new vehicle</a></li>
                <li><a href="sellerpending.html">Pending Ads</a></li>
                <li><a href="sellerapproved.html">Approved Ads</a></li>
                <li><a href="sellerreject.html">Rejected Ads</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                
                
              </ul>
            </nav>
          </div>
          <br><br><br><br><br>
        <form action="insertSellerDet.php" method="post">
          <label for="vname">Vehicle Name</label>
          <input type="text" id="vname" name="vname" placeholder="Vehicle name..">
      
          <label for="yom">Year of Manufacture</label>
          <br>
          <input type="date" id="yom" name="yom" placeholder="Vehicle's year of manufacture..">
      <br>
          <label for="etype">Engine type</label>
          <input type="text" id="etype" name="etype" placeholder="Vehicle's engine type..">
      
          <label for="email">Contact Number</label>
          <input type="text" id="email" name="email" placeholder="Your Email Address..">
          
      
          <label for="subject">Insert Vehicle Image</label>
          <br>
          <input type="file" id="vimage" name="img">
      <br>
      <br>
      <br>
          <input type="submit" value="Submit">
        </form>
      </div>
      </body>
</html>