<?php
// Check for empty fields
$count = $_POST['number'];
echo nl2br($count."\n",false);

if(empty($_POST['name']) || empty($_POST['phone']))
{
	echo "No arguments Provided!";
	return false;
}
else
{
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$to = 'websor@stellarinc.ca'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website Order Form:  $name";
	$headers = "From: noreply@stellarinc.ca\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$email_body .= "You have received a new message from your website order form.\n\n"."Here are the details:\n\n Customer Name: $name\n\nPhone number: $phone\n\nOrder details:\n\n";
	$information = strip_tags(htmlspecialchars($_POST['info']));

	if($count == 1)
	{
		$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		//$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nQty: $qty\n\n";
		echo nl2br($email_body,false);
	}
	else if($count == 2)
	{
		$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		//$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nQty: $qty\n\n";

		$sku2 = $_POST['sku2'];
		//$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku2 \nQty: $qty\n\n";
		echo nl2br($email_body,false);
	}
	
	else if($count == 3)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
	}
		else if($count == 4)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
			else if($count == 5)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
				else if($count == 6)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
					else if($count == 7)
	{
		$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
					else if($count == 8)
	{
	$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
	
					else if($count == 9)
	{
		$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				
			$sku = strip_tags(htmlspecialchars($_POST['sku9']));
		$product = strip_tags(htmlspecialchars($_POST['product9']));
		$qty = strip_tags(htmlspecialchars($_POST['qty9'])); 
		$email_body .= "Product 9\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
	
						else if($count == 10)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				
			$sku = strip_tags(htmlspecialchars($_POST['sku9']));
		$product = strip_tags(htmlspecialchars($_POST['product9']));
		$qty = strip_tags(htmlspecialchars($_POST['qty9'])); 
		$email_body .= "Product 9\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				$sku = strip_tags(htmlspecialchars($_POST['sku10']));
		$product = strip_tags(htmlspecialchars($_POST['product10']));
		$qty = strip_tags(htmlspecialchars($_POST['qty10'])); 
		$email_body .= "Product 10\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
							else if($count == 11)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				
			$sku = strip_tags(htmlspecialchars($_POST['sku9']));
		$product = strip_tags(htmlspecialchars($_POST['product9']));
		$qty = strip_tags(htmlspecialchars($_POST['qty9'])); 
		$email_body .= "Product 9\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				$sku = strip_tags(htmlspecialchars($_POST['sku10']));
		$product = strip_tags(htmlspecialchars($_POST['product10']));
		$qty = strip_tags(htmlspecialchars($_POST['qty10'])); 
		$email_body .= "Product 10\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
						$sku = strip_tags(htmlspecialchars($_POST['sku11']));
		$product = strip_tags(htmlspecialchars($_POST['product11']));
		$qty = strip_tags(htmlspecialchars($_POST['qty11'])); 
		$email_body .= "Product 11\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
								else if($count == 12)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				
			$sku = strip_tags(htmlspecialchars($_POST['sku9']));
		$product = strip_tags(htmlspecialchars($_POST['product9']));
		$qty = strip_tags(htmlspecialchars($_POST['qty9'])); 
		$email_body .= "Product 9\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				$sku = strip_tags(htmlspecialchars($_POST['sku10']));
		$product = strip_tags(htmlspecialchars($_POST['product10']));
		$qty = strip_tags(htmlspecialchars($_POST['qty10'])); 
		$email_body .= "Product 10\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
						$sku = strip_tags(htmlspecialchars($_POST['sku11']));
		$product = strip_tags(htmlspecialchars($_POST['product11']));
		$qty = strip_tags(htmlspecialchars($_POST['qty11'])); 
		$email_body .= "Product 11\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku12']));
		$product = strip_tags(htmlspecialchars($_POST['product12']));
		$qty = strip_tags(htmlspecialchars($_POST['qty12'])); 
		$email_body .= "Product 12\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
	}
									else if($count == 13)
	{
		$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				
			$sku = strip_tags(htmlspecialchars($_POST['sku9']));
		$product = strip_tags(htmlspecialchars($_POST['product9']));
		$qty = strip_tags(htmlspecialchars($_POST['qty9'])); 
		$email_body .= "Product 9\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				$sku = strip_tags(htmlspecialchars($_POST['sku10']));
		$product = strip_tags(htmlspecialchars($_POST['product10']));
		$qty = strip_tags(htmlspecialchars($_POST['qty10'])); 
		$email_body .= "Product 10\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
						$sku = strip_tags(htmlspecialchars($_POST['sku11']));
		$product = strip_tags(htmlspecialchars($_POST['product11']));
		$qty = strip_tags(htmlspecialchars($_POST['qty11'])); 
		$email_body .= "Product 11\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku12']));
		$product = strip_tags(htmlspecialchars($_POST['product12']));
		$qty = strip_tags(htmlspecialchars($_POST['qty12'])); 
		$email_body .= "Product 12\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku13']));
		$product = strip_tags(htmlspecialchars($_POST['product13']));
		$qty = strip_tags(htmlspecialchars($_POST['qty13'])); 
		$email_body .= "Product 13\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
		else if($count == 14)
		{				
		$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				
			$sku = strip_tags(htmlspecialchars($_POST['sku9']));
		$product = strip_tags(htmlspecialchars($_POST['product9']));
		$qty = strip_tags(htmlspecialchars($_POST['qty9'])); 
		$email_body .= "Product 9\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				$sku = strip_tags(htmlspecialchars($_POST['sku10']));
		$product = strip_tags(htmlspecialchars($_POST['product10']));
		$qty = strip_tags(htmlspecialchars($_POST['qty10'])); 
		$email_body .= "Product 10\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
						$sku = strip_tags(htmlspecialchars($_POST['sku11']));
		$product = strip_tags(htmlspecialchars($_POST['product11']));
		$qty = strip_tags(htmlspecialchars($_POST['qty11'])); 
		$email_body .= "Product 11\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku12']));
		$product = strip_tags(htmlspecialchars($_POST['product12']));
		$qty = strip_tags(htmlspecialchars($_POST['qty12'])); 
		$email_body .= "Product 12\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku13']));
		$product = strip_tags(htmlspecialchars($_POST['product13']));
		$qty = strip_tags(htmlspecialchars($_POST['qty13'])); 
		$email_body .= "Product 13\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku14']));
		$product = strip_tags(htmlspecialchars($_POST['product14']));
		$qty = strip_tags(htmlspecialchars($_POST['qty14'])); 
		$email_body .= "Product 14\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
			else if($count == 15)
	{
			$sku = strip_tags(htmlspecialchars($_POST['sku1']));
		$product = strip_tags(htmlspecialchars($_POST['product1']));
		$qty = strip_tags(htmlspecialchars($_POST['qty1'])); 
		$email_body .= "Product 1 \nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku2']));
		$product = strip_tags(htmlspecialchars($_POST['product2']));
		$qty = strip_tags(htmlspecialchars($_POST['qty2'])); 
		$email_body .= "Product 2\nSku: $sku \nProduct Name:$product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku3']));
		$product = strip_tags(htmlspecialchars($_POST['product3']));
		$qty = strip_tags(htmlspecialchars($_POST['qty3'])); 
		$email_body .= "Product 3\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku4']));
		$product = strip_tags(htmlspecialchars($_POST['product4']));
		$qty = strip_tags(htmlspecialchars($_POST['qty4'])); 
		$email_body .= "Product 4\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku5']));
		$product = strip_tags(htmlspecialchars($_POST['product5']));
		$qty = strip_tags(htmlspecialchars($_POST['qty5'])); 
		$email_body .= "Product 5\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku6']));
		$product = strip_tags(htmlspecialchars($_POST['product6']));
		$qty = strip_tags(htmlspecialchars($_POST['qty6'])); 
		$email_body .= "Product 6\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku7']));
		$product = strip_tags(htmlspecialchars($_POST['product7']));
		$qty = strip_tags(htmlspecialchars($_POST['qty7'])); 
		$email_body .= "Product 7\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
		$sku = strip_tags(htmlspecialchars($_POST['sku8']));
		$product = strip_tags(htmlspecialchars($_POST['product8']));
		$qty = strip_tags(htmlspecialchars($_POST['qty8'])); 
		$email_body .= "Product 8\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				
			$sku = strip_tags(htmlspecialchars($_POST['sku9']));
		$product = strip_tags(htmlspecialchars($_POST['product9']));
		$qty = strip_tags(htmlspecialchars($_POST['qty9'])); 
		$email_body .= "Product 9\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
				$sku = strip_tags(htmlspecialchars($_POST['sku10']));
		$product = strip_tags(htmlspecialchars($_POST['product10']));
		$qty = strip_tags(htmlspecialchars($_POST['qty10'])); 
		$email_body .= "Product 10\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
						$sku = strip_tags(htmlspecialchars($_POST['sku11']));
		$product = strip_tags(htmlspecialchars($_POST['product11']));
		$qty = strip_tags(htmlspecialchars($_POST['qty11'])); 
		$email_body .= "Product 11\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku12']));
		$product = strip_tags(htmlspecialchars($_POST['product12']));
		$qty = strip_tags(htmlspecialchars($_POST['qty12'])); 
		$email_body .= "Product 12\nSku: $sku\nProduct Name: $product\nQty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku13']));
		$product = strip_tags(htmlspecialchars($_POST['product13']));
		$qty = strip_tags(htmlspecialchars($_POST['qty13'])); 
		$email_body .= "Product 13\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku14']));
		$product = strip_tags(htmlspecialchars($_POST['product14']));
		$qty = strip_tags(htmlspecialchars($_POST['qty14'])); 
		$email_body .= "Product 14\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
		
							$sku = strip_tags(htmlspecialchars($_POST['sku15']));
		$product = strip_tags(htmlspecialchars($_POST['product15']));
		$qty = strip_tags(htmlspecialchars($_POST['qty15'])); 
		$email_body .= "Product 15\nSku: $sku\nProduct Name: $product\n Qty: $qty\n\n";
	}
	
	$email_body .= "\n\nAdditional Information: $information";
	mail($to,$email_subject,$email_body,$headers);
	//$to = 'dom@stellarinc.ca'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	//mail($to,$email_subject,$email_body,$headers);
	echo "The email has been sent successfully";
	//header('Location: ../confirmationPage.php');
	return true; 
}
        
?>
