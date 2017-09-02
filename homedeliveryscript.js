function EditOrderDetails($orderid, $delstatus, $custorderval, $orderval, $itemdesc, $custaddress, $itemqty)
{
	$("#orderdetailsdiv").show();
	$("#closediv").show();
	$('#itemqtytext').val($itemqty);
	$('#itemdescriptiontd').html($itemdesc);
	$('#itemcosttext').html($orderval);
	$('#itemidtext').html($orderid);
	$('#totalitemcosttext').html($custorderval);
	$('#itemdeladdress').val($custaddress);
	$notdelivered = 'N';
	if($delstatus == "C")
	{
		$('#btnUpdate').hide();
		//$('#tdcancel').html('<td id="tdcancel"><button class="button button2" id="btnCancel" onclick="UpdateCustomerOrderDetails(' + "'" + $notdelivered + "'" + ')">Reactivate Order</button></td>');
		$('#btnCancel').hide();
		$('#btnReactivate').show();
	}
	$("html, body").animate({ scrollTop: $(document).height() }, 1000);
}

$(function() {
    $('#search').autocomplete({
        source: 'searchItems.php'
    });
	//changing the autocomplete box's font size
	$('ul.ui-autocomplete.ui-menu').css('fontSize', '14px');
});

function CloseDiv()
{
	$("#orderdetailsdiv").hide();
	$("#closediv").hide();
}

function CalculateTotalCost()
{
	$noofitems = $('#itemqtytext').val();
	$costperitem = $('#itemcosttext').html();
	$totalcostofitems = $noofitems * $costperitem;
	$('#totalitemcosttext').html($totalcostofitems);
	
}


function CalculateDate()
{
	var m_names = new Array("Jan", "Feb", "Mar", 
	"Apr", "May", "Jun", "Jul", "Aug", "Sep", 
	"Oct", "Nov", "Dec");

	var d = new Date();
	var curr_date = d.getDate();
	var curr_month = d.getMonth();
	var curr_year = d.getFullYear();
	//document.write(curr_date + "-" + m_names[curr_month] 
	//+ "-" + curr_year);
	var todays_date = curr_date + "-" + m_names[curr_month] + "-" + curr_year;
	return todays_date;
}

function parseDate(s) {
  var months = {Jan:0,Feb:1,Mar:2,Apr:3,May:4,Jun:5,
                Jul:6,Aug:7,Sep:8,Oct:9,Nov:10,Dec:11};
  var p = s.split('-');
  
  return new Date(p[0] + "-" + p[1] + "-" + p[2]);
}

function UpdateCustomerOrderDetails($deliverystatus)
{
	$.ajax
			({ url: 'api.php',
         data: {function2call: 'UpdateCustomerOrderDetails', orderid: $('#itemidtext').html(), custorderval: $('#totalitemcosttext').html(), custaddress: $('#itemdeladdress').val(), itemqty: $('#itemqtytext').val(), deliverystatus: $deliverystatus},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
                     //alert('Data updated successfully');
					 $("#successdiv").show();
					 $("#orderdetailsdiv").hide();
					 $hidval = $('#hiddenval').val();
					 if($hidval == '2')
					 {
						GetCustomerDetails();
					 }
					 else if($hidval =='1')
					 {
						 GetCustomerItemDetails();
					 }
					 $('#btnUpdate').show();
					 $('#btnCancel').show();
					 $('#btnReactivate').hide();
					 $("#closediv").hide();
					 setTimeout(function(){ $('#successdiv').fadeOut() }, 2000);
				},
				
		error: function ( xhr, status, error) {
					//console.log( " xhr.responseText: " + xhr.responseText + " //status: " + status + " //Error: "+error );
					$("#errordiv").show();
					setTimeout(function(){ $('#errordiv').fadeOut() }, 2000);

    }
			});
}


//$('#content').click(function() {
function GetCustomerDetails()
{
    $.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomerDetails', custId: 'ABCD1234'},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
					  $('#customerorderdetails').html('');
                      var res = jQuery.parseJSON(output);
					  $('#customerName').html(res[0]["CustomerName"]);
					  $('#customeraddress').html(res[0]["CustomerAddress"]);
					  $('#customerphone').html(res[0]["CustomerPhone"]);
					  $('#customeremail').html(res[0]["CustomerEmail"]);
					  $('#customerid').html(res[0]["CustomerUserId"]);
					  $('#customeractive').html(res[0]["Active"]);
					  $('#customerelite').html(res[0]["EliteCustomer"]);
					  $('#customerspent').html('Rs. ' + res[0]["Spent"]);
					  
					  $divHtml = "<table class='vitamins' style='width:100%; margin-top: 2px;'><tr><td>Order Number</td><td>Order Date</td><td>Item</td><td>Order Value</td><td>Quantity</td><td>Order Address</td><td></td></tr>";
					  
					  $divOrderDetails = "";
					  
					  for ($i=0; $i<res.length; $i++)
					  {
						  if(res[$i]["Delivered"] == "C")
						  {
							$divOrderDetails = $divOrderDetails + "<tr style='color: red;'><td>" + res[$i]["OrderId"] + "</td>";
						  }
						  else if(res[$i]["Delivered"] == "N")
						  {
							$divOrderDetails = $divOrderDetails + "<tr style='color: yellow;'><td>" + res[$i]["OrderId"] + "</td>";
						  }
						  else
						  {
							  $divOrderDetails = $divOrderDetails + "<tr style='color: lawngreen;'><td>" + res[$i]["OrderId"] + "</td>";
						  }
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerOrderDate"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["ItemDescription"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerOrderValue"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerItemQty"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerOrderAddress"] + "</td>";
						  $editparam = "'" + res[$i]["Id"] + "'" + "," + "'" + res[$i]["Delivered"] + "'" + "," + "'" + res[$i]["CustomerOrderValue"] + "'" + "," + "'" + res[$i]["ItemValue"] + "'" + "," + "'" + res[$i]["ItemDescription"] + "'" + "," + "'" + res[$i]["CustomerOrderAddress"] + "'" + "," + "'" + res[$i]["CustomerItemQty"] + "'";
						  //alert($editparam);
						  var todays_date = CalculateDate();
						  var order_date = moment(parseDate(res[$i]["CustomerOrderDate"])).format('DD-MMM-YYYY');
						  
						  if(todays_date > order_date)
						  {
							  $divOrderDetails = $divOrderDetails + "<td></td></tr>"
						  }
						  else
						  {
							  if(res[$i]["Delivered"] == "N")
							  {
								  $divOrderDetails = $divOrderDetails + '<td><a href="#" onclick="EditOrderDetails(' + $editparam + ')" style="color: yellow; text-decoration: none"> Edit </a></td></tr>';
							  }
							  else if(res[$i]["Delivered"] == "C")
							  {
								  $divOrderDetails = $divOrderDetails + '<td><a href="#" onclick="EditOrderDetails(' + $editparam + ')" style="color: red; text-decoration: none"> Edit </a></td></tr>';
							  }
							  else
							  {
								  $divOrderDetails = $divOrderDetails + "<td></td></tr>";
							  }
						  }
					  }
					  
					  $('#customerorderdetails').html($divHtml + $divOrderDetails);
					  $('#hiddenval').val('2');
					  $('#search').val('');
					  
			}
		});
}






function GetCustomerItemDetails()
{
    $.ajax({ url: 'api.php',
         data: {function2call: 'GetCustomerItemDetails', custId: 'ABCD1234', itdesc: $('#search').val()},
         type: 'post',
		 //dataType: 'json',
         success: function(output) {
			 
					  $('#customerorderdetails').html('');
                      var res = jQuery.parseJSON(output);
					  
					  $divHtml = "<table class='vitamins' style='width:100%; margin-top: 2px;'><tr><td>Order Number</td><td>Order Date</td><td>Item</td><td>Order Value</td><td>Quantity</td><td>Order Address</td><td></td></tr>";
					  
					  $divOrderDetails = "";
					  
					  for ($i=0; $i<res.length; $i++)
					  {
						  if(res[$i]["Delivered"] == "C")
						  {
							$divOrderDetails = $divOrderDetails + "<tr style='color: red;'><td>" + res[$i]["OrderId"] + "</td>";
						  }
						  else if(res[$i]["Delivered"] == "N")
						  {
							$divOrderDetails = $divOrderDetails + "<tr style='color: yellow;'><td>" + res[$i]["OrderId"] + "</td>";
						  }
						  else
						  {
							  $divOrderDetails = $divOrderDetails + "<tr style='color: lawngreen;'><td>" + res[$i]["OrderId"] + "</td>";
						  }
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerOrderDate"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["ItemDescription"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerOrderValue"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerItemQty"] + "</td>";
						  $divOrderDetails = $divOrderDetails + "<td>" + res[$i]["CustomerOrderAddress"] + "</td>";
						  $editparam = "'" + res[$i]["Id"] + "'" + "," + "'" + res[$i]["Delivered"] + "'" + "," + "'" + res[$i]["CustomerOrderValue"] + "'" + "," + "'" + res[$i]["ItemValue"] + "'" + "," + "'" + res[$i]["ItemDescription"] + "'" + "," + "'" + res[$i]["CustomerOrderAddress"] + "'" + "," + "'" + res[$i]["CustomerItemQty"] + "'";
						  //alert($editparam);
						  var todays_date = CalculateDate();
						  var order_date = moment(parseDate(res[$i]["CustomerOrderDate"])).format('DD-MMM-YYYY');
						  
						  if(todays_date > order_date)
						  {
							  $divOrderDetails = $divOrderDetails + "<td></td></tr>"
						  }
						  else
						  {
							  if(res[$i]["Delivered"] == "N")
							  {
								  $divOrderDetails = $divOrderDetails + '<td><a href="#" onclick="EditOrderDetails(' + $editparam + ')" style="color: yellow; text-decoration: none"> Edit </a></td></tr>';
							  }
							  else if(res[$i]["Delivered"] == "C")
							  {
								  $divOrderDetails = $divOrderDetails + '<td><a href="#" onclick="EditOrderDetails(' + $editparam + ')" style="color: red; text-decoration: none"> Edit </a></td></tr>';
							  }
							  else
							  {
								  $divOrderDetails = $divOrderDetails + "<td></td></tr>";
							  }
						  }
					  }
					  
					  $('#customerorderdetails').html($divHtml + $divOrderDetails);
					  $('#hiddenval').val('1');
			}
		});
}