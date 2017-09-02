<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Pancha Byanjone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
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

.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(51,51,51,0.7);
    z-index: 10;
  }
  </style>
<script type="text/javascript">

var eachrotival;
var eachghugnival;
var eachalooval;
var eachtarkaval;
var eachchickenval;
var eachpaneerval;

var rotidesc;
var ghugnidesc;
var aloodesc;
var tarkadesc;
var chickendesc;
var paneerdesc;

function AddRoti($id)
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$roticount = $("#rotiamount").html();
	var rcount = parseInt($roticount.trim()) + 1;
	$("#rotiamount").html(rcount);
	$("#itemCount").show();
	$("#rotitotalval").html(eachrotival * rcount);
	//fetch items' price from database and display
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: rotidesc, itemqty: rcount, itemvalue : $("#rotitotalval").html(), itemimage: 'images/roti.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
	
}

function RemoveRoti($id)
{
	$cartcount = $("#itemCount").html();
	$roticount = $("#rotiamount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($roticount.trim());
	var rcount;
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		rcount = parseInt($roticount.trim()) - 1;
		$("#rotiamount").html(rcount);
		
		if(rcount < 0)
		{
			$("#rotiamount").html('0');
		}
		
		if(ccount < 0)
		{
			$("#itemCount").html('0');
		}
		
		if(ccount == 0)
		$("#itemCount").hide();
	}
	$("#rotitotalval").html(eachrotival * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteFromUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: rotidesc, itemqty: rcount, itemvalue : $("#rotitotalval").html(), itemimage: 'images/roti.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function AddGhugni($id)
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$ghugnicount = $("#ghugnicount").html();
	var rcount = parseInt($ghugnicount.trim()) + 1;
	$("#ghugnicount").html(rcount);
	$("#itemCount").show();
	$("#ghugnitotalval").html(eachghugnival * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: ghugnidesc, itemqty: rcount, itemvalue : $("#ghugnitotalval").html(), itemimage: 'images/ghugni.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function RemoveGhugni($id)
{
	$cartcount = $("#itemCount").html();
	$ghugnicount = $("#ghugnicount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($ghugnicount.trim());
	var rcount;
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		rcount = parseInt($ghugnicount.trim()) - 1;
		$("#ghugnicount").html(rcount);
		
		if(rcount < 0)
		{
			$("#ghugnicount").html('0');
		}
		
		if(ccount < 0)
		{
			$("#itemCount").html('0');
		}
		
		if(ccount == 0)
		$("#itemCount").hide();
	}
	$("#ghugnitotalval").html(eachghugnival * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteFromUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: ghugnidesc, itemqty: rcount, itemvalue : $("#ghugnitotalval").html(), itemimage: 'images/ghugni.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function AddDum($id)
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$dumcount = $("#dumcount").html();
	var rcount = parseInt($dumcount.trim()) + 1;
	$("#dumcount").html(rcount);
	$("#itemCount").show();
	$("#aloototalval").html(eachalooval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: aloodesc, itemqty: rcount, itemvalue : $("#aloototalval").html(), itemimage: 'images/aloodum.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function RemoveDum($id)
{
	$cartcount = $("#itemCount").html();
	$dumcount = $("#dumcount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($dumcount.trim());
	var rcount;
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		rcount = parseInt($dumcount.trim()) - 1;
		$("#dumcount").html(rcount);
		
		if(rcount < 0)
		{
			$("#dumcount").html('0');
		}
		
		if(ccount < 0)
		{
			$("#itemCount").html('0');
		}
		
		if(ccount == 0)
		$("#itemCount").hide();
	}
	$("#aloototalval").html(eachalooval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteFromUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: aloodesc, itemqty: rcount, itemvalue : $("#aloototalval").html(), itemimage: 'images/aloodum.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function AddTarka($id)
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$tarkacount = $("#tarkacount").html();
	var rcount = parseInt($tarkacount.trim()) + 1;
	$("#tarkacount").html(rcount);
	$("#itemCount").show();
	$("#tarkatotalval").html(eachtarkaval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: tarkadesc, itemqty: rcount, itemvalue : $("#tarkatotalval").html(), itemimage: 'images/vegtarka.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function RemoveTarka($id)
{
	$cartcount = $("#itemCount").html();
	$tarkacount = $("#tarkacount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($tarkacount.trim());
	var rcount;
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		rcount = parseInt($tarkacount.trim()) - 1;
		$("#tarkacount").html(rcount);
		
		if(rcount < 0)
		{
			$("#tarkacount").html('0');
		}
		
		if(ccount < 0)
		{
			$("#itemCount").html('0');
		}
		
		if(ccount == 0)
		$("#itemCount").hide();
	}
	$("#tarkatotalval").html(eachtarkaval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteFromUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: tarkadesc, itemqty: rcount, itemvalue : $("#tarkatotalval").html(), itemimage: 'images/vegtarka.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}


function AddKasa($id)
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$kasacount = $("#kasacount").html();
	var rcount = parseInt($kasacount.trim()) + 1;
	$("#kasacount").html(rcount);
	$("#itemCount").show();
	$("#chickentotalval").html(eachchickenval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: chickendesc, itemqty: rcount, itemvalue : $("#chickentotalval").html(), itemimage: 'images/chickenkasa.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function RemoveKasa($id)
{
	$cartcount = $("#itemCount").html();
	$kasacount = $("#kasacount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($kasacount.trim());
	var rcount;
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		rcount = parseInt($kasacount.trim()) - 1;
		$("#kasacount").html(rcount);
		
		if(rcount < 0)
		{
			$("#kasacount").html('0');
		}
		
		if(ccount < 0)
		{
			$("#itemCount").html('0');
		}
		
		if(ccount == 0)
		$("#itemCount").hide();
	}
	$("#chickentotalval").html(eachchickenval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteFromUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: chickendesc, itemqty: rcount, itemvalue : $("#chickentotalval").html(), itemimage: 'images/chickenkasa.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}



function AddPaneer($id)
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$paneercount = $("#paneercount").html();
	var rcount = parseInt($paneercount.trim()) + 1;
	$("#paneercount").html(rcount);
	$("#itemCount").show();
	$("#paneertotalval").html(eachpaneerval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: paneerdesc, itemqty: rcount, itemvalue : $("#paneertotalval").html(), itemimage: 'images/paneerbuttermasala.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function RemovePaneer($id)
{
	$cartcount = $("#itemCount").html();
	$paneercount = $("#paneercount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($paneercount.trim());
	var rcount;
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		rcount = parseInt($paneercount.trim()) - 1;
		$("#paneercount").html(rcount);
		
		if(rcount < 0)
		{
			$("#paneercount").html('0');
		}
		
		if(ccount < 0)
		{
			$("#itemCount").html('0');
		}
		
		if(ccount == 0)
		$("#itemCount").hide();
	}
	$("#paneertotalval").html(eachpaneerval * rcount);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteFromUserCart', userid: 'ABCD1234', itemid: $id, itemdescription: paneerdesc, itemqty: rcount, itemvalue : $("#paneertotalval").html(), itemimage: 'images/paneerbuttermasala.jpg'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function GetUserCartItems($userid)
{
	var cartitemresult = 0;
	//fetch items' price from database and display
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserCartItems', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      cartitemresult = jQuery.parseJSON(output)[0]["SUM(ItemQty)"];
					  //ShowUserCart(cartitemresult);
					  
					  //return false;
					  $("#itemCount").html(cartitemresult);
					  $cartcount = $("#itemCount").html();
						var ccount = parseInt($cartcount.trim());
						if(!ccount)
						{
							$("#itemCount").html('0');
							$("#itemCount").hide();
						}
						else if(ccount == 0)
						{
							$("#itemCount").hide();
						}
						else
						{
							$("#itemCount").html(ccount);
						}
			}
		});
}


function GetUserCartAllItems($userid)
{
	var res = 0;
	var fetchroti = 0;
	var fetchghugni = 0;
	var fetchdum = 0;
	var fetchtarka = 0;
	var fetchkasa = 0;
	var fetchpaneer = 0;
	//fetch items' price from database and display
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserCartAllItems', userid: $userid},
         type: 'post',
         success: function(output) {
                      res = jQuery.parseJSON(output);
					  //return false;
					  for ($i=0; $i<res.length; $i++)
					  {
						  if(res[$i]["ItemDescription"] == $('#rotiid').html().trim())
						  {
							  fetchroti = 1;
							  
							  if(!res[$i]["ItemQty"])
							  {
								  $('#rotiamount').html('0');
							  }
							  else
							  {
									$('#rotiamount').html(res[$i]["ItemQty"]);
							  }
						  }
						  else if(res[$i]["ItemDescription"] == $('#ghugniid').html().trim())
						  {
							  fetchghugni = 1;
							  
							  if(!res[$i]["ItemQty"])
							  {
								  $('#ghugnicount').html('0');
							  }
							  else
							  {
								$('#ghugnicount').html(res[$i]["ItemQty"]);
							  }
						  }
						  else if(res[$i]["ItemDescription"] == $('#alooid').html().trim())
						  {
							  fetchdum = 1;
							  
							  if(!res[$i]["ItemQty"])
							  {
								  $('#dumcount').html('0');
							  }
							  else
							  {
								$('#dumcount').html(res[$i]["ItemQty"]);
							  }
						  }
						  else if(res[$i]["ItemDescription"] == $('#tarkaid').html().trim())
						  {
							  fetchtarka = 1;
							  
							  if(!res[$i]["ItemQty"])
							  {
								  $('#tarkacount').html('0');
							  }
							  else
							  {
								$('#tarkacount').html(res[$i]["ItemQty"]);
							  }
						  }
						  else if(res[$i]["ItemDescription"] == $('#chickenid').html().trim())
						  {
							  fetchkasa = 1;
							  
							  if(!res[$i]["ItemQty"])
							  {
								  $('#kasacount').html('0');
							  }
							  else
							  {
								$('#kasacount').html(res[$i]["ItemQty"]);
							  }
						  }
						  else if(res[$i]["ItemDescription"] == $('#paneerid').html().trim())
						  {
							  fetchpaneer = 1;
							  
							  if(!res[$i]["ItemQty"])
							  {
								  $('#paneercount').html('0');
							  }
							  else
							  {
								$('#paneercount').html(res[$i]["ItemQty"]);
							  }
						  }
					  }
					  
						if(fetchroti == 0){$('#rotiamount').html('0');}
						if(fetchghugni == 0){$('#ghugnicount').html('0');}
						if(fetchdum == 0){$('#dumcount').html('0');}
						if(fetchtarka == 0){$('#tarkacount').html('0');}
						if(fetchkasa == 0){$('#kasacount').html('0');}
						if(fetchpaneer == 0){$('#paneercount').html('0');}
			}
		});
}

$(document).ready(function(){
	GetUserCartItems('ABCD1234');
	GetUserCartAllItems('ABCD1234');
	
    //$cartcount = $("#itemCount").html();
	//var ccount = parseInt($cartcount.trim());
	var res;
	
	//fetch items' price from database and display
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetAllItems'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      res = jQuery.parseJSON(output);
					  //ShowUserCart(res.length);
					  for ($i=0; $i<res.length; $i++)
					  {
						  if(res[$i]["ItemDescription"] == $('#rotiid').html().trim())
						  {
							  $('#rotival').html($('#rotival').html() + res[$i]["ItemValue"]);
							  eachrotival = res[$i]["ItemValue"];
							  rotidesc = res[$i]["ItemDescription"];
						  }
						  else if(res[$i]["ItemDescription"] == $('#ghugniid').html().trim())
						  {
							  $('#ghugnival').html($('#ghugnival').html() + res[$i]["ItemValue"]);
							  eachghugnival = res[$i]["ItemValue"];
							  ghugnidesc = res[$i]["ItemDescription"];
						  }
						  else if(res[$i]["ItemDescription"] == $('#alooid').html().trim())
						  {
							  $('#alooval').html($('#alooval').html() + res[$i]["ItemValue"]);
							  eachalooval = res[$i]["ItemValue"];
							  aloodesc = res[$i]["ItemDescription"];
						  }
						  else if(res[$i]["ItemDescription"] == $('#tarkaid').html().trim())
						  {
							  $('#tarkaval').html($('#tarkaval').html() + res[$i]["ItemValue"]);
							  eachtarkaval = res[$i]["ItemValue"];
							  tarkadesc = res[$i]["ItemDescription"];
						  }
						  else if(res[$i]["ItemDescription"] == $('#chickenid').html().trim())
						  {
							  $('#chickenval').html($('#chickenval').html() + res[$i]["ItemValue"]);
							  eachchickenval = res[$i]["ItemValue"];
							  chickendesc = res[$i]["ItemDescription"];
						  }
						  else if(res[$i]["ItemDescription"] == $('#paneerid').html().trim())
						  {
							  $('#paneerval').html($('#paneerval').html() + res[$i]["ItemValue"]);
							  eachpaneerval = res[$i]["ItemValue"];
							  paneerdesc = res[$i]["ItemDescription"];
						  }
					  }
			}
		});
});

function ShowUserCart()
{
	//var htmlStr = "<a href='#' data-toggle='modal' data-target='#myModal'><span class='glyphicon glyphicon-shopping-cart'></span> Cart";
	//htmlStr = htmlStr + "<span class='navbar-right' id='itemCount'>0</span></a>"
	
	//var htmlStrNone = "<a href='#' data-toggle='modal' data-target='#myModalNone'><span class='glyphicon glyphicon-shopping-cart'></span> Cart";
	//htmlStrNone = htmlStrNone + "<span class='navbar-right' id='itemCount'>0</span></a>"
	
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim());
	
	$("#cartitemsdiv").load('UserCart.php');
	$("#cartitemcontainer").show();
		
}

function CloseCartDiv()
{
	//alert('Hi');
	$("#cartitemcontainer").hide();
}
</script>
</head>
<body>

<div class="jumbotron" style="background-image:url('images/Merged01.png');">
  <div class="container text-center">
  <!--<img src="Logo02.png" style="width:80px;" vspace="20" class="pull-left" class="img-responsive">-->
    <h1>Pancha Byanjon</h1>      
    <p>Hunger...Overruled</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
	  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li id="usercartdiv"><a href="#" onclick="ShowUserCart();"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
		<span class="navbar-right" id="itemCount">0</span></a></li>
      </ul>
    </div>
	
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" id="rotiid">Roti</div>
        <div class="panel-body"><img src="images/roti.jpg" class="img-responsive" style="width:100%" alt="Roti"></div>
        <div class="panel-footer" id="rotival">
			Rs. 
			<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_roti" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveRoti('1');">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="rotiamount">0</div><div class="col-xs-3" id="add_roti" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddRoti('1');">+</div>
			</div>
			<div style="display:none" id="rotitotalval"></div>
		</div>
		
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-danger">-->
		<div class="panel panel-primary">
        <div class="panel-heading" id="ghugniid">Ghugni</div>
        <div class="panel-body"><img src="images/ghugni.jpg" class="img-responsive" style="width:100%" alt="Ghugni"></div>
        <div class="panel-footer" id="ghugnival">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_ghugni" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveGhugni('2');">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="ghugnicount">0</div><div class="col-xs-3" id="add_ghugni" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddGhugni('2');">+</div>
			</div>
			<div style="display:none" id="ghugnitotalval"></div>
		</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-success">-->
		<div class="panel panel-primary">
        <div class="panel-heading" id="alooid">Aloo Dum</div>
        <div class="panel-body"><img src="images/aloodum.jpg" class="img-responsive" style="width:100%" alt="Aloo Dum"></div>
        <div class="panel-footer" id="alooval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_aloodum" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveDum('3');">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="dumcount">0</div><div class="col-xs-3" id="add_aloodum" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddDum('3');">+</div>
			</div>
			<div style="display:none" id="aloototalval"></div>
		</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading" id="tarkaid">Tarka</div>
        <div class="panel-body"><img src="images/vegtarka.jpg" class="img-responsive" style="width:100%" alt="Tarka"></div>
        <div class="panel-footer" id="tarkaval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_tarka" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveTarka('4');">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="tarkacount">0</div><div class="col-xs-3" id="add_tarka" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddTarka('4');">+</div>
			</div>
			<div style="display:none" id="tarkatotalval"></div>
		</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-success">-->
	  <div class="panel panel-primary">
        <div class="panel-heading" id="chickenid">Chicken Kasa</div>
        <div class="panel-body"><img src="images/chickenkasa.jpg" class="img-responsive" style="width:100%" alt="Chicken Kasa"></div>
        <div class="panel-footer" id="chickenval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_kasa" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveKasa('5');">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="kasacount">0</div><div class="col-xs-3" id="add_kasa" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddKasa('5');">+</div>
			</div>
			<div style="display:none" id="chickentotalval"></div>
		</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading" id="paneerid">Paneer Butter Masala</div>
        <div class="panel-body"><img src="images/paneerbuttermasala.jpg" class="img-responsive" style="width:100%" alt="Paneer Butter Masala"></div>
        <div class="panel-footer" id="paneerval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_paneer" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemovePaneer('6');">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="paneercount">0</div><div class="col-xs-3" id="add_paneer" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddPaneer('6');">+</div>
			</div>
			<div style="display:none" id="paneertotalval"></div>
		</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Pancha Byanjon Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
<!-- Create the Cart Div -->

  <div class='overlay' style="display:none;" id="cartitemcontainer">
	<span id="cartitemsdiv" style="width: auto;height: auto;margin-top: 50%;margin: 0 auto;color: beige;position: relative;padding: 10px;top: 50%;"></span>
  </div>

<!-- End of Card Div creation -->
</body>
</html>