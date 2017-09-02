<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - Pancha Byanjone</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  </style>
<script type="text/javascript">

function AddRoti()
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$roticount = $("#rotiamount").html();
	var rcount = parseInt($roticount.trim()) + 1;
	$("#rotiamount").html(rcount);
	$("#itemCount").show();
}

function RemoveRoti()
{
	$cartcount = $("#itemCount").html();
	$roticount = $("#rotiamount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($roticount.trim());
	
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		var rcount = parseInt($roticount.trim()) - 1;
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
}

function AddGhugni()
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$ghugnicount = $("#ghugnicount").html();
	var rcount = parseInt($ghugnicount.trim()) + 1;
	$("#ghugnicount").html(rcount);
	$("#itemCount").show();
}

function RemoveGhugni()
{
	$cartcount = $("#itemCount").html();
	$ghugnicount = $("#ghugnicount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($ghugnicount.trim());
	
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		var rcount = parseInt($ghugnicount.trim()) - 1;
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
}

function AddDum()
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$dumcount = $("#dumcount").html();
	var rcount = parseInt($dumcount.trim()) + 1;
	$("#dumcount").html(rcount);
	$("#itemCount").show();
}

function RemoveDum()
{
	$cartcount = $("#itemCount").html();
	$dumcount = $("#dumcount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($dumcount.trim());
	
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		var rcount = parseInt($dumcount.trim()) - 1;
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
}

function AddTarka()
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$tarkacount = $("#tarkacount").html();
	var rcount = parseInt($tarkacount.trim()) + 1;
	$("#tarkacount").html(rcount);
	$("#itemCount").show();
}

function RemoveTarka()
{
	$cartcount = $("#itemCount").html();
	$tarkacount = $("#tarkacount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($tarkacount.trim());
	
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		var rcount = parseInt($tarkacount.trim()) - 1;
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
}


function AddKasa()
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$kasacount = $("#kasacount").html();
	var rcount = parseInt($kasacount.trim()) + 1;
	$("#kasacount").html(rcount);
	$("#itemCount").show();
}

function RemoveKasa()
{
	$cartcount = $("#itemCount").html();
	$kasacount = $("#kasacount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($kasacount.trim());
	
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		var rcount = parseInt($kasacount.trim()) - 1;
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
}



function AddPaneer()
{
	$cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim()) + 1;
	$("#itemCount").html(ccount);
	$paneercount = $("#paneercount").html();
	var rcount = parseInt($paneercount.trim()) + 1;
	$("#paneercount").html(rcount);
	$("#itemCount").show();
}

function RemovePaneer()
{
	$cartcount = $("#itemCount").html();
	$paneercount = $("#paneercount").html();
	
	var crtcount = parseInt($cartcount.trim());
	var rtcount = parseInt($paneercount.trim());
	
	if(rtcount == 0)
	{
		$("#itemCount").html(crtcount);
	}
	else{
		var ccount = parseInt($cartcount.trim()) - 1;
		$("#itemCount").html(ccount);
		
		var rcount = parseInt($paneercount.trim()) - 1;
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
}

$(document).ready(function(){
    $cartcount = $("#itemCount").html();
	var ccount = parseInt($cartcount.trim());
	if(ccount == 0)
	$("#itemCount").hide();
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
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
		<span class="navbar-right" id="itemCount">0</span></a></li>
      </ul>
    </div>
	
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Roti</div>
        <div class="panel-body"><img src="images/roti.jpg" class="img-responsive" style="width:100%" alt="Roti"></div>
        <div class="panel-footer">
			Rs. 3/piece
			<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_roti" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveRoti();">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="rotiamount">0</div><div class="col-xs-3" id="add_roti" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddRoti();">+</div>
			</div>
		</div>
		
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-danger">-->
		<div class="panel panel-primary">
        <div class="panel-heading">Ghugni</div>
        <div class="panel-body"><img src="images/ghugni.jpg" class="img-responsive" style="width:100%" alt="Ghugni"></div>
        <div class="panel-footer">Rs. 30/plate
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_ghugni" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveGhugni();">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="ghugnicount">0</div><div class="col-xs-3" id="add_ghugni" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddGhugni();">+</div>
			</div>
		</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-success">-->
		<div class="panel panel-primary">
        <div class="panel-heading">Aloo Dum</div>
        <div class="panel-body"><img src="images/aloodum.jpg" class="img-responsive" style="width:100%" alt="Aloo Dum"></div>
        <div class="panel-footer">Rs. 30/plate
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_aloodum" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveDum();">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="dumcount">0</div><div class="col-xs-3" id="add_aloodum" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddDum();">+</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Tarka</div>
        <div class="panel-body"><img src="images/vegtarka.jpg" class="img-responsive" style="width:100%" alt="Tarka"></div>
        <div class="panel-footer">Rs. 30/plate
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_tarka" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveTarka();">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="tarkacount">0</div><div class="col-xs-3" id="add_tarka" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddTarka();">+</div>
			</div>
		</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <!--<div class="panel panel-success">-->
	  <div class="panel panel-primary">
        <div class="panel-heading">Chicken Kasa</div>
        <div class="panel-body"><img src="images/chickenkasa.jpg" class="img-responsive" style="width:100%" alt="Chicken Kasa"></div>
        <div class="panel-footer">Rs. 50/plate (2 pieces)
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_kasa" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemoveKasa();">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="kasacount">0</div><div class="col-xs-3" id="add_kasa" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddKasa();">+</div>
			</div>
		</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Paneer Butter Masala</div>
        <div class="panel-body"><img src="images/paneerbuttermasala.jpg" class="img-responsive" style="width:100%" alt="Paneer Butter Masala"></div>
        <div class="panel-footer">Rs. 60/plate
		<div class="pull-right">
			<div class="col-xs-3" title = "Remove Item" id="remove_paneer" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" onclick="RemovePaneer();">-</div><div class="col-xs-2" style="display: flex;justify-content: center;" id="paneercount">0</div><div class="col-xs-3" id="add_paneer" style="border: 1px solid black; cursor: pointer; display: flex;justify-content: center;" title = "Add Item" onclick="AddPaneer();">+</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>