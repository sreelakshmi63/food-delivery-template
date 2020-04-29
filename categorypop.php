<?php
	include ('Resources/php/connection.php');
    $query="select * from fourcategories where content_id=".$_GET['id']	;
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($result);
?>
<html>
	<body>
		<?php
			echo ('<p>'.$row['description'].'</p>');
		?>
		<button onclick="addtoCart()">add to cart</button>
		<script src="Resources/js/index.js"></script>
	</body>
</html>