<?php
	//koneksi database
	$link = mysql_connect('localhost','root','')
	or die('Could not connect: ' . mysql_error());
	mysql_select_db('module_sit') or die('Could not select database');
?>