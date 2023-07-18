<?php
	//echo "I am here!!!";
	date_default_timezone_set('America/Vancouver');
	//$link = mysqli_connect("11.78.0.38", "root", "", "stellarcustomers", "3308");
	$link = mysqli_connect("localhost", "websor", "st78ellar%HH7.", "stellarwholesaleinc", "3306");
	//echo "/n  LINK is: " + $link;
	$link->set_charset("utf8");
	
	$ip_server = $_SERVER['SERVER_ADDR']; 
	$date = date('m/d/Y h:i:s a', time());
	if ($link)
	{
		echo "<p>Conextion successfully </p>";
	}else
	{
		echo "<p>Erro, Access denied</p>";
	}

	if ($_POST["name"] != "" and $_POST["email"] != "")
	{   
		$name = $_POST["name"];
		$email = $_POST["email"];
		
		$result = mysqli_query($link, "SELECT * FROM customers WHERE email ='$email'");
		
		if($result->num_rows<1)//if the email does not exist
		{
			if($_POST["companyName"] == "")
			{
				$companyName = "N/A";
			}
			else
			{
				$companyName = $_POST["companyName"]; 
			}
					
			mysqli_query($link,"INSERT INTO customers(id_customers,name,email,companyName,date) VALUES ('NULL','$name','$email','$companyName','$date')") or die("ERROR, trying to insert data");
			
			echo "Conextion successfully";
			
			header('Location: ..?value=1');
		}
		else//the email exits, so then
		{
			header('Location: ..?value=0');
			//echo '<p>You are already registered!! <a href="http://localhost/StellarCustomerDB/startbootstrap-agency-gh-pages/index.html">formulario</a></p>';
		}		
	}
	else
	{
		//header('Location: ..?value=1');
		//echo "http://localhost/StellarCustomerDB/startbootstrap-agency-gh-pages/index.html"';
	}
	
?>