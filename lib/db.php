<?php
	$conn = mysql_connect("localhost","root");
	if(!$conn){
		die("connect mysql error.");
	}
	mysql_select_db("sgfw");