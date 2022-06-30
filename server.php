<?php
 include_once ('dbconn.php');
  
if (isset($_POST['regf_user'])) {
$name	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['name']))));
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$category	 = mysqli_real_escape_string($conn, $_POST['category']);
$email	 = strtolower(trim(mysqli_real_escape_string($conn, $_POST['email'])));
$per_mail_nearest_police	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['per_mail_nearest_police']))));
$per_mailing	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['per_mailing']))));
$res_mail_nearest_police	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['res_mail_nearest_police']))));
$res_mailing	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['res_mailing']))));
//$area	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['area']))));
$fathers_name	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['fathers_name']))));
$religion	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['religion']))));
$caste	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['caste']))));
$course	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['course']))));
$app_no	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['app_no']))));
$ht	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['ht']))));
$wt	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['wt']))));
$roll_no	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['roll_no']))));
$iitp_roll_no	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['iitp_roll_no']))));
$air	= ucwords(strtolower(trim(mysqli_real_escape_string($conn, $_POST['air']))));
$area = mysqli_real_escape_string($conn, $_POST['area']);
$income = mysqli_real_escape_string($conn, $_POST['income']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$blood_grp = mysqli_real_escape_string($conn, $_POST['blood_grp']);
$branch = mysqli_real_escape_string($conn, $_POST['branch']);
// $ht	 = trim(mysqli_real_escape_string($conn, $_POST['ht']));
// $wt	 = trim(mysqli_real_escape_string($conn, $_POST['wt']));
$mtech_application_category	 = mysqli_real_escape_string($conn, $_POST['mtech_application_category']);
$mtech_department	 = mysqli_real_escape_string($conn, $_POST['mtech_department']);
$id_number	 = mysqli_real_escape_string($conn, $_POST['id_number']);
$dir1="./Mtech-2022/".$mtech_department."/".$mtech_application_category."/".str_replace(' ', '', $name)."_".$id_number."/"; 

if (!file_exists($dir1)) {
    mkdir($dir1, 0777, true);
} 
//if(!mkdir($dir1,0777,true))
//{
//echo ('');
//}

$idproof1 = $dir1.$id_number."_idproof.pdf";    
//$id = move_uploaded_file($_FILES['idproof']['tmp_name'], $idproof1);
$passport1 = $dir1.$id_number."_photo.jpg";     
//$pass = move_uploaded_file($_FILES['passport']['tmp_name'], $passport1);
$gate1 = $dir1.$id_number."_gate.pdf";    
//$gt = move_uploaded_file($_FILES['gate']['tmp_name'], $gate1);
$caste1 = $dir1.$id_number."_caste.pdf";    
//$cast= move_uploaded_file($_FILES['caste']['tmp_name'], $caste1);
$net1 = $dir1.$id_number."_net.pdf";    
//$net= move_uploaded_file($_FILES['net']['tmp_name'], $net1);
$paymentreceipt1 = $dir1.$id_number."_paymentreceipt.pdf";    
//$paymentreceipt= move_uploaded_file($_FILES['paymentreceipt']['tmp_name'], $paymentreceipt1);

$app_id="Mtech-2022-".$mtech_application_category."-".$mtech_department."-".$id_number;

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `email`='$email'  LIMIT 1";

$query = "update mtp_application_info set name='$name',app_no='$app_no',roll_no='$roll_no',iitp_roll_no='$iitp_roll_no',air='$air',blood_grp='$blood_grp',fathers_name='$fathers_name',caste='$caste',religion='$religion',area='$area',res_mailing='$res_mailing',res_mail_nearest_police='$res_mail_nearest_police', per_mailing='$per_mailing',per_mail_nearest_police='$per_mail_nearest_police',gender	 ='$gender',course	 ='$course', branch	 ='$branch', category	 ='$category', income	 ='$income',dob	 ='$dob',ht='$ht',wt='$wt',area='$area',app_id='$app_id',filled_status=1, added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and email='$email'";
//$query = "update mtp_application_info set personal_full_name1='$personal_full_name1',personal_full_name2='$personal_full_name2' personal_gender1	 ='$personal_gender1',personal_gender2	 ='$personal_gender2', personal_gender3	 ='$personal_gender3', personal_gender4	 ='$personal_gender4', personal_gender5	 ='$personal_gender5', personal_gender6	 ='$personal_gender6' , personal_gender7	 ='$personal_gender7'personal_date_of_birth	 ='$personal_date_of_birth', personal_birth_category	 ='$personal_birth_category', personal_contact1	 ='$personal_contact1', personal_email	 ='$personal_email',app_id='$app_id',filled_status=1, added_updated=NOW() where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and personal_email='$personal_email'";
// if (!$mysqli_query($conn, $query)) {
  // echo("Error description: " . mysqli_error($conn));
// }

// echo $query;
if (!mysqli_query($conn,$query)) {
  echo("Error description: " . mysqli_error($conn));
  echo "<br><p style='color:red'>Please take a screenshot of this page and mail to praveenk@iitp.ac.in or pic_auto@iitp.ac.in to resolve issue. </p>";
}else 
{
	echo '<center><b>Application Form submiitted  Successfullly<br><br>Application ID:'.$app_id.'</center>';

            
$personal_full_name="";
$app_id="";
$personal_date_of_birth="";
$personal_birth_category="";
//require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
//require '/usr/share/php/libphp-phpmailer/class.smtp.php';
//$mail = new PHPMailer;
$sql   = "SELECT * FROM mtp_application_info where mtech_application_category ='$mtech_application_category' and mtech_department='$mtech_department' and email='$email'";
    $query = $conn->query($sql);
    
if ($query->num_rows == 0)
{
    
    echo '<center>Your Information Not found. Please resubmit the form.</center>';
}
else 
{
    
    
    $row      = $query->fetch_assoc();
        $app_id  = $row['app_id'];
$name=$row['name'];
$dob=$row['dob'];
$category=$row['category'];

}
//$mail->setFrom('no-reply@iitp.ac.in');//no-reply@cse.iitp.ac.in
//$mail->addAddress($personal_email); 
//$mail->addBcc("mayankjoin+mtechiitp@gmail.com");

//$mail->addAddress("praveenpatel.19832008@gmail.com");
//$mail->Subject = 'IIT Patna MTech Application Filled Information';
//$mail->Body ="Dear ".$personal_full_name.", <br> You have filled the following details : <br><br>Application ID:- ".$app_id."<br>Department :- ".$mtech_department."<br>Application Category : ".$mtech_application_category."<br>Date of Birth:".$personal_date_of_birth."<br>Birth Category --> ".$personal_birth_category."<br><br>If above information is not correct, Please re-submit the form.<br>https://www.iitp.ac.in/mtech_admission/mtech/mtech_form/index.php";
//$mail->AddAttachment("../mess_qr/".$roll.".png");
// $mail->IsSMTP();
// $mail->isHTML(true);
// $mail->SMTPSecure = '';
// $mail->Host = '172.16.1.2'; //'ssl://smtp.gmail.com'; :995/pop3/ssl/novalidate-cert
// $mail->SMTPAuth = false;
// $mail->Port =25;


        // if(!$mail->send())
        // {
        //   echo 'Email is not sent.';
        //   echo 'Email error: ' . $mail->ErrorInfo;
        // }
        // else
        // {
        //   echo '';
        // }

            
}
             

?>
<html>
<body>
<table align="left">
<tr>
<td><table align="left" border = 4><tr><td><a href="welcome.php"> HOME </a></td></tr></table>
</table>
<table align="right">
<tr>
<td><table align="right" border = 8><tr><td><a href="logout.php">LOGOUT</a></td></tr></table>
</table>
</body>
</html>
<?php 
}
?>
