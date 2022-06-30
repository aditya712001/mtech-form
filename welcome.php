<?php
include_once('dbconn.php');
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
$username=$_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>IITP M.Tech Application Portal</title>
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
<table align="right">
<tr>
<td><table align="right" border = 4><tr><td><a href="logout.php">LOGOUT</a></td></tr></table>
</table>
<center><h3 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b><br>Welcome to M.Tech Registration Form</h3></center>

       
        <div class="container py-5">
            <div class="row">
                <!--/col-->
                <div class="col-md-8 offset-md-2">

                    <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">M.Tech Applying Details</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="fill_form.php" role="form" autocomplete="off">
                               
                  
                    <p></p>

                    <div class="form-row mt-3">
                        <div class="col-sm-4 pb-4">
                            <label for="exampleAccount"><b>Application Category*</b></label>
                            <select class="form-control" name="mtech_application_category" required>
                                <option value=''>Select</option>
                                <option value="Regular and Full-Time">Regular & Full-Time</option>
                                <option value="Sponosored and Full-Time">Sponosored & Full-Time</option>
                                <option value="Project-Staff">Project-Staff</option>
                                <option value="Employed and Part-Time">Employed & Part-Time</option>
								                            </select>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Department*</b></label>
                            <select class="form-control" name="mtech_department" required>
                                <option value=''>Select</option>
                               <option value="Computer Science and Engineering">Computer Science & Engineering</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Communication System Engineering">Communication System Engineering</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Mechatronics">Mechatronics</option>
                                <option value="Material Science and Engineering">Material Science & Engineering</option>
                                <option value="VLSI and Embeded Systems">VLSI & Embeded Systems</option>
                            </select>
                        </div>
                        <div class="col-sm-4 pb-4">
                            <label for="exampleCtrl"><b>Is  B.Tech from IIT*</b></label>
                            <select class="form-control" name="mtech_is_your_btech_from_iit" required>
							<option value="">Select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>

                    </div>
                    
                   
                    <br>
<input type="hidden" name="personal_email" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>">
                    <center><button type="submit" name="reg_user" class="btn btn-primary">Submit</button></center>
                </div>
    </form>
    </div>
	<br>
	<center>
	<h3>Already Filled Forms:</h3>
<?php
 $sql = "SELECT app_id,mtech_application_category,mtech_department FROM mtp_application_info where email='$username' and filled_status=1 LIMIT 500";
    $result = $conn->query($sql);
$count=0;
echo '<table border=2>';
    if ($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
			 $count++;
			 $app_id=$row['app_id'];
			 echo '<tr><td>'.$count.'</td><td><a href="filled.php?app_id='.$app_id.'">'.$app_id.'</a></td>'; ?>
			 <td><a href="delete.php?app_id=<?php echo $app_id; ?>" onclick="return  confirm('Do you want to delete Y/N')">Delete</a></td></tr>
			 <?php
         }
    } else {
         echo "No Form filled";
    }
echo '</table>';
	?>
</center>
    </div>
    <!--/row-->

    <br><br><br><br>

    </div>
    <!--/col-->
    </div>
    <!--/row-->

    </div>
    </div>
    </div>
    </div>
    <!--/container-->

</body>

</html>

