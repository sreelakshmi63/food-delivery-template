<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="shortcut icon" href="Resources/image/logo_title.png" />
        <title>F.O.O.D.T.O.P.I.A</title>
        <meta charset="UTF-8">
      
       <!--main css-->
       <link href="Resources/css/style.css" rel="stylesheet">   
        <link href="Resources/css/signup.css" rel="stylesheet">   
       <!--font awsome icons-->
       <link href="Resources/css/font-awesome.css" rel="stylesheet"> 
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            
                        <div class="logout">
                            <div class="logout-heading"></div>
                            <div class="logout-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    
            <?php
              require 'footer.php';
            ?>
           </footer>
        </div>
    </body>
</html>
