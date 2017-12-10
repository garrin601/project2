<?php include('header.php'); ?>


<section class="container" id="tasks">


<div class="row">

<div class="col-sm-12">

<h5><a href="index.php?page=tasks&action=all"><< View All Tasks</a></h5

<h3>Create a ToDo Task</h3>


<form action="index.php?page=tasks&action=add_task" method="post" id="addTaskForm">

<input type="text" name="task" id="task"><br>

<input type="hidden" name="userid" value="1">

<button type="submit" form="addTaskForm" value="store" class="edit">Save</button></form>

</div>

</div>

</section>

<script src="js/scripts.js"></script>
</body>
</html>
