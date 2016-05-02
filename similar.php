<?php function top($page) { ; ?><!--Displays top html when called on pages-->
<html>
<head>
	<title>TrueNature</title>
	<link rel="stylesheet" type="text/css" href="naturalstyle.css" />
</head>
<body>
    
        <div id="container">
         
            <div id="logo"><img src="images/True-02-01.png"/> </div>
            <div class="nav">
<ul><!--if on the page the class is set to active-->
         <li><a <?php echo($page=='home')? "class='active'":"";?> href="home.php">About us</a></li>
         <li><a <?php echo($page=='products')? "class='active'":"";?> href="products.php">Our products</a></li>
         <li><a <?php echo($page=='recipes')? "class='active'":"";?> href="recipes.php">Recipes</a></li>
         <li><a <?php echo($page=='form')? "class='active'":"";?> href="form.php">Order Form</a></li>
         <li> <a <?php echo($page=='contact')? "class='active'":"";?> href="contact.php">Contact</a></li>
</ul>
           </div> 
<?php } ?>

<?php function bottom() { ?><!---Displays bottom portion of html when called-->
   <div id="footer"><img height="auto" width="75%" border="0" src="images/footer.png"></div>
    <div id="footer">
    
        @2016 TrueNature. All rights reserved
       <h2 style="color:#000">Subscribe To TrueNature</h2>
       <a href="mailto:subscriber@truenature.com"><img src="images/email.png"></a><br><br>
       <a href="https://validator.w3.org/" target="_blank"><img src="images/valid-xhtml11.png" alt="validhtml"></a><a href="https://validator.w3.org/" target="_blank"><img src="images/vcss.gif" alt="validcss"></a>
    </div>
    </div>
    </body>
</html>
<?php } ?>