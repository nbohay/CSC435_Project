<?php $page='form'; include"similar.php"; top($page)?>
<script>
function validateForm()
{
var a=document.forms["myForm"]["fname"].value;//check if first name is blank
if (a==null || a==""){
  alert("First name must be filled out");
  return false;
}
  
var b=document.forms["myForm"]["lname"].value;//check if last name is blank
if (b==null || b==""){
  alert("Last name must be filled out");
  return false;
}
  
var c=document.forms["myForm"]["ccnumber"].value;//check if cc number is blank
if (c==null || c==""){
  alert("CC Number must be filled out");
  return false;
}

var x=document.myForm.email.value;//validate email address 
var atpos= x.indexOf('@');
var dotpos=x.lastIndexOf('.');
if (atpos<1|| dotpos <atpos +2 || dotpos +2 >=x.length){
	alert("Email must be re-entered");
	return false;
}

var d=document.forms["myForm"]["address"].value;//check if address is blank
if (d==null || d==""){
  alert("Address must be filled out");
  return false;
}   

var e=document.forms["myForm"]["city"].value;//check if city is blank
if (e==null || e==""){
  alert("City must be filled out");
  return false;
}  

var s=document.forms["myForm"]["state"].value;//check if city is blank
if (s==null || s==""){
  alert("State must be filled out");
  return false;
}

var z=document.forms["myForm"]["zipcode"].value;//check if city is blank
if (z==null || z==""){
  alert("Zipcode must be filled out");
  return false;
}  


}
</script>        
<div  id="content">

<form name="myForm" action="form-submit.php" onsubmit="return validateForm()" method="post">
<legend><h1>Order Form:</h1></legend>   
<h2>Products:</h2><br />
    
    <table  width="480px" border="0">
    <!--creates 10 item rows with a column for item number, item type and for quantities-->
    <?php 
	for($i=0; $i<10; $i++){ ?>
  <tr>
    <td><strong>Item<?= $i+1 ?>:</td>
    <td><select name="item<?= $i ?>">
	<option selected="selected"> </option>
	<option>Banana</option>
    <option>Tomato</option>
    <option>Cucumber</option>
    <option>Blueberries</option>
    <option>Pineapple</option>
    <option>Peaches</option>
    <option>Kiwi</option>
    <option>Pomegranate</option>
    <option>Lime</option>
    <option>Peppers</option>
    <option>Strawberries</option></select></td>
    <td>Quantity: <select name="quantity<?= $i ?>">
    <option selected="selected"> </option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
	<option>8</option>
    <option>9</option>
    <option>10</option>
    </select></td>
  </tr>
  <?php } ?>
</table>
<!-- Creates a form for payment including first name, last name, cc type, cc number, email, and address -->
   <br />
<h2>Payment:</h2>

<table width="480px">
	
    <tr>
    <td>
	<strong>First Name:</strong></td>
    <td><input type="text" name="fname" size="16"/></td>
    
    <td><strong>Address:</strong></td>
    <td><input type="text" name="address" size="20"/></td>
    </tr>
	
    <tr>
    <td><strong>Last Name:</strong></td>
    <td><input type="text" name="lname" size="16"/></td>
    
	<td><strong>Line 2:</strong></td>
    <td><input type="text" name="address2" size="20"/></td>
    </tr>
    
    <tr>
    <td><strong>CC Type:</strong></td>
	<td><select name="CC">
	<option selected="selected">Visa</option>
	<option>AMX</option>
	<option>MasterCard</option>
    <option>Discover</option></select></td>
    
    <td><strong>City:</strong></td>
    <td><input type="text" name="city" size="20"/></td>
	</tr>
    
    <tr>
    <td><strong>CC Number:</strong></td>
    <td><input type="text" name="ccnumber" size="16"/></td>
    
    <td><strong>State:</strong></td>
    <td><input type="text" name="state" size="20"/></td>
    </tr>
    
    <tr>
    <td><strong>Email:</strong></td>
    <td><input type="text" name="email" size="16"/></td>
    
    <td><strong>Zipcode:</strong></td>
    <td><input type="text" name="zipcode" size="5"/></td>
    </tr>
</table>
    
    <br />
	

	
	<br />  
    <div align="center">                      
	<input type="submit" value="Submit Order">
	</div>
	</form>
</div>

 <?php bottom()?>