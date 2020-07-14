<?php
DEFINE ('db_user','ranjeet');
DEFINE ('db_password','');
DEFINE ('db_host','localhost');
DEFINE ('db_name','students');

$dbc= @mysqli_connect(db_host,db_user,db_password,db_name)
OR DIE('could not connect to server'.mysqli_connect_error());

?>
