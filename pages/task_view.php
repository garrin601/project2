<!doctype html>



<? 

echo  ($_REQUEST['id']);
 <html lang="en">
 <head>
  <meta charset="utf-8">
     
 <title>The HTML5 Herald</title>
 <meta name="description" content="The HTML5 Herald">
 




<h1><a href="index.php?page=accounts&action=logout">LOG OUT</a></h1>

<h1><a href="index.php?page=create&action=add_task"><button class="edit">Create Tasks Here</button></a></h1>

<?php
		    //this is how you print something
		    
if (isset($data['account'])) {
print utility\htmlTable::generateTableFromOneRecord($data['account']);
 
 }
 
 if (isset($data['table']))
 
 {
		  
print utility\htmlTable::genarateTableFromMultiArray($data['table'], 'tasks');
			 
			 
}



 ?>
			    
<?php include ('footer.php') ?>			     
 <script src="js/scripts.js"></script>
 </body>
 </html> 
