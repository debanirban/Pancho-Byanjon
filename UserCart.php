<?php 
session_start();
//$_SESSION["user_name"] = "anirbandeb";
if (!isset($_SESSION['user_name']) && empty($_SESSION['user_name']))
{
	 header("Location: http://localhost:81/DBConn/Login"); /* Redirect browser */
	 exit();
}
?>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <style>
  .table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}

    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
	.navbar-brand {
  background: url(Logo02.png) center / contain no-repeat;
  width: 80px;
}

.centerimage-brand {
  background: url(Logo02.png) center / contain no-repeat;
  width: 80px;
  position: absolute;
  height: 100px;
}

#itemCount {
	border-radius: 50%;
    color: white;
    background: red;
    width: 20px;
    height: 20px;
    text-align: center;
    display: inline-block;
	/**display: none;**/
}
  </style>
  
  <script type="text/javascript">
  
  function GetUserCartItemsDetails($userid)
  {
	  var carthtml = "";
	  //fetch cart items for this user
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserCartAllItems', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);		  
					  if(res.length > 0)
					  {
						  var totalRoomPrices = 0;
						  //get the total value of the items in the cart
							$.each(res, function() {
							  totalRoomPrices += parseFloat(this.ItemsValue);
							});
							//alert(totalRoomPrices);
							

						  for ($i=0; $i<res.length; $i++)
						  {
								carthtml = carthtml + "<tr id="+ "'" + res[$i]["ItemsId"] + "'" + "><td data-th='Product'><div class='row'><div class='col-sm-2 hidden-xs'><img src=" + "'" + res[$i]["ItemsImage"] + "'" + " alt='...' class='img-responsive' style='margin-top: 13px;'/></div><div class='col-sm-10'><h4 class='nomargin'>" + res[$i]["ItemDsc"] + "</h4></div></div></td><td data-th='Price'></td><td data-th='Quantity' style='text-align:center; width: 20%;'><div class='col-xs-3' title = 'Need less' id='remove_roti" + $i + "' style='cursor: pointer; display: flex;justify-content: center;' onclick='RemoveItem(" + '"' + res[$i]["ItemsId"] + '"' +  ',' + '"' + res[$i]["ItemsQty"] + '"' + ")" + "'" + "><i style='margin-top: 3px; cursor: pointer; text-shadow: 4px 4px 6px #777;' title='Remove Item' class='fa fa-minus-square'></i></div>&nbsp;"+ res[$i]["ItemsQty"] + "<div class='col-xs-3 pull-right' id='add_roti" + $i + "' style='cursor: pointer; display: flex;justify-content: center;' title = 'Need more' onclick='AddItem(" + '"' + res[$i]["ItemsId"] + '"' + ',' + '"' + res[$i]["ItemsQty"] + '"' + ")" + "'" + "><i style='margin-top: 3px; cursor: pointer; text-shadow: 4px 4px 6px #777;' title='Add Item' class='fa fa-plus-square'></i></div></td><td data-th='Subtotal' class='text-center'>Rs. " + res[$i]["ItemsValue"] + "</td><td class='actions' data-th=''><button title='Remove item from cart' class='btn btn-danger btn-sm' onclick='DeleteItem(" + '"' + res[$i]["ItemsId"] + '"' + ")" + "'" + "><i class='fa fa-trash-o'></i></button></td></tr>";
							  
							  
							  //carthtml = carthtml + "<tr><td data-th='Product'><div class='row'><div class='col-sm-2 hidden-xs'><img src=" + "'" + res[$i]["ItemImage"] + "'" + " alt='...' class='img-responsive'/></div><div class='col-sm-10'><h4 class='nomargin'>" + res[$i]["ItemDescription"] + "</h4><div id='it' style='display:none;'>" + "'" + res[$i]["Id"] + "'" + "</div></div></div></td><td data-th='Price'></td><td data-th='Quantity' style='text-align:center;'>"+ res[$i]["ItemQty"] + "</td><td data-th='Subtotal' class='text-center'>Rs. " + res[$i]["ItemValue"] + "</td><td class='actions' data-th=''><button class='btn btn-info btn-sm'><i class='fa fa-refresh'></i></button>&nbsp;<button class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></button></td></tr>";
							  
						  }
						  $("#productdetails").html(carthtml);
						  $('#totalitemvalues').html('');
						  $('#totalitemvalues').html('Rs. ' + $('#totalitemvalues').html() + totalRoomPrices)
					  }
					  else
					  {
						  $("#CartListPanel").css("color", "black");
						  $("#CartListPanel").css("text-align", "center");
						  $("#CartListPanel").html("Your Shopping cart is empty...<a href='#' onclick='CloseCartDiv()();' style='text-decoration: none;'>Continue Shopping");
					  }
			}
		});
  }
  $(document).ready(function(){
	GetUserCartItemsDetails($('#profile_userdiv_val').html());
	//$("#cartbody").load('UserCart.php');
	
});
  
function CloseCartDiv()
{
	$("#cartitemcontainer").hide();
	//$('#load_page_div').attr('style','margin-top:0% !important');
	/*$( "#load_page_div" ).slideUp( "slow", function() {
			$( "#load_page_div" ).fadeOut();
			// Animation complete.
		  });	 
	//$("#load_page_div").hide();*/
	
	$("#load_page_div").hide('explode', 1500); 
}

function DeleteItem($itemid)
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteItem', itemid: $itemid, userid: $('#profile_userdiv_val').html()},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //var res = jQuery.parseJSON(output);
					  GetUserCartItemsDetails($('#profile_userdiv_val').html());
					  GetUserCartItems($('#profile_userdiv_val').html());
					  GetUserCartAllItems($('#profile_userdiv_val').html());
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function AddItem($itemid, $itemqty)
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetItemById', itemid: $itemid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
					  
					  $iq = parseInt($itemqty.trim()) + 1;
					  
					  var itemidforcart = res[0]["ItemValue"];
	
						$itval = parseInt(itemidforcart.trim());
						$totVal = $itval * $iq;
						
						$.ajax({ url: 'api.php',
							 data: {function2call: 'AddItem', itemid: $itemid, itemqty: $iq, itemvalue: $totVal, userid: $('#profile_userdiv_val').html()},
							 type: 'post',
							 //dataType: 'json',
							 success: function(output) {
										  //var res = jQuery.parseJSON(output);
										  GetUserCartItemsDetails($('#profile_userdiv_val').html());
										  GetUserCartItems($('#profile_userdiv_val').html());
										  GetUserCartAllItems($('#profile_userdiv_val').html());
							 },
							 error: function ( xhr, status, error) {
										alert('Problem updating the database');
								}
							});
										  
							 },
							 error: function ( xhr, status, error) {
										alert('Problem updating the database');
								}
							});
}

function RemoveItem($itemid, $itemqty)
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetItemById', itemid: $itemid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
					  
					  var itemidforcart = res[0]["ItemValue"];
					  
					  $iq = parseInt($itemqty.trim()) - 1;
	
						$itval = parseInt(itemidforcart.trim());
						$totVal = $itval * $iq;
						
						$.ajax({ url: 'api.php',
							 data: {function2call: 'RemoveItem', itemid: $itemid, itemqty: $iq, itemvalue: $totVal, userid: $('#profile_userdiv_val').html()},
							 type: 'post',
							 //dataType: 'json',
							 success: function(output) {
										  //var res = jQuery.parseJSON(output);
										  GetUserCartItemsDetails($('#profile_userdiv_val').html());
										  GetUserCartItems($('#profile_userdiv_val').html());
										  GetUserCartAllItems($('#profile_userdiv_val').html());
							 },
							 error: function ( xhr, status, error) {
										alert('Problem updating the database');
								}
							});
										  
							 },
							 error: function ( xhr, status, error) {
										alert('Problem updating the database');
								}
							});
	
	
}
  </script>
  </head>
<body>

<div style="height:10px;"></div>

<div class="container" id="user_cart_main_container">
<div class="panel panel-default">



  <div class="panel-heading">
  <h3>My Cart</h3><div style="float:right;margin-top: -35px;/* margin-right: 10px; *//* border: 1px solid black; *//* border-radius: 60%; *//* background-color: rgb(245, 245, 245); */width: 30px;height: 30px;text-align: center;position: relative; /* z-index: 10; */ cursor: pointer;"" onclick="CloseCartDiv();"><strong>X</strong></div></div>
  <div class="panel-body" id="CartListPanel">
	<table id="cart" class="table table-hover table-condensed" style="color: black;">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%"></th>
							<th style="width:8%; text-align: center;">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody id="productdetails">
						
							<!-- Will add dynamic data here -->
						
					</tbody>
					<tr style="height:5px;"></tr>
					<tfoot style="background-color: rgb(245, 245, 245);">
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong><div id="totalitemvalues">Total - Rs. </div></strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
						
					</tfoot>
				</table>
				</div>
</div>
</div>
<div id="profile_userdiv_val" style="display:none;"><?php echo $_SESSION["user_name"];?></div>
</body>
</html>