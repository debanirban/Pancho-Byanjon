<html>
	<body>
		Hi...This is Anirban
	</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "14M@y2010";

try {
    $conn = new PDO("mysql:host=$servername;dbname=homedelivery", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "This has been tested by Anirban and is working perfectly..."; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>