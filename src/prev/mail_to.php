<?php
//set timezone
date_default_timezone_set('Asia/Kolkata');
if($_POST['name'])
 {
 	$name = $_POST['name']; // required 
    $email = $_POST['email']; // required
    $mobile = $_POST['mobile']; // required
	$sub = $_POST['sub'];
	$message = $_POST['message']; // required   
	$date = date('d/M/Y'); // required
 	$time = date("h:i A", time()); // required	
	
$to = 'radhakrishnan@dezineguru.com';//  there change mail who recieved
$subject = "THE school";

$htmlContent ="
    <html>
    <head>
        <title>Welcome to Enquiry form</title>
    </head>
	
<body style='background:#f2f2f2;'>
<div style='margin:0;background:#f2f2f2; width:100%; float:left'>
<div style='margin:0 auto; width:600px; padding:40px 0'>
<div style='background:#fff; height:300px; border-radius:10px; border:1px solid #d8d8d8;'>
<div style='width: 558px; float: left; padding: 10px 20px; border-bottom:1px solid #d8d8d8'>
<div style='width:50%; float:left'><span style='text-decoration:none;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;color:#6ac451'>THE MEXICO CLINIC AND HOSPITAL Enquiry form </span></div>
<div style='width:50%; float:left'><span style='font-family: cursive;font-family:'Trebuchet MS',Arial,Helvetica,sans-serif; font-size: 14px; line-height: 24px; text-align: right; float: right;'>Entry on: ".$date." ".$time."</span></div>
</div>
<div style='width: 558px; float: left; padding: 25px 20px; height: 165px;'>
<table style='width: 100%; font-size:12px;line-height:21px;font-family:'Trebuchet MS',Arial,Helvetica,sans-serif;color:rgb(0,0,0);float:left; ' border='0'>
  <tr>
    <td style='width: 400px; font-size: 20px;'>Name: ".$name."</td>
  </tr>
  <tr>
    <td style='width:400px;'>Mobile: <a style='color:#d95b23'>".$mobile."</a></td>
  </tr>
  <tr>
    <td style='width:400px;'>Email: <a style='color:#d95b23'>".$email."</a></td>
  </tr>
  <tr>
    <td style='width:400px;'>Subject: <a style='color:#d95b23'>".$sub."</a></td>
  </tr>
  <tr>
  	<td style='width:400px;'>Message: <a style='color:#d95b23'>".$message."</a></td>
  </tr>
</table>
</div>
</div>
</div>
</div>
</body>
    </html>";

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: '.$email.'' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):{
	
	?>
  <script type="text/javascript">
  alert('Email has sent successfully');
  window.location.href='index.html';
  </script>
  <?php }
else:
    $errorMsg = 'Email sending fail.';
endif;

//redirect to the 'thank you' page
 }
?>