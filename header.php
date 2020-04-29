
<nav class="navbar">
    <div class="navbar-header">
        <div class="shop-logo">
            <a href="index.php">
                <img src="Resources/image/logo.png">
                <p>FOODTOPIA</p>
               
            </a>
        </div>
        <div class="header-btn">
        	<ul>
                <?php
                    
                    if(isset($_SESSION['email'])){
                        echo '<li class="greetings">Hello, '.$_SESSION["name"].'</li>';

                ?>
        		 
        			<!--<li><a href="signup.php" id="signup"><i class="fa fa-user" style="margin-right:5px"></i>Sign Up</a></li>-->
        			<li class="dropdown">
                        <a href="" id="login"><i class="fa fa-user" style="margin-right:5px"></i>Account & Details</a>
                        <div class="dropdown-content"> 
                            <a href="#">My Account</a>
                            <a href="logout.php">Sign Out</a>
                        </div>
                    </li>
        	 		<li><a href="login.php"><i class="fa fa-shopping-cart fa-2x" style="margin-right:5px; margin-top:-6px"></i></a></li>
        	 	    
                <?php
                    }else{
                ?> 
                   <!-- <li><a href="signup.php" id="signup"><i class="fa fa-user" style="margin-right:5px"></i>Sign Up</a></li> -->
                    <li><a href="login.php" id="login"><i class="fa fa-sign-in" style="margin-right:5px"></i>Sign In</a></li>
                    <li><a href="login.php"><i class="fa fa-shopping-cart fa-2x" style="margin-right:5px; margin-top:-6px"></i></a></li>
                <?php
                    }
                ?>
                <button class="cart-btn-count" id="cart-btn-count">0</button>
        	</ul>
        	<!--<i class="fa fa-shopping-cart fa-2x cart-btn" style="margin-right:5px"></i>-->
            
        	

        </div>
        
   	</div>
</nav>