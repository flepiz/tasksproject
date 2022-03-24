<?php

require_once('db.php');
require_once('../model/response.php');

try {
	$writeDB = DB::connectWriteDB();
	$readDB = DB::connectReadDB();
}
catch(PDOException $ex) {
	$response = new Response();
	$response->setStatusCode(500);
	$response->setSuccess(false);
	$response->addMessage("Database Connection error");
	$response->send();
	exit;
}