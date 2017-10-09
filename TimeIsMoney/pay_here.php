<?php 
	//Set Account Values
	$x_login = "WSP-TIME-mSPdogALWw";//Payment Page ID
	$transaction_key = "1Y6BZmwAG9mKlVzYjxb6";//Transaction Key
	$x_currency_code = "USD";//Currency Code, set to terminal default (usually USD)
	$x_fp_timestamp = time();
	srand(time());
	$x_fp_sequence = rand(1000, 100000) + 123456;

//Generate Hash
function createHash($x_amount,$x_login,$transaction_key,$x_currency_code) 
{
	global $transaction_key, $x_fp_timestamp, $x_login, $x_fp_sequence, $x_amount,$x_currency_code;
	$hmac_data = $x_login . "^" . $x_fp_sequence . "^" . $x_fp_timestamp . "^" . $x_amount . "^" . $x_currency_code;
	$x_fp_hash = hash_hmac('md5', $hmac_data, $transaction_key);
	return $x_fp_hash;
} ?>

<html>
<head><title>Pay Here</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #333;
}
body,td,th {
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
}
.header {
	font-family: Arial Black, Gadget, sans-serif;
	font-size: 36px;
	color: #000;
}
.amount {
	color: #000;
}
.amount {
	color: #FFF;
}
</style>
</head>

<!--Submit the form-->
<script type="text/javascript">
function forward()
{
	var identifier = '<?php echo $_REQUEST["identifier"]; ?>';
	if(identifier)
	{
	//Comment if using a Demo account
	document.redirectForm.action="https://checkout.globalgatewaye4.firstdata.com/payment";
	//Uncomment if using a Demo account
	//document.redirectForm.action="https://demo.globalgatewaye4.firstdata.com/payment";
	document.redirectForm.submit();
	}
}
</script>

<BODY onLoad="forward()">
	<p>
	  <?php if ($_REQUEST["identifier"]== NULL ) { ?>
	  
</p>
	<div align="center">
	  <table width="1002" border="0">
	    <tr>
	      <td width="317" height="147">&nbsp;</td>
	      <td width="1002"><div align="center"><img src="images/SiteHeader.jpg" alt="" width="1000" height="127"></div></td>
	      <td width="305">&nbsp;</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td><p class="header">Payment Form</p></td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td><p>Enter the amount of your ticket prices into the box below and you will immediately be taken to the secure area for card processing.</p>
	        <p><br />
          </p></td>
	      <td>&nbsp;</td>
        </tr>
  </table>
</div>
	<FORM action="<?php echo $_SERVER['file:///C|/Users/arthur.poston/Downloads/REQUEST_URI']; ?>" method="post" name="mainform">
	<div align="center"><span class="amount"><span class="amount">Enter Dollar Amount</span>:
</span>
	  <INPUT name="x_amount"/>
		  <INPUT type=submit value="Submit Your Payment">
		  <input type="hidden" name="identifier" value="true" />
	  </div>
</FORM>

	<div align="center">
	  <?php } else {?>
</div>
	<FORM method="post" id="redirectForm" name="redirectForm">

	  <div align="center">
	    <?php
		//Pull the properties from the form above here. Use the x_amount field as an example.
		$x_amount = $_REQUEST["x_amount"];
	?>
	    <!--Build the Form
			Uncomment the line below if you are using a Demo account-->
	    <!--<input type="hidden" name="x_test_request" value="TRUE" />-->
	    
	    <!--Required Fields. Do not change any of this code-->
	    <input type="hidden" name="x_currency_code" value="<?php echo $x_currency_code ?>" />
	    <input type="hidden" name="x_fp_sequence" value="<?php echo $x_fp_sequence ?>" />
	    <input type="hidden" name="x_fp_timestamp" value="<?php echo $x_fp_timestamp ?>" />
	    <input type="hidden" name="x_login" value="<?php echo $x_login ?>" />
	    <input type="hidden" name="x_amount" value="<?php echo $x_amount ?>"/>
	    <input type="hidden" name="x_fp_hash" value="<?php echo createHash($x_amount,$x_login,$transaction_key,$x_currency_code) ?>" />
	    
	    <!--Optional Fields. Add any additional information here for things like Recurring or Level 3.-->
	    
	    <input type="hidden" name="x_show_form" value="PAYMENT_FORM"/>
      </div>
	</FORM>
<div align="center">
	  <?php } ?>
</div>
	<div align="center">
	  <p>&nbsp;</p>
	  <table width="1002" border="0">
	    <tr>
	      <td><div class="copytext" style="float: left; padding: 5px 10px; width: 420px; color: rgb(136, 136, 136); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;">Time Is Money Tickets | Copyright 2013. All Rights Reserved<br>
	        Site designed by<span class="Apple-converted-space"> </span>Focused Development, LLC<a href="http://www.focuseddevelopment.com/" style="text-decoration: none; color: rgb(204, 204, 204);"></a>.<br>
	        </div>
            <div id="footmenu" style="width: 520px; float: right; color: rgb(136, 136, 136); font-family: Arial, Helvetica, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-size-adjust: auto; -webkit-text-stroke-width: 0px;">
              <div class="menu-footer">
                <ul id="menu-footer-menu" class="menu" style="float: right; padding: 5px 10px; margin: 0px;">
                  <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242" style="list-style-type: none; display: inline-block; margin-left: 15px;"><a href="http://timeismoneytickets.com/terms-and-conditions/" style="text-decoration: none; color: rgb(153, 153, 153);">Terms and Conditions</a></li>
                  <span class="Apple-converted-space"> </span>
                  <li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241" style="list-style-type: none; display: inline-block; margin-left: 15px;"><a href="http://timeismoneytickets.com/contact-us/" style="text-decoration: none; color: rgb(255, 255, 255);">Contact Us</a></li>
                </ul>
              </div>
            </div>
          <p>&nbsp;</p></td>
	      <td>&nbsp;</td>
        </tr>
  </table>
</div>
	<p>&nbsp;</p>
</BODY>
</html>
