<?php

 function GetCustomerDetails($custId)
 {
	 $host = "localhost";
  $user = "root";
  $pass = "14M@y2010";

  $databaseName = "homedelivery";
  $tableName = "customerdetails";
	 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
	 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "select t1.*, t2.*, t3.*, t4.*
				from 
				homedelivery.customerorderdetails t1, 
				homedelivery.itemdetails t2,
				homedelivery.customerdetails t3,
				homedelivery.customeraddressdetails t4
				where t2.ItemId = t1.CustomerItemId
				and t1.CustomerId=t3.CustomerId
				and t3.CustomerId=t4.CustomerId
				and t3.CustomerId =  '". $custId. "' order by t1.CustomerOrderDate DESC";
	  //$getUsers = $con->prepare("SELECT * FROM customerdetails ORDER BY id ASC");
	  $q = $con->query($sql);
	  $q->setFetchMode(PDO::FETCH_ASSOC);
	  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 
 
 function GetCustomerItemDetails($custId, $itdesc)
 {
	  $host = "localhost";
	  $user = "root";
	  $pass = "14M@y2010";

	 $databaseName = "homedelivery";
	 $tableName = "customerdetails";
	 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
	 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 
	 $sql = "SELECT t1.*, t2.* 
				FROM 
				homedelivery.customerorderdetails t1, 
				homedelivery.itemdetails t2
				where t1.CustomerId =   '". $custId. "'
				and t2.ItemDescription = '". $itdesc. "' 
				and t1.CustomerItemId = t2.ItemId order by t1.CustomerOrderDate DESC";
	  //$getUsers = $con->prepare("SELECT * FROM customerdetails ORDER BY id ASC");
	  $q = $con->query($sql);
	  $q->setFetchMode(PDO::FETCH_ASSOC);
	  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 function UpdateCustomerOrderDetails($orderid, $custorderval, $custaddress, $itemqty, $deliverystatus)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE homedelivery.customerorderdetails
					SET
					CustomerOrderAddress = '". $custaddress. "',
					CustomerOrderValue = '". $custorderval. "',
					CustomerItemQty = '". $itemqty. "',
					Delivered = '". $deliverystatus. "'
					WHERE Id = '". $orderid. "'";
		  //$getUsers = $con->prepare("SELECT * FROM customerdetails ORDER BY id ASC");
		  $q = $con->query($sql);
 }
 
 //update the user cart
 
 function UpdateUserCart($userid, $itemid, $itemdescription, $itemqty, $itemvalue, $itemimage)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
		 $sql = "delete from homedelivery.usercart
					WHERE UserId = '". $userid. "'
					and ItemsId = '". $itemid. "'";
		  //$getUsers = $con->prepare("SELECT * FROM customerdetails ORDER BY id ASC");
		  $q = $con->query($sql);
		  
		  $sql = "INSERT INTO homedelivery.usercart
					(UserId,
						ItemsId,
						ItemDsc,
						ItemsQty,
						ItemsValue,
						ItemsImage)
						VALUES
					('". $userid. "',
					'". $itemid. "',
					'". $itemdescription. "',
					'". $itemqty. "',
					'". $itemvalue. "',
					'". $itemimage. "'
					)";
		  //$getUsers = $con->prepare("SELECT * FROM customerdetails ORDER BY id ASC");
		  $q = $con->query($sql);
 }
 
 
 function DeleteFromUserCart($userid, $itemid, $itemdescription, $itemqty, $itemvalue, $itemimage)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
		 $sql = "delete from homedelivery.usercart
					WHERE UserId = '". $userid. "'
					and ItemsId = '". $itemid. "'";
		  //$getUsers = $con->prepare("SELECT * FROM customerdetails ORDER BY id ASC");
		  $q = $con->query($sql);
		  
		  if($itemqty > 0)
		  {
			  $sql = "INSERT INTO homedelivery.usercart
					(UserId,
					ItemsId,
					ItemDsc,
					ItemsQty,
					ItemsValue,
					ItemsImage)
					VALUES
					('". $userid. "',
					'". $itemid. "',
					'". $itemdescription. "',
					'". $itemqty. "',
					'". $itemvalue. "',
					'". $itemimage. "'
					)";
		  //$getUsers = $con->prepare("SELECT * FROM customerdetails ORDER BY id ASC");
		  $q = $con->query($sql);
		  }
 }
 
 //end of update
 
 function GetAllItems()
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.itemdetails
					order by ItemId asc";
		  
		  $q = $con->query($sql);
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 function GetItemById($itemid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT ItemValue FROM homedelivery.itemdetails
					WHERE ItemId = '". $itemid. "'";
		  
		  $q = $con->query($sql);
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 function GetUserCartItems($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT SUM(ItemsQty) FROM homedelivery.usercart
					WHERE UserId = '". $userid. "'";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 function GetUserCartAllItems($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.usercart
					WHERE UserId = '". $userid. "' order by ItemsId";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 function GetCustomersOrders($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.customerorderdetails
					WHERE CustomerId = '". $userid. "' order by Id desc";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 function GetCustomersOrdersBySearch($userid, $text_value)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.customerorderdetails
					WHERE CustomerId = '%". $userid. "%' 
					OR CustomerItemDesc like '%". $text_value. "%'
					order by CustomerOrderDate asc";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 function GetCustomersSearchedOrdersBySearch($userid, $order_val)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.customerorderdetails
					WHERE CustomerId = '%". $userid. "%' 
					OR CustomerItemDesc like '%". $order_val. "%' 
					order by CustomerOrderDate asc";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 function GetCustomersUniqueOrdersBySearch($userid, $text_value)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.customerorderdetails
					WHERE CustomerId = '%". $userid. "%' 
					OR CustomerItemDesc like '%". $text_value. "%'
					GROUP BY CustomerItemDesc
					ORDER BY CustomerOrderDate asc";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 function GetCustomersRecentOrders($userid, $order_id)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.customerorderdetails
					WHERE CustomerId = '". $userid. "' 
					AND OrderId = '". $order_id. "'";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 function TrackCustomersRecentOrders($userid, $order_id, $id)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.customerorderdetails
					WHERE CustomerId = '". $userid. "' 
					AND OrderId = '". $order_id. "'
					AND Id = '". $id. "'";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 function DeleteItem($itemid, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "DELETE FROM homedelivery.usercart
					WHERE UserId = '". $userid. "'
					and ItemsId = '". $itemid. "'";
		  
		  $q = $con->query($sql);
 }
 
 function AddItem($itemid, $itemqty, $itemvalue, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE homedelivery.usercart
						SET
						ItemsQty = '". $itemqty. "',
						ItemsValue = '". $itemvalue. "'
						WHERE UserId = '". $userid. "'
						and ItemsId = '". $itemid. "'";
			  
			  $q = $con->query($sql);
 }
 
 function RemoveItem($itemid, $itemqty, $itemvalue, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 if($itemqty == 0)
		 {
			$sql = "DELETE FROM homedelivery.usercart
					WHERE UserId = '". $userid. "'
					and ItemsId = '". $itemid. "'";
		  
			$q = $con->query($sql); 
		 }
		 if($itemqty > 0)
		 {
			  $sql = "UPDATE homedelivery.usercart
						SET
						ItemsQty = '". $itemqty. "',
						ItemsValue = '". $itemvalue. "'
						WHERE UserId = '". $userid. "'
						and ItemsId = '". $itemid. "'";
			  
			  $q = $con->query($sql);
		 }
 }
 
 
 function CheckforUserName($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT COUNT(*)
				  FROM homedelivery.user_info
				  WHERE UserId = '". $userid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 function CheckforEmail($emailid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT COUNT(*)
				  FROM homedelivery.user_info
				  WHERE EmailId = '". $emailid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 
 function CheckIfEmailExists($emailid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT COUNT(*)
				  FROM homedelivery.user_info
				  WHERE EmailId = '". $emailid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 function CheckForUserData($emailid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT *
				  FROM homedelivery.user_info
				  WHERE EmailId = '". $emailid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function RegisterUser($userid, $pwd, $loggedin, $sessval, $frname, $lsame, $emailid, $phone)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$pa = md5($pwd);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO homedelivery.user_info
					(UserId,
						Passw,
						LoggedIn,
						SessionValue,
						FirstName,
						LastName,
						User_Ph_No,
						EmailId)
					VALUES
					('". $userid. "',
					'". $pa. "',
					'". $loggedin. "',
					'". $sessval. "',
					'". $frname. "',
					'". $lsame. "',
					'". $phone. "',
					'". $emailid. "')";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();
			  
			if (!file_exists('images/'. $userid)) {
				mkdir('images/'. $userid);
			}

			echo json_encode($row);
 }
 
 
 function CheckUserLogin($userid, $pwd)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$pa = md5($pwd);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.user_info
					WHERE UserId = '". $userid. "'
					AND Passw = '". $pa. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function GetUserSessions($userid, $frname)
 {
	session_start();
	$_SESSION["user_name"] = $userid;
	$_SESSION["user_fname"] = $frname;
 }
 
 function Logout()
 {
	session_start();

	// Delete certain session
	unset($_SESSION['user_name']);
	// Delete all session variables
	// session_destroy();
 }
 
 function SendEmail($frname, $lsame, $tomail)
 {
	require_once('phpmailer/PHPMailerAutoload.php');
	
	$to = $tomail;
	$variables = array('{FIRST_NAME}' => "  $frname  " ,'{LAST_NAME}' => "$lsame",);
	
	$subject = "Welcome to the world of delicacies";

	$htmlContent = file_get_contents("GreetingsEmailTemplate.html");

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Additional headers
	$headers .= 'From: Anirban<deb.anirban@gmail.com>' . "\r\n";
	//$headers .= 'Cc: welcome@example.com' . "\r\n";
	//$headers .= 'Bcc: welcome2@example.com' . "\r\n";
	$htmlContent = strtr($htmlContent, $variables);
	
	$mail = new PHPMailer; // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->addCustomHeader('MIME-Version: 1.0');
	$mail->addCustomHeader('Content-Type: text/html; charset=ISO-8859-1');
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "deb.chaitali@gmail.com";
	$mail->Password = "C#@IBMCT";
	$mail->SetFrom("deb.anirban@gmail.com");
	$mail->Subject = $subject;
	$mail->Body = $htmlContent;
	$mail->AddAddress($tomail);

	 if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	 } else {
		echo "Message has been sent";
	 }
 }
 
 
 
 function SendEmailToResetPass($frname, $lsame, $tomail, $mailStr, $userid)
 {
	require_once('phpmailer/PHPMailerAutoload.php');
	
	$to = $tomail;
	$variables = array('{FIRST_NAME}' => "  $frname  " ,'{LAST_NAME}' => "$lsame", '{USER_ID}' => "  $userid  " ,'{PASSWORD_RESET_LINK}' => "$mailStr",);
	
	$subject = "Reset Password - Pancho Byanjon";

	$emailContents = file_get_contents("ForgotPasswordET.php");

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// Additional headers
	$headers .= 'From: Anirban<deb.anirban@gmail.com>' . "\r\n";
	//$headers .= 'Cc: welcome@example.com' . "\r\n";
	//$headers .= 'Bcc: welcome2@example.com' . "\r\n";
	$emailContents = strtr($emailContents, $variables);
	
	$mail = new PHPMailer; // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->addCustomHeader('MIME-Version: 1.0');
	$mail->addCustomHeader('Content-Type: text/html; charset=ISO-8859-1');
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "deb.chaitali@gmail.com";
	$mail->Password = "C#@IBMCT";
	$mail->SetFrom("deb.anirban@gmail.com");
	$mail->Subject = $subject;
	$mail->Body = $emailContents;
	$mail->AddAddress($tomail);

	 if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	 } else {
		echo "Message has been sent";
	 }
 }
 
 
 
 function UpdateDBForForgotPass($id, $userid, $dttm)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$genid = md5($id);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
			  $sql = "INSERT INTO homedelivery.password_change_requests
						(ID,
						RequestTime,
						UserId)
						VALUES
						('". $genid. "',
						'". $dttm. "',
						'". $userid. "')";
						
			  $q = $con->query($sql);
 }
 
 
 
 
 function GetResetValue($id)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$pa = md5($id);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.password_change_requests
					WHERE ID = '". $pa. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function DeleteResetValue($gid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$pa = md5($gid);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "DELETE FROM homedelivery.password_change_requests
					WHERE ID = '". $pa. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 
 
 function UpdateResetRecord($ps_reset, $id_reset)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$pa = md5($ps_reset);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE homedelivery.user_info
						SET
						Passw = '". $pa. "'
						WHERE UserId = '". $id_reset. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function UpdateUserImage($img_path, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($ps_reset);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE homedelivery.user_info
						SET
						User_Image = '". $img_path. "'
						WHERE UserId = '". $userid. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 function GetUserProfileDetails($user_name)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.user_info
					WHERE UserId = '". $user_name. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 
 function UpdateUserSelection($col_name, $col_val, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	//'"= '"'
	//$pa = md5($ps_reset);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE user_info SET " 
					. $col_name . "= '". $col_val. "' 
					WHERE UserId = '". $userid. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 function CheckForPass($userid, $pwd)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$pa = md5($pwd);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT Passw
				  FROM homedelivery.user_info
				  WHERE UserId = '". $userid. "'
				  AND Passw = '". $pa. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 //save user star (*) ratings into the database
 function UserReviews($userid, $itdesc, $idval, $clval)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	global $array;
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  
		  $sql = "SELECT * FROM homedelivery.userreviews
					WHERE UserId = '". $userid. "'
					AND ItemDesc = '". $itdesc. "'";
						
			  $q = $con->query($sql);
			  
			  //check if the user has already selected an item as his favourite (if the record exists)
			  if ($q->rowCount() > 0)
			  {
				$array = $q->fetchColumn();
				
				//if the user had previously selected an item as his favourite and has once again clicked on the favourite icon for that particular item, then remove the item from his favourites items.
				$sql = "UPDATE homedelivery.userreviews
						SET
						Ratings = '". $idval. "',
						RatingValue = '". $clval. "'
						WHERE UserId = '". $userid. "'
						AND ReviewId = '". $array. "'";
				  
				  $q = $con->query($sql);
			  }
			  else
			  {
				  //if the user has selected an item as his favourite for the first time then insert the item in the table as his favourite item.
				  $sql2 = "INSERT INTO homedelivery.userreviews
							(UserId,
							ItemDesc,
							Ratings,
							Reviews,
							RatingValue)
							VALUES
							('". $userid. "',
							'". $itdesc. "',
							'". $idval. "',
							'',
							'". $clval. "')";
							
				  $q2 = $con->query($sql2);
			  }

			echo json_encode($array);
 }
 
 
 function GetUserReviews($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($pwd);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT RatingValue
				  FROM homedelivery.userreviews
				  WHERE UserId = '". $userid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function ShowMyRatings($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($pwd);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT t1.*, t2.ItemImage from homedelivery.userreviews t1, homedelivery.itemdetails t2
					where t1.ItemDesc = t2.ItemDescription
					AND t1.UserId= '". $userid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 function SaveReview($txtarea, $itdesc, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	//'"= '"'
	//$pa = md5($ps_reset);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE homedelivery.userreviews SET  
					Reviews = '". $txtarea. "' 
					WHERE UserId = '". $userid. "'
					AND ItemDesc = '". $itdesc. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function GetGeoPlaces($zip_code)
 {
	 $response = file_get_contents('https://pincode.saratchandra.in/api/pincode/' . $zip_code);
	 //$response = json_decode($response);
	 echo $response;
 }
 
 
 function StoreCustomerAddresses($userid, $addr1, $addr2, $city, $state, $country, $zipcode, $areadesc, $address_nickname, $action_val, $user_address_id)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$genid = md5($id);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 if($action_val == 0)
		 {
			  $sql = "INSERT INTO homedelivery.customeraddressdetails
						(CustomerId,
						Address1,
						Address2,
						City,
						State,
						Country,
						ZipCode,
						Area,
						AddressName)
						VALUES
						('". $userid. "',
						'". $addr1. "',
						'". $addr2. "',
						'". $city. "',
						'". $state. "',
						'". $country. "',
						'". $zipcode. "',
						'". $areadesc. "',
						'". $address_nickname. "')";
		 }
		 else
		 {
			 $sql = "UPDATE homedelivery.customeraddressdetails SET  
					CustomerId = '". $userid. "',
					Address1 = '". $addr1. "',
					Address2 = '". $addr2. "',
					City = '". $city. "',
					State = '". $state. "',
					Country = '". $country. "',
					ZipCode = '". $zipcode. "',
					Area = '". $areadesc. "',
					AddressName = '". $address_nickname. "'
					WHERE AddressId = '". $user_address_id. "'";
		 }
						
			  $q = $con->query($sql);
 }
 
 function PhoneNumberUpdate($phone_number, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	//'"= '"'
	//$pa = md5($ps_reset);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE homedelivery.user_info SET  
					User_Ph_No = '". $phone_number. "' 
					WHERE UserId = '". $userid. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function EmailIdUpdate($email_id, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	//'"= '"'
	//$pa = md5($ps_reset);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "UPDATE homedelivery.user_info SET  
					EmailId = '". $email_id. "' 
					WHERE UserId = '". $userid. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function GetUserAddresses($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($pwd);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * from homedelivery.customeraddressdetails 
					WHERE CustomerId= '". $userid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 function DeleteUserAddress($addressid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($gid);
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "DELETE FROM homedelivery.customeraddressdetails
					WHERE AddressId = '". $addressid. "'";
			  
			  $q = $con->query($sql);
			  //$row_count = $q->rowCount();
			  $q->setFetchMode(PDO::FETCH_ASSOC);
			  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function EditUserAddress($addressid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($pwd);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.customeraddressdetails
					WHERE AddressId = '". $addressid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 //toggling user selection of favourites
 function StoreUserFavs($userid, $itemid, $it_val, $itemdescription, $itemimage)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	global $fav_id;
	global $fv_id;
	global $f_id;
	global $array;
	//$genid = md5($id);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
			//select the user favourites from the table
			$sql = "SELECT * FROM homedelivery.UserFavourites
					WHERE UserId = '". $userid. "'
					AND ItemId = '". $itemid. "'";
						
			  $q = $con->query($sql);
			  
			  //check if the user has already selected an item as his favourite (if the record exists)
			  if ($q->rowCount() > 0)
			  {
				$array = $q->fetchColumn();
				
				//if the user had previously selected an item as his favourite and has once again clicked on the favourite icon for that particular item, then remove the item from his favourites items.
				$sql1 = "DELETE FROM homedelivery.UserFavourites
					WHERE FavId = '". $array. "'";
						
					$q1 = $con->query($sql1);
			  }
			  else
			  {
				  //if the user has selected an item as his favourite for the first time then insert the item in the table as his favourite item.
				  $sql2 = "INSERT INTO homedelivery.UserFavourites
							(UserId,
							ItemId,
							Items_Val,
							Items_Desc,
							Items_Img)
							VALUES
							('". $userid. "',
							'". $itemid. "',
							'". $it_val. "',
							'". $itemdescription. "',
							'". $itemimage. "')";
							
				  $q2 = $con->query($sql2);
			  }

			echo json_encode($array);
 }
 
 
 function GetUserFavs($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($pwd);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "select t1.*, t2.* from homedelivery.userfavourites t1 
					left join homedelivery.usercart t2
					   on T1.ItemId = T2.ItemsId 
					WHERE t1.Userid='". $userid. "'
					AND t2.Userid='". $userid. "'";
					
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 
 function Reorder($userid, $orderId)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
		  $sql = "select t1.*, t2.ItemImage from homedelivery.customerorderdetails t1 
					left join homedelivery.itemdetails t2 
					on t1.CustomerItemId = t2.ItemId 
					where t1.CustomerId = '". $userid. "' 
					and t1.OrderId = '". $orderId. "'";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();
		  
		  //$rows = $q->fetch(PDO::FETCH_NUM);
		  
		  $sql1 = "Delete from homedelivery.usercart
					where UserId = '". $userid. "'";
		  
		  $q1 = $con->query($sql1);
		  
		  for($i = 0; $i < $q->rowCount(); $i++)
		  {
			  $sql2 = "INSERT INTO homedelivery.usercart
							(UserId,
							ItemsId,
							ItemDsc,
							ItemsQty,
							ItemsValue,
							ItemsImage)
							VALUES
							('". $userid. "',
							'". $row[$i]["CustomerItemId"]. "',
							'". $row[$i]["CustomerItemDesc"]. "',
							'". $row[$i]["CustomerItemQty"]. "',
							'". $row[$i]["CustomerOrderValue"]. "',
							'". $row[$i]["ItemImage"]. "')";
							
				  $q2 = $con->query($sql2);
		  }
	  //echo json_encode($row[0]["CustomerOrderAddress"]);
	  //echo json_encode($q->rowCount());
	  echo json_encode($row);
 }
 
 
 
 function GetMonthlyExpenditure($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.monthlyuserexpenditure
				  WHERE UserId = '". $userid. "'";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 function CreatePieGraph($mon, $yr, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT Item, 
					SUM(TotalVal) AS Price,
					Sum(Quantity) as TotalItems
					FROM homedelivery.monthlyshopping
					WHERE UserId = '". $userid. "'
					AND Month = '". $mon. "'
					AND Year = '". $yr. "'
					GROUP BY Item";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 function GetDealsInformation()
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT t1.*, t2.ItemValue FROM homedelivery.customer_deals t1, homedelivery.itemdetails t2
					where t1.Deal_ItemId = t2.ItemId";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 function UpdateComplaints($com_sub, $com_details, $userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	$genid = md5($id);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
			  $sql = "INSERT INTO homedelivery.user_complains
						(UserId,
						ComplainSubject,
						ComplainDesc)
						VALUES
						('". $userid. "',
						'". $com_sub. "',
						'". $com_details. "')";
						
			  $q = $con->query($sql);
 }
 
 
 function GetComplaints($userid)
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";
	
	//$pa = md5($pwd);
	
	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * from homedelivery.user_complains 
					WHERE UserId = '". $userid. "'
					order by ComplainId desc";
			  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

			echo json_encode($row);
 }
 
 
 function GetCustomerCareInfo()
 {
	$host = "localhost";
	$user = "root";
	$pass = "14M@y2010";

	  $databaseName = "homedelivery";
	  $tableName = "customerdetails";
		 $con = new PDO("mysql:host=$host;dbname=$databaseName", $user, $pass);
		 $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "SELECT * FROM homedelivery.sitecustomercare";
		  
		  $q = $con->query($sql);
		  //$row_count = $q->rowCount();
		  $q->setFetchMode(PDO::FETCH_ASSOC);
		  $row = $q->fetchAll();

	  echo json_encode($row);
 }
 
 
 if(isset($_POST['function2call']) && !empty($_POST['function2call'])) {
    $function2call = $_POST['function2call'];
 }
	if(isset($_POST['custId']) && !empty($_POST['custId'])) {
    $custId = $_POST['custId'];
	}
	
	if(isset($_POST['orderid']) && !empty($_POST['orderid'])) {
    $orderid = $_POST['orderid'];
	}
	
	if(isset($_POST['custorderval']) && !empty($_POST['custorderval'])) {
    $custorderval = $_POST['custorderval'];
	}
	
	if(isset($_POST['custaddress']) && !empty($_POST['custaddress'])) {
    $custaddress = $_POST['custaddress'];
	}
	
	if(isset($_POST['itemqty']) && !empty($_POST['itemqty'])) {
    $itemqty = $_POST['itemqty'];
	}
	
	if(isset($_POST['deliverystatus']) && !empty($_POST['deliverystatus'])) {
    $deliverystatus = $_POST['deliverystatus'];
	}
	
	if(isset($_POST['itdesc']) && !empty($_POST['itdesc'])) {
    $itdesc = $_POST['itdesc'];
	}
	
	if(isset($_POST['userid']) && !empty($_POST['userid'])) {
    $userid = $_POST['userid'];
	}
	
	if(isset($_POST['itemid']) && !empty($_POST['itemid'])) {
    $itemid = $_POST['itemid'];
	}
	
	if(isset($_POST['itemdescription']) && !empty($_POST['itemdescription'])) {
    $itemdescription = $_POST['itemdescription'];
	}
	
	if(isset($_POST['itemvalue']) && !empty($_POST['itemvalue'])) {
    $itemvalue = $_POST['itemvalue'];
	}
	
	if(isset($_POST['itemimage']) && !empty($_POST['itemimage'])) {
    $itemimage = $_POST['itemimage'];
	}
	
	if(isset($_POST['pwd']) && !empty($_POST['pwd'])) {
    $pwd = $_POST['pwd'];
	}
	
	if(isset($_POST['emailid']) && !empty($_POST['emailid'])) {
    $emailid = $_POST['emailid'];
	}
	
	if(isset($_POST['loggedin']) && !empty($_POST['loggedin'])) {
    $loggedin = $_POST['loggedin'];
	}
	
	if(isset($_POST['sessval']) && !empty($_POST['sessval'])) {
    $sessval = $_POST['sessval'];
	}
	
	if(isset($_POST['frname']) && !empty($_POST['frname'])) {
    $frname = $_POST['frname'];
	}
	
	if(isset($_POST['lsame']) && !empty($_POST['lsame'])) {
    $lsame = $_POST['lsame'];
	}
	
	if(isset($_POST['variables']) && !empty($_POST['variables'])) {
    $variables = $_POST['variables'];
	}
	
	if(isset($_POST['tomail']) && !empty($_POST['tomail'])) {
    $tomail = $_POST['tomail'];
	}
	
	if(isset($_POST['mailStr']) && !empty($_POST['mailStr'])) {
    $mailStr = $_POST['mailStr'];
	}
	
	if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
	}
	
	if(isset($_POST['dttm']) && !empty($_POST['dttm'])) {
    $dttm = $_POST['dttm'];
	}
	
	if(isset($_POST['ps_reset']) && !empty($_POST['ps_reset'])) {
    $ps_reset = $_POST['ps_reset'];
	}
	
	if(isset($_POST['id_reset']) && !empty($_POST['id_reset'])) {
    $id_reset = $_POST['id_reset'];
	}
	
	if(isset($_POST['gid']) && !empty($_POST['gid'])) {
    $gid = $_POST['gid'];
	}
	
	if(isset($_POST['user_name']) && !empty($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
	}
	
	if(isset($_POST['col_name']) && !empty($_POST['col_name'])) {
    $col_name = $_POST['col_name'];
	}
	
	if(isset($_POST['col_val']) && !empty($_POST['col_val'])) {
    $col_val = $_POST['col_val'];
	}
	
	if(isset($_POST['idval']) && !empty($_POST['idval'])) {
    $idval = $_POST['idval'];
	}
	
	if(isset($_POST['clval']) && !empty($_POST['clval'])) {
    $clval = $_POST['clval'];
	}
	
	if(isset($_POST['txtarea']) && !empty($_POST['txtarea'])) {
    $txtarea = $_POST['txtarea'];
	}
	
	if(isset($_POST['zip_code']) && !empty($_POST['zip_code'])) {
    $zip_code = $_POST['zip_code'];
	}
	
	if(isset($_POST['phone']) && !empty($_POST['phone'])) {
    $phone = $_POST['phone'];
	}
	
	if(isset($_POST['addr1']) && !empty($_POST['addr1'])) {
    $addr1 = $_POST['addr1'];
	}
	
	if(isset($_POST['addr2']) && !empty($_POST['addr2'])) {
    $addr2 = $_POST['addr2'];
	}
	
	if(isset($_POST['city']) && !empty($_POST['city'])) {
    $city = $_POST['city'];
	}
	
	if(isset($_POST['state']) && !empty($_POST['state'])) {
    $state = $_POST['state'];
	}
	
	if(isset($_POST['country']) && !empty($_POST['country'])) {
    $country = $_POST['country'];
	}
	
	if(isset($_POST['zipcode']) && !empty($_POST['zipcode'])) {
    $zipcode = $_POST['zipcode'];
	}
	
	if(isset($_POST['areadesc']) && !empty($_POST['areadesc'])) {
    $areadesc = $_POST['areadesc'];
	}
	
	if(isset($_POST['phone_number']) && !empty($_POST['phone_number'])) {
    $phone_number = $_POST['phone_number'];
	}
	
	if(isset($_POST['email_id']) && !empty($_POST['email_id'])) {
    $email_id = $_POST['email_id'];
	}
	
	if(isset($_POST['address_nickname']) && !empty($_POST['address_nickname'])) {
    $address_nickname = $_POST['address_nickname'];
	}
	
	if(isset($_POST['addressid']) && !empty($_POST['addressid'])) {
    $addressid = $_POST['addressid'];
	}
	
	if(isset($_POST['action_val']) && !empty($_POST['action_val'])) {
    $action_val = $_POST['action_val'];
	}
	
	if(isset($_POST['user_address_id']) && !empty($_POST['user_address_id'])) {
    $user_address_id = $_POST['user_address_id'];
	}
	
	if(isset($_POST['reviewId']) && !empty($_POST['reviewId'])) {
    $reviewId = $_POST['reviewId'];
	}
	
	if(isset($_POST['it_val']) && !empty($_POST['it_val'])) {
    $it_val = $_POST['it_val'];
	}
	
	if(isset($_POST['img_path']) && !empty($_POST['img_path'])) {
    $img_path = $_POST['img_path'];
	}
	
	if(isset($_POST['orderId']) && !empty($_POST['orderId'])) {
    $orderId = $_POST['orderId'];
	}
	
	if(isset($_POST['order_id']) && !empty($_POST['order_id'])) {
    $order_id = $_POST['order_id'];
	}
	
	if(isset($_POST['mon']) && !empty($_POST['mon'])) {
    $mon = $_POST['mon'];
	}
	
	if(isset($_POST['yr']) && !empty($_POST['yr'])) {
    $yr = $_POST['yr'];
	}
	
	if(isset($_POST['text_value']) && !empty($_POST['text_value'])) {
    $text_value = $_POST['text_value'];
	}
	
	if(isset($_POST['com_sub']) && !empty($_POST['com_sub'])) {
    $com_sub = $_POST['com_sub'];
	}
	
	if(isset($_POST['com_details']) && !empty($_POST['com_details'])) {
    $com_details = $_POST['com_details'];
	}
	
	if(isset($_POST['order_val']) && !empty($_POST['order_val'])) {
    $order_val = $_POST['order_val'];
	}
	
    switch($function2call) {
        case 'GetCustomerDetails' : GetCustomerDetails($custId); break;
        case 'UpdateCustomerOrderDetails' : UpdateCustomerOrderDetails($orderid, $custorderval, $custaddress, $itemqty, $deliverystatus); break;
		case 'GetCustomerItemDetails' : GetCustomerItemDetails($custId, $itdesc); break;
		case 'GetAllItems' : GetAllItems(); break;
		case 'UpdateUserCart' : UpdateUserCart($userid, $itemid, $itemdescription, $itemqty, $itemvalue, $itemimage); break;
		case 'GetUserCartItems' : GetUserCartItems($userid); break;
		case 'GetUserCartAllItems' : GetUserCartAllItems($userid); break;
		case 'DeleteFromUserCart' : DeleteFromUserCart($userid, $itemid, $itemdescription, $itemqty, $itemvalue, $itemimage); break;
		case 'DeleteItem' : DeleteItem($itemid, $userid); break;
		case 'AddItem' : AddItem($itemid, $itemqty, $itemvalue, $userid); break;
		case 'RemoveItem' : RemoveItem($itemid, $itemqty, $itemvalue, $userid); break;
		case 'GetItemById' : GetItemById($itemid); break;
		case 'CheckforUserName' : CheckforUserName($userid); break;
		case 'RegisterUser' : RegisterUser($userid, $pwd, $loggedin, $sessval, $frname, $lsame, $emailid, $phone); break;
		case 'CheckforEmail' : CheckforEmail($emailid); break;
		case 'CheckUserLogin' : CheckUserLogin($userid, $pwd); break;
		case 'GetUserSessions' : GetUserSessions($userid, $frname); break;
		case 'Logout' : Logout(); break;
		case 'SendEmail' : SendEmail($frname, $lsame, $tomail); break;
		case 'CheckIfEmailExists' : CheckIfEmailExists($emailid); break;
		case 'CheckForUserData' : CheckForUserData($emailid); break;
		case 'SendEmailToResetPass' : SendEmailToResetPass($frname, $lsame, $tomail, $mailStr, $userid); break;
		case 'UpdateDBForForgotPass' : UpdateDBForForgotPass($id, $userid, $dttm, $emailid); break;
		case 'GetResetValue' : GetResetValue($id); break;
		case 'UpdateResetRecord' : UpdateResetRecord($ps_reset, $id_reset); break;
		case 'DeleteResetValue' : DeleteResetValue($gid); break;
		case 'GetUserProfileDetails' : GetUserProfileDetails($user_name); break;
		case 'UpdateUserSelection' : UpdateUserSelection($col_name, $col_val, $userid); break;
		case 'CheckForPass' : CheckForPass($userid, $pwd); break;
		case 'UserReviews' : UserReviews($userid, $itdesc, $idval, $clval); break;
		case 'GetUserReviews' : GetUserReviews($userid); break;
		case 'ShowMyRatings' : ShowMyRatings($userid); break;
		case 'SaveReview' : SaveReview($txtarea, $itdesc, $userid); break;
		case 'GetGeoPlaces' : GetGeoPlaces($zip_code); break;
		case 'StoreCustomerAddresses' : StoreCustomerAddresses($userid, $addr1, $addr2, $city, $state, $country, $zipcode, $areadesc, $address_nickname, $action_val, $user_address_id); break;
		case 'PhoneNumberUpdate' : PhoneNumberUpdate($phone_number, $userid); break;
		case 'EmailIdUpdate' : EmailIdUpdate($email_id, $userid); break;
		case 'GetUserAddresses' : GetUserAddresses($userid); break;
		case 'DeleteUserAddress' : DeleteUserAddress($addressid); break;
		case 'EditUserAddress' : EditUserAddress($addressid); break;
		case 'StoreUserFavs' : StoreUserFavs($userid, $itemid, $it_val, $itemdescription, $itemimage); break;
		case 'GetUserFavs' : GetUserFavs($userid); break;
		case 'UpdateUserImage' : UpdateUserImage($img_path, $userid); break;
		case 'GetCustomersOrders' : GetCustomersOrders($userid); break;
		case 'Reorder' : Reorder($userid, $orderId); break;
		case 'GetCustomersRecentOrders' : GetCustomersRecentOrders($userid, $order_id); break;
		case 'GetMonthlyExpenditure' : GetMonthlyExpenditure($userid); break;
		case 'CreatePieGraph' : CreatePieGraph($mon, $yr, $userid); break;
		case 'GetCustomersOrdersBySearch' : GetCustomersOrdersBySearch($userid, $text_value); break;
		case 'GetDealsInformation' : GetDealsInformation(); break;
		case 'UpdateComplaints' : UpdateComplaints($com_sub, $com_details, $userid); break;
		case 'GetComplaints' : GetComplaints($userid); break;
		case 'TrackCustomersRecentOrders' : TrackCustomersRecentOrders($userid, $order_id, $id); break;
		case 'GetCustomerCareInfo' : GetCustomerCareInfo(); break;
		case 'GetCustomersUniqueOrdersBySearch' : GetCustomersUniqueOrdersBySearch($userid, $text_value); break;
		case 'GetCustomersSearchedOrdersBySearch' : GetCustomersSearchedOrdersBySearch($userid, $order_val); break;
        // other cases
		//
    }

 
?>
