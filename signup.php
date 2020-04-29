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
    <body onload="focusSignUp()">
      <script>
        
      </script>
       
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="signup">
                        <h1>Create Account</h1>
                        <form method="post" action="Resources/php/user_registration_script.php">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname" required="true">
                            </div>
                            <div class="form-group">
                                <label for="fname">Last Name</label>
                                <input type="text" class="form-control" name="lname" required="true">
                            </div>
                            <div class="form-group"> 
                                <label for="fname">Phone Number</label><br>
                                <!--<select name="countrycode" class="countrycode">
                                    <option value="volvo">IN +91</option>
                                </select>-->
                                <input type="tel" class="form-control-mobile" name="mobile" required="true">
                            </div>
                            <div class="form-group">
                                <label for="fname">Email</label>
                                <input type="email" class="form-control" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <label for="fname">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>

                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
                    
                
            </div>
            
            <?php
              require 'footer.php';
            ?>

        </div>
        <script src="Resources/js/index.js"></script>
    </body>
</html>
