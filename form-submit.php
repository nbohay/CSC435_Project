<?php $page='form'; include"similar.php"; top($page)?>

<div  id="content">

<?php //pulls the data from the form
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$cctype = $_POST["CC"];
		$ccnumber = $_POST["ccnumber"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		$line2 = $_POST["address2"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zipcode = $_POST["zipcode"];
?> 
        
        
	<div>
		<h1>Thank you for your order!</h1><!--Prints the form data in a table-->
       	<table width="450">
        <tr>
        <td><strong>First Name: </strong></td><td><?= $fname ?> </td></tr>
        <tr><td><strong>Last Name: </strong></td><td><?= $lname ?></td></tr>
        <tr><td><strong>CC Type: </strong></td><td><?= $cctype ?></td></tr>
        <tr><td><strong>CC Number: </strong></td><td><?= $ccnumber ?></td></tr>
        <tr><td><strong>Email: </strong></td><td><?= $email ?></td></tr>
        <tr><td><strong>Address: </strong></td><td><?= $address ?></td></tr>
        <tr><td><strong>Line 2: </strong></td><td><?= $line2 ?></td></tr>
        <tr><td><strong>City: </strong></td><td><?= $city ?></td></tr>
        <tr><td><strong>State: </strong></td><td><?= $state ?></td></tr>
        <tr><td><strong>Zipcode: </strong></td><td><?= $zipcode ?></td></tr>
        </table>
<br><br>
		<!--Prints the item and quantity purchased-->
        <table width="450">
        
        <tr><td><h3>Quantity</h3></td><td><h3>Item</h3></td></tr>
<?php 

		for($i=0;$i<10;$i++){
		$item[$i]=$_POST["item$i"];
		$quantity[$i]=$_POST["quantity$i"]; ?>
		<tr>
		<td><?= $quantity[$i] ?></td>
		<td><?= $item[$i] ?></td>
		</tr>	
	
<?php	}?>
		</table>

		<br><br>Now <a href="home.php">go back to the homepage!</a></p>
	</div>
</div>

<?php bottom()?>