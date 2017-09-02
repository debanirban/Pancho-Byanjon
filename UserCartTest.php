<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
  
  function GetUserCartItems($userid)
  {
	  var carthtml = "";
	  //fetch cart items for this user
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserCartAllItems', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);		  
					  
					  var totalRoomPrices = 0;
					  //get the total value of the items in the cart
						$.each(res, function() {
						  totalRoomPrices += parseFloat(this.ItemValue);
						});
						//alert(totalRoomPrices);

					  for ($i=0; $i<res.length; $i++)
					  {
						  carthtml = carthtml + "<tr><td data-th='Product'><div class='row'><div class='col-sm-2 hidden-xs'><img src=" + "'" + res[$i]["ItemImage"] + "'" + " alt='...' class='img-responsive'/></div><div class='col-sm-10'><h4 class='nomargin'>" + res[$i]["ItemDescription"] + "</h4><div id='it' style='display:none;'>" + "'" + res[$i]["Id"] + "'" + "</div></div></div></td><td data-th='Price'></td><td data-th='Quantity' style='text-align:center; width: 20%;'><div class='col-xs-3' title = 'Remove Item' id='remove_roti' style='cursor: pointer; display: flex;justify-content: center;' onclick='RemoveRoti('1');'>-</div>&nbsp;"+ res[$i]["ItemQty"] + "<div class='col-xs-3 pull-right' id='add_roti' style='cursor: pointer; display: flex;justify-content: center;' title = 'Add Item' onclick='AddRoti('1');'>+</div></td><td data-th='Subtotal' class='text-center'>Rs. " + res[$i]["ItemValue"] + "</td><td class='actions' data-th=''><button class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></button></td></tr>";
						  
						  
						  //carthtml = carthtml + "<tr><td data-th='Product'><div class='row'><div class='col-sm-2 hidden-xs'><img src=" + "'" + res[$i]["ItemImage"] + "'" + " alt='...' class='img-responsive'/></div><div class='col-sm-10'><h4 class='nomargin'>" + res[$i]["ItemDescription"] + "</h4><div id='it' style='display:none;'>" + "'" + res[$i]["Id"] + "'" + "</div></div></div></td><td data-th='Price'></td><td data-th='Quantity' style='text-align:center;'>"+ res[$i]["ItemQty"] + "</td><td data-th='Subtotal' class='text-center'>Rs. " + res[$i]["ItemValue"] + "</td><td class='actions' data-th=''><button class='btn btn-info btn-sm'><i class='fa fa-refresh'></i></button>&nbsp;<button class='btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></button></td></tr>";
						  
					  }
					  $("#productdetails").html(carthtml);
					  $('#totalitemvalues').html($('#totalitemvalues').html() + totalRoomPrices)
			}
		});
  }
  $(document).ready(function(){
	GetUserCartItems('ABCD1234');
	//$("#cartbody").load('UserCart.php');
});
  
function CloseCartDiv()
{
	$("#cartitemcontainer").hide();
}
  </script>
  </head>
<body>

<div style="height:10px;"></div>

<div class="container">
<div class="panel panel-default">



  <div class="panel-heading">
  <h3>My Cart</h3><div style="float:right;margin-top: -35px;/* margin-right: 10px; *//* border: 1px solid black; *//* border-radius: 60%; *//* background-color: rgb(245, 245, 245); */width: 30px;height: 30px;text-align: center;position: relative;z-index: 10;cursor: pointer;"" onclick="CloseCartDiv();"><strong>X</strong></div></div>
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

</body>
</html>