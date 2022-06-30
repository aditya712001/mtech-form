<?php
session_start();
include_once 'dbconn.php';
if(isset($_POST['submit']))
{
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
$mail = new PHPMailer;
    $user_id = strtolower(trim($_POST['user_id']));
    $result = mysqli_query($conn,"SELECT * FROM mtp_users where username='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['username'];
	$email=$row['username'];
	   if($user_id==$fetch_user_id) {
        $password=rand(11111111,99999999);
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn,"update mtp_users set password='$param_password',added_updated=NOW() where username='$email'");
				       $subject = "Password";
                $message = "Your new password is : $password.";
                 $mail->setFrom('no-reply@iitp.ac.in');//no-reply@cse.iitp.ac.in
                $mail->addAddress($email);
                $mail->Subject = 'Password';
                $mail->Body =$message;
                $mail->IsSMTP();
                $mail->isHTML(true);
                $mail->SMTPSecure = '';
                $mail->Host = '172.16.1.2'; //'ssl://smtp.gmail.com'; :995/pop3/ssl/novalidate-cert
                $mail->SMTPAuth = false;
                $mail->Port =25;
                               
                        if(!$mail->send())
                        {
                          echo 'Email is not sent.';
                          echo 'Email error: ' . $mail->ErrorInfo;
                        }
                        else
                        {
                          echo 'Your new password is sent to  a Mail.';
                        }

			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Reset Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='text' name='user_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
<p><a href="index.php">Go to Login Page</a></p>
</body>
</html>