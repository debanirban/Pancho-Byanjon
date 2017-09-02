<html>
<head>
<title>Customer Details</title>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="homedeliverystyles.css">

</head>
<body>
<div class="ui-widget">
<div id="searchbox" style="margin-top: -7px;margin-left: 850px;/* width: 150px; */position: absolute;">
	
	<input id="search" type="text" placeholder="Search" style="background-image: url('search.png'); background-size: contain; background-repeat: no-repeat; background-position: 10px; background-size: 25px 25px; text-indent: 35px;">
    <input id="submit" type="submit" value="Search" onclick="GetCustomerItemDetails();">
</div>
</div>
<div>
<ul class="menu cf">
	<li><a href="">Home</a></li>
	<li>
		<a href="">Business</a>
		<ul class="submenu">
			<li><a href="">Profits</a></li>
			<li><a href="">Cost</a></li>
			<li><a href="">Delivery</a></li>
			<li><a href="">Items</a></li>
			<li><a href="">Reviews</a></li>
		</ul>			
	</li>
	<li><a href="">Customers</a></li>
	<li><a href="">Orders</a></li>
	<li><a href="">Earnings</a></li>
</ul>
<div>
	<div class="card" style="margin-left: auto; margin-right: auto; border-radius: 10px">
	  <div class="header" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
		<h1 id="customerName">1</h1>
	  </div>

	  <div class="container">
		<table style="width:100%;">
			<tr>
				<td>
					Address
				</td>
				<td id="customeraddress">
				</td>
			</tr>
			<tr>
				<td>
					Phone
				</td>
				<td id="customerphone">
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td id="customeremail">
				</td>
			</tr>
			<tr>
				<td>
					Customer Id
				</td>
				<td id="customerid">
				</td>
			</tr>
			<tr>
				<td>
					Active
				</td>
				<td id="customeractive">
				</td>
			</tr>
			<tr>
				<td>
					Elite
				</td>
				<td id="customerelite">
				</td>
			</tr>
			<tr>
				<td>
					Spent
				</td>
				<td id="customerspent">
				</td>
			</tr>
		</table>
	  </div>
	</div>
	<div class="ordercard" style="margin-left: auto; margin-right: auto; border-radius: 10px">
	  <div class="orderheader" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
	  <div id="refreshdiv" class="tooltip" style="background-image: url('refresh.png');background-repeat: no-repeat;height: 30px;width: 30px;margin-top: 25px;background-size: contain;margin-left: 445px;cursor: pointer; display: inline-block;" onclick="GetCustomerDetails();">
	  <span class="tooltiptext">Refresh</span>
	  </div>
		<h1 id="customerName">Order Details</h1>
		
	  </div>

	  <div  id="customerorderdetails" class="ordercontainer">
		
	  </div>
	</div>
	
	<div class="ordercard" style="margin-left: auto; margin-right: auto; border-radius: 10px; display: none;" id="orderdetailsdiv">
	  <div class="orderheader" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
		<h1 id="customerOrderEdit">Order Edit</h1>
	  </div>

	  <div  id="customerordereditdetails" class="ordercontainer">
		<table style="width: 70%;">
			<tr style="height: 50px; display: none;">
				<td>ID</td>
				<td id="itemidtext"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Ordered Item</td>
				<td id="itemdescriptiontd"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Quantity</td>
				<td><input type="text" id="itemqtytext" onchange="CalculateTotalCost()"></td>
			</tr>
			<tr style="height: 50px; display: none;">
				<td>Cost</td>
				<td id="itemcosttext"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Total Cost</td>
				<td id="totalitemcosttext"></td>
			</tr>
			<tr style="height: 50px;">
				<td>Delivery Address</td>
				<td><input type="text" id="itemdeladdress" style="width: 100%;"></td>
			</tr>
			<tr style="height: 50px;">
				<td style="text-align: right;" id="tdupdate"><button class="button button2" id="btnUpdate" onclick="UpdateCustomerOrderDetails('N')">Update Order</button></td>
				<td id="tdcancel"><button class="button button2" id="btnCancel" onclick="UpdateCustomerOrderDetails('C')">Cancel Order</button>
				<button style="display:none;" class="button button2" id="btnReactivate" onclick="UpdateCustomerOrderDetails('N')">Reactivate Order</button>
				</td>
			</tr>
		</table>
	  </div>
	</div>
	<div id="closediv" style="background-image: url('images/button_cancel.png');background-repeat: no-repeat;height: 30px;position: absolute;width: 30px;margin-top: -370px;background-size: contain;margin-left: 1145px;cursor: pointer; display: none;" onclick="CloseDiv();"></div>
	
	<div id="successdiv" class="success" style="position: absolute; top: 50%; left: 50%; margin-top: -40px; margin-left: -100px; opacity: 0.9; display: none;">Data updated successfully</div>
	
	<div id="errordiv" class="error" style="position: absolute; top: 50%; left: 50%; margin-top: -40px; margin-left: -100px; opacity: 0.9; display: none;">Data could not be updated</div>
	
	<input type="hidden" id="hiddenval">
</div>
<!--<button class="button button2" id="content" onclick='GetCustomerDetails()'>Load</button>-->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="moment.js"></script>
<script type="text/javascript" src="homedeliveryscript.js"></script>

</html>