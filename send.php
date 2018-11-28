
<?php

$fname = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

$to = "mohit@secured-hub.com";
$subject = "GET IN TOUCH";

$message = "
<html>
<head>
<title>HTML email</title>
<style>
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
}
th, td {
   padding: 15px;
}
.back_header{
background: #B2D430;
}
</style>
</head>
<body>

<table border='1' width='500' >
<tr>
 <th class='back_header' colspan='2'>GET IN TOUCH</th>
</tr>
<tr>
 <td width='20%'><strong>Firstname</strong></td>
 <td>".$fname."</td>
</tr>
<tr>
 <td><strong>Email</strong></td>
 <td>".$email."</td>
</tr>
<tr>
 <td><strong>Message</strong></td>
 <td>".$message."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <rajiv@secured-hub.com>' . "\r\n";
$headers .= 'Cc: rajiv@secured-hub.com' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<script type='text/javascript'>window.location.href = 'http://secured-hub.com';</script>";



?>
