<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier / Cargo Tracking Script in PHP - Ver 0.97</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">


</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">
	
<table border="0" cellpadding="0" cellspacing="0" width="900">
<tbody><tr>
<td><img src="images/trheader.jpg" height="109" width="900"></td>
</tr>
<tr>
<td bgcolor="#FFCC00">&nbsp;</td>
</tr>
</tbody></table>
	</td>
  </tr>
  
  <tr>
    <td bgcolor="#FFFFFF"><table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
      <tbody><tr>
        <td class="Partext1">&nbsp;</td>
      </tr>
      
      <tr>
        <td class="Partext1"><div align="center">
          <table cellpadding="4" cellspacing="0" align="center" width="70%">
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
</script>
            
              <tbody><tr>
                <td class="TrackTitle" valign="top"><div class="newtext" align="center"><strong> Track and Trace your Cargo/Courier <br>
                        </strong></div></td>
              </tr>
              <tr>
                <td class="bottom" valign="middle">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="aalpha" valign="top"><div align="center">Enter the Consignment no </div></td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top"><div align="center">
            <form action="track-result.php" method="post" name="form" id="form" >
			      <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text"> 
                  <input name="Submit" type="submit" class="gentxt" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track now">
            </form>
			      <span class="gentxt">Ex: IXM53533553 </span> </div></td>
                </tr>
              <tr bgcolor="EFEFEF">
                <td valign="top">&nbsp;</td>
              </tr>
              <tr bgcolor="EFEFEF">
                <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
              </tr>
            
          </tbody></table>
        </div></td>
        </tr>
      <tr>
        <td class="Partext1">&nbsp;</td>
        </tr>
      
      
      <tr>
        <td>&nbsp;</td>
        </tr>
    </tbody></table>      </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>


</body></html>