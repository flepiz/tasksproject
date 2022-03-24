<?php

require_once('task.php');

try {
	
	$task = new Task(1, "Task Title", "Task Description", "01/01/2022 12:00", "N");
	header('Content-type: application/json;charset=UTF-8');
	echo json_encode($task->returnTaskAsArray());
}
catch(TaskException $ex) {
	echo "Error: ".$ex->getMessage();
}