<?php

  $host = "localhost";
  $user = "root";
  $pass = "14M@y2010";

  $databaseName = "homedelivery";
  //$tableName = "customerdetails";
  
	 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
	 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 
	 $searchTerm = $_GET['term'];
	 
	  $sql = "select *
				from 
				homedelivery.itemdetails
				where ItemDescription LIKE '%".$searchTerm."%'";
	  
	  $q = $con->query($sql);
	  
	  while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
		$data[] = $row['ItemDescription'];
	  }
	  
	  echo json_encode($data); 
?>