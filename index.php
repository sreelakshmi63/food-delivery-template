<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="Resources/image/logo.png" />
        <title>F.O.O.D.T.O.P.I.A</title>
        <meta charset="UTF-8">
      
       <!--main css-->
       <link href="Resources/css/style.css" rel="stylesheet">   
       <!--font awsome icons-->
       <link href="Resources/css/font-awesome.css" rel="stylesheet"> 
      
    </head>
    <body>
        <div>
          <section id="header">
            <?php
              require 'header.php';
            ?>
          </section>
           <section id="slider">
              <div class="slider-container">
                  <a href="mencollection.php"><img class="mySlides" src="Resources/image/slider/slider1.jpg" style="width:100%; height:350px"></a>
                  <a href="mencollection.php"><img class="mySlides" src="Resources/image/slider/slider2.jpg" style="width:100%; height:350px"></a>
                  <a href="mencollection.php"><img class="mySlides" src="Resources/image/slider/slider3.jpg"  style="width:100%; height:350px"></a>
                  <a href="mencollection.php"><img class="mySlides" src="Resources/image/slider/slider4.png" style="width:100%; height:350px"></a>
                  <button class="slider-button slider-button-left" onclick="plusDivs(-1)"><i class="fa fa-angle-left fa-2x" style="margin-right:5px"></i></button>
                  <button class="slider-button slider-button-right" onclick="plusDivs(1)"><i class="fa fa-angle-right fa-2x" style="margin-right:5px"></i></button> 
                  <div class="slider-title">
                    <span></span>                
                    <h2></h2>                
                  </div>
              </div>
           </section>
          <?php
            include ('Resources/php/connection.php');
            $query="select * from fourcategories";
            $result=mysqli_query($con,$query) or die(mysqli_error($con));
            
          ?>
           <section id="thefourcategories">
             <div class="four-category-box1">
               <h1 id="col1">Under &#8377;99 | Free Delivery</h1>
               <div class="four-category-box1-row1col1">
                <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\',\'0\')"><img src="'.$row[image].'"></button>');
                  echo('<h5><span class="'.$row[vegnon].'">&#9635; </span>'.$row[name].'</h5>');
                  echo ("<h6>".$row[resto]." &nbsp;&nbsp;&#8377;".$row[cost]."</h6>")
                 ?>
               </div>
               <div class="four-category-box1-row2col1">
                 <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\')"><img src="'.$row[image].'"></button>');
                  echo('<h5><span class="'.$row[vegnon].'">&#9635; </span>'.$row[name].'</h5>');
                  echo ("<h6>".$row[resto]." &nbsp;&nbsp;&#8377;".$row[cost]."</h6>")
                 ?>
               </div>
               <div class="four-category-box1-row1col2">
                 <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\')"><img src="'.$row[image].'"></button>');
                  echo('<h5><span class="'.$row[vegnon].'">&#9635; </span>'.$row[name].'</h5>');
                  echo ("<h6>".$row[resto]." &nbsp;&nbsp;&#8377;".$row[cost]."</h6>")
                 ?>
               </div>
               <div class="four-category-box1-row2col2">
                 <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\')"><img src="'.$row[image].'"></button>');
                  echo('<h5><span class="'.$row[vegnon].'">&#9635; </span>'.$row[name].'</h5>');
                  echo ("<h6>".$row[resto]." &nbsp;&nbsp;&#8377;".$row[cost]."</h6>")
                 ?>
               </div>
             </div>

             <div class="four-category-box2">
               <h1>Leon Grill</h1>
               <img src = "Resources/Image/fourcategory/leon.png">
               <p>Enjoy 60% off on entire menu.<br>Use Code: CRIK60</p>
             </div>

             <div class="four-category-box3">
               <h1>Pizza New Arrivals</h1>
               <div class="four-category-box3-row1col1">
                <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\',\'40%\')"><img src="'.$row[image].'"></button>');
                  echo ('<h5>'.$row[name].'</h5>');
                  echo ('<h6>'.$row[resto].'</h6>')
                ?>
               </div>
               <div class="four-category-box3-row2col1">
                 <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\')"><img src="'.$row[image].'"></button>');
                  echo('<h5><span class="'.$row[vegnon].'">&#9635; </span>'.$row[name].'</h5>');
                  echo ("<h6>".$row[resto]." &nbsp;&nbsp;&#8377;".$row[cost]."</h6>")
                 ?>
               </div>
               <div class="four-category-box3-row1col2">
                 <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\')"><img src="'.$row[image].'"></button>');
                  echo('<h5><span class="'.$row[vegnon].'">&#9635; </span>'.$row[name].'</h5>');
                  echo ("<h6>".$row[resto]." &nbsp;&nbsp;&#8377;".$row[cost]."</h6>")
                 ?>
               </div>
               <div class="four-category-box3-row2col2">
                 <?php
                  $row = $result->fetch_assoc();
                  echo ('<button onclick="categoryPop(\''.$row[description].'\',\''.$row[image].'\')"><img src="'.$row[image].'"></button>');
                  echo('<h5><span class="'.$row[vegnon].'">&#9635; </span>'.$row[name].'</h5>');
                  echo ("<h6>".$row[resto]." &nbsp;&nbsp;&#8377;".$row[cost]."</h6>")
                 ?>
               </div>
             </div>

             <div class="four-category-box4">
               <h1>Drunken Monkey</h1>
               <img src = "Resources/Image/fourcategory/drunkmonk.png">
               <p>Enjoy 50% off. <br>Use Code: BLR50OFF</p>
             </div>
          </section>
          <section id="categorypop">
            <div id="categoryPop" class="categoryPop">
              <div class="categoryPop-content" id="categoryPop-content">
                <img src="Resources/Image/fourcategory/pizza1.png" id="categoryPop-img">
                <p id="categoryPop-desc">Description..</p>
                <button id="add-btn" onclick="addtoCart()">Add</button>
              </div>
            </div>
          </section>
          
          <section id="temp">
             <div class="temp">
             </div>
           </section>
           <section id="popularbrands">
             <div class="popularbrands">
               <h2>Popular Brands</h2>
               <div class="logos">
                  <a href="#"><img src = "Resources/Image/popularbrands/kfc.png" style="width:10%"></a>
                  <a href="#"><img src = "Resources/Image/popularbrands/subway.png" style="width:15%"></a>
                  <a href="#"><img src = "Resources/Image/popularbrands/mcd.png" style="width:13%"></a>
                  <a href="#"><img src = "Resources/Image/popularbrands/burgking.png" style="width:10%"></a>
                  <a href="#"><img src = "Resources/Image/popularbrands/tacobell.png" style="width:15%"></a>
                  <a href="#"><img src = "Resources/Image/popularbrands/starbuck.png" style="width:11%"></a>
               </div>

             </div>
           </section>
            
           <?php
              require 'footer.php';
            ?>
        </div>

        <script src="Resources/js/index.js"></script>
    </body>
</html>