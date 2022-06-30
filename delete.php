<?php 
include_once('dbconn.php');
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
if($_GET["app_id"]!=null)
{
$app_id=$_GET["app_id"];
$sql   = "delete FROM `mtp_application_info` WHERE `app_id`='$app_id'  LIMIT 1";
        $query = $conn->query($sql);
                
 //header("location: welcome.php");

						?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>IITP PhD Application Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://parsleyjs.org/src/parsley.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="http://parsleyjs.org/dist/parsley.min.js" type="text/javascript"></script>
</head>

<body>
<table align="left">
<tr>
<td><table align="left" border = 4><tr><td><a href="welcome.php"> HOME </a></td></tr></table>
</table>
<table align="right">
<tr>
<td><table align="right" border = 4><tr><td><a href="logout.php">LOGOUT</a></td></tr></table>
</table>
     <center> <h3>Your Application is Successfully Deleted</h3></center>

</body>

</html>
<?php
}
?>


