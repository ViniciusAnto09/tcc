<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("db_portaltcc");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
?>