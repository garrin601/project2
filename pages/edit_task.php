<?php include('header.php') ?>


<h3> Edit your ToDo Task and click 'Save'</h3>

<form action="index.php?page=tasks&action=save_task&id=<?php echo $data->id; ?>" method="post" id="updateForm">

 <?php print utility\htmlTable::generateTableFromOneRecord($data); ?>



<button type="submit" form="updateForm" value="store" class="edit">Save This To Do</button></form>

<a href="index.php?page=tasks&action=show&id=<?php echo $data->id; ?> "><button class="cancel">Change your mind?</button></a>


