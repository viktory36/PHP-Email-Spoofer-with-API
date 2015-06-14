<?php
echo "fill in params ?to=, ?from=, ?fromname=, ?subject=, ?message= <br>";
if(isset($_GET['to'])) {
$to = $_GET['to'];
}
else {
die("");
}
if(isset($_GET['from'])) {
$from = $_GET['from'];
}
else {
die("from not defined");
}
if(isset($_GET['fromname'])) {
$fromname = $_GET['fromname'];
}
else {
die("fromname not defined");
}
if(isset($_GET['subject'])) {
$subject = $_GET['subject'];
}
else {
die("subject not defined");
}
if(isset($_GET['message'])) {
$message= $_GET['message'];
}
else {
die("message not defined");
}


$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://www.rockdesign.com/vik/espoof.php',
    CURLOPT_USERAGENT => 'gay',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(to => $to,from => $from,fromname => $fromname,subject => $subject,message=> $message)
 ));
 
echo curl_exec($curl);
/*thx poni*/
?>
