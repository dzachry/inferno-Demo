<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>peria | contact us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Peria, shoes, handbags, accessories, designer, fashion, boutique, Memphis" />
<meta name="description" content="Peria is committed to offering women a unique shopping experience. Peria showcases shoes, handbags, and accessories from a range of designers, including lines carried nowhere else in Memphis. It’s a celebration of 'girl time' with a focus on a casual, welcoming atmosphere where the sales team is always ready to offer style solutions to guests." />
<link rel="stylesheet" type="text/css" href="../includes/css/style.css" />
<link rel="stylesheet" href="../includes/css/wforms.css" type="text/css" />
<link rel="alternate stylesheet" href="../includes/css/wforms-jsonly.css" type="text/css" title="stylesheet activated by javascript" />
<!--[if lt IE 7]>
    <script type="text/javascript" src="../includes/unitpngfix/unitpngfix.js"></script>
<![endif]-->
<script type="text/javascript" src="../includes/js/media-embed.js"></script>
<script language="javascript">
window.onload=function(){
	// LARGE IMAGE FLASH
	swfr("../includes/flash/largeimage/largeimage.swf", "242", "428", "transparent", "server=../includes/flash/largeimage/", "largeimage");
}
</script>
<script type="text/javascript" src="../includes/js/wforms.js" ></script>
<script type="text/javascript" src="../includes/js/wforms_core.js"></script>
<script type="text/javascript" src="../includes/js/wforms_validation.js"></script>
<style type="text/css">
	  .errFld {border: 1px solid #F00; /*... or any other css properties ... */}
	  .errMsg { color: #C33; /*... or any other css properties ... */ }
	</style>
</head>
<body>
<div id="wrap">
	<div id="container">
		<div id="header">
			<h1>peria</h1>
			<ul>
				<li id="m-home"><a href="../">Home</a></li>
				<li id="m-aboutus"><a href="../about-us/">About Us</a></li>
                <li id="m-brands"><a href="../brands/">Brands</a></li>
                <li id="m-news"><a href="../news/">News</a></li>
				<li id="m-contactus"><a href="../contact-us/">Contact Us</a></li>
			</ul>
		</div>
		<div id="content">
			<div id="detail"><img src="../includes/img/TT_Spring2_0575.jpg" alt="" /><strong>Peria</strong><br />1680
				Union Avenue at Belvedere<br />
				Suite 107<br />
				Memphis, TN 38104<br>
				901-123-1324</div>
			<div id="largeimage"><!-- LARGE IMAGE FLASH --></div>
			<div id="main">
				<div id="contentarea">
					<? if ($_REQUEST['function'] == "submit") {

	include ("adodb/adodb.inc.php");
	
	$dbserver = "db95b.pair.com";
	$dbuser = "dac1if3";
	$dbpass = "LyyGKyGB";
	$dbschema = "dac1if3_contact";
	
	$db = NewADOConnection('mysql');
	$db->debug = false;
	$db->Connect($dbserver, $dbuser, $dbpass, $dbschema);


	

	
	// write to database
	$sql = "INSERT into periacontact SET
		fname = '$_REQUEST[wf_FirstName]',
		lname = '$_REQUEST[wf_LastName]',
		address = '$_REQUEST[wf_Address]',
		city = '$_REQUEST[wf_City]',
		state = '$_REQUEST[wf_State]',
		zip = '$_REQUEST[wf_Zip]',
		email = '$_REQUEST[wf_Email]',
		phone = '$_REQUEST[wf_Phone]',
		bday = '$_REQUEST[wf_BDay]',
		how = '$_REQUEST[wf_How]',
		include = '$_REQUEST[wf_Include]',
		message = '$_REQUEST[wf_Message]',

		createddate = now()";
		
	$result = $db->Execute($sql);

//	echo $result;
	
	// get registration number
	
	// State message
	
	// Send Mail Form
	
	require("class.phpmailer.php");
	
	$mail = new PHPMailer();
	
	// $mail->IsSMTP(); // set mailer to use SMTP
	// $mail->Host = "smtp1.example.com;smtp2.example.com"; 
	// specify main and backup server
	// $mail->SMTPAuth = true;     // turn on SMTP authentication
	// $mail->Username = "jswan";  // SMTP username
	// $mail->Password = "secret"; // SMTP password
	
	$mail->From = "contact@periashoes.com";
	$mail->FromName = "Peria";
    $mail->AddAddress("ashley@creativeinferno.com", "Ashley Burton");
    $mail->AddAddress("periainc@gmail.com", "Peria Gober");


	
	// $mail->AddReplyTo("info@example.com", "Information");
	
	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	$mail->IsHTML(true);                                  // set State format to HTML
	
	$mail->Subject = "Peria Site Contact";
	
	$body .= "<p>";
	$body .= "<b>Name:</b> ". $_REQUEST['wf_FirstName']." ". $_REQUEST['wf_LastName'] ."<br />";
	$body .= "<b>Address:</b> ". $_REQUEST['wf_Address']."<br />";
	$body .= "<b>City:</b> ". $_REQUEST['wf_City'] ."<br />";
	$body .= "<b>State:</b> ". $_REQUEST['wf_State'] ."<br />";
	$body .= "<b>Zip:</b> ". $_REQUEST['wf_Zip'] ."<br />";
	$body .= "<b>E-mail:</b> ". $_REQUEST['wf_Email'] ."<br />";
	$body .= "<b>Phone:</b> ". $_REQUEST['wf_Phone'] ."<br />";
	$body .= "<b>Birthday:</b> ". $_REQUEST['wf_BDay'] ."<br />";
	$body .= "<b>How did you hear about us?</b> ". $_REQUEST['wf_How'] ."<br />";
	$body .= "<b>Include in mailing list:</b> ". $_REQUEST['wf_Include'] ."<br />";
	$body .= "<b>Message:</b><br />". $_REQUEST['wf_Message'] . "";
	$body .= "</p>";

	$mail->Body = $body;
	
	$mail->AltBody = $body;
	
	if(!$mail->Send())
	
	{
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: ". $mail->ErrorInfo;
	   exit;
	}
	
print "<h3>Thank you for contacting us. We will respond as soon as possible.</h3>";
print "<p>";
print "<b>Name:</b> ". $_REQUEST['wf_FirstName']." ". $_REQUEST['wf_LastName'] ."<br />";
print "<b>Address:</b> ". $_REQUEST['wf_Address']."<br />";
print "<b>City:</b> ". $_REQUEST['wf_City'] ."<br />";
print "<b>State:</b> ". $_REQUEST['wf_State'] ."<br />";
print "<b>Zip:</b> ". $_REQUEST['wf_Zip'] ."<br />";
print "<b>E-mail:</b> ". $_REQUEST['wf_Email'] ."<br />";
print "<b>Phone:</b> ". $_REQUEST['wf_Phone'] ."<br />";
print "<b>Birthday:</b> ". $_REQUEST['wf_BDay'] ."<br />";
print "<b>How did you hear about us?</b> ". $_REQUEST['wf_How'] ."<br />";
print "<b>Include in mailing list:</b> ". $_REQUEST['wf_Include'] ."<br />";
print "<b>Message:</b><br />". $_REQUEST['wf_Message'] ."";
print "</p>";	
} else { ?>
					<h2>We&rsquo;d love to get to know you better. Take a moment to join our
						mailing list. Just enter your contact information in the form below and
						click &ldquo;submit&rdquo;.</h2>
					<form method="post" action="index.php" name="wf_Peria" id="wf_Peria">
						<p>
							<label for="name" id="wf_FirstName-L" class="preField">First Name*</label>
							<br />
							<input type="text" id="wf_FirstName" name="wf_FirstName" value="" class="required"/>
						</p>
						<p>
							<label for="wf_LastName" id="wf_LastName-L" class="preField">Last Name*</label>
							<br />
							<input type="text" id="wf_LastName" name="wf_LastName" value="" class="required"/>
						</p>
						<p>
							<label for="wf_Address" id="wf_Address-L" class="preField">Address*</label>
							<br />
							<input type="text" id="wf_Address" name="wf_Address" value="" class="required"/>
						</p>
						<p>
							<label for="wf_City" id="wf_City-L" class="preField">City*</label>
							<br />
							<input type="text" id="wf_City" name="wf_City" value="" class="required"/>
						</p>
						<p>
							<label for="wf_State" id="wf_State-L" class="preField">State*</label>
							<br />
							<input type="text" id="wf_State" name="wf_State" value="" class="required" />
						</p>
						<p>
							<label for="wf_Zip" id="wf_Zip-L" class="preField">Zip Code*</label>
							<br />
							<input type="text" id="wf_Zip" name="wf_Zip" class="required" value="" />
						</p>
						<p>
							<label for="wf_Email" id="wf_Email-L" class="preField">E-mail*</label>
							<br />
							<input type="text" id="wf_Email" name="wf_Email" value="" class="validate-State required" />
						</p>
						<p>
							<label for="wf_Phone" id="wf_Phone-L" class="preField">Phone*</label>
							<br />
							<input type="text" id="wf_Phone" name="wf_Phone" value="" class="required" />
						</p>
						<p>
							<label for="wf_BDay" id="wf_BDay-L" class="preField">Birthday*</label>
							<br />
							<input type="text" id="wf_BDay" name="wf_BDay" value="" class="required" />
						</p>
						<p>
							<label for="wf_How" id="wf_How-L" class="preField">How did you hear about us?*</label>
							<br />
							<input type="text" id="wf_How" name="wf_How" value="" class="required" />
						</p>
						<p>
							<input type="checkbox" id="wf_Include" name="wf_Include" value="yes" />
							<label for="wf_Include" id="wf_Include-L">Include in
							mailing list?</label>
						</p>


						<p>
							<label for="wf_Message" id="wf_Message-L" class="preField">Message</label>
							<br />
							<textarea id="wf_Message" name="wf_Message" class=""></textarea>
						</p>
						<p>
							<input type="submit" class="primaryAction" id="submit-wf_Peria" value="submit"/>
							<br />
							<input type="hidden" name="function" value="submit" />
						</p>
							<p>
								* Required fields							</p>
					</form>
					<? } ?>
				</div>
			</div>
			<div id="dock">&nbsp;</div>
			<div class="clear"></div>
		</div>
  </div>
	<div id="footer">
		<p>1680 Union Ave., Suite 107 &bull; Memphis, TN 38104 &bull; 901.274.8488</p>
	</div>
</div>
<!-- GOOGLE STATS -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6979751-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
