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
    <body onload="focusLoginIn()">
      <script>
        
      </script>
       
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="login">
                        <h1>Login</h1>
                        <form method="post" action="Resources/php/user_login_script.php">
                            <div class="form-group">
                                <label for="fname">Email or mobile phone number</label>
                                <input type="text" class="form-control" name="email" required="true">
                            </div>
                            <div class="form-group">
                                <label for="fname">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>

                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Continue">
                            </div>
                        </form>
                        <p>No account yet?<a href="signup.php">Register Here</a></p>
                    
                
            </div>
            <br><br><br><br><br><br>
            <?php
              require 'footer.php';
            ?>

        </div>
        <script src="Resources/js/index.js"></script>
    </body>
</html>
