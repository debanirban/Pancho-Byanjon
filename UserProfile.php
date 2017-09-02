<?php 
session_start();
//$_SESSION["user_name"] = "anirbandeb";
if (!isset($_SESSION['user_name']) && empty($_SESSION['user_name']))
{
	 header("Location: http://localhost:81/DBConn/Login"); /* Redirect browser */
	 exit();
}
?>
<!DOCTYPE html>
<html>
<title>My Profile</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet'  type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'  type='text/css'>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta property="og:url" content="https://v4-alpha.getbootstrap.com/layout/grid/">
<meta property="og:url" content="https://v4-alpha.getbootstrap.com/layout/grid/">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<link rel="stylesheet" href="font-awesome-animation.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="moment.js"></script>



<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}


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

.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: rgba(51,51,51,0.7);
    z-index: 10;
  }
  
  
  .thumbnail {
    position:relative;
    overflow:hidden;
}
 
.caption {
    position:absolute;
    top:0;
    right:0;
    background:rgba(66, 139, 202, 0.75);
    width:100%;
    height:100%;
    display: flex;
	justify-content: center; /* align horizontal */
	align-items: center; /* align vertical */
    color:#fff !important;
    /* z-index:2; */
}

.file-upload {
    display: none;
}

._mid_loader_div
{
	text-align: center;
	position: absolute; 
	z-index: 90; 
	background-color: 
	rgba(204, 204, 204, 0.65);
	width: 740.406px;
	margin-left: 15px; 
	margin-top: 15px; 
	display: flex;
	justify-content: center; /* align horizontal */
	align-items: center; /* align vertical */
}

._exp_chart_loader_div
{
	text-align: center;
	position: absolute; 
	z-index: 90; 
	background-color: 
	rgba(204, 204, 204, 0.65);
	width: 740.406px;
	margin-left: 345px; 
	display: flex;
	justify-content: center; /* align horizontal */
	align-items: center; /* align vertical */
}

._prf_loader_div
{
	text-align: center;
	position: absolute; 
	z-index: 91; 
	background-color: 
	rgba(204, 204, 204, 0.65);
	width: 740.406px;
	display: flex;
	justify-content: center; /* align horizontal */
	align-items: center; /* align vertical */
}

._complain_loader_div
{
	text-align: center;
	position: absolute; 
	z-index: 91; 
	background-color: 
	rgba(204, 204, 204, 0.95);
	height: 255px;
	font-size: 10px;
    width: 220px;
    left: 1115.14px;
	display: flex;
	justify-content: center; /* align horizontal */
	align-items: center; /* align vertical */
}

.loading {
  font: 25px/1.5 Monospace;
  color: black;
  -webkit-perspective: 100px;
          perspective: 100px;
}
.loading > span {
  -webkit-animation: flip 2s infinite;
          animation: flip 2s infinite;
  display: inline-block;
  -webkit-transform-origin: 50% 50% -10px;
          transform-origin: 50% 50% -10px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}
.loading > span:nth-child(1) {
  -webkit-animation-delay: 0.1s;
          animation-delay: 0.1s;
}
.loading > span:nth-child(2) {
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}
.loading > span:nth-child(3) {
  -webkit-animation-delay: 0.3s;
          animation-delay: 0.3s;
}
.loading > span:nth-child(4) {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
.loading > span:nth-child(5) {
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}
.loading > span:nth-child(6) {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}
.loading > span:nth-child(7) {
  -webkit-animation-delay: 0.7s;
          animation-delay: 0.7s;
}
.loading > span:nth-child(8) {
  -webkit-animation-delay: 0.8s;
          animation-delay: 0.8s;
}
.loading > span:nth-child(9) {
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
}
.loading > span:nth-child(10) {
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}
.loading > span:nth-child(11) {
  -webkit-animation-delay: 1.1s;
          animation-delay: 1.1s;
}
.loading > span:nth-child(12) {
  -webkit-animation-delay: 1.2s;
          animation-delay: 1.2s;
}
.loading > span:nth-child(13) {
  -webkit-animation-delay: 1.3s;
          animation-delay: 1.3s;
}
.loading > span:nth-child(14) {
  -webkit-animation-delay: 1.4s;
          animation-delay: 1.4s;
}

@-webkit-keyframes flip {
  to {
    -webkit-transform: rotateX(1turn);
            transform: rotateX(1turn);
  }
}

@keyframes flip {
  to {
    -webkit-transform: rotateX(1turn);
            transform: rotateX(1turn);
  }
}


/** searchbox **/

#searchbox
{
    background-color: #eaf8fc;
    background-image: linear-gradient(#fff, #d4e8ec);
    border-radius: 35px;    
    border-width: 1px;
    border-style: solid;
    border-color: #c4d9df #a4c3ca #83afb7;            
    width: 320px;
    height: 35px;
    padding: 10px;
    margin: 100px auto 50px;
    overflow: hidden; /* Clear floats */
}

#search, 
#submit {
    float: left;
}

#search {
    padding: 5px 9px;
    height: 35px;
    width: 220px;
    border: 1px solid #a4c3ca;
    font: normal 13px 'trebuchet MS', arial, helvetica;
    background: #f1f1f1;
    border-radius: 50px 3px 3px 50px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);            
}

#submit
{       
    background-color: #6cbb6b;
    background-image: linear-gradient(#95d788, #6cbb6b);
    border-radius: 3px 50px 50px 3px;    
    border-width: 1px;
    border-style: solid;
    border-color: #7eba7c #578e57 #447d43;
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 
                0 1px 0 rgba(255, 255, 255, 0.3) inset;
    height: 35px;
    margin: 0 0 0 0px;
    padding: 0;
    width: 40px;
    cursor: pointer;
    font: bold 14px Arial, Helvetica;
    color: #23441e;    
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
}

#submit:hover {       
    background-color: #95d788;
    background-image: linear-gradient(#6cbb6b, #95d788);
}   

#submit:active {       
    background: #95d788;
    outline: none;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;        
}

#submit::-moz-focus-inner {
       border: 0;  /* Small centering fix for Firefox */
}

#search::-webkit-input-placeholder {
   color: #9c9c9c;
   font-style: italic;
}

#search:-moz-placeholder {
   color: #9c9c9c;
   font-style: italic;
}  

#search:-ms-placeholder {
   color: #9c9c9c;
   font-style: italic;
} 

#search.placeholder {
   color: #9c9c9c !important;
   font-style: italic;
}
/* ----------------------- */

.box {
  position: relative;
  display: inline-block;
  width: 100px;
  height: 100px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.box::after {
  content: "";
  border-radius: 5px;
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  opacity: 0;
  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.box:hover {
  -webkit-transform: scale(1.25, 1.25);
  transform: scale(1.25, 1.25);
}

.box:hover::after {
    opacity: 1;
}

/* Scrollbar Styling */
::-webkit-scrollbar {
    width: 10px;
}
 
::-webkit-scrollbar-track {
    background-color: #ebebeb;
    -webkit-border-radius: 10px;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #6d6d6d; 
}

</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top" style="z-index: 150;">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large" style="z-index:2">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" style="font-family:Lobster;" title="Home - Pancho Byanjon"><i class="fa fa-home w3-margin-right"></i>Pancho Byanjon <img src="PB.png" style="height: 25px;margin-left: 12px; margin-top: -7px;"></a>
  <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>-->
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="My Cart" onclick="OpenCartDiv();"><i class="fa fa-shopping-cart faa-passing-reverse animated"></i><span class="w3-badge w3-right w3-small w3-green" id="cart_items_count"></span></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Feedback"><i class="fa fa-handshake-o"></i></a>
  <div class="w3-dropdown-hover w3-hide-small" id="notif_div">
    <button class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell faa-ring animated"></i><span class="w3-badge w3-right w3-small w3-green" id="notifications_count">3</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px" id="notifications_list">
      <!--<a href="#" class="w3-bar-item w3-button">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button">John Doe posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button">Jane likes your post</a>-->
	  <span class="w3-bar-item w3-button">Please go through these notifications</span>
	  <span class="w3-bar-item w3-button">Just open the list</span>
	  <span class="w3-bar-item w3-button">And all is done</span>
    </div>
  </div>
  
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-dropdown-hover" title="Log Out" onclick="LogOutUser();"><span style="font-size: 12px;position: absolute;/* width: 50px; */margin-top: 4px;">Log Out</span><i class="fa fa-sign-out" style="margin-left: 50px;"></i>
  </a>

 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">fsdfsdf</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="OpenCartDiv();"><span class="w3-badge w3-right w3-small w3-green" id="cart_items_count_mob" style="margin-right: 80%;">3</span>My Cart</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Feedback</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Notifications</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="LogOutUser();">Log out</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
	<div>
		<div id="profile_loader_div" class="_prf_loader_div">
			<div id="profile_msg" style="font-size: 18px;">
				
			</div>
		</div>
	</div>
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white" id="PBProfile_div">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
		 <div id="div_hidden_emailid" style="display:none;"></div>
		 <!-- creating image upload and crop for the my profile picture -->
		 
            <form id="uploadimage" action="" method="post" enctype="multipart/form-data">   
				<div class="thumbnail" style="border: 0">
					<div class="caption" style="display:none;">
						<h4></h4>
						<span id="upload_user_image" style="cursor: pointer;"><i type="submit" class="fa fa-upload fa-fw w3-margin-right" style="color: white; -webkit-appearance: none;"></i>Upload your image</span>
						<input class="file-upload" style="display:none;" type="file" id="user_profile_pic_upload_file" accept="image/*"/>
						<!--<p style="margin-top: 15%; cursor: pointer;">Upload your image</p>-->
						<!--<p><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>
						<a href="" class="label label-default" rel="tooltip" title="Download now">Download</a></p>-->
					</div>
					<p class="w3-center"><img id="user_profile_image" src="" class="w3-circle" style="height:50%;width:50%" alt="My Profile Pic"></p>
				</div>
			</form>
		 
		 <!--end of creation -->
         <!--<p class="w3-center"><img src="images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>-->
         <hr>
         <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-text-theme"></i><span id="profile_name" style="margin-left: 5px;"></span></p>
         <p>
			<i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i>
			<span id="user_name"></span>
			<span>
				<input type="text" class="form-control" id="edit_phone" style="display:none; position: absolute; left: 65px; margin-top: -25px; width: 150px;">
			</span>
			<div id="edit_ph_no" style="margin-left: 238px; position: absolute; display: block; margin-top: -32px;">
				<i title="Change Phone Number" class="fa fa-pencil-square-o fa-fw w3-margin-right w3-text-theme" style="margin-left: 10px; cursor: pointer;" onclick="PhoneNumberEdit();"></i>
			</div>
			<div id="update_ph_no" style="margin-left: 238px; pointer; position: absolute; display:none; margin-top: -32px;">
				<i title="Update Phone Number" class="fa fa-save fa-fw w3-margin-right w3-text-theme" style="margin-left: 10px; cursor: pointer;" onclick="PhoneNumberUpdate();"></i>
			</div>
			<div id="cancel_update" style="margin-left: 258px; position: absolute; display:none; margin-top: -32px;">
				<i title="Do not update phone number" class="fa fa-times fa-fw w3-margin-right w3-text-theme" style="margin-left: 15px; cursor: pointer;" onclick="PhoneNumberEditCancel();"></i>
			</div>
		</p>
        <p>
			<i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i>
			<span id="user_email"></span>
			<span>
				<input type="text" class="form-control" id="edit_email" style="display:none; position: absolute; left: 65px; margin-top: -25px; width: 200px;">
			</span>
			<div id="edit_email_id"  style="margin-left: 238px; position: absolute; margin-top: -32px;">
				<i title="Change Email Id" class="fa fa-pencil-square-o fa-fw w3-margin-right w3-text-theme" style="margin-left: 10px; cursor: pointer;" onclick="EmailIdEdit();"></i>
			</div>
			<div id="update_email_id" style="margin-left: 238px; position: absolute; margin-top: -32px; display:none;">
				<i title="Update Email Id" class="fa fa-save fa-fw w3-margin-right w3-text-theme" style="margin-left: 10px; cursor: pointer;" onclick="EmailIdUpdate();"></i>
			</div>
			<div id="cancel_update_email_id" style="margin-left: 258px; position: absolute; margin-top: -32px; display:none;">
				<i title="Do not update email id" class="fa fa-times fa-fw w3-margin-right w3-text-theme" style="margin-left: 15px; cursor: pointer;" onclick="EmailIdEditCancel();"></i>
			</div>
		</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-white">
          <!--<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-heart fa-fw w3-margin-right"></i> <span id="my_fav">My Favourites</span></button>-->
		  <button onclick="GetUserFavs(); GetDetails('my_fav'); order_search_box_hide(); ShowDivDetails('show_user_favs', 'show_my_addresses', 'change_ps_div', 'show_my_ratings', 'show_my_reviews', 'new_address_container', 'show_user_orders'); $('#midcontainerdiv').css('margin-left', '10%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#rowaddresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('heartid', 'red');" onmouseout="ChangeColor('heartid', 'white');"><i id="heartid" class="fa fa-heart fa-fw w3-margin-right"></i> <span id="my_fav">My Favourites</span></button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <!--<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-shopping-bag fa-fw w3-margin-right"></i> <span id="my_orders">My Orders</span></button>-->
		  <button onclick="GetCustomersOrders(); order_search_box_show(); GetDetails('my_orders'); ShowDivDetails('show_user_orders', 'show_user_favs', 'show_my_addresses', 'change_ps_div', 'show_my_ratings', 'show_my_reviews', 'new_address_container'); $('#midcontainerdiv').css('margin-left', '30%'); $('#midcontainerdiv').css('margin-left', '0%'); $('#midcontainerdiv').css('width', '100%'); $('#show_user_addresses').hide(); $('#rowaddresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('shoppingid', '#178665');" onmouseout="ChangeColor('shoppingid', 'white');"><i id="shoppingid" class="fa fa-shopping-bag fa-fw w3-margin-right"></i> <span id="my_orders">My Orders</span></button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <!--<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-address-card fa-fw w3-margin-right"></i> <span id="my_addresses">My Addresses</span></button>-->
		  <button onclick="GetDetails('my_addresses'); order_search_box_hide(); ShowDivDetails('show_my_addresses', 'change_ps_div', 'show_my_ratings', 'show_my_reviews', 'new_address_container', 'show_user_favs', 'show_user_orders'); $('#midcontainerdiv').css('margin-left', '30%'); $('#midcontainerdiv').css('margin-left', '0%'); $('#midcontainerdiv').css('width', '100%'); $('#show_user_addresses').show(); $('#rowaddresses').show(); $('#add_division').show();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('addressid', 'blue');" onmouseout="ChangeColor('addressid', 'white');"><i id="addressid" class="fa fa-address-card fa-fw w3-margin-right"></i> <span id="my_addresses">My Addresses</span></button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/fjords.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
		  <button onclick="GetDetails('change_password'); order_search_box_hide(); ShowDivDetails('change_ps_div', 'show_my_ratings', 'show_my_reviews', 'show_my_addresses', 'new_address_container', 'show_user_favs', 'show_user_orders'); $('#midcontainerdiv').css('margin-left', '30%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('pswdid', 'orange');" onmouseout="ChangeColor('pswdid', 'white');"><i id="pswdid" class="fa fa-edit fa-fw w3-margin-right"></i> <span id="change_password">Change Password</span></button>
          <div id="Demo4" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
		  <button onclick="GetDetails('my_ratings'); order_search_box_hide(); ShowDivDetails('show_my_ratings', 'change_ps_div', 'show_my_reviews', 'show_my_addresses', 'new_address_container', 'show_user_favs', 'show_user_orders'); ShowMyRatings(); $('#midcontainerdiv').css('margin-left', '10%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('ratingsid', '#d43dde');" onmouseout="ChangeColor('ratingsid', 'white');"><i id="ratingsid" class="fa fa-handshake-o fa-fw w3-margin-right"></i> <span id="my_ratings">My Ratings</span></button>
          <div id="Demo5" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
		  <button onclick="GetDetails('my_reviews'); order_search_box_hide(); ShowDivDetails('show_my_reviews','show_my_ratings', 'change_ps_div', 'show_my_addresses', 'new_address_container', 'show_user_favs', 'show_user_orders'); ShowMyReviews(); $('#midcontainerdiv').css('margin-left', '10%'); $('#midcontainerdiv').css('width', '60%'); $('#show_user_addresses').hide(); $('#add_division').hide();" class="w3-button w3-block w3-theme-l1 w3-left-align" onmouseover="ChangeColor('reviewsid', '#d4615f');" onmouseout="ChangeColor('reviewsid', 'white');"><i id="reviewsid" class="fa fa-thumbs-o-up fa-fw w3-margin-right"></i> <span id="my_reviews">My Reviews</span></button>
          <div id="Demo6" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card-2 w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Recent Orders</p>
		  <div id="recentorders">
			  <!--<p>
				<span class="w3-tag w3-small w3-theme-d5">News</span>
			  </p>
			  <p>
				<span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
			  </p>-->
		   </div>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <!--<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>-->
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
	
	<div>
		<div id="chart_loader_div" class="_exp_chart_loader_div">
			<div class="loading"><span>P</span><span>a</span><span>n</span><span>c</span><span>h</span><span>o</span><span>&nbsp;</span><span>B</span><span>y</span><span>a</span><span>n</span><span>j</span><span>o</span><span>n</span>
			</div>
		</div>
	  </div>
	  
	
    <div class="w3-col m7">
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div id="my_exp_chart_div" class="w3-card-2 w3-round w3-white" style="margin-top:0">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity pull-right">Snapshot: My Expenditure</h6>
              <!--<p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> -->
			  <!-- creating the graphs -->
				<div>
					<div id="chart_div"><a href="#"></a></div>
					<span id="more_data" onclick="GetMonthlyExpenditure();" class="pull-right" style="cursor: pointer; color: blue; display: none;">Show Overall Monthly Expenditure</span>
				</div>
			  <!-- end of creation -->
            </div>
          </div>
        </div>
      </div>
	  
	  <!--testing to fit a page within this div-->
	  
	  <div class="w3-container w3-card-2 w3-white w3-round w3-margin" id="load_page_div" style="display:none;"><br>
        <span id="load_cart" style="display:none">
			
		</span>
      </div> 
	  
	  <!--end test-->
	  <div>
		<div id="contact_loader_div" class="_mid_loader_div container-fluid" style="background-color: rgba(204, 204, 204, 0.95); display: none;">
			<div id="contact_msg" class="row">
			</div>
			<div id="div_contact_img" class="col-lg-2" style="display: none;"><img id = "contact_order_status_img" style="height:50px;"></img></div>
			<div id="contact_msg_btn" class="row" style="position: absolute; margin-top: 80px; display: none;">
				<input type="button" value="OK" onclick="HideTrackOrderDiv()" ;="">
			</div>
		</div>
	  </div>
	  <div>
		<div id="fav_loader_div" class="_mid_loader_div">
			<div class="loading"><span>P</span><span>a</span><span>n</span><span>c</span><span>h</span><span>o</span><span>&nbsp;</span><span>B</span><span>y</span><span>a</span><span>n</span><span>j</span><span>o</span><span>n</span>
			</div>
		</div>
	  </div>
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin" id="main_container_middle"><br>
        <!--<img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">-->
        <!--<span class="w3-right w3-opacity">1 min</span>-->
        <h4 id="topic_header"></h4>
		<div id="order_search_box" class="ui-widget pull-right" style="display: none; margin-right: 350px; margin-top: -15px;">
		<!--<div id="searchbox" style="margin-top: -33px; position: absolute; height: 55px; width: 350px;">-->
			<div id="search_box" style="margin-top: -25px; position: absolute; height: 55px; width: 350px; margin-left: 90px;">
				<input id="search" type="text" placeholder="Search Orders" style="background-image: url('search.png'); background-size: contain; background-repeat: no-repeat; background-position: 10px; background-size: 25px 25px; text-indent: 35px;" class="ui-autocomplete-input" autocomplete="off">
				<button id="submit" type="submit" value="Search"><i class="fa fa-search"></i></button>
			</div>
		<!--</div>-->
		</div>
        <hr class="w3-clear">
			<div style="width: 60%;margin-left: 30%;" id="midcontainerdiv">
				<div id="change_ps_div" style="display:none;">
					<form class="">
						<div class="form-group" style="width: 80%;">
							<label for="password" class="cols-sm-2 control-label">Old Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<div class="inner-addon" style="position: relative;width: 95%;"><i class="fa fa-eye" aria-hidden="true" style="position: absolute;padding-top: 10px;cursor: pointer; right:0;" id="hspos"></i></div>
									<input type="password" class="form-control" onblur="CheckForPass($('#profile_userdiv').html(), $('#old_password').val()); FillPassword();" onfocus="ResetPassword();" name="old_password" id="old_password"  placeholder="Enter your old Password" style="position: static;"/>
								</div>
							</div>
						</div>
						
						<div class="form-group" style="width: 80%;">
							<label for="password" class="cols-sm-2 control-label">New Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<div class="inner-addon" style="position: relative;width: 95%;"><i class="fa fa-eye" aria-hidden="true" style="position: absolute;padding-top: 10px;cursor: pointer; right:0;" id="hsps"></i></div>
									<input type="password" class="form-control" onblur="CheckPasswordMatch(); FillPassword();" onfocus="ResetPassword();" name="password" id="password"  placeholder="Enter your new Password" style="position: static;"/>
								</div>
							</div>
						</div>
						<div class="form-group" style="width: 80%;">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<div class="inner-addon" style="position: relative;width: 95%;"><i class="fa fa-eye" aria-hidden="true" style="position: absolute;padding-top: 10px;cursor: pointer; right:0;" id="hspsc"></i></div>
									<input type="password" class="form-control" onblur="CheckPasswordMatch(); FillCPassword();" onfocus="ResetCPassword();" name="confirm" id="confirm"  placeholder="Confirm your new Password" style="position: static;"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a type="button" id="button" class="btn btn-primary" onclick="UpdateResetRecord($('#password').val())" style="margin-left: 15%;">Reset Password</a>
						</div>
						<div class="panel-footer" id="errDiv" style="border-top: 0px solid #ddd; background-color: #ffffff">
							
						</div>
					</form>
				</div>
				<div id="show_my_ratings" style="display:none;">
					<div class="rating_container" id="rowrating">
						
					</div>
				</div>
				
				<div id="show_my_reviews" style="display:none;">
					<div class="rating_container" id="rowreview">
						
					</div>
				</div>
				
				<!-- Show user favourites here...add a div here -->
				<div id="show_user_favs"">
					<div class="container-fluid" id="user_row_favs">
						<!--<div class="row">
							<!--<div class="col-lg-2">
								Home
							</div>
							<div class="col-lg-8">
								33B, Madhab Halder Road, Behala, Kolkata - 700034
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Edit address">
								<i class="fa fa-pencil"></i>
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Delete address">
								<i class="fa fa-trash"></i>
							</div>
						</div>-->
					</div>
				</div>
				
				<!-- end of user favourites display -->
				<!-- show user's orders-->
				
				<div id="show_user_orders" style="display:none;">
					<div class="container-fluid" id="user_row_orders">
						<!--<div class="row">
							<!--<div class="col-lg-2">
								Home
							</div>
							<div class="col-lg-8">
								33B, Madhab Halder Road, Behala, Kolkata - 700034
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Edit address">
								<i class="fa fa-pencil"></i>
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Delete address">
								<i class="fa fa-trash"></i>
							</div>
						</div>-->
					</div>
				</div>
				
				<!-- end of user's orders -->
				<!-- Show user Addresses here...add a div here -->
				<div id="show_user_addresses" style="display:none;">
					<div class="container-fluid" id="user_row_addresses">
						<!--<div class="row">
							<!--<div class="col-lg-2">
								Home
							</div>
							<div class="col-lg-8">
								33B, Madhab Halder Road, Behala, Kolkata - 700034
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Edit address">
								<i class="fa fa-pencil"></i>
							</div>
							<div class="col-lg-1" style="cursor: pointer;" title="Delete address">
								<i class="fa fa-trash"></i>
							</div>
						</div>-->
					</div>
				</div>
				
				<!-- end of user addresses display -->
				<hr class="w3-clear" id="add_division">
				<div id="show_my_addresses" style="display:none;">
					<div id="new_address_container" style="display:none;">
						<div class="row">
							<div class="col-md-4 col-md-offset-1" style="width: 150%;">
							  <form class="form-horizontal" role="form">
								<fieldset style="border-radius: 5px;">

								  <!-- Form Name -->
								  <legend>Add Address Details</legend>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Address 1</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Address Line 1" class="form-control" id="addr1">
									</div>
								  </div>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Address 2</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Address Line 2" class="form-control" id="addr2">
									</div>
								  </div>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">City</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="City" class="form-control" value = "Kolkata" disabled id="city">
									</div>
								  </div>

								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">State</label>
									<div class="col-sm-4">
									  <input type="text" placeholder="State" class="form-control" value = "West Bengal" disabled id="state">
									</div>

									<label class="col-sm-2 control-label" for="textinput">Postcode</label>
									<div class="col-sm-4">
									  <input type="text" placeholder="Post Code" class="form-control" id="area_zipcode" onblur="GetGeoPlaces();">
									</div>
								  </div>
								  
								  <!-- Text input-->
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Country</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Country" class="form-control" value = "India" disabled id="country">
									</div>
								  </div>
								  
								  <!--<div class="form-group" style="display:none;" id="area_div_select">
									<label class="col-sm-2 control-label" for="textinput">Area</label>
									<div class="col-sm-10">
									  <!--<input type="text" placeholder="Area" class="form-control" value = "">-->
									  <!--<select id="area_select" class="form-control"></select>
									</div>
								  </div>-->
								  
								   <div class="form-group" style="display:none;" id="area_div_select">
									<label class="col-sm-2 control-label" for="textinput">Area</label>
									<div class="col-sm-10">
									  <input type="text" name="example" list="area_select" class="form-control" id="areadesc" placeholder="Select or enter your area here">
									  <!--<select id="area_select" class="form-control"></select>-->
									  <datalist id="area_select" class="form-control" style="display:none;"></datalist>
									</div>
								  </div>
								  
								  <div class="form-group">
									<label class="col-sm-2 control-label" for="textinput">Nick Name</label>
									<div class="col-sm-10">
									  <input type="text" placeholder="Put a name for the address" class="form-control" id="nickname">
									</div>
								  </div>
								  
								  <div id="toggleval" style="display:none;">0</div>
								  <div id="user_addrid" style="display:none;"></div>
								  
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <div class="pull-right">
										<button type="button" class="btn btn-default" onclick="AddressCancelClick();">Cancel</button>
										<button type="button" class="btn btn-primary" onclick="AddressSaveClick();">Save</button>
									  </div>
									</div>
								  </div>

								</fieldset>
							  </form>
							</div><!-- /.col-lg-12 -->
						</div><!-- /.row -->
						<div style="height:20px;"></div>
					</div>
					<div class="rating_container pull-right" id="rowaddresses" style="height: 45px;margin-top: 20px;width: 195px;display: block;" title="Add a new address" onclick="AddressAddClick();">
					
						<div style="position: relative;">
                             <span style="cursor: pointer;margin-right: 0px;width: 30%;" onmouseover="ChangeColor('address_add_id', 'blue');" onmouseout="ChangeColor('address_add_id', 'black');">
							<div class="col-xs-2 pull-left" style="width: 25%;position: absolute;/* margin-right: 160px; */"><i id="address_add_id" class="fa fa-plus fa-fw w3-margin-right" style="color: rgb(0, 0, 0); text-shadow: rgb(119, 119, 119) 2px 2px 3px;"></i></div>
							<div class="col-xs-2 pull-right" style="position: absolute;right: 50px;width: 61%;">Add Address</div>
                            </span>
						</div>
					</div>
				</div>
			</div>
	</div>
	  
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="images/setting2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <!--<span class="w3-right w3-opacity">16 min</span>-->
        <h4>My Settings</h4><br>
        <hr class="w3-clear">
        <!--<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> </div>-->
		<div id="mycart_show">
			<div>
				<div class="pull-left">I want to receive notifications</div>
				<div class="pull-right"><input type="checkbox" data-toggle="toggle" data-size="mini" id="notif_info" data-offstyle="warning" data-on="<i class='fa fa-toggle-on'></i> Yes" data-off="<i class='fa fa-toggle-off'></i> No"></div>
			</div>
			<br></br>
			<div>
				<div class="pull-left">Close my account</div>
				<div class="pull-right"><input type="checkbox" data-toggle="toggle" data-size="mini" id="close_acc" data-offstyle="success" data-onstyle="danger" data-on="<i class='fa fa-toggle-on'></i> Yes" data-off="<i class='fa fa-toggle-off'></i> No"></div>
			</div>
			<br></br>
			<div>
				<div class="pull-left">I want to get all deals information</div>
				<div class="pull-right"><input type="checkbox" data-toggle="toggle" data-size="mini" id="deal_info" data-offstyle="warning" data-on="<i class='fa fa-toggle-on'></i> Yes" data-off="<i class='fa fa-toggle-off'></i> No"></div>
			</div>
			<div style="height:40px;"></div>
		</div>
      </div>  
	  
	  
	  
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2" id="all_deals">
      <div class="w3-card-2 w3-round w3-white w3-center" id="upcoming_deals">
        <div class="w3-container">
          <p id="upcoming_deal">Upcoming Deal</p>
          <img id="upcoming_deal_img" id="deal_image" src="images/roti.jpg" alt="Roti" style="width:100%;"><br></br>
          <p id="upcoming_deal_item_name"><strong>Starting</strong></p>
          <p id="upcoming_deal_time">Sunday 19:00</p>
          <!--<p><button class="w3-button w3-block w3-theme-l4">Info</button></p>-->
        </div>
      </div>
      <br id="first_br">
      
      <div class="w3-card-2 w3-round w3-white w3-center" id="ongoing_deals">
        <div class="w3-container">
          <p id="ongoing_deal">Ongoing Deal</p>
          <img id="ongoing_deal_img" src="images/ghugni.jpg" alt="Avatar" style="width:50%"><br></br>
          <span id="ongoing_deal_item_name">Ghugni</span>
		  <div style="height:10px"></div>
		  <span id="ongoing_deal_description" style="font-size: 12px; color: red;">Ghugni</span>
		  <div style="height:10px"></div>
          <div class="w3-row w3-opacity" id="ongoing_deal_time">
			Till Sunday 5:00 PM
          </div>
		  <div id="ongoing_deal_itemId" style="display:none;">2</div>
		  <div style="height:10px"></div>
          <div class="w3-row w3-opacity" id="order_item" style="cursor:pointer;">
			<p id="deal_order_now" style="color: blue;">Order Now</p>
          </div>
		  <div style="margin-right: 50px; margin-top: 20px; height: 30px; display: none" id="order_deal_item">
			<i style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Add Item" class="pull-right fa fa-plus-square" id="add_deal_item" onclick=""></i>
			<span id="no_of_deal_items" class="pull-right" style="width: 50px;margin-top: -4px;text-align: center;/* margin-right: 15px; */">0</span>
			<i style="cursor: pointer; text-shadow: 4px 4px 6px #777;" title="Remove Item" class="pull-right fa fa-minus-square" id="remove_deal_item" onclick=""></i>
			<!--<i id="cancel_deal_order" class="fa fa-times col-xs-3" title="Cancel your deal order" style="cursor: pointer;color: rgb(0, 0, 0); position: relative; display: none;" onmouseover="ChangeColor('cancel_deal_order', 'red');" onmouseout="ChangeColor('cancel_deal_order', 'black');"></i>-->
		  </div>
		  <div style="height: 40px; display: none; cursor: pointer;" id="checkout_deal_order" title="Checkout to order this item"><span class="pull-left"><i class="fa fa-shopping-basket" style="margin-left: 40px; margin-top: 8px; color: white;"></i></span><span style="cursor: pointer;" class="btn btn-success btn-block"><span style="margin-left: -15px;">Checkout</span></span></div>
        </div>
      </div>
      <br id="second_br">
	  
      <div class="w3-card-2 w3-round w3-white w3-center" id="complaint_box">
        <div class="w3-container">
          <p>My Complaints</p>
		  <div style="height:10px"></div>
          <div class="w3-row w3-opacity" id="complaints_list">
            <p>You do not have any complaints yet.</p>
          </div>
		  <div style="height:35px"></div>
          <div class="w3-row w3-opacity" id="new_complaint" style="cursor:pointer;">
            <!--<div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>-->
			<p style="color: blue;" id="make_complain_box">Make a complaint</p>
          </div>
		  <div>
			<div id="complain_loader_div" class="_complain_loader_div" style="display: none;">
				<div id="complain_msg" style="font-size: 14px; color: blue;">
					
				</div>
			</div>
		  </div>
		  <div style="display: none;" id="complaint_box_edit">
				<div style="padding-top: 60px;margin-left: -20px;/* height: 0px; */width: 100%;/* text-align: center; */" class="col-xs-6" id="compaint_box_details_subj">
					<label class="col-xs-12" style="border-radius: 5px;font-size:10px;margin-left: -21px;">Complaint Subject</label>
					<input type="text" style="width: 170px;margin: 0px;border-radius: px;font-size:12px;margin-left: 15px;" id="compaint_box_subject_text">
				</div>
				<div style="padding-top: 40px;margin-left: -20px;height: 200px;width: 100%;" class="col-xs-6" id="compaint_box_details_desc">
					<label class="col-xs-12" style="border-radius: 5px;font-size:10px;margin-left: -21px;">Complaint Details</label>
					<textarea style="height: 108px;width: 170px;margin: 0px;border-radius: 5px;font-size:12px;resize: none;margin-left: 15px;" cols="22" rows="5" id="compaint_box_details_text"></textarea>
					<span style="float: left;margin-left: 15px;"><i id="save_complaint" class="fa fa-save fa-fw w3-margin-right" title="Save your complaint" style="cursor: pointer; color: rgb(0, 0, 0);" onmouseover="ChangeColor('save_complaint', 'blue');" onmouseout="ChangeColor('save_complaint', 'black');"></i><i id="cancel_complaint" class="fa fa-times fa-fw w3-margin-right" title="Cancel your complaint" style="cursor: pointer; color: rgb(0, 0, 0);" onmouseover="ChangeColor('cancel_complaint', 'red');" onmouseout="ChangeColor('cancel_complaint', 'black');"></i></span>
				</div>
			</div>
        </div>
      </div>
      
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  <div id="profile_userdiv" style="display:none;"><?php echo $_SESSION["user_name"];?></div>

<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <div style="width:170px;"><div class="pull-left" style="position: absolute;"><img src="PB.png" style="height: 40px;"></img></div><div class="pull-right"><h5 style="font-family:Lobster;">Pancho Byanjon</h5></div></div>
</footer>

<footer class="w3-container w3-theme-d5">
  <span class="pull-right">© All rights reserved</span>
</footer>
 			  
<script>

  var pfilled;
  var cpfilled;
  var idreset;
  var psmatch;
  var pwdbmatch;
  var g_id;
  
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

$('#make_complain_box' ).click(function () {
	if ( $("#complaint_box_edit" ).is( ":hidden" ) ) {
		$("#complaint_box_edit" ).slideDown( "slow" );
		$("#complaint_box_edit" ).show();
	  } 
});

$('#add_deal_item').click(function () {
	$no_of_items = $('#no_of_deal_items').html();
	$nof = parseInt($no_of_items);
	$nof = $nof + 1;
	$('#no_of_deal_items').html($nof);
	if ( $("#checkout_deal_order").is( ":hidden" ) ) {
			$("#checkout_deal_order").slideDown( "slow" );
			$("#checkout_deal_order").show();
			//$('#deal_order_now').html('Discard');
		  }
});


$('#add_deal_item').on('mousedown', function () {
	$('#add_deal_item').css('text-shadow', '0px 0px 0px #777');
});

$('#add_deal_item').on('mouseup', function () {
	$('#add_deal_item').css('text-shadow', '4px 4px 6px #777');
});

$('#remove_deal_item').on('mousedown', function () {
	$('#remove_deal_item').css('text-shadow', '0px 0px 0px #777');
});

$('#remove_deal_item').on('mouseup', function () {
	$('#remove_deal_item').css('text-shadow', '4px 4px 6px #777');
});


$('#remove_deal_item' ).click(function () {
	$no_of_items = $('#no_of_deal_items').html();
	$nof = parseInt($no_of_items);
	$nof = $nof - 1;
	if($nof < 0)
	{
		$nof = 0;
	}
	
	if($nof == 0)
	{
			$('#checkout_deal_order').slideUp("slow");
			//$('#checkout_deal_order').html('Order Now');
			//$('#no_of_deal_items').html('0');
			//$('#checkout_deal_order').hide();
	}
	
	$('#no_of_deal_items').html($nof);
});

/*$('#deal_order_now' ).click(function () {
	if ( $("#order_deal_item" ).is( ":hidden" ) ) {
		$("#order_deal_item" ).slideDown( "slow" );
		$("#order_deal_item" ).show();
		$('#deal_order_now').html('Discard');
		//$('#cancel_deal_order' ).show();
	  } 
});*/

$('#deal_order_now' ).click(function () {
	if ( $("#order_deal_item" ).is( ":hidden" ) ) {
			$("#order_deal_item" ).slideDown( "slow" );
			$("#order_deal_item" ).show();
			$('#deal_order_now').html('Discard');
		  } else {
			$("#order_deal_item" ).slideUp("slow");
			$('#deal_order_now').html('Order Now');
			$('#no_of_deal_items').html('0');
			$('#checkout_deal_order').slideUp("slow");
			//$('#cancel_deal_order' ).hide();
		  }
});

function GetComplaints()
{
	var html = "";
	$.ajax({ url: 'api.php',
	 data: {function2call: 'GetComplaints', userid: $userid},
	 type: 'post',
	 //dataType: 'json',
	 success: function(output) {
				  var res = jQuery.parseJSON(output);
				  if(res.length == 0)
				  {
					  $('#complaints_list').html('<p>You do not have any complaints yet.</p>');
				  }
				  else
				  {
					  for(var i = 0; i < res.length; i++)
					  {
						  if(i <= 4)
						  {
							  if(res[i]["ComplainSubject"].length > 20)
							  {
								  html = html + "<p id=" + res[i]["ComplainId"] + " style='color: blue; text-align: left; cursor: pointer; text-decoration: none;''>" + res[i]["ComplainSubject"].substr(0, 19) + "..." + "</p>";
							  }
							  else
							  {
								html = html + "<p id=" + res[i]["ComplainId"] + " style='color: blue; text-align: left; cursor: pointer; text-decoration: none;'>" + res[i]["ComplainSubject"] + "</p>";
							  }
						  }
					  }
					  $('#complaints_list').html(html);
				  }
		}
	});
}

function ShowComplainLoader()
{
	var html = "<div id='complain_msg' style='font-size: 14px;'></div>";
	
	$('#complain_loader_div').html(html);
	
	$('#complain_loader_div').css('height', $('#compaint_box_details_subj').outerHeight() + $('#compaint_box_details_desc').outerHeight());
	
	$('#complain_loader_div').show();
}

function ShowComplainLoading()
{
	var html = "<div class='loading'><span>P</span><span>a</span><span>n</span><span>c</span><span>h</span><span>o</span><span>&nbsp;</span><span>B</span><span>y</span><span>a</span><span>n</span><span>j</span><span>o</span><span>n</span></div>";
	
	$('#complain_loader_div').html(html);
	
	$('#complain_loader_div').css('height', $('#compaint_box_details_subj').outerHeight() + $('#compaint_box_details_desc').outerHeight());
	
	$('#complain_loader_div').show();
}

function HideComplainLoading()
{
	$('#complain_loader_div').html('');
	
	$('#complain_loader_div').hide();
}


function HideComplainLoader()
{
	$('#complain_loader_div').html('');
	$('#complain_loader_div').hide();
}

function CheckForEmptyBoxes()
{
	ShowComplainLoading();
	
	var onclickmethods = "";
	
	if($('#compaint_box_subject_text').val() == "" || $('#compaint_box_details_text').val() == "")
	{
		HideComplainLoading();
		ShowComplainLoader();
		if($('#compaint_box_subject_text').val() == "")
		{
			onclickmethods = "HideComplainLoader();$('#compaint_box_subject_text').focus();";
		}
		else if($('#compaint_box_details_text').val() == "")
		{
			onclickmethods = "HideComplainLoader();$('#compaint_box_details_text').focus();";
		}
		
		var msg = "<div>Please provide your complain details</div><br></br><div><input type='button' id='complain_div_close' value='Ok' onclick=" + onclickmethods + "></input></div>";
		
		$('#complain_msg').html(msg);
		
		return false;
	}
	
	return true;
}

$('#save_complaint' ).click(function () {
	var getVal = CheckForEmptyBoxes();
	if(getVal)
	{
		ShowComplainLoading();
		$userid = $('#profile_userdiv').html();
		$com_sub = $('#compaint_box_subject_text').val().replace("'","''");
		$com_details = $('#compaint_box_details_text').val().replace("'","''");
		
		$.ajax({ url: 'api.php',
			 data: {function2call: 'UpdateComplaints', com_sub: $com_sub, com_details: $com_details, userid: $userid},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  //call GetComplains
						  $('#compaint_box_subject_text').val('');
						  $('#compaint_box_details_text').val('');
						  GetComplaints();
				}
			});
			HideComplainLoading();
		
		if ( $("#complaint_box_edit" ).is( ":hidden" ) ) {
			$("#complaint_box_edit" ).slideDown( "slow" );
			$("#complaint_box_edit" ).show();
		  } else {
			$("#complaint_box_edit" ).slideUp("slow");
		  }
	}
});

$('#cancel_complaint' ).click(function () {
	if ( $("#complaint_box_edit" ).is( ":hidden" ) ) {
		$("#complaint_box_edit" ).slideDown( "slow" );
		$("#complaint_box_edit" ).show();
	  } else {
		$("#complaint_box_edit" ).slideUp("slow");
		$('#compaint_box_subject_text').val('');
		$('#compaint_box_details_text').val('');
	  }
});


function FillPassword()
  {
	  if ($('#password').val() == "")
	  {
		  $('#password').val('Please create a password');
		  $('#password').css('color', 'red');
		  pfilled = false;
	  }
	  else
	  {
		  pfilled = true;
	  }
  }
  
  function ResetPassword()
  {
	  if (pfilled == false)
	  {
		$('#password').val('');
	  }
	  $('#password').css('color', 'black');
	  $('#errDiv').html('');
  }
  
  
  function FillCPassword()
  {
	  if ($('#confirm').val() == "")
	  {
		  $('#confirm').val('Please confirm your password');
		  $('#confirm').css('color', 'red');
		  cpfilled = false;
	  }
	  else
	  {
		  cpfilled = true;
	  }
  }
  
  function ResetCPassword()
  {
	  if (cpfilled == false)
	  {
		$('#confirm').val('');
	  }
	  $('#confirm').css('color', 'black');
	  $('#errDiv').html('');
  }
  
  function CheckPasswordMatch()
  {
	  if($('#password').val() != "" && $('#confirm').val() != "")
	  {
		  if($('#password').val() != $('#confirm').val())
		  {
			  $('#errDiv').html('Passwords do not match');
			  psmatch = false;
		  }
		  else
		  {
			  psmatch = true;
			  $('#errDiv').html('');
		  }
	  }
  }



function GetDetails(id) {
    var x = document.getElementById(id);
	$topic_val = $('#' + id).html();
	//alert($topic_val);
	$('#topic_header').html($topic_val);
	$('#' + id).show();
}

function ShowDivDetails(id, idhide, thide, fhide, fihide, shide, sehide, ehide) {
	$('#' + id).show();
	$('#' + idhide).hide();
	$('#' + thide).hide();
	$('#' + fhide).hide();
	$('#' + fihide).hide();
	$('#' + shide).hide();
	$('#' + sehide).hide();
	$('#' + ehide).hide();
	$('#rowrating').html('');
}
//
// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

/*$(function() {
    $('#search').autocomplete({
        source: 'searchOrders.php'
    });
	//changing the autocomplete box's font size
	$('ul.ui-autocomplete.ui-menu').css('fontSize', '14px');
}); */

function GetOrdersAfterSearch($text_value)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomersOrdersBySearch', userid: $userid, text_value: $text_value},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html="";
			 var hLine="";
			 var hlastLine="";
			 var custOrderDate = "";
			 var interests_html = "";
			 $ordid = "";
			 var styleColor = "";
			 
			 html = html + "<div class='row'><div class='col-lg-2'>Order Date</div><div class='col-lg-2'>Order Id</div><div class='col-lg-2'>Item</div><div class='col-lg-2'>Quantity</div><div class='col-lg-2' style='text-align: left;'>Item Value</div><div class='col-lg-2' style='text-align: center;'>Actions</div></div>";
				 
			html = html + "<hr class='w3-clear' style='border-top: 1px solid #464242;'>";
			
			var actionshtml = "";
			var actionsdwnhtml = "";
			
			var max_order_show = "";
			
			if(res.length >= 6)
			{
				max_order_show = 5;
			}
			else
			{
				max_order_show = res.length;
			}
				 
			 for(var i=0;i<max_order_show;i++)
			 {
				 var reorder = "reorder" + i;
				 var invoice = "invoice" + i;
				 
				 
				 if(custOrderDate != "")
				 {
					 if(custOrderDate  != res[i]["CustomerOrderDate"])
					 {
						hLine = "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
					 }
					 else
					 {
						 hLine = "";
					 }
				 }
				 if(i ==  max_order_show - 1)
				 {
					 hlastLine = "<hr class='w3-clear' style='border-top: 1px dotted #337ab7;'>";
				 }
				 if(res[i]["Delivered"] == "Y")
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Reorder' onclick='Reorder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-send' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Download Invoice' onclick='DownloadInvoice(" + '"' + res[i]["Id"] + '"' + ")" + "'" + "><i class='fa fa-download' id=" + invoice + "></i></div>";
					 
					 
					 styleColor = "style='color:#0bad0d'";
				 }
				 else
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Track your order' onclick='TrackOrder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-map-marker' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Contact Customer Service' onclick='ContactCustomerService(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-phone' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#b56510;'";
				 }
					 
				 //create the html dynamically
				 
				 html = html + "<div class='row'" + styleColor + ">" + hLine + "<div style='display:none;'>" + res[i]["Id"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderDate"] + "</div><div class='col-lg-2'>" + res[i]["OrderId"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemDesc"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemQty"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderValue"] + "</div>" + actionshtml + actionsdwnhtml + "</div><div style='height: 15px'>" + hlastLine + "</div>";
				 
				 custOrderDate = res[i]["CustomerOrderDate"];
				
			 }
			 
			 //html = html + "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
			 if(max_order_show>=3)
			 {
				 html = html + "<div style='height: 55px; padding-top: 25px; text-align: right; color: blue;'><span style='cursor: pointer;' onclick='ShowAllCustomerOrders();'>Show More...</span></div>"
			 }
			 $('#user_row_orders').html(html);
			}
		})
}


$(function() {
	var styleColor = "";
    $('#search').autocomplete({
        source: function( request, response ) {
			<!-- creating the order table dynamically -->
			$text_value = request.term;
			$userid = $('#profile_userdiv').html();
			$.ajax({ url: 'api.php',
				 data: {function2call: 'GetCustomersOrdersBySearch', userid: $userid, text_value: $text_value},
				 type: 'post',
				 //dataType: 'json',
				 success: function(output) {
					 //response(output);
					 var res = jQuery.parseJSON(output);
					 if(res != "")
					 {
						 //response(res[0]["CustomerItemDesc"]);
						 response($.map(res, function (item) {
									return {
										label: item.CustomerItemDesc,
										value: item.CustomerItemDesc
									}
								}));
						 var html="";
						 var hLine="";
						 var hlastLine="";
						 var custOrderDate = "";
						 var interests_html = "";
						 $ordid = "";
						 
						 html = html + "<div class='row'><div class='col-lg-2'>Order Date</div><div class='col-lg-2'>Order Id</div><div class='col-lg-2'>Item</div><div class='col-lg-2'>Quantity</div><div class='col-lg-2' style='text-align: left;'>Item Value</div><div class='col-lg-2' style='text-align: center;'>Actions</div></div>";
							 
						html = html + "<hr class='w3-clear' style='border-top: 1px solid #464242;'>";
						
						var actionshtml = "";
						var actionsdwnhtml = "";
						
						var max_order_show = "";
						
						if(res.length >= 6)
						{
							max_order_show = 5;
						}
						else
						{
							max_order_show = res.length;
						}
							 
						 for(var i=0;i<max_order_show;i++)
						 {
							 var reorder = "reorder" + i;
							 var invoice = "invoice" + i;
							 
							 
							 if(custOrderDate != "")
							 {
								 if(custOrderDate  != res[i]["CustomerOrderDate"])
								 {
									hLine = "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
								 }
								 else
								 {
									 hLine = "";
								 }
							 }
							 if(i ==  max_order_show - 1)
							 {
								 hlastLine = "<hr class='w3-clear' style='border-top: 1px dotted #337ab7;'>";
							 }
							 if(res[i]["Delivered"] == "Y")
							 {
								 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Reorder' onclick='Reorder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-send' id=" + reorder + "></i></div>";
								 
								 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Download Invoice' onclick='DownloadInvoice(" + '"' + res[i]["Id"] + '"' + ")" + "'" + "><i class='fa fa-download' id=" + invoice + "></i></div>";
								 
								 styleColor = "style='color:#0bad0d'";
							 }
							 else
							 {
								 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Track your order' onclick='TrackOrder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-map-marker' id=" + reorder + "></i></div>";
								 
								 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Contact Customer Service' onclick='ContactCustomerService(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-phone' id=" + invoice + "></i></div>";
								 
								 styleColor = "style='color:#b56510;'";
							 }
								 
							 //create the html dynamically
							 
							 html = html + "<div class='row'" + styleColor + ">" + hLine + "<div style='display:none;'>" + res[i]["Id"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderDate"] + "</div><div class='col-lg-2'>" + res[i]["OrderId"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemDesc"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemQty"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderValue"] + "</div>" + actionshtml + actionsdwnhtml + "</div><div style='height: 15px'>" + hlastLine + "</div>";
							 
							 custOrderDate = res[i]["CustomerOrderDate"];
						 }
						 
						 //html = html + "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
						 if(max_order_show>=3)
						 {
							 html = html + "<div style='height: 55px; padding-top: 25px; text-align: right; color: blue;'><span style='cursor: pointer;' onclick='ShowAllCustomerOrders();'>Show More...</span></div>"
						 }
						 $('#user_row_orders').html(html);
						 //$('#recentorders').html(interests_html);
						 //end the if statement
					 }
					}
				})
					
			//changing the autocomplete box's font size
			$('ul.ui-autocomplete.ui-menu').css('fontSize', '14px');
			
			<!-- end of table creation  -->
			
			<!-- close the if statement -->
			<!-- -->
		},
		//$('ul.ui-autocomplete.ui-menu').css('fontSize', '14px');
		select: function (e, ui) {
			GetOrdersAfterSearch(ui.item.value);
			//alert(ui.item.value);
		},

		change: function (e, ui) {
			if(ui.content.length === 0)
			{
				GetCustomersOrders();
			}
			else
			{
				GetOrdersAfterSearch(ui.item.value);
			}
			//alert(ui.item.value);
		}
    });
	////changing the autocomplete box's font size
	//$('ul.ui-autocomplete.ui-menu').css('fontSize', '14px');
});

$("#search").focusout(function() {
    if ($("#search").val() == "") {
        GetCustomersOrders();
    }
});

$("#search").on("autocompletechange", function(event,ui) {
       if(ui.content.length === 0)
	   {
			GetCustomersOrders();
	   }
    });
	
//$("#search").data("ui-autocomplete")._trigger("change")

$(document).ready(function(){
	$user_name = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
			 data: {function2call: 'GetUserProfileDetails', user_name: $user_name},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  var res = jQuery.parseJSON(output);
						  if(res.length > 0)
						  {
							  $('#profile_name').html(res[0]["FirstName"] + " " + res[0]["LastName"]);
							  $('#user_name').html(res[0]["User_Ph_No"]);
							  $('#div_hidden_emailid').html(res[0]["EmailId"]);
							  $full_email_id = $('#div_hidden_emailid').html();
							  if(res[0]["EmailId"].length > 21)
							  {
								  $('#user_email').html(res[0]["EmailId"].substr(0, 21) + "...");
								  $('#user_email').prop('title', $full_email_id);
							  }
							  else
							  {
								  $('#user_email').html(res[0]["EmailId"]);//substr(0, 1)
							  }
							  if(res[0]["User_Notifications"] == "N")
							  {
								  $('#notif_div').hide();
								  $('#notif_info').bootstrapToggle('off');
							  }
							  else
							  {
								  $('#notif_div').show();
								  $('#notif_info').bootstrapToggle('on');
							  }
							  
							  if(res[0]["User_Deals"] == "N")
							  {
								  $('#ongoing_deals').hide();
								  $('#upcoming_deals').hide();
								  //$('#all_deals').find('br').remove();
								  $('#first_br').hide();
								  $('#second_br').hide();
								  $('#deal_info').bootstrapToggle('off');
							  }
							  else
							  {
								  $('#ongoing_deals').show();
								  $('#upcoming_deals').show();
								  $('#first_br').show();
								  $('#second_br').show();
								  $('#deal_info').bootstrapToggle('on')
							  }
							  
							  
							  if(res[0]["User_Image"] != null)
							  {
								  //$('#user_profile_image').attr('src', res[0]["User_Image"]);
								  //$('#user_profile_image').attr('class', 'lazy');
								  //$('#user_profile_image').attr('data-src', res[0]["User_Image"]);
								  ShowProfileLoadingLoader();
								  $('#user_profile_image').load( function(){
									  HideProfileLoadingLoader();
									}).attr('src', res[0]["User_Image"]);
							  }
							  else
							  {
								  $('#user_profile_image').attr('src', 'images/avatar3.png');
								  //$('#user_profile_image').attr('class', 'lazy');
								  //$('#user_profile_image').attr('data-src', 'images/avatar3.png');
							  }
						  }
						  else
						  {
							  
						  }
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
			
			//CreateGraph();//profile_userdiv
			GetUserCartItems($('#profile_userdiv').html());
			$('#load_cart').load('UserCart.php');
			//$('#load_page_div').css('margin-top', '0% !important;');
			//$('#load_page_div').style.setProperty( 'margin-top', '0%', 'important' );
			HideShowPw();
			GetUserAddresses();
			ShowLoader();
			GetUserFavs();
			HideLoader();
			GetCustomersOrders();
			GetMonthlyExpenditure();
			order_search_box_hide();
			GetDealsInformation();
			GetComplaints();
			
				/* creating the animation for the upload image  */
				
				$("[rel='tooltip']").tooltip();    
 
				$('.thumbnail').hover(
					function(){
						$(this).find('.caption').slideDown(250); //.fadeIn(250)
					},
					function(){
						$(this).find('.caption').slideUp(250); //.fadeOut(205)
					}
				); 
				
				/* end of creation */
				
				<!-- creating file upload -->
				/*$("#uploadimage").on('submit',(function(e) {
						//e.preventDefault();
						//$("#message").empty();
						//$('#loading').show();
						$.ajax({
						url: "ajax_php_file.php", // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
						$('#loading').hide();
						$("#message").html(data);
						}
					});
				}));*/
				
				
				//ShowProfileLoadingLoader();
				var readURL = function(input) {
					if (input.files && input.files[0]) {
						ShowProfileLoadingLoader();
						var reader = new FileReader();

						reader.onload = function (e) {
							$('#user_profile_image').attr('src', e.target.result);
							SaveUserProfileImage();
						}
				
						reader.readAsDataURL(input.files[0]);
						//alert(input.files[0]);
					}
				}
				//HideProfileLoadingLoader();
				
				$(".file-upload").on('change', function(){
					//ShowProfileLoadingLoader();
					readURL(this);
					//HideProfileLoadingLoader();
				});
				
				$("#upload_user_image").on('click', function() {
				   $(".file-upload").click();
				});
				
				<!-- end of creation -->
				
				/*$('#order_contact_care').click(function() {
					$('#order_contact_care').hide();
						//$('#order_contact_care').hide();
					});*/
});



function ShowLoader()
{
	$('#fav_loader_div').css('height', $('#main_container_middle').height());
	//$('#fav_loader_div').css('line-height', $('#main_container_middle').height());
	//$('#fav_loader_div').css('width', $('#main_container_middle').width());
	
	$('#fav_loader_div').css('left', $('#main_container_middle').position().left);
	
	$('#fav_loader_div').show();
}

function ShowProfileLoader()
{
	$('#profile_loader_div').css('height', $('#PBProfile_div').height());
	//$('#fav_loader_div').css('line-height', $('#main_container_middle').height());
	$('#profile_loader_div').css('width', $('#PBProfile_div').width());
	
	$('#profile_loader_div').css('left', $('#PBProfile_div').position().left);
	
	var html = "<div id='profile_msg' style='font-size: 18px;'></div>";
	
	$('#profile_loader_div').html(html);
	
	$('#profile_loader_div').show();
}

function ShowProfileLoadingLoader()
{
	$('#profile_loader_div').css('height', $('#PBProfile_div').height());
	//$('#fav_loader_div').css('line-height', $('#main_container_middle').height());
	$('#profile_loader_div').css('width', $('#PBProfile_div').width());
	
	$('#profile_loader_div').css('left', $('#PBProfile_div').position().left);
	
	var html = "<div class='loading'><span>P</span><span>a</span><span>n</span><span>c</span><span>h</span><span>o</span><span>&nbsp;</span><span>B</span><span>y</span><span>a</span><span>n</span><span>j</span><span>o</span><span>n</span></div>";
	
	$('#profile_loader_div').html(html);
	
	$('#profile_loader_div').show();
}

function HideProfileLoadingLoader()
{
	$('#profile_loader_div').hide();
}

function HideProfileLoader()
{
	$('#profile_loader_div').hide();
}

function HideLoader()
{
	$('#fav_loader_div').hide();
}

function ShowChartLoader()
{
	$('#chart_loader_div').css('height', $('#my_exp_chart_div').height());
	
	$('#chart_loader_div').css('width', $('#my_exp_chart_div').width());
	
	//$('#chart_loader_div').css('left', $('#my_exp_chart_div').position().left);
	
	$('#chart_loader_div').show();
}

function HideChartLoader()
{
	$('#chart_loader_div').hide();
}

function UpdateUserProfileWithImage($img)
{
	ShowProfileLoadingLoader();
	$userid = $('#profile_userdiv').html();
	$img_path = "images/" + $userid + "/" + $img;
	//fetch items' price from database and display
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserImage', img_path: $img_path, userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //cartitemresult = jQuery.parseJSON(output)[0]["SUM(ItemsQty)"];
					  //$("#cart_items_count").html(cartitemresult);
					  //$("#cart_items_count_mob").html(cartitemresult);
			}
		});
		HideProfileLoadingLoader();
}


function SaveUserProfileImage()
{
	ShowProfileLoadingLoader();
	var input = document.getElementById("user_profile_pic_upload_file");
	  file = input.files[0];
	  if(file != undefined){
		formData= new FormData();
		if(!!file.type.match(/image.*/)){
		  formData.append("image", file);
		  $.ajax({
			url: "ajax_php_file.php",
			type: "POST",
			data: formData,
			processData: false,
			contentType: false,
			success: function(data){
				UpdateUserProfileWithImage(input.files[0].name);
			}
		  });
		}else{
		  alert('Not a valid image!');
		}
	  }else{
		alert('Input something!');
	  }
	  //HideProfileLoadingLoader();
}

function OpenCartDiv()
{
	  $('#user_cart_main_container').css('display', 'inline');
	  $('#load_cart').show();
	  
		  $("#load_page_div").show('slide', 1000); 
		  
		  $('html,body').animate({
        scrollTop: $('#load_page_div').offset().top},
        'slow');
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
					  $("#cart_items_count").html(cartitemresult);
					  $("#cart_items_count_mob").html(cartitemresult);
			}
		});
}


function CheckForPass($userid, $pwd)
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'CheckForPass', userid: $userid, pwd: $pwd},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
					  var res = jQuery.parseJSON(output);
					  if(res.length == 0)
					  {
						  $('#errDiv').html('The password does not match !');
						  pwdbmatch = false;
					  }
					  else
					  {
						  pwdbmatch = true;
					  }
			}
		});
}

function UpdateResetRecord($ps_reset)
{
	ShowLoader();
	$id_reset = $('#profile_userdiv').html();
	if(psmatch == true && cpfilled == true && pfilled == true && pwdbmatch == true)
	{
		$.ajax({ url: 'api.php',
			 data: {function2call: 'UpdateResetRecord', ps_reset: $ps_reset, id_reset: $id_reset},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
						  $('#errDiv').html('Password has been successfully changed.');
						  $('#old_password').val('');
						  $('#password').val('');
						  $('#confirm').val('');
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
	}
	HideLoader();
}

function HideShowPw()
{
	$("#hsps").click(function () {
		 if ($("#password").attr("type")=="password") {
			 $("#password").attr("type", "text");
			 //$("#hsps").attr("src", "images/eyec.png");
			 $("#hsps").removeClass('fa fa-eye').addClass('fa fa-eye-slash');//replaceClass('fa fa-eye','fa fa-eye-slash');
		 }
		 else{
			 $("#password").attr("type", "password");
			 //$("#hsps").attr("src", "images/eye.png");
			 $("#hsps").removeClass('fa fa-eye-slash').addClass('fa fa-eye');//$("#hsps").replaceClass('fa fa-eye-slash','fa fa-eye');
		 }
 
	});
			 
			 
	 $("#hspsc").click(function () {
		 if ($("#confirm").attr("type")=="password") {
			 $("#confirm").attr("type", "text");
			 //$("#hspsc").attr("src", "images/eyec.png");
			 $("#hspsc").removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		 }
		 else{
			 $("#confirm").attr("type", "password");
			 //$("#hspsc").attr("src", "images/eye.png");
			 $("#hspsc").removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		 }
	 
	 });
			 
	 $("#hspos").click(function () {
		 if ($("#old_password").attr("type")=="password") {
			 $("#old_password").attr("type", "text");
			 //$("#hspos").attr("src", "images/eyec.png");
			 $("#hspos").removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		 }
		 else{
			 $("#old_password").attr("type", "password");
			 //$("#hspos").attr("src", "images/eye.png");
			 $("#hspos").removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		 }
	 
	 });
}

function UpdateUserSelection($col_name, $col_val)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
			 data: {function2call: 'UpdateUserSelection', col_name: $col_name, col_val: $col_val, userid: $userid},
			 type: 'post',
			 success: function(output) {
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
}

$(function() {
    $('#notif_info').change(function() {
      var rn = $(this).prop('checked');

		if(rn==false)
		{
			$('#notif_div').hide();
			UpdateUserSelection("User_Notifications","N");
			/**$.confirm({
				title: 'Confirm!',
				content: 'Are you sure you do not want any notifications?',
				buttons: {
					confirm: function () {
					$('#notif_div').hide();
					UpdateUserSelection("User_Notifications","N");
					},
					cancel: function () {
						$('#notif_info').bootstrapToggle('on');
					}
				}
			});**/
		}
		else
		{
			$('#notif_div').show();
			UpdateUserSelection("User_Notifications","Y");
		}
    })
  })
  
  
  $(function() {
    $('#deal_info').change(function() {
      var rn = $(this).prop('checked');

		if(rn==false)
		{
			$('#ongoing_deals').hide();
			$('#upcoming_deals').hide();
			//$('#all_deals').find('br').remove();
			$('#first_br').hide();
			$('#second_br').hide();
			UpdateUserSelection("User_Deals","N");
			/**$.confirm({
				title: 'Confirm!',
				content: 'Are you sure you do not want any deals?',
				buttons: {
					confirm: function () {
					$('#all_deals').hide();
					UpdateUserSelection("User_Deals","N");
					},
					cancel: function () {
						$('#deal_info').bootstrapToggle('on');
					}
				}
			}); **/
		}
		else
		{
			$('#ongoing_deals').show();
			$('#upcoming_deals').show();
			$('#first_br').show();
			$('#second_br').show();
			UpdateUserSelection("User_Deals","Y");
		}
    })
  })
  
  
  function GetMonthlyExpenditure()
  {
	  ShowChartLoader();
	  $userid = $('#profile_userdiv').html();
	  var monthly_exp = [];
	  var Header= ['Year', 'Expenses'];
	  monthly_exp.push(Header);
	  var subs = "";
	  $.ajax({ url: 'api.php',
			 data: {function2call: 'GetMonthlyExpenditure', userid: $userid},
			 type: 'post',
			 success: function(output) {
				 var res = jQuery.parseJSON(output);
						 if(res.length > 0)
						 {
							 for(var i = 0; i < res.length; i++)
							 {
								if(res.length >= 4)
								{
									subs = 4;
								}
								else
								{
									subs = res.length;
								}
								
								var temp=[];
								temp.push(res[i]["Month"]);
								temp.push(parseInt(res[i]["Expenditure"]));

								monthly_exp.push(temp);
							 }
						 }
						 CreateGraph(monthly_exp, subs);
						 $('#more_data').hide();
						 HideChartLoader();
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
			HideChartLoader();
  }
  
  function CreateGraph($data1, $subs)
  {
	  google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable($data1);
          /*['Year', 'Expenses'],
		  ['Aug 16', 2098],
		  ['Sep 16', 576],
		  ['Oct 16', 1753],
		  ['Nov 16', 1449],
		  ['Dec 16', 1593],
		  ['Jan 17', 987],
		  ['Feb 17', 373],
		  ['Mar 17', 856],
          ['Apr 17', 1000],
          ['May 17', 1170],
          ['Jun 17', 660],
          ['Jul 17', 1030]
		  $data1
		  /*for(var i = 0; i < $data1.length; i++)
		  {
			  
		  
        ]);*/

        var options = {
          chart: {
            title: 'My Monthly Expenditure',
            subtitle: 'Expenses for the last ' + $subs + ' months',
			//subtitle: 'Expenses for the last 2 months',
          },
          bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3']
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));
		
		ShowChartLoader();
				google.visualization.events.addListener(chart, 'ready', function() {
						HideChartLoader();
				});

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        /*btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }*/
		
		      google.visualization.events.addListener(chart, 'select', selectHandler);
			  
			  ShowChartLoader();
				google.visualization.events.addListener(chart, 'ready', function() {
						HideChartLoader();
				});
      
      
      function selectHandler() {
			var month_expn = "";
			  var selection = chart.getSelection();
			  var message = '';
			  for (var i = 0; i < selection.length; i++) {
				var item = selection[i];
				if (item.row != null && item.column != null) {
				  var str = data.getFormattedValue(item.row, item.column);
				  month_expn = data.getFormattedValue(item.row, 0);
				  message += '{row:' + item.row + ',column:' + item.column + '} = ' + str + '\n';
				} else if (item.row != null) {
				  var str = data.getFormattedValue(item.row, 0); // this gives July / August 2017
				  month_expn = data.getFormattedValue(item.row, 0);
				  message += '{row:' + item.row + ', column:none}; value (col 0) = ' + str + '\n';
				} else if (item.column != null) {
				  var str = data.getFormattedValue(0, item.column);
				  month_expn = data.getFormattedValue(item.row, 0);
				  message += '{row:none, column:' + item.column + '}; value (row 0) = ' + str + '\n';
				}
			  }
			  
			  //CreatePieChart(month_expn);
			  CreatePieGraph(month_expn);
			}
      }
  }
  
  
  
  
  function CreatePieGraph($month_expn)
  {
	  $('#more_data').show();
	  $userid = $('#profile_userdiv').html();
	  $mon = $month_expn.split(' ');
	  var monthly_exp=[];
	  var Header= ['Item', 'Price'];
	  monthly_exp.push(Header);
	  $yr = "20" + $mon[1];
		$.ajax({ url: 'api.php',
			 data: {function2call: 'CreatePieGraph', mon: $mon[0], yr: $yr, userid: $userid},
			 type: 'post',
			 success: function(output) {
						var res = jQuery.parseJSON(output);
						 if(res.length > 0)
						 {
							 for(var i = 0; i < res.length; i++)
							 {
								var temp=[];
								temp.push(res[i]["Item"] + " (Quantiy: " + res[i]["TotalItems"] + ")");
								temp.push(parseInt(res[i]["Price"]));

								monthly_exp.push(temp);
							 }
						 }
				 
							
						  google.charts.load("current", {packages:["corechart"]});
						  google.charts.setOnLoadCallback(drawChart);
						  

						  function drawChart() {
							var data = google.visualization.arrayToDataTable(monthly_exp);
							  
							var options = {
							  title: 'My Expenditure for ' + $mon[0] + ", " + $yr,
							  //is3D: true,
							  pieStartAngle: 110,
							  pieHole: 0.4,
							  pieSliceText: 'value'
							};

							var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
							
							ShowChartLoader();
							google.visualization.events.addListener(chart, 'ready', function() {
									HideChartLoader();
						    });

							//chart.draw(data, google.charts.Bar.convertOptions(options));
							chart.draw(data, options);

							var btns = document.getElementById('btn-group');
							
						  }
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
  }
  
  /*function CreatePieChart($month_expn)
  {
	  alert($month_expn);
  }*/
	
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

function ShowMyRatings()
{
	ShowLoader();
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'ShowMyRatings', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html_val = "";
			 for(var i=0;i<res.length;i++)
			 {
				 var rotiid = "roti_id" + i;
				 var itemimagerating = "itemimagerating" + i;
				 var itemrating = "itemrating" + i;
				 var firstChar = res[i]["ItemDesc"].substr(0, 1).toLowerCase();
				  html_val = html_val + "<div class='row' style='border: 1px solid; border-radius: 5px;'><div class='panel panel-primary' style='border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;'><div class='panel-heading'><span id=" + rotiid + ">" + res[i]["ItemDesc"] + "</span></div><div class='col-xs-6 pull-left panel-body' id=" + itemimagerating + "><img class='img-responsive' src='" + res[i]["ItemImage"] + "'></img></div><div style='padding-top:12%;' class='col-xs-6 pull-right' id=" + itemrating + "><fieldset style='border: 0px solid #c0c0c0;margin: 0 0px;padding: 0em 0em 0em;' class='rating'><input type='radio' id='" + firstChar + "star5' name='" + firstChar + "rating' value='5' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star5" + '"' + ")" + "'" + "/><label for='" + firstChar + "star5' title='Excellent!'>5 stars</label><input type='radio' id='" + firstChar + "star4' name='" + firstChar + "rating' value='4' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star4" + '"' + ")" + "'" + "/><label for='" + firstChar + "star4' title='Pretty good'>4 stars</label><input type='radio' id='" + firstChar + "star3' name='" + firstChar + "rating' value='3' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star3" + '"' + ")" + "'" + "/><label for='" + firstChar + "star3' title='Good'>3 stars</label><input type='radio' id='" + firstChar + "star2' name='" + firstChar + "rating' value='2' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star2" + '"' + ")" + "'" + "/><label for='" + firstChar + "star2'" + firstChar + " title='Bad'>2 stars</label><input type='radio' id='" + firstChar + "star1' name='" + firstChar + "rating' value='1' onclick='UserReviews(" + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + firstChar + "star1" + '"' + ")" + "'" + "/><label for='" + firstChar + "star1' title='Horrible'>1 star</label></fieldset></div></div></div><br></br>";
			 }
			 $('#rowrating').html(html_val);
			 GetUserReviews();
			}
		});
		HideLoader();
}

function FavouritesOnClick()
{
	GetDetails('my_fav');
	$('#midcontainerdiv').css('margin-left', '10%'); 
	$('#midcontainerdiv').css('width', '60%'); 
	$('#show_user_addresses').hide(); 
	$('#rowaddresses').hide(); 
	$('#add_division').hide();
}


function GetCustomersOrders()
{
	ShowLoader();
	var styleColor = "";
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomersOrders', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html="";
			 var hLine="";
			 var hlastLine="";
			 var custOrderDate = "";
			 var interests_html = "";
			 $ordid = "";
			 
			 html = html + "<div class='row'><div class='col-lg-2'>Order Date</div><div class='col-lg-2'>Order Id</div><div class='col-lg-2'>Item</div><div class='col-lg-2'>Quantity</div><div class='col-lg-2' style='text-align: left;'>Item Value</div><div class='col-lg-2' style='text-align: center;'>Actions</div></div>";
				 
			html = html + "<hr class='w3-clear' style='border-top: 1px solid #464242;'>";
			
			var actionshtml = "";
			var actionsdwnhtml = "";
			
			var max_order_show = "";
			
			if(res.length >= 6)
			{
				max_order_show = 5;
			}
			else
			{
				max_order_show = res.length;
			}
				 
			 for(var i=0;i<max_order_show;i++)
			 {
				 var reorder = "reorder" + i;
				 var invoice = "invoice" + i;
				 
				 
				 if(custOrderDate != "")
				 {
					 if(custOrderDate  != res[i]["CustomerOrderDate"])
					 {
						hLine = "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
					 }
					 else
					 {
						 hLine = "";
					 }
				 }
				 if(i ==  max_order_show - 1)
				 {
					 hlastLine = "<hr class='w3-clear' style='border-top: 1px dotted #337ab7;'>";
				 }
				 if(res[i]["Delivered"] == "Y")
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Reorder' onclick='Reorder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-send' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Download Invoice' onclick='DownloadInvoice(" + '"' + res[i]["Id"] + '"' + ")" + "'" + "><i class='fa fa-download' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#0bad0d'";
				 }
				 else
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Track your order' onclick='TrackOrder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-map-marker' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Contact Customer Service' onclick='ContactCustomerService(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-phone' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#b56510;'";
				 }
					 
				 //create the html dynamically
				 
				 html = html + "<div class='row'" + styleColor + ">" + hLine + "<div style='display:none;'>" + res[i]["Id"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderDate"] + "</div><div class='col-lg-2'>" + res[i]["OrderId"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemDesc"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemQty"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderValue"] + "</div>" + actionshtml + actionsdwnhtml + "</div><div style='height: 15px'>" + hlastLine + "</div>";
				 
				 custOrderDate = res[i]["CustomerOrderDate"];
				 
				 if(i<3)
				 {
					/*interests_html = interests_html + "<p><span style='cursor: pointer;' class='w3-tag w3-small w3-theme-d5' onclick='GetCustomersRecentOrders(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + ">" + res[i]["OrderId"] + "</span></p>";*/
					if($ordid != res[i]["OrderId"])
					{
						var recentHtml  = "GetCustomersRecentOrders(" + '"' + res[i]["OrderId"] + '"' + ")" + ";";
						recentHtml = recentHtml + "GetDetails('my_orders')" + ";";
						recentHtml = recentHtml + "ShowDivDetails('show_user_orders','show_user_favs','show_my_addresses','change_ps_div','show_my_ratings','show_my_reviews','new_address_container')" + ";";
						recentHtml = recentHtml + "$('#midcontainerdiv').css('margin-left','30%')" + ";";
						recentHtml = recentHtml + "$('#midcontainerdiv').css('margin-left','0%')" + ";";
						recentHtml = recentHtml + "$('#midcontainerdiv').css('width','100%')" + ";";
						recentHtml = recentHtml + "$('#show_user_addresses').hide()" + ";";
						recentHtml = recentHtml + "$('#rowaddresses').hide()" + ";";
						recentHtml = recentHtml + "$('#add_division').hide()" + ";";
						recentHtml = recentHtml + "order_search_box_show()" + ";"; 
						interests_html = interests_html + "<p><span style='cursor: pointer;' class='w3-tag w3-small w3-theme-d5' onclick=" + recentHtml + ">" + res[i]["OrderId"] + "</span></p>";
					}
					
					$ordid = res[i]["OrderId"];
				 }
			 }
			 
			 //html = html + "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
			 if(max_order_show>=3)
			 {
				 html = html + "<div style='height: 55px; padding-top: 25px; text-align: right; color: blue;'><span style='cursor: pointer;' onclick='ShowAllCustomerOrders();'>Show More...</span></div>"
			 }
			 $('#user_row_orders').html(html);
			 $('#recentorders').html(interests_html);
			}
		})
		HideLoader();
}


<!-- search for the customer orders -->


function GetCustomersOrdersBySearch()
{
	ShowLoader();
	var styleColor = "";
	$userid = $('#profile_userdiv').html();
	$text_value = $('#search').val();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomersOrdersBySearch', userid: $userid, text_value: $text_value},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html="";
			 var hLine="";
			 var hlastLine="";
			 var custOrderDate = "";
			 var interests_html = "";
			 $ordid = "";
			 
			 html = html + "<div class='row'><div class='col-lg-2'>Order Date</div><div class='col-lg-2'>Order Id</div><div class='col-lg-2'>Item</div><div class='col-lg-2'>Quantity</div><div class='col-lg-2' style='text-align: left;'>Item Value</div><div class='col-lg-2' style='text-align: center;'>Actions</div></div>";
				 
			html = html + "<hr class='w3-clear' style='border-top: 1px solid #464242;'>";
			
			var actionshtml = "";
			var actionsdwnhtml = "";
			
			var max_order_show = "";
			
			if(res.length >= 6)
			{
				max_order_show = 5;
			}
			else
			{
				max_order_show = res.length;
			}
				 
			 for(var i=0;i<max_order_show;i++)
			 {
				 var reorder = "reorder" + i;
				 var invoice = "invoice" + i;
				 
				 
				 if(custOrderDate != "")
				 {
					 if(custOrderDate  != res[i]["CustomerOrderDate"])
					 {
						hLine = "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
					 }
					 else
					 {
						 hLine = "";
					 }
				 }
				 if(i ==  max_order_show - 1)
				 {
					 hlastLine = "<hr class='w3-clear' style='border-top: 1px dotted #337ab7;'>";
				 }
				 if(res[i]["Delivered"] == "Y")
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Reorder' onclick='Reorder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-send' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Download Invoice' onclick='DownloadInvoice(" + '"' + res[i]["Id"] + '"' + ")" + "'" + "><i class='fa fa-download' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#0bad0d'";
				 }
				 else
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Track your order' onclick='TrackOrder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-map-marker' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Contact Customer Service' onclick='ContactCustomerService(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-phone' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#b56510;'";
				 }
					 
				 //create the html dynamically
				 
				 html = html + "<div class='row'" + styleColor + ">" + hLine + "<div style='display:none;'>" + res[i]["Id"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderDate"] + "</div><div class='col-lg-2'>" + res[i]["OrderId"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemDesc"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemQty"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderValue"] + "</div>" + actionshtml + actionsdwnhtml + "</div><div style='height: 15px'>" + hlastLine + "</div>";
				 
				 custOrderDate = res[i]["CustomerOrderDate"];
				 
				 if(i<3)
				 {
					/*interests_html = interests_html + "<p><span style='cursor: pointer;' class='w3-tag w3-small w3-theme-d5' onclick='GetCustomersRecentOrders(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + ">" + res[i]["OrderId"] + "</span></p>";*/
					if($ordid != res[i]["OrderId"])
					{
						var recentHtml  = "GetCustomersRecentOrders(" + '"' + res[i]["OrderId"] + '"' + ")" + ";";
						recentHtml = recentHtml + "GetDetails('my_orders')" + ";";
						recentHtml = recentHtml + "ShowDivDetails('show_user_orders','show_user_favs','show_my_addresses','change_ps_div','show_my_ratings','show_my_reviews','new_address_container')" + ";";
						recentHtml = recentHtml + "$('#midcontainerdiv').css('margin-left','30%')" + ";";
						recentHtml = recentHtml + "$('#midcontainerdiv').css('margin-left','0%')" + ";";
						recentHtml = recentHtml + "$('#midcontainerdiv').css('width','100%')" + ";";
						recentHtml = recentHtml + "$('#show_user_addresses').hide()" + ";";
						recentHtml = recentHtml + "$('#rowaddresses').hide()" + ";";
						recentHtml = recentHtml + "$('#add_division').hide()" + ";";
						
						interests_html = interests_html + "<p><span style='cursor: pointer;' class='w3-tag w3-small w3-theme-d5' onclick=" + recentHtml + ">" + res[i]["OrderId"] + "</span></p>";
					}
					
					$ordid = res[i]["OrderId"];
				 }
			 }
			 
			 //html = html + "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
			 if(max_order_show>=3)
			 {
				 html = html + "<div style='height: 55px; padding-top: 25px; text-align: right; color: blue;'><span style='cursor: pointer;' onclick='ShowAllCustomerOrders();'>Show More...</span></div>"
			 }
			 $('#user_row_orders').html(html);
			 $('#recentorders').html(interests_html);
			}
		})
		HideLoader();
}


<!-- End of search  ->
function GetCustomersRecentOrders($order_id)
{
	ShowLoader();
	var styleColor = "";
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomersRecentOrders', userid: $userid, order_id: $order_id},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html="";
			 var hLine="";
			 var custOrderDate = "";
			 var interests_html = "";
			 
			 html = html + "<div class='row'><div class='col-lg-2'>Order Date</div><div class='col-lg-2'>Order Id</div><div class='col-lg-2'>Item</div><div class='col-lg-2'>Quantity</div><div class='col-lg-2' style='text-align: left;'>Item Value</div><div class='col-lg-2' style='text-align: center;'>Actions</div></div>";
				 
			html = html + "<hr class='w3-clear' style='border-top: 1px solid #464242;'>";
			
			var actionshtml = "";
			var actionsdwnhtml = "";
			
			var max_order_show = "";
			
			if(res.length >= 6)
			{
				max_order_show = 5;
			}
			else
			{
				max_order_show = res.length;
			}
				 
			 for(var i=0;i<max_order_show;i++)
			 {
				 var reorder = "reorder" + i;
				 var invoice = "invoice" + i;
				 
				 
				 if(custOrderDate != "")
				 {
					 if(custOrderDate  != res[i]["CustomerOrderDate"])
					 {
						hLine = "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
					 }
					 else
					 {
						 hLine = "";
					 }
				 }
				 if(res[i]["Delivered"] == "Y")
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Reorder' onclick='Reorder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-send' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#0bad0d"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Download Invoice' onclick='DownloadInvoice(" + '"' + res[i]["Id"] + '"' + ")" + "'" + "><i class='fa fa-download' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#0bad0d'";
				 }
				 else
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Track your order' onclick='TrackOrder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-map-marker' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#b56510"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Contact Customer Service' onclick='ContactCustomerService(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-phone' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#b56510;'";
				 }
					 
				 //create the html dynamically
				 
				 html = html + "<div class='row'" + styleColor + ">" + hLine + "<div style='display:none;'>" + res[i]["Id"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderDate"] + "</div><div class='col-lg-2'>" + res[i]["OrderId"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemDesc"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemQty"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderValue"] + "</div>" + actionshtml + actionsdwnhtml + "</div><div style='height: 15px'></div>";
				 
				 custOrderDate = res[i]["CustomerOrderDate"];
				 
			 }
			 $('#user_row_orders').html(html);
			 //$('#recentorders').html(interests_html);
			}
		});
		HideLoader();
}



function Reorder($orderId)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
			 data: {function2call: 'Reorder', userid: $userid, orderId: $orderId},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
				 GetUserCartItems($('#profile_userdiv').html());
				 
				 OpenCartDiv();
				 
				 //$('#load_cart').load('UserCart.php');
					},
			 error: function ( xhr, status, error) {
						console.log('error', status);
				}
			});
}


function GetUserFavs()
{
	ShowLoader();
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserFavs', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html_val = "";
			 for(var i=0;i<res.length;i++)
			 {
				 var rotiid = "roti_id" + i;
				 var itemimagerating = "userfavid" + i;
				 var itemrating = "userfavitemid" + i;
				 var sel_user_fav = "sel_user_fav" + i;
				 var remove_item = "remove_item" + i;
				 var add_item = "add_item" + i;
				 var noofItemsid = res[i]['Items_Desc'].replace(/ /g,"_") + "_" + i + "_item_count";
				 var each_it_val = res[i]['Items_Val'];
				 var tot_it_val = res[i]['ItemsValue'];
				 var this_item_id = res[i]['ItemId'];
				 var this_item_desc = res[i]['Items_Desc'];
				 var this_item_image = res[i]['Items_Img'];
				 var tot_this_item_count = $('#' + noofItemsid).html();
				 var each_items_val = "each_items_val" + i;
				 var total_items_val = "total_items_val" + i;
				 var this_items_id = "this_item_id" + i;
				 var this_items_desc = "this_item_desc" + i;
				 var this_items_image = "this_item_image" + i;
				 if(res[i]['ItemsQty'] == null)
				 {
					 res[i]['ItemsQty'] = 0;
				 }
				 //var firstChar = res[i]["ItemDesc"].substr(0, 1).toLowerCase();
				  html_val = html_val + "<div class='row' style='border: 1px solid; border-radius: 5px;'><div class='panel panel-primary' style='border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;'><div class='panel-heading'><span id=" + rotiid + ">" + res[i]['Items_Desc'] + "</span><div style='display:none'; id=" + each_items_val + ">" + each_it_val + "</div><div style='display:none'; id=" + total_items_val + ">" + tot_it_val + "</div><div style='display:none'; id=" + this_items_id + ">" + this_item_id + "</div><div style='display:none'; id=" + this_items_desc + ">" + this_item_desc + "</div><div style='display:none'; id=" + this_items_image + ">" + this_item_image + "</div><div><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: -17px;' title='Add Item' class='pull-right fa fa-plus-square' id=" + add_item + " onclick='AddItemToUserCart(" + '"' + noofItemsid + '"' + "," + '"' + this_items_id + '"' + "," + '"' + this_items_desc + '"' + "," + '"' + total_items_val + '"' + "," + '"' + this_items_image + '"' + "," + '"' + each_items_val + '"' + ")" + "'" + "></i><span id=" + noofItemsid + " class = 'pull-right' style='width: 40px; margin-top: -21px; text-align: center; margin-right: 15px;'>" + res[i]['ItemsQty'] + "</span><i style='cursor: pointer; text-shadow: 4px 4px 6px #777; margin-top: -17px;' title='Remove Item' class='pull-right fa fa-minus-square' id=" + remove_item + " onclick='RemoveItemFromUserCart(" + '"' + noofItemsid + '"' + "," + '"' + this_items_id + '"' + "," + '"' + this_items_desc + '"' + "," + '"' + total_items_val + '"' + "," + '"' + this_items_image + '"' + "," + '"' + each_items_val + '"' + ")" + "'" + "></i></div></div><div class='col-xs-6 pull-left panel-body' id=" + itemimagerating + "><img class='img-responsive' src='" + res[i]['Items_Img'] + "'></img></div><div style='padding-top:14%; padding-left: 30%;' class='col-xs-6 pull-right' id=" + itemrating + "><i  style='cursor: pointer; color:red; text-shadow: 4px 4px 6px #777;' title='Remove from favourites' class='fa fa-heart faa-pulse animated fa-2x' id=" + sel_user_fav + " onclick='StoreUserFavs(" + '"' + this_items_id + '"' + "," + '"' + each_items_val + '"' + "," + '"' + this_items_desc + '"' + "," + '"' + this_items_image + '"' + ")" + "'" + "></i></div></div></div><br></br>";
			 }
			 $('#user_row_favs').html(html_val);
			 FavouritesOnClick();
			}
		});
		HideLoader();
}

//data: {function2call: 'StoreUserFavs', userid: $userid, itemid: $('#' + $itemid).html(), it_val: $('#' + $each_items_val).html(), itemdescription: $('#' + $itemdescription).html(), itemimage: $('#' + $itemimage).html()},

function AddItemToUserCart($cart_item_count, $the_item_id, $the_item_desc, $total_items_val, $the_item_image, $each_items_val)
{
	$item_count_usercart = $('#' + $cart_item_count).html();
	var rcount = parseInt($item_count_usercart.trim()) + 1;
	$('#' + $cart_item_count).html(rcount);
	var eachval = $('#' + $each_items_val).html();
	var eachitval = parseInt(eachval.trim());
	$('#' + $total_items_val).html(eachitval * rcount);
	var ccount = $('#cart_items_count').html();
	var ccounts = parseInt(ccount.trim()) + 1;
	$('#cart_items_count').html(ccounts);
	$('#cart_items_count_mob').html(ccounts);
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'UpdateUserCart', userid: $('#profile_userdiv').html(), itemid: $('#' + $the_item_id).html(), itemdescription: $('#' + $the_item_desc).html(), itemqty: $('#' + $cart_item_count).html(), itemvalue : $('#' + $total_items_val).html(), itemimage: $('#' + $the_item_image).html()},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('There was a problem updating the database');
			}
		});
}


function RemoveItemFromUserCart($cart_item_count, $the_item_id, $the_item_desc, $total_items_val, $the_item_image, $each_items_val)
{
	$item_count_usercart = $('#' + $cart_item_count).html();
	//var rcount = parseInt($item_count_usercart.trim()) - 1;
	var rcount = parseInt($item_count_usercart.trim());
	if(rcount < 0)
	{
		rcount = 0;
	}
	else if (rcount > 0)
	{
		rcount--;
		$('#' + $cart_item_count).html(rcount);
		var eachval = $('#' + $each_items_val).html();
		var eachitval = parseInt(eachval.trim());
		$('#' + $total_items_val).html(eachitval * rcount);
		var ccount = $('#cart_items_count').html();
		var ccounts = parseInt(ccount.trim()) - 1;
		$('#cart_items_count').html(ccounts);
		$('#cart_items_count_mob').html(ccounts);
	}
	//rcount = rcount - 1;
	
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteFromUserCart', userid: $('#profile_userdiv').html(), itemid: $('#' + $the_item_id).html(), itemdescription: $('#' + $the_item_desc).html(), itemqty: $('#' + $cart_item_count).html(), itemvalue : $('#' + $total_items_val).html(), itemimage: $('#' + $the_item_image).html()},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //var res = jQuery.parseJSON(output);
		 },
		 error: function ( xhr, status, error) {
					alert('There was a problem updating the database');
			}
		});
}

function ChangeColor($id, $colr)
{
	$('#' + $id).css('color' , $colr);
}

function StoreUserFavs($itemid, $it_val, $itemdescription, $itemimage)
{
	ShowLoader();
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'StoreUserFavs', userid: $userid, itemid: $('#' + $itemid).html(), it_val: $('#' + $it_val).html(), itemdescription: $('#' + $itemdescription).html(), itemimage: $('#' + $itemimage).html()},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 if(res == null)
			 {
				
			 }
			 else
			 {
				 GetUserFavs();
			 }
			}
		});
		HideLoader();
}


function ShowMyReviews()
{
	ShowLoader();
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'ShowMyRatings', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html_val = "";
			 for(var i=0;i<res.length;i++)
			 {
				 var textid = "message" + i;
				 var rotiid = "roti_id" + i;
				 var itemimagerating = "itemimagerating" + i;
				 var itemreview = "itemreview" + i;
				 var reviewlabel = "reviewlabel" + i;
				 var iwritereview = "iwritereview" + i;
				 var isavereview = "isavereview" + i;
				 var icancelreview = "icancelreview" + i;
				 var firstChar = res[i]["ItemDesc"].substr(0, 1).toLowerCase();
				  html_val = html_val + "<div class='row' style='border: 1px solid; border-radius: 5px;'><div class='panel panel-primary' style='border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;'><div class='panel-heading'><span id=" + rotiid + ">" + res[i]["ItemDesc"] + "</span></div><div class='col-xs-6 pull-left panel-body' id=" + itemimagerating + "><img style='border-radius: 5px' class='img-responsive' src='" + res[i]["ItemImage"] + "'></img></div><div style='padding-top:3%;' class='col-xs-6 pull-right' id=" + itemreview + "><textarea style='height: 108px;width: 198px; margin: 0px; border-radius: 5px; display:none; font-size:10px;' cols='22' rows='5' id=" + textid + " name=" + textid + "></textarea><label id=" + reviewlabel + " style='height: 108px;width: 198px; margin: 0px; border-radius: 5px; font-size:10px;'>" + res[i]["Reviews"] + "</label><div title='Write a review' style='cursor: pointer;'><i id=" + iwritereview + " class='fa fa-pencil-square-o fa-fw w3-margin-right w3-text-theme' onclick='EnableReview(" + '"' + reviewlabel + '"' + "," + '"' + iwritereview + '"' + "," + '"' + textid + '"' + "," + '"' + isavereview + '"' + "," + '"' + icancelreview + '"' + ")" + "'" + "></i><i id=" + isavereview + " class='fa fa-save fa-fw w3-margin-right w3-text-theme' title='Save your review' style='display:none; cursor: pointer;' onclick='SaveReview(" + '"' + reviewlabel + '"' + "," + '"' + iwritereview + '"' + "," + '"' + textid + '"' + "," + '"' + isavereview + '"' + "," + '"' + res[i]["ItemDesc"] + '"' + "," + '"' + icancelreview + '"' + ")" + "'" + "></i><i id=" + icancelreview + " style='display:none; cursor: pointer;' title='Cancel Update' class='fa fa-times fa-fw w3-margin-right w3-text-theme' onclick='CancelUpdateReview(" + '"' + reviewlabel + '"' + "," + '"' + iwritereview + '"' + "," + '"' + textid + '"' + "," + '"' + isavereview + '"' + "," + '"' + icancelreview + '"' + ")" + "'" + "></i></div></div></div></div><br></br>";
			 }
			 $('#rowreview').html(html_val);
			 //GetUserReviews();
			}
		});
		HideLoader();
}

function EnableReview(label, ricon, txtarea, sicon, cicon)
{
	$('#' + txtarea).val($('#' + label).html());
	$('#' + label).hide();
	$('#' + ricon).hide();
	$('#' + txtarea).show();
	$('#' + sicon).show();
	$('#' + cicon).show();
}

function CancelUpdateReview($label, $ricon, $txtare, $sicon, $cicon)
{
	$('#' + $label).show();
	$('#' + $ricon).show();
	$('#' + $txtare).hide();
	$('#' + $sicon).hide();
	$('#' + $cicon).hide();
}

function SaveReview($label, $ricon, $txtare, $sicon, $itdesc, $cicon)
{
	ShowLoader();
	$('#' + $label).show();
	$('#' + $ricon).show();
	$('#' + $txtare).hide();
	$('#' + $sicon).hide();
	$('#' + $cicon).hide();
	$txtarea = $('#' + $txtare).val().replace("'","''");
	$.ajax({ url: 'api.php',
         data: {function2call: 'SaveReview', txtarea: $txtarea, itdesc: $itdesc, userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                      //var res = jQuery.parseJSON(output);
					  //window.location.href = "Home.php";
					  $showTxt = $('#' + $txtare).val();
					  $('#' + $label).show();
						$('#' + $ricon).show();
						$('#' + $txtare).hide();
						$('#' + $sicon).hide();
						$('#' + $label).html($showTxt);
		 },
		 error: function ( xhr, status, error) {
					alert('Problem updating the database');
			}
		});
		HideLoader();
}




function UserReviews($itdesc, $idvl)
{
	ShowLoader();
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
		HideLoader();
}


function GetUserReviews()
{
	//$clval = $idvl;
	//$idval = $('#' + $idvl).val();
	//fetch items' price from database and display
	ShowLoader();
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
		HideLoader();
}

function ChangeColor($id, $colr)
{
	$('#' + $id).css('color' , $colr);
}

function GetGeoPlaces()
{
	$zip_code = $('#area_zipcode').val();
	if($zip_code != "")
	{
		//$('#cartitemcontainer').show();
		ShowLoader();
		$.ajax({ url: 'api.php',
			 data: {function2call: 'GetGeoPlaces', zip_code: $zip_code},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
				 if(output.startsWith('<br'))
				 {
					 $('#cartitemcontainer').hide();
				 }
				 else if(output != "")
				 {
					 var res = jQuery.parseJSON(output);
					 var area_html = "";
					 if(res.data.length > 0)
					 {
						 for(i=0; i<res.data.length; i++)
						 {
							 if(i == 0)
							 {
								 area_html = area_html + "<option selected='true'>" + res.data[i]["office_name"] + "</option>";
								 //$('#areadesc').val(res.data[i]["office_name"]);
							 }
							 else
							 {
								 area_html = area_html + "<option>" + res.data[i]["office_name"] + "</option>";
							 }
						 }
						 $('#area_select').html(area_html);
						 $('#area_div_select').show();
					 }
				 }
				 //$('#cartitemcontainer').hide();
				 HideLoader();
				 $('#areadesc').focus();
				},
				error: function ( xhr, status, error) {
							//$('#cartitemcontainer').hide();
							HideLoader();
					}
				//
			});
	}
	else
	{
		//alert('Please enter a zip code');
		$('#area_zipcode').focus();
	}
}

function CallToAddCustAddress($action_val)
{
	//$('#cartitemcontainer').show();
	ShowLoader();
	$userid = $('#profile_userdiv').html();
	$addr1 = $('#addr1').val().replace("'","''");
	$addr2 = $('#addr2').val().replace("'","''");
	$city = $('#city').val();
	$state = $('#state').val();
	$country = $('#country').val();
	$zipcode = $('#area_zipcode').val();
	$areadesc = $('#areadesc').val().replace("'","''");;
	$address_nickname = $('#nickname').val().replace("'","''");
	$user_address_id = $('#user_addrid').html();
	
	StoreCustomerAddresses($userid, $addr1, $addr2, $city, $state, $country, $zipcode, $areadesc, $address_nickname, $action_val, $user_address_id);
	
	//$('#cartitemcontainer').hide();
	HideLoader();
}

function StoreCustomerAddresses($userid, $addr1, $addr2, $city, $state, $country, $zipcode, $areadesc, $address_nickname, $action_val, $user_address_id)
{
	ShowLoader();
	$.ajax({ url: 'api.php',
         data: {function2call: 'StoreCustomerAddresses', userid: $userid, addr1: $addr1, addr2: $addr2, city: $city, state: $state, country: $country, zipcode: $zipcode, areadesc: $areadesc, address_nickname: $address_nickname, action_val: $action_val, user_address_id: $user_address_id},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 //var res = jQuery.parseJSON(output);
			 $('#addr1').val('');
			 $('#addr2').val('');
			 $('#area_zipcode').val('');
			 $('#area_div_select').hide();
			 
			 $('#midcontainerdiv').css('width', '100%'); 
			 $('#show_user_addresses').show(); 
			 $('#new_address_container').hide(); 
			 $('#rowaddresses').show(); 
			 $('#add_division').show(); 
			 GetUserAddresses();
			}
		});
		HideLoader();
}

function PhoneNumberEdit()
{
	$('#edit_phone').show(); 
	$('#edit_phone').val($('#user_name').html());
	$('#update_ph_no').show();
	$('#cancel_update').show();
	$('#edit_ph_no').hide();
}

function PhoneNumberEditCancel()
{
	$('#edit_phone').hide(); 
	//$('#edit_phone').val($('#user_name').html());
	$('#update_ph_no').hide();
	$('#cancel_update').hide();
	$('#edit_ph_no').show();
}

function PhoneNumberUpdate()
{
	$phone_number = $('#edit_phone').val();
	$userid = $('#profile_userdiv').html();
	if($phone_number == "")
	{
		alert('Please enter a phone number');
	}
	else if($('#edit_phone').val().length < 10 || $('#edit_phone').val().length > 10)
	{
		alert('The phone number is not valid');
	}
	else
	{
		$.ajax({ url: 'api.php',
			 data: {function2call: 'PhoneNumberUpdate', phone_number: $phone_number, userid: $userid},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
				 //var res = jQuery.parseJSON(output);
					$('#user_name').html($('#edit_phone').val());
					$('#edit_phone').hide(); 
				//$('#edit_phone').val($('#user_name').html());
					$('#update_ph_no').hide();
					$('#cancel_update').hide();
					$('#edit_ph_no').show();
				}
			});
	}
}



function EmailIdEdit()
{
	$('#edit_email').show(); 
	$('#edit_email').val($('#div_hidden_emailid').html());
	$('#update_email_id').show();
	$('#cancel_update_email_id').show();
	$('#edit_email_id').hide();
}

function EmailIdEditCancel()
{
	$('#edit_email').hide(); 
	//$('#edit_phone').val($('#user_name').html());
	$('#update_email_id').hide();
	$('#cancel_update_email_id').hide();
	$('#edit_email_id').show();
}


function EmailIdUpdate()
{
	ShowProfileLoadingLoader();
	$email_id = $('#edit_email').val();
	$userid = $('#profile_userdiv').html();
	$emailid = $email_id;
	if($email_id == "")
	{
		HideProfileLoadingLoader();
		ShowProfileLoader();
		var onclickmethods = "HideProfileLoader();$('#edit_email').focus();";
		var html = "<div>Please enter an email id</div><br></br><div><input type='button' id='pr_div_close' value='Ok' onclick=" + onclickmethods + "></input></div>";
		$('#profile_msg').html(html);
	}
	else
	{
		$.ajax({ url: 'api.php',
			 data: {function2call: 'CheckIfEmailExists', emailid: $emailid},
			 type: 'post',
			 //dataType: 'json',
			 success: function(output) {
					var res = jQuery.parseJSON(output);
					  if(res[0]["COUNT(*)"] > 0)
					  {
							ShowProfileLoader();
							var onclickmethods = "HideProfileLoader();$('#edit_email').val('');$('#edit_email').focus();";
							var html = "<div>This email id is associated with a different account.</div><br></br><div><input type='button' id='pr_div_close' value='Ok' onclick=" + onclickmethods + "></input></div>";
							$('#profile_msg').html(html);
					  }
					  else
					  {
						  ShowProfileLoadingLoader();
						  $.ajax({ url: 'api.php',
						 data: {function2call: 'EmailIdUpdate', email_id: $email_id, userid: $userid},
						 type: 'post',
						 //dataType: 'json',
						 success: function(output) {
							 //var res = jQuery.parseJSON(output);
								$('#div_hidden_emailid').html($('#edit_email').val());
								//$('#user_email').html($('#edit_email').val());
								if ($('#edit_email').val().length > 21)
								{
									$('#user_email').html($('#edit_email').val().substr(0, 21) + "...");
								}
								else
								{
									$('#user_email').html($('#edit_email').val());
								}
								$('#edit_email').hide(); 
							//$('#edit_phone').val($('#user_name').html());
								$('#update_email_id').hide();
								$('#cancel_update_email_id').hide();
								$('#edit_email_id').show();
								//$('#div_hidden_emailid').html();
								$full_email_id = $('#div_hidden_emailid').html();
								if ($('#user_email').html().length > 21)
								{
									$('#user_email').prop('title', $full_email_id);
								}
								else
								{
									$('#user_email').prop('title', "");
								}
							}
						});
						HideProfileLoadingLoader();
					  }
				}
			});
	}
}


function GetUserAddresses()
{
	ShowLoader();
	//fetch user addresses
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetUserAddresses', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html="";
			 for(var i=0;i<res.length;i++)
			 {
				 var edit_address = "edit_address" + i;
				 var delete_addr = "delete_addr" + i;
				 //create the html dynamically
				 var full_address = res[i]["Address1"] + " " + res[i]["Address2"] + " " + res[i]["City"] + " " + res[i]["State"] + " " + res[i]["Country"] + " " + res[i]["ZipCode"] + " " + res[i]["Area"];
				 html = html + "<div class='row'><div class='col-lg-2'>" + res[i]["AddressName"] + "</div><div class='col-lg-8'>" + full_address + "</div><div onmouseover='ChangeColor(" + '"' + edit_address + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + edit_address + '"' + ");' onmouseout='ChangeColor(" + '"' + edit_address + '"' + ", " + '"black"' + "); DestroyBoxShadow(" + '"' + edit_address + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Edit address' onclick='EditUserAddress(" + '"' + res[i]["AddressId"] + '"' + ")" + "'" + "><i class='fa fa-pencil-square-o' id=" + edit_address + "></i></div><div onmouseover='ChangeColor(" + '"' + delete_addr + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + delete_addr + '"' + ");' onmouseout='ChangeColor(" + '"' + delete_addr + '"' + ", " + '"black"' + "); DestroyBoxShadow(" + '"' + delete_addr + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Delete address' onclick='DeleteUserAddress(" + '"' + res[i]["AddressId"] + '"' + ")" + "'" + "><i class='fa fa-trash' id=" + delete_addr + "></i></div></div><br></br>";
			 }
			 $('#user_row_addresses').html(html);
			}
		});
		HideLoader();
}

function CreateBoxShadow($id)
{
	$('#' + $id).css('text-shadow', '4px 4px 6px #777');
}

function DestroyBoxShadow($id)
{
	$('#' + $id).css('text-shadow', '0px 0px 0px #ffffff');
}

//graph creation

function DeleteUserAddress($addressid)
{
	//$('#cartitemcontainer').show();
	ShowLoader();
	$.ajax({ url: 'api.php',
         data: {function2call: 'DeleteUserAddress', addressid: $addressid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 //var res = jQuery.parseJSON(output);
			 GetUserAddresses();
			 $('#cartitemcontainer').hide();
			}
		});
		HideLoader();
}


function EditUserAddress($addressid)
{
	ShowLoader();
	//$('#cartitemcontainer').show();
	$.ajax({ url: 'api.php',
         data: {function2call: 'EditUserAddress', addressid: $addressid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 $('#new_address_container').show(); 
			 $('#midcontainerdiv').css('width', '60%'); 
			 $('#show_user_addresses').hide(); 
			 $('#rowaddresses').hide(); 
			 $('#add_division').hide();
			 
			 $('#addr1').val(res[0]["Address1"]);
			 $('#addr2').val(res[0]["Address2"]);
			 $('#area_zipcode').val(res[0]["ZipCode"]);
			 $('#areadesc').val(res[0]["Area"]);
			 $('#area_div_select').show();
			 $('#nickname').val(res[0]["AddressName"]);
			 $('#toggleval').html('1');
			 $('#user_addrid').html($addressid);
			}
		});
		HideLoader();
}

function EraseAllFields()
{
	 $('#addr1').val('');
	 $('#addr2').val('');
	 $('#area_zipcode').val('');
	 $('#areadesc').val('');
	 $('#nickname').val('');
}

function AddressCancelClick()
{
	$('#midcontainerdiv').css('width', '100%'); 
	$('#show_user_addresses').show(); 
	$('#new_address_container').hide(); 
	$('#rowaddresses').show(); 
	$('#add_division').show(); 
	GetUserAddresses(); 
	$('#area_div_select').hide(); 
	EraseAllFields();
}

function AddressAddClick()
{
	ShowLoader();
	$('#new_address_container').show(); 
	$('#midcontainerdiv').css('width', '60%'); 
	$('#show_user_addresses').hide(); 
	$('#rowaddresses').hide(); 
	$('#add_division').hide();
	$('#toggleval').html('0');
	$('#user_addrid').html('');
	HideLoader();
}

function AddressSaveClick()
{
	ShowLoader();
	//StoreCustomerAddresses();
	$action_val = $('#toggleval').html();
	CallToAddCustAddress($action_val)
	$('#midcontainerdiv').css('width', '100%'); 
	$('#show_user_addresses').show(); 
	$('#new_address_container').hide(); 
	$('#rowaddresses').show(); 
	$('#add_division').show(); 
	GetUserAddresses(); 
	$('#area_div_select').hide(); 
	EraseAllFields();
	HideLoader();
}

function order_search_box_show()
{
	$('#order_search_box').show();
}

function order_search_box_hide()
{
	$('#order_search_box').hide();
}

setInterval(function() {
    GetDealsInformation();
	//GetUserFavs();
}, 60 * 1000);

function GetDealsInformation()
{
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetDealsInformation'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 for(var i = 0; i < res.length; i++)
			 {
				 if(res[i]["DealStatus"] == "Upcoming")
				 {
					 $('#upcoming_deal').html(res[i]["DealStatus"]);
					 $('#upcoming_deal_img').attr('src', res[i]["ItemImage"]);
					 $('#upcoming_deal_item_name').html(res[i]["ItemDesc"]);
					 $('#upcoming_deal_time').html(res[i]["DealTime"]);
				 }
				 else if(res[i]["DealStatus"] == "Ongoing")
				 {
					 $('#ongoing_deal').html(res[i]["DealStatus"]);
					 $('#ongoing_deal_img').attr('src', res[i]["ItemImage"]);
					 $('#ongoing_deal_item_name').html(res[i]["ItemDesc"]);
					 $('#ongoing_deal_time').html(res[i]["DealTime"]);
					 $('#ongoing_deal_itemId').html(res[i]["Deal_ItemId"]);
					 $('#ongoing_deal_description').html(res[i]["Deal_Item_Description"] + " Rs. " + res[i]["Deal_Item_Price"] + " instead of Rs. " + res[i]["ItemValue"]);
				 }
			 }
			 
			}
		});
}

function ContactCustomerService($orderid)
{	
	$('#contact_loader_div').css('height', $('#main_container_middle').outerHeight());
	
	$('#contact_loader_div').css('left', $('#main_container_middle').position().left);
	
	$('#contact_loader_div').show('explode', 500);
	
	//$("#contact_loader_div").show('slide', 1000);
	
	$('#contact_msg').html("<div>To get updates for your Order No: <strong>" + $orderid + "</strong> please contact our Customer Care @ 9836667269</div><div style='padding-top: 40px;'><input type='button' value='OK' onclick='HideContactDiv()';></input></div>");
}

function HideContactDiv()
{
	$('#contact_loader_div').hide('slide', 500);
}


function TrackOrder($order_id)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomersRecentOrders', userid: $userid, order_id: $order_id},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 
				$('#contact_loader_div').css('height', $('#main_container_middle').height());
	
				$('#contact_loader_div').css('left', $('#main_container_middle').position().left);
				
				$('#contact_loader_div').show('fold', 500);
				
				$('#contact_msg_btn').show();
				
				$('#div_contact_img').show();
				
				//$("#contact_loader_div").show('slide', 1000);
				
				$('#contact_msg').html("<div class='col-lg-12'>Your Order No: <strong>" + $order_id + "</strong> is <strong>" + res[0]["CustomerOrderStatus"] + "</strong></div>");
				$('#contact_order_status_img').attr('src', res[0]["Customer_Order_Status_Image"]);
	
			}
		});
}

function HideTrackOrderDiv()
{
	$('#contact_loader_div').hide('clip', 500);
	$('#contact_msg_btn').hide();
	$('#div_contact_img').hide();
}


function GetCustomersAllOrders()
{
	//ShowLoader();
	var styleColor = "";
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomersOrders', userid: $userid},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 var html = "";
			 var hLine = "";
			 var hlastLine = "";
			 var custOrderDate = "";
			 var interests_html = "";
			 $ordid = "";
			 
			 html = html + "<div class='col-lg-12' style='height: 80px; width: 100%;'><h3 style='text-shadow: 3px 3px 2px #423636;'>My Orders</h3><span class='pull-right' style='position: relative;margin-right: -10px; margin-top: -35px;'><i class='fa fa-window-close' id='close_all_orders' style='cursor: pointer; text-shadow: 3px 3px 2px #423636;' onclick='CloseAllOrders()'></i></span><hr class='w3-clear' style='border-top: 1px solid #464242;margin-left: -25px;margin-right: -25px;'></div>";
			 
			 html = html + "<div class='row' style='text-shadow: 1px 1px 2px #423636;'><div class='col-lg-2'>Order Date</div><div class='col-lg-2'>Order Id</div><div class='col-lg-2'>Item</div><div class='col-lg-2'>Quantity</div><div class='col-lg-2' style='text-align: left;'>Item Value</div><div class='col-lg-2' style='text-align: center;'>Actions</div></div>";
				 
			html = html + "<hr class='w3-clear' style='border-top: 1px solid #464242;'>";
			
			var actionshtml = "";
			var actionsdwnhtml = "";
			
			var max_order_show = "";
			
			/*if(res.length >= 6)
			{
				max_order_show = 5;][pou]
			}
			else
			{
				max_order_show = res.length;
			}*/
			
			max_order_show = res.length;
			 
			 for(var i=0;i<max_order_show;i++)
			 {
				 var reorder = "reorderx" + i;
				 var invoice = "invoicex" + i;
				 
				 
				 if(custOrderDate != "")
				 {
					 if(custOrderDate  != res[i]["CustomerOrderDate"])
					 {
						hLine = "<hr class='w3-clear' style='border-top: 1px solid #337ab7; margin-right: 15px; margin-left: 15px;'>";
					 }
					 else
					 {
						 hLine = "";
					 }
				 }
				 if(i ==  max_order_show - 1)
				 {
					 hlastLine = "<hr class='w3-clear' style='border-top: 1px dotted #337ab7;'>";
				 }
				 if(res[i]["Delivered"] == "Y")
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#160bad"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Reorder' onclick='Reorder(" + '"' + res[i]["OrderId"] + '"' + ")" + "'" + "><i class='fa fa-send' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#160bad"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Download Invoice' onclick='DownloadInvoice(" + '"' + res[i]["Id"] + '"' + ")" + "'" + "><i class='fa fa-download' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#160bad'";
				 }
				 else
				 {
					 actionshtml = "<div onmouseover='ChangeColor(" + '"' + reorder + '"' + ", " + '"red"' + "); CreateBoxShadow(" + '"' + reorder + '"' + ");' onmouseout='ChangeColor(" + '"' + reorder + '"' + ", " + '"#b10a2f"' + "); DestroyBoxShadow(" + '"' + reorder + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Track your order' onclick='Track_Order(" + '"' + res[i]["OrderId"] + '"' + ",event)" + "'" + "><i class='fa fa-map-marker' id=" + reorder + "></i></div>";
					 
					 actionsdwnhtml = "<div onmouseover='ChangeColor(" + '"' + invoice + '"' + ", " + '"blue"' + "); CreateBoxShadow(" + '"' + invoice + '"' + ");' onmouseout='ChangeColor(" + '"' + invoice + '"' + ", " + '"#b10a2f"' + "); DestroyBoxShadow(" + '"' + invoice + '"' + ");' class='col-lg-1' style='cursor: pointer;' title='Contact Customer Service' onclick='Contact_CustomerService(" + '"' + res[i]["OrderId"] + '"' + ",event)" + "'" + "><i class='fa fa-phone' id=" + invoice + "></i></div>";
					 
					 styleColor = "style='color:#b10a2f'";
				 }
					 
				 //create the html dynamically
				 
				 html = html + "<div class='row'" + styleColor + ">" + hLine + "<div style='display:none;'>" + res[i]["Id"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderDate"] + "</div><div class='col-lg-2'>" + res[i]["OrderId"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemDesc"] + "</div><div class='col-lg-2'>" + res[i]["CustomerItemQty"] + "</div><div class='col-lg-2'>" + res[i]["CustomerOrderValue"] + "</div>" + actionshtml + actionsdwnhtml + "</div><div style='height: 15px'>" + hlastLine + "</div>";
				 
				 custOrderDate = res[i]["CustomerOrderDate"];
				 
			 }
			 
			 //html = html + "<hr class='w3-clear' style='border-top: 1px solid #337ab7;'>";
			 
			 $('#cartitemsdiv').html(html);
			 //$('#recentorders').html(interests_html);
			}
		})
		//HideLoader();
}


function ShowAllCustomerOrders()
{
	GetCustomersAllOrders();
	$('#cartitemcontainer').show('fold', 500);
}

function CloseAllOrders()
{
	$('#cartitemcontainer').hide('clip', 500);
}

function Contact_CustomerService($orderid, e)
{
	$('#order_contact_care').css({'top':e.pageY-50,'left':e.pageX - 200, 'position':'absolute', 'border':'1px solid black', 'padding':'5px', 'z-index': '96', 'background-color': 'rgba(146, 150, 154, 0.87)', 'width': '255px', 'box-shadow':'4px 2px 0px rgba(35, 32, 32, 0.68)', 'height': '115px', 'display':'block'});
    
	$('#order_contact_care_span').html("<div>To get updates for your Order No: <strong>" + $orderid + "</strong> please contact our Customer Care @ 9836667269</div>");
	
	$('#order_contact_care').show();
}

function Track_Order($order_id, e)
{
	$userid = $('#profile_userdiv').html();
	$.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomersRecentOrders', userid: $userid, order_id: $order_id},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 var res = jQuery.parseJSON(output);
			 	
				$('#order_status_box').show();
				//$('#order_status_box_span').show();
				
				//$("#contact_loader_div").show('slide', 1000);
				$('#order_status_box').css({'top':e.pageY-50,'left':e.pageX - 100, 'position':'absolute', 'border':'1px solid black', 'padding':'5px', 'z-index': '95', 'background-color': 'rgba(146, 150, 154, 0.87)', 'width': '255px', 'box-shadow':'4px 2px 0px rgba(35, 32, 32, 0.68)'});
    
				$('#order_status_box_span').html("<div class='col-lg-12'>Your Order No: <strong>" + $order_id + "</strong> is <strong>" + res[0]["CustomerOrderStatus"] + "</strong></div>");
				//$('#contact_order_status_img').attr('src', res[0]["Customer_Order_Status_Image"]);
	
			}
		});
}

$(document).click(function() {
    //$('#order_status_box').hide();
	//$('#order_contact_care').hide();
});

/*$('#close_all_orders').on('click', function() {
   $('#cartitemcontainer').hide('slide', 500);
});*/
</script>

<div class='overlay' style="display:none; background: rgba(8, 8, 8, 0.92);" id="cartitemcontainer">
	<div id="cartitemsdiv" style="width: 80%;/* height: auto; */color: beige;/* position: absolute; */padding: 10px;margin-top: 5%;margin-left: 10%;background-color: darkgray;/* height: 500px; */max-height: 500px;overflow-x: hidden;box-shadow: 3px 4px 4px 1px #3e3939;border-radius: 5px;"></div>
</div>

<div class="box_status" id="order_status_box" style="display: none;">
  <span id="order_status_box_span"></span>
  <div style="cursor: pointer; text-align:center; margin-top:60px;"><i  style="color: rgba(243, 8, 8, 0.72); text-shadow: 1px 1px 0px #3a3030;" title="Close" class='fa fa-window-close' id='close_track_window' onclick="$('#order_status_box').hide();"></i></div>
</div>

<div class="box_status" id="order_contact_care" style="display: none;">
  <span id="order_contact_care_span"></span>  
  <div style="cursor: pointer; text-align:center; margin-top:20px;"><i style="color: rgba(243, 8, 8, 0.72); text-shadow: 1px 1px 0px #3a3030;" title="Close" class='fa fa-window-close' id='close_contact_window' onclick="$('#order_contact_care').hide();"></i></div>
</div>

</body>
</html> 
