<?php session_start();
if(!isset($_SESSION['user_name']) && empty($_SESSION['user_name']))
{
	 $_SESSION['user_fname'] = "Guest";
	 //$_SESSION["user_name"] = session_id();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Pancha Byanjone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="font-awesome-animation.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    width: 24px;
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
  
  .dropdown-menu > li > a:hover {
                        background-color: rgb(34,34,34);
                        color: #fff;
                    }
					
	.dropdown-menu > li > a {
                        color: #9d9d9d;
                    }
					
	.dropdown-menu{
		background-color: rgb(34,34,34);
	}
}



<!-- this is for the rating -->

.rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}

/* Scrollbar Styling */
::-webkit-scrollbar {
    width: 4px;
}
 
::-webkit-scrollbar-track {
    background-color: #ebebeb;
    -webkit-border-radius: 0px;
    border-radius: 0px;
}

::-webkit-scrollbar-thumb {
    -webkit-border-radius: 0px;
    border-radius: 0px;
    background: #6d6d6d; 
}

.come-in {
  transform: rotate(360deg);
  animation: come-in 0.8s ease forwards;
}
.come-in:nth-child(odd) {
  animation-duration: 0.6s; /* So they look staggered */
}

@keyframes come-in {
  to { transform: rotate(0deg); }
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
         data: {function2call: 'UpdateUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: rotidesc, itemqty: rcount, itemvalue : $("#rotitotalval").html(), itemimage: 'images/roti.jpg'},
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
         data: {function2call: 'DeleteFromUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: rotidesc, itemqty: rcount, itemvalue : $("#rotitotalval").html(), itemimage: 'images/roti.jpg'},
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
         data: {function2call: 'UpdateUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: ghugnidesc, itemqty: rcount, itemvalue : $("#ghugnitotalval").html(), itemimage: 'images/ghugni.jpg'},
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
         data: {function2call: 'DeleteFromUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: ghugnidesc, itemqty: rcount, itemvalue : $("#ghugnitotalval").html(), itemimage: 'images/ghugni.jpg'},
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
         data: {function2call: 'UpdateUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: aloodesc, itemqty: rcount, itemvalue : $("#aloototalval").html(), itemimage: 'images/aloodum.jpg'},
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
         data: {function2call: 'DeleteFromUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: aloodesc, itemqty: rcount, itemvalue : $("#aloototalval").html(), itemimage: 'images/aloodum.jpg'},
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
         data: {function2call: 'UpdateUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: tarkadesc, itemqty: rcount, itemvalue : $("#tarkatotalval").html(), itemimage: 'images/vegtarka.jpg'},
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
         data: {function2call: 'DeleteFromUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: tarkadesc, itemqty: rcount, itemvalue : $("#tarkatotalval").html(), itemimage: 'images/vegtarka.jpg'},
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
         data: {function2call: 'UpdateUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: chickendesc, itemqty: rcount, itemvalue : $("#chickentotalval").html(), itemimage: 'images/chickenkasa.jpg'},
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
         data: {function2call: 'DeleteFromUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: chickendesc, itemqty: rcount, itemvalue : $("#chickentotalval").html(), itemimage: 'images/chickenkasa.jpg'},
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
         data: {function2call: 'UpdateUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: paneerdesc, itemqty: rcount, itemvalue : $("#paneertotalval").html(), itemimage: 'images/paneerbuttermasala.jpg'},
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
         data: {function2call: 'DeleteFromUserCart', userid: $('#profile_userdiv').html(), itemid: $id, itemdescription: paneerdesc, itemqty: rcount, itemvalue : $("#paneertotalval").html(), itemimage: 'images/paneerbuttermasala.jpg'},
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
                      cartitemresult = jQuery.parseJSON(output)[0]["SUM(ItemsQty)"];
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
						  if(res[$i]["ItemDsc"] == $('#rotiid').html().trim())
						  {
							  fetchroti = 1;
							  
							  if(!res[$i]["ItemsQty"])
							  {
								  $('#rotiamount').html('0');
							  }
							  else
							  {
									$('#rotiamount').html(res[$i]["ItemsQty"]);
							  }
						  }
						  else if(res[$i]["ItemDsc"] == $('#ghugniid').html().trim())
						  {
							  fetchghugni = 1;
							  
							  if(!res[$i]["ItemsQty"])
							  {
								  $('#ghugnicount').html('0');
							  }
							  else
							  {
								$('#ghugnicount').html(res[$i]["ItemsQty"]);
							  }
						  }
						  else if(res[$i]["ItemDsc"] == $('#alooid').html().trim())
						  {
							  fetchdum = 1;
							  
							  if(!res[$i]["ItemsQty"])
							  {
								  $('#dumcount').html('0');
							  }
							  else
							  {
								$('#dumcount').html(res[$i]["ItemsQty"]);
							  }
						  }
						  else if(res[$i]["ItemDsc"] == $('#tarkaid').html().trim())
						  {
							  fetchtarka = 1;
							  
							  if(!res[$i]["ItemsQty"])
							  {
								  $('#tarkacount').html('0');
							  }
							  else
							  {
								$('#tarkacount').html(res[$i]["ItemsQty"]);
							  }
						  }
						  else if(res[$i]["ItemDsc"] == $('#chickenid').html().trim())
						  {
							  fetchkasa = 1;
							  
							  if(!res[$i]["ItemsQty"])
							  {
								  $('#kasacount').html('0');
							  }
							  else
							  {
								$('#kasacount').html(res[$i]["ItemsQty"]);
							  }
						  }
						  else if(res[$i]["ItemDsc"] == $('#paneerid').html().trim())
						  {
							  fetchpaneer = 1;
							  
							  if(!res[$i]["ItemsQty"])
							  {
								  $('#paneercount').html('0');
							  }
							  else
							  {
								$('#paneercount').html(res[$i]["ItemsQty"]);
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

function AssignItemIds($div_id, $desc, $assigned_id)
{
	//$divid = $('#' + $div_id).attr('id');
	$fp_divid = $div_id.split('_');
	
	$item_desc = $desc.split(' ');
	
	//check if the item description matches with the first part of the div id
	if($fp_divid[0] == $item_desc[0].toLowerCase())
	{
		$('#' + $div_id).html($assigned_id);
	}
}

$(document).ready(function(){
	GetUserCartItems($('#profile_userdiv').html());
	GetUserCartAllItems($('#profile_userdiv').html());
	GetUserWelcomeText();
	
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
						  
						  AssignItemIds('roti_val_id', res[$i]["ItemDescription"], res[$i]["ItemId"]);
						  AssignItemIds('ghugni_val_id', res[$i]["ItemDescription"], res[$i]["ItemId"]);
						  AssignItemIds('aloo_val_id', res[$i]["ItemDescription"], res[$i]["ItemId"]);
						  AssignItemIds('tarka_val_id', res[$i]["ItemDescription"], res[$i]["ItemId"]);
						  AssignItemIds('chicken_val_id', res[$i]["ItemDescription"], res[$i]["ItemId"]);
						  AssignItemIds('paneer_val_id', res[$i]["ItemDescription"], res[$i]["ItemId"]);
						  
						  AssignItemIds('roti_each_val_id', res[$i]["ItemDescription"], res[$i]["ItemValue"]);
						  AssignItemIds('ghugni_each_val_id', res[$i]["ItemDescription"], res[$i]["ItemValue"]);
						  AssignItemIds('aloo_each_val_id', res[$i]["ItemDescription"], res[$i]["ItemValue"]);
						  AssignItemIds('tarka_each_val_id', res[$i]["ItemDescription"], res[$i]["ItemValue"]);
						  AssignItemIds('chicken_each_val_id', res[$i]["ItemDescription"], res[$i]["ItemValue"]);
						  AssignItemIds('paneer_each_val_id', res[$i]["ItemDescription"], res[$i]["ItemValue"]);
						  
						  AssignItemIds('roti_desc', res[$i]["ItemDescription"], res[$i]["ItemDescription"]);
						  AssignItemIds('ghugni_desc', res[$i]["ItemDescription"], res[$i]["ItemDescription"]);
						  AssignItemIds('aloo_desc', res[$i]["ItemDescription"], res[$i]["ItemDescription"]);
						  AssignItemIds('tarka_desc', res[$i]["ItemDescription"], res[$i]["ItemDescription"]);
						  AssignItemIds('chicken_desc', res[$i]["ItemDescription"], res[$i]["ItemDescription"]);
						  AssignItemIds('paneer_desc', res[$i]["ItemDescription"], res[$i]["ItemDescription"]);
						  
						  AssignItemIds('roti_img', res[$i]["ItemDescription"], res[$i]["ItemImage"]);
						  AssignItemIds('ghugni_img', res[$i]["ItemDescription"], res[$i]["ItemImage"]);
						  AssignItemIds('aloo_img', res[$i]["ItemDescription"], res[$i]["ItemImage"]);
						  AssignItemIds('tarka_img', res[$i]["ItemDescription"], res[$i]["ItemImage"]);
						  AssignItemIds('chicken_img', res[$i]["ItemDescription"], res[$i]["ItemImage"]);
						  AssignItemIds('paneer_img', res[$i]["ItemDescription"], res[$i]["ItemImage"]);
					  }
			}
		});
		
					  if($('#loginout').html() == 'Guest')
					  {
						$('#inoutuser').html('<a href="#" style="" onclick="LogInUser();"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;&nbsp;Log In</a>');
					  }
					  else
					  {
						  $('#inoutuser').html('<a href="#" style="" onclick="LogOutUser();"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;&nbsp;Log Out</a>');
					  }
					  
					  GetUserReviews();
					  GetUserFavs();
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
	$("#cartitemcontainer").show('fold', 1000);
		
}

function CloseCartDiv()
{
	//alert('Hi');
	$("#cartitemcontainer").hide('clip', 1500);
}

function LogInUser()
{
	window.location.href = "Login.php";
}

function LogOutUser()
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'Logout'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //var res = jQuery.parseJSON(output);
					  window.location.href = "Home.php";
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
}

function UserReviews($itdesc, $idvl)
{
	//alert($('#' + $id).val());
	//alert('#rstar5').html();
	//var cartitemresult = 0;
	$clval = $idvl;
	$idval = $('#' + $idvl).val();
	//fetch items' price from database and display
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'UserReviews', userid: $userid, itdesc: $itdesc, idval: $idval, clval: $clval},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 //alert(output);
			}
		});
}

function GetUserReviews()
{
	//$clval = $idvl;
	//$idval = $('#' + $idvl).val();
	//fetch items' price from database and display
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserReviews', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 
			 for(var i=0;i<res.length;i++)
			 {
				 $('#' + res[i]["RatingValue"]).prop("checked", true);
			 }
			}
		});
}

function ChangeColor($id, $colr)
{
	$('#' + $id).css('color' , $colr);
}

function StoreUserFavs($itemid, $id, $colr, $it_val, $itemdescription, $itemimage)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'StoreUserFavs', userid: $userid, itemid: $itemid, it_val: $it_val, itemdescription: $itemdescription, itemimage: $itemimage},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 if(res == null)
			 {
				ChangeColor($id, 'red');
				$('#' + $id).prop('title', 'Remove from favourites');
			 }
			 else
			 {
				 ChangeColor($id, 'white');
				 $('#' + $id).prop('title', 'Mark as favourite');
			 }
			}
		});
}

function ToggleUserFavs($div_id, $desc)
{
	//$divid = $('#' + $div_id).attr('id');
	
	$fp_divid = $div_id.split('_');
	
	if($desc != null)
	$item_desc = $desc.split(' ');
	
	//check if the item description matches with the first part of the div id
	if($fp_divid[0] == $item_desc[0].toLowerCase())
	{
		ChangeColor($div_id, 'red');
		$('#' + $div_id).prop('title', 'Remove from favourites');
	}
}

function GetUserFavs()
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserFavs', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 for(var i=0;i<res.length;i++)
			 {
				 ToggleUserFavs('roti_fav', res[i]["Items_Desc"]);
				 ToggleUserFavs('ghugni_fav', res[i]["Items_Desc"]);
				 ToggleUserFavs('aloo_fav', res[i]["Items_Desc"]);
				 ToggleUserFavs('tarka_fav', res[i]["Items_Desc"]);
				 ToggleUserFavs('chicken_fav', res[i]["Items_Desc"]);
				 ToggleUserFavs('paneer_fav', res[i]["Items_Desc"]);
			 }
			}
		});
}

function GetUserWelcomeText()
{
	//$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserWelcomeText'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 $('#welcometext').html(res[0]["WelcomeWord"]);
			 if(res[0]["WordPronounciation"] == "" || res[0]["WordPronounciation"] == null)
			 {
				$('#userwelcome').attr('title', 'Now you know how to welcome someone in ' + res[0]["WelcomeLanguage"]);
			 }
			 else
			 {
				 $('#userwelcome').attr('title', 'Now you know how to welcome someone in ' + res[0]["WelcomeLanguage"] + '\n It is pronounced as ' + res[0]["WordPronounciation"]);
			 }
			}
		});
}


$.fn.isOnScreen = function(partial){

    //let's be sure we're checking only one element (in case function is called on set)
    var t = $(this).first();

    //we're using getBoundingClientRect to get position of element relative to viewport
    //so we dont need to care about scroll position
    var box = t[0].getBoundingClientRect();

    //let's save window size
    var win = {
        h : $(window).height(),
        w : $(window).width()
    };

    //now we check against edges of element

    //firstly we check one axis
    //for example we check if left edge of element is between left and right edge of scree (still might be above/below)
    var topEdgeInRange = box.top >= 0 && box.top <= win.h;
    var bottomEdgeInRange = box.bottom >= 0 && box.bottom <= win.h;

    var leftEdgeInRange = box.left >= 0 && box.left <= win.w;
    var rightEdgeInRange = box.right >= 0 && box.right <= win.w;


    //here we check if element is bigger then window and 'covers' the screen in given axis
    var coverScreenHorizontally = box.left <= 0 && box.right >= win.w;
    var coverScreenVertically = box.top <= 0 && box.bottom >= win.h;

    //now we check 2nd axis
    var topEdgeInScreen = topEdgeInRange && ( leftEdgeInRange || rightEdgeInRange || coverScreenHorizontally );
    var bottomEdgeInScreen = bottomEdgeInRange && ( leftEdgeInRange || rightEdgeInRange || coverScreenHorizontally );

    var leftEdgeInScreen = leftEdgeInRange && ( topEdgeInRange || bottomEdgeInRange || coverScreenVertically );
    var rightEdgeInScreen = rightEdgeInRange && ( topEdgeInRange || bottomEdgeInRange || coverScreenVertically );

    //now knowing presence of each edge on screen, we check if element is partially or entirely present on screen
    var isPartiallyOnScreen = topEdgeInScreen || bottomEdgeInScreen || leftEdgeInScreen || rightEdgeInScreen;
    var isEntirelyOnScreen = topEdgeInScreen && bottomEdgeInScreen && leftEdgeInScreen && rightEdgeInScreen;

    return partial ? isPartiallyOnScreen : isEntirelyOnScreen;

};

$.expr.filters.onscreen = function(elem) {
  return $(elem).isOnScreen(true);
};

$.expr.filters.entireonscreen = function(elem) {
  return $(elem).isOnScreen(true);
};

/*
Usage:

$(".some-element").filter(":onscreen").doSomething();
$(".some-element").filter(":entireonscreen").doSomething();
$(".some-element").isOnScreen(); // true / false
$(".some-element").isOnScreen(true); // true / false (partially on screen)
$(".some-element").is(":onscreen"); // true / false (partially on screen)
$(".some-element").is(":entireonscreen"); // true / false 
*/

function CheckSettingsDivVisibility()
{
	var tarka_item_div = $("#tarka_item_div").isOnScreen(true);
	var pbm_item_div = $("#pbm_item_div").isOnScreen(true);
	var cknks_item_div = $("#cknks_item_div").isOnScreen(true);
	
	if(tarka_item_div == true)
	{
		$('#tarka_item_div').addClass("come-in");
		$('#tarka_item_div').show();
	}
	
	if(pbm_item_div == true)
	{
		$('#pbm_item_div').addClass("come-in");
		$('#pbm_item_div').show();
	}
	
	if(cknks_item_div == true)
	{
		$('#cknks_item_div').addClass("come-in");
		$('#cknks_item_div').show();
	}
}

$(window).load(function() {
    //CheckSettingsDivVisibility();
});

$(window).on("scroll", function () {
  /*mods.each(function () {
    $(this).toggleClass("come-in", $(this).visible(true));
  });*/
  //IfSettingsDivVisible();
  CheckSettingsDivVisibility();
});
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
        <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>-->
		
		<!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Your Account</a>
          <ul class="dropdown-menu" role="menu" style="background-color: rgb(34, 34, 34);">
            <li><a href="#" style="color:#9d9d9d;background-color: rgb(34,34,34);">Profile</a></li>
            <li><a href="#" style="color:#9d9d9d;background-color: rgb(34,34,34);">My Orders</a></li>
            <li><a href="#" style="color:#9d9d9d;background-color: rgb(34,34,34);">My overall expenditure</a></li>
            <li class="divider" style="background-color:#8a8686;"></li>
            <li><a href="#" style="color:#9d9d9d;background-color: rgb(34,34,34);">Log Out</a></li>
            <!--<li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
		
		<li class="dropdown">
          <a href="#" id="accountdropdown" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Your Account</a>
          <ul class="dropdown-menu" role="menu">
			<li><a href="#" style="" id="userwelcome"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span id="welcometext">Welcome</span> <?php echo $_SESSION['user_fname'];?></a></li>
			<li class="divider" style=""></li>
            <li><a href="UserProfile" style=""><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;&nbsp;&nbsp;Profile</a></li>
            <li><a href="#" style=""><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;&nbsp;&nbsp;My Orders</a></li>
            <li><a href="#" style=""><span class="glyphicon glyphicon-usd"></span>&nbsp;&nbsp;&nbsp;&nbsp;My overall expenditure</a></li>
            <li class="divider" style=""></li>
            <li id="inoutuser"><a href="#" style="" onclick="LogOutUser();"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;&nbsp;Log Out
			</a></li>
			<div id="loginout" style="display:none;"><?php echo $_SESSION['user_fname'];?></div>
            <!--<li class="divider"></li>
            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
		
		<!-- Fix the menu -->
		
		<!-- End fix -->
		
        <li id="usercartdiv"><a href="#" onclick="ShowUserCart();"><span class="glyphicon glyphicon-shopping-cart"></span> Cart&nbsp;
		<span class="navbar-right" id="itemCount">0</span></a></li>
      </ul>
    </div>
	
  </div>
</nav>

<div class="container">    
  <div class="row">
  <!-- get all the ids of he items -->
  <div style="display:none;" id="roti_val_id"></div>
  <div style="display:none;" id="ghugni_val_id"></div>
  <div style="display:none;" id="aloo_val_id"></div>
  <div style="display:none;" id="tarka_val_id"></div>
  <div style="display:none;" id="chicken_val_id"></div>
  <div style="display:none;" id="paneer_val_id"></div>
  
  <div style="display:none;" id="roti_each_val_id"></div>
  <div style="display:none;" id="ghugni_each_val_id"></div>
  <div style="display:none;" id="aloo_each_val_id"></div>
  <div style="display:none;" id="tarka_each_val_id"></div>
  <div style="display:none;" id="chicken_each_val_id"></div>
  <div style="display:none;" id="paneer_each_val_id"></div>
  
  <div style="display:none;" id="roti_desc"></div>
  <div style="display:none;" id="ghugni_desc"></div>
  <div style="display:none;" id="aloo_desc"></div>
  <div style="display:none;" id="tarka_desc"></div>
  <div style="display:none;" id="chicken_desc"></div>
  <div style="display:none;" id="paneer_desc"></div>
  
  <div style="display:none;" id="roti_img"></div>
  <div style="display:none;" id="ghugni_img"></div>
  <div style="display:none;" id="aloo_img"></div>
  <div style="display:none;" id="tarka_img"></div>
  <div style="display:none;" id="chicken_img"></div>
  <div style="display:none;" id="paneer_img"></div>
  
  
  <!-- end -->
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><span id="rotiid">Roti</span>
		<span style="width: 70%; position: absolute; text-align: center;"><i  style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Mark as favourite" class="fa fa-heart faa-pulse animated" id="roti_fav" onclick="StoreUserFavs($('#roti_val_id').html(), 'roti_fav', 'red', $('#roti_each_val_id').html(), $('#roti_desc').html(), $('#roti_img').html());"></i></span>
		<div class="pull-right" style="position: relative;font-size: 8px;">
			<fieldset class="rating">
				<input type="radio" id="rstar5" name="rrating" value="5" onclick="UserReviews('Roti','rstar5')"/><label for="rstar5" title="Excellent!">5 stars</label>
				<input type="radio" id="rstar4" name="rrating" value="4" onclick="UserReviews('Roti','rstar4')"/><label for="rstar4" title="Pretty good">4 stars</label>
				<input type="radio" id="rstar3" name="rrating" value="3" onclick="UserReviews('Roti','rstar3')"/><label for="rstar3" title="Good">3 stars</label>
				<input type="radio" id="rstar2" name="rrating" value="2" onclick="UserReviews('Roti','rstar2')"/><label for="rstar2" title="Bad">2 stars</label>
				<input type="radio" id="rstar1" name="rrating" value="1" onclick="UserReviews('Roti','rstar1')"/><label for="rstar1" title="Horrible">1 star</label>
			</fieldset>
		</div>
		<!--<div style="position: absolute; width:80%; text-align: center; top: 14px;"><i class="fa fa-heart fa-fw w3-margin-right w3-text-theme" style="color:red; position: relative"></i></div>-->
		</div>
		
        <div class="panel-body"><img src="images/roti.jpg" class="img-responsive" style="width:100%" alt="Roti"></div>
        <div class="panel-footer" id="rotival">
			Rs. 
			<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_roti" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' onclick="RemoveRoti('1');" title='Remove Item' class='pull-right fa fa-minus-square'></i></div><div class="col-xs-2" style="display: flex; justify-content: center; text-shadow: 4px 4px 6px #777;" id="rotiamount">0</div><div class="col-xs-3" id="add_roti" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' title='Add Item' onclick="AddRoti('1');" class='pull-right fa fa-plus-square'></i></div>
			</div>
			<div style="display:none" id="rotitotalval"></div>
		</div>
		
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-danger">-->
		<div class="panel panel-primary">
        <div class="panel-heading"><span id="ghugniid">Ghugni</span>
		<span style="width: 60%; position: absolute; text-align: center;"><i style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Mark as favourite" class="fa fa-heart faa-pulse animated" id="ghugni_fav" onclick="StoreUserFavs($('#ghugni_val_id').html(), 'ghugni_fav', 'red', $('#ghugni_each_val_id').html(), $('#ghugni_desc').html(), $('#ghugni_img').html());"></i></span>
		<div class="pull-right" style="position: relative;font-size: 8px;">
			<fieldset class="rating">
				<input type="radio" id="gstar5" name="grating" value="5" onclick="UserReviews('Ghugni','gstar5')"/><label for="gstar5" title="Excellent!">5 stars</label>
				<input type="radio" id="gstar4" name="grating" value="4" onclick="UserReviews('Ghugni','gstar4')"/><label for="gstar4" title="Pretty good">4 stars</label>
				<input type="radio" id="gstar3" name="grating" value="3" onclick="UserReviews('Ghugni','gstar3')"/><label for="gstar3" title="Good">3 stars</label>
				<input type="radio" id="gstar2" name="grating" value="2" onclick="UserReviews('Ghugni','gstar2')"/><label for="gstar2" title="Bad">2 stars</label>
				<input type="radio" id="gstar1" name="grating" value="1" onclick="UserReviews('Ghugni','gstar1')"/><label for="gstar1" title="Horrible">1 star</label>
			</fieldset>
		</div>
		</div>
        <div class="panel-body"><img src="images/ghugni.jpg" class="img-responsive" style="width:100%" alt="Ghugni"></div>
        <div class="panel-footer" id="ghugnival">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" id="remove_ghugni" style="cursor: pointer; display: flex;justify-content: center;""><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' onclick="RemoveGhugni('2');" title='Remove Item' class='pull-right fa fa-minus-square'></i></div><div class="col-xs-2" style="display: flex; justify-content: center; text-shadow: 4px 4px 6px #777;" id="ghugnicount">0</div><div class="col-xs-3" id="add_ghugni" style="cursor: pointer; display: flex;justify-content: center;""><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' title='Add Item' onclick="AddGhugni('2');" class='pull-right fa fa-plus-square'></i></div>
			</div>
			<div style="display:none" id="ghugnitotalval"></div>
		</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-success">-->
		<div class="panel panel-primary">
        <div class="panel-heading"><span id="alooid">Aloo Dum</span>
		<span style="width: 50%; position: absolute; text-align: center;"><i style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Mark as favourite" class="fa fa-heart faa-pulse animated" id="aloo_fav"  onclick="StoreUserFavs($('#aloo_val_id').html(), 'aloo_fav', 'red', $('#aloo_each_val_id').html(), $('#aloo_desc').html(), $('#aloo_img').html());"></i></span>
		<div class="pull-right" style="position: relative;font-size: 8px;">
			<fieldset class="rating">
				<input type="radio" id="astar5" name="arating" value="5" onclick="UserReviews('Aloo Dum','astar5')"/><label for="astar5" title="Excellent!">5 stars</label>
				<input type="radio" id="astar4" name="arating" value="4" onclick="UserReviews('Aloo Dum','astar4')"/><label for="astar4" title="Pretty good">4 stars</label>
				<input type="radio" id="astar3" name="arating" value="3" onclick="UserReviews('Aloo Dum','astar3')"/><label for="astar3" title="Good">3 stars</label>
				<input type="radio" id="astar2" name="arating" value="2" onclick="UserReviews('Aloo Dum','astar2')"/><label for="astar2" title="Bad">2 stars</label>
				<input type="radio" id="astar1" name="arating" value="1" onclick="UserReviews('Aloo Dum','astar1')"/><label for="astar1" title="Horrible">1 star</label>
			</fieldset>
		</div>
		</div>
        <div class="panel-body"><img src="images/aloodum.jpg" class="img-responsive" style="width:100%" alt="Aloo Dum"></div>
        <div class="panel-footer" id="alooval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" id="remove_aloodum" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' onclick="RemoveDum('3');" title='Remove Item' class='pull-right fa fa-minus-square'></i></div><div class="col-xs-2" style="display: flex;justify-content: center; text-shadow: 4px 4px 6px #777;" id="dumcount">0</div><div class="col-xs-3" id="add_aloodum" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' title='Add Item' onclick="AddDum('3');" class='pull-right fa fa-plus-square'></i></div>
			</div>
			<div style="display:none" id="aloototalval"></div>
		</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4" id="tarka_item_div"  style="display:none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><span id="tarkaid">Tarka</span>
		<span style="width: 60%; position: absolute; text-align: center;"><i style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Mark as favourite" class="fa fa-heart faa-pulse animated" id="tarka_fav" onclick="StoreUserFavs($('#tarka_val_id').html(), 'tarka_fav', 'red', $('#tarka_each_val_id').html(), $('#tarka_desc').html(), $('#tarka_img').html());"></i></span>
		<div class="pull-right" style="position: relative;font-size: 8px;">
			<fieldset class="rating">
				<input type="radio" id="tstar5" name="trating" value="5" onclick="UserReviews('Tarka','tstar5')"/><label for="tstar5" title="Excellent!">5 stars</label>
				<input type="radio" id="tstar4" name="trating" value="4" onclick="UserReviews('Tarka','tstar4')"/><label for="tstar4" title="Pretty good">4 stars</label>
				<input type="radio" id="tstar3" name="trating" value="3" onclick="UserReviews('Tarka','tstar3')"/><label for="tstar3" title="Good">3 stars</label>
				<input type="radio" id="tstar2" name="trating" value="2" onclick="UserReviews('Tarka','tstar2')"/><label for="tstar2" title="Bad">2 stars</label>
				<input type="radio" id="tstar1" name="trating" value="1" onclick="UserReviews('Tarka','tstar1')"/><label for="tstar1" title="Horrible">1 star</label>
			</fieldset>
		</div>
		</div>
        <div class="panel-body"><img src="images/vegtarka.jpg" class="img-responsive" style="width:100%" alt="Tarka"></div>
        <div class="panel-footer" id="tarkaval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" id="remove_tarka" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' onclick="RemoveTarka('4');" title='Remove Item' class='pull-right fa fa-minus-square'></i></div><div class="col-xs-2" style="display: flex;justify-content: center; text-shadow: 4px 4px 6px #777;" id="tarkacount">0</div><div class="col-xs-3" id="add_tarka" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' title='Add Item' onclick="AddTarka('4');" class='pull-right fa fa-plus-square'></i></div>
			</div>
			<div style="display:none" id="tarkatotalval"></div>
		</div>
      </div>
    </div>
    <div class="col-sm-4" id="cknks_item_div" style="display:none;"> 
      <!--<div class="panel panel-success">-->
	  <div class="panel panel-primary">
        <div class="panel-heading"><span id="chickenid">Chicken Kasa</span>
		<span style="width: 40%; position: absolute; text-align: center;"><i style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Mark as favourite" class="fa fa-heart faa-pulse animated" id="chicken_fav" onclick="StoreUserFavs($('#chicken_val_id').html(), 'chicken_fav', 'red', $('#chicken_each_val_id').html(), $('#chicken_desc').html(), $('#chicken_img').html());"></i></span>
		<div class="pull-right" style="position: relative;font-size: 8px;">
			<fieldset class="rating">
				<input type="radio" id="cstar5" name="crating" value="5" onclick="UserReviews('Chicken Kasa','cstar5')"/><label for="cstar5" title="Excellent!">5 stars</label>
				<input type="radio" id="cstar4" name="crating" value="4" onclick="UserReviews('Chicken Kasa','cstar4')"/><label for="cstar4" title="Pretty good">4 stars</label>
				<input type="radio" id="cstar3" name="crating" value="3" onclick="UserReviews('Chicken Kasa','cstar3')"/><label for="cstar3" title="Good">3 stars</label>
				<input type="radio" id="cstar2" name="crating" value="2" onclick="UserReviews('Chicken Kasa','cstar2')"/><label for="cstar2" title="Bad">2 stars</label>
				<input type="radio" id="cstar1" name="crating" value="1" onclick="UserReviews('Chicken Kasa','cstar1')"/><label for="cstar1" title="Horrible">1 star</label>
			</fieldset>
		</div>
		</div>
        <div class="panel-body"><img src="images/chickenkasa.jpg" class="img-responsive" style="width:100%" alt="Chicken Kasa"></div>
        <div class="panel-footer" id="chickenval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" id="remove_kasa" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' onclick="RemoveKasa('5');" title='Remove Item' class='pull-right fa fa-minus-square'></i></div><div class="col-xs-2" style="display: flex;justify-content: center; text-shadow: 4px 4px 6px #777;" id="kasacount">0</div><div class="col-xs-3" id="add_kasa" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' title='Add Item' onclick="AddKasa('5');" class='pull-right fa fa-plus-square'></i></div>
			</div>
			<div style="display:none" id="chickentotalval"></div>
		</div>
      </div>
    </div>
    <div class="col-sm-4" id="pbm_item_div" style="display:none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><span id="paneerid">Paneer Butter Masala</span>
		<span style="width: 30%; position: absolute; text-align: center;"><i style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Mark as favourite" class="fa fa-heart faa-pulse animated" id="paneer_fav" onclick="StoreUserFavs($('#paneer_val_id').html(), 'paneer_fav', 'red', $('#paneer_each_val_id').html(), $('#paneer_desc').html(), $('#paneer_img').html());"></i></span>
		<div class="pull-right" style="position: relative;font-size: 8px;">
			<fieldset class="rating">
				<input type="radio" id="pstar5" name="prating" value="5" onclick="UserReviews('Paneer Butter Masala','pstar5')"/><label for="pstar5" title="Excellent!">5 stars</label>
				<input type="radio" id="pstar4" name="prating" value="4" onclick="UserReviews('Paneer Butter Masala','pstar4')"/><label for="pstar4" title="Pretty good">4 stars</label>
				<input type="radio" id="pstar3" name="prating" value="3" onclick="UserReviews('Paneer Butter Masala','pstar3')"/><label for="pstar3" title="Good">3 stars</label>
				<input type="radio" id="pstar2" name="prating" value="2" onclick="UserReviews('Paneer Butter Masala','pstar2')"/><label for="pstar2" title="Bad">2 stars</label>
				<input type="radio" id="pstar1" name="prating" value="1" onclick="UserReviews('Paneer Butter Masala','pstar1')"/><label for="pstar1" title="Horrible">1 star</label>
			</fieldset>
		</div>
		</div>
        <div class="panel-body"><img src="images/paneerbuttermasala.jpg" class="img-responsive" style="width:100%" alt="Paneer Butter Masala"></div>
        <div class="panel-footer" id="paneerval">Rs. 
		<div class="pull-right">
			<div class="col-xs-3" id="remove_paneer" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' onclick="RemovePaneer('6');" title='Remove Item' class='pull-right fa fa-minus-square'></i></div><div class="col-xs-2" style="display: flex;justify-content: center; text-shadow: 4px 4px 6px #777;" id="paneercount">0</div><div class="col-xs-3" id="add_paneer" style="cursor: pointer; display: flex;justify-content: center;"><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: 3px;' title='Add Item' onclick="AddPaneer('6');" class='pull-right fa fa-plus-square'></i></div>
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
	<span id="cartitemsdiv" style="width: auto;height: auto;margin-top: 50%;margin: 0 auto;color: beige;position: relative;padding: 10px;top: 50%;">
	</span>
  </div>
 <div id="profile_userdiv" style="display:none;"><?php echo $_SESSION["user_name"];?></div>
<!-- End of Card Div creation -->
</body>
</html>
