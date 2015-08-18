<!DOCTYPE html>

<head>
<title>Email Spoofer</title>
<style>
* {
	margin: 0;
	padding: 0;
}
body {
	background-color: #fff;
	color: #333333;
	font: 11px tahoma;
	margin-bottom: 30px;
        text-align: center;
}
h1, h2, h3, h4 {
	font: Garamond;
	font-size: 22px;
	letter-spacing: -1px;
	text-transform: uppercase;
}
h4 {
	font-size: 12px;
}
</style>
</head>
<body>
<centre>
<?php
//declarin stoof
  if (isset($_REQUEST['from']))  {
  
  //Email information
  $to= $_REQUEST['to'];
  $from= $_REQUEST['from'];
  $fromname= $_REQUEST['fromname'];
  $subject = $_REQUEST['subject'];
  $message= $_REQUEST['message'];
  $t2s= $_REQUEST['t2s'];
  $header= "From: $fromname<$from>";
  
  //send email
 for ($i=1; $i<=$t2s; $i++){
  mail($to, "$subject", $message, $header);
  }
echo htmlentities("Email sent $t2s times to $to using email $from and name $fromname");
 }
  
  else  {
?>

 <form method="post">
  Mail to (target): <input name="to" type="text" /><br />
  Mail from (spoofed email adr): <input name="from" type="text" /><br />
  Mail from name (name to use): <input name="fromname" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="message" rows="15" cols="40"></textarea><br />
  Times to send: <input name="t2s" type="text" /><br />
  <input type="submit" value="Submit" />
  </form>

</centre>
</body>
<?
}
?>
