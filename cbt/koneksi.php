<?php

class database {

function getDb()
	{
		$dbh = new PDO('mysql:host=localhost;dbname=u9899482_hk2', "u9899482_admin", "##Jaruki1991");
		return $dbh;
	}
	
}