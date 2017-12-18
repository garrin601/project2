<!doctype html>




<?php include('header.php'); ?>



<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="Tasks Page">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>








 
<h3>Below are all the current tasks, please log in to add a to-do item, Thank you.</h3>

<p> <?php print utility\htmlTable::genarateTableFromMultiArray($data); ?></p>



<?php include ('footer.php') ?>


<script src="js/scripts.js"></script>
</body>
</html>
