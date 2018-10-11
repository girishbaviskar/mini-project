<?php
session_start();
require_once('library.php');
require_once('database.php');
//isUser();

$sql = "SELECT cid, cons_no, ship_name, rev_name, pick_date, pick_time, status
		FROM tbl_courier
		WHERE status != 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($dbConn,$sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier / Cargo Tracking Script in PHP - Ver 0.97</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include("header.php");

?>



 
  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="6%"><div align="center">Edit</div></td>
      <td class="newtext" bgcolor="#EDEDED" width="10%">Consignment No </td>
      <td class="newtext" bgcolor="#EDEDED" width="7%">Shipper</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Receiver</td>
      <td class="newtext" bgcolor="#EDEDED" width="11%">Pickup Date/Time</td>
      <td class="newtext" bgcolor="#EDEDED" width="9%">Status</td>
    </tr>
	<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF">
	
      <td class="gentxt" align="center">
	  <a href="edit-courier.php?cid=<?php echo $cid; ?>">
	  <img src="images/edit_icon.gif" border="0" height="20" width="20"></a>
	  </td>
      <td class="gentxt"><?php echo $cons_no; ?></td>
      <td class="gentxt"><?php echo $ship_name; ?></td>
      <td class="gentxt"><?php echo $rev_name; ?></td>
      <td class="gentxt"><?php echo $pick_date; ?> - <?php echo $pick_time; ?></td>
      <td class="gentxt"><?php echo $status; ?></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>
	
    </td>
  </tr>
  	
 <!-- 
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"> <br>
        <br>
        <table bgcolor="#ECECEC" border="0" cellpadding="2" cellspacing="2" align="center" width="50%">
        <tbody><tr>
          <td class="Partext1" bgcolor="#EEEEEE"><div align="left"><strong>Courier Management System </strong></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="add-courier.php" class="REDLink">Add Shipment</a></div></td>
        </tr>
                <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="courier-list.php" class="REDLink">List Shipment</a></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="report.php" class="REDLink">Report</a></div></td>
        </tr>
        <tr>
          <td class="newtext" bgcolor="#FFFFFF"><div align="left"><img src="images/arrow_white.gif" border="0" height="8" width="7">&nbsp;<a href="process.php?action=logOut" class="REDLink">Logout</a></div></td>
        </tr>
      </tbody></table>
            <br>
          <br>
          <br>      
          <br>
    </div></td>
  </tr>
  -->
  
  
  
  <tr>
    <td>
	<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">
	</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>