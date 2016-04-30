<?php $page='products'; include"similar.php"; top($page)?>
             
<div id="content">
<div align="center">
<?php  //loops through the image files and displays them with a width of 250
for($i=1; $i<13; $i++) { ?>
<img height="auto" width="250px" src="images/organic<?= $i ?>.jpg"/>

<?php } ?>
</div></div>

 <?php bottom()?>