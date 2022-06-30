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
$sql   = "SELECT * FROM `mtp_application_info` WHERE `app_id`='$app_id'  LIMIT 1";
        $query = $conn->query($sql);
                $row = $query->fetch_assoc();
                        
$name	= $row['name'];
$gender	 = $row['gender'];
$fathers_name	 = $row['fathers_name'];
$dob	 = $row['dob'];
$category	 = $row['category'];
$email	 = $row['email'];
$app_no	 = $row['app_no'];
$roll_no	 = $row['roll_no'];
$course	 = $row['course'];
$air	 = $row['air'];
$iitp_roll_no	 = $row['iitp_roll_no'];
$branch	 = $row['branch'];
$blood_grp	 = $row['blood_grp'];
$per_mail_nearest_police	 = $row['per_mail_nearest_police'];
$res_mail_nearest_police= $row['res_mail_nearest_police'];
$res_mailing= $row['res_mailing'];
$per_mailing= $row['per_mailing'];
$area	 = $row['area'];
$income	 = $row['income'];
$religion	 = $row['religion'];
$caste	 = $row['caste'];
$ht	 = $row['ht'];
$wt	 = $row['wt'];
						?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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
    <center>
        <h5 class="my-5"> Application ID: <?php echo $app_id; ?></h5>
    </center>
    <form action="server.php">
        <div class="container py-5">
            <div class="row">
                <!--/col-->
                <div class="col-md-8 offset-md-2">

                    <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Personal Information</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <!-- editing starts here -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Email*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" value="<?php echo $email; ?>" name="email" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">JEE Main Application No.*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $app_no; ?>"   name="app_no" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">JEE Advance Roll No *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $roll_no; ?>" name="roll_no" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">All India Rank (Category) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $air; ?>" name="air" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Name (write surname, then first name and lastly middle name leaving one space blank between each part) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+" value="<?php echo $name; ?>" name="name" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Course Admitted to (use letter code given in JEE Counselling Brochure) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $course; ?>" placeholder="Your answer"  disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">IITPatna Assigned Roll Number *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $iitp_roll_no; ?>" placeholder="Your answer" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Select Branch Alloted *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="branch" disabled>
                                            <option value="">Select</option>
                                            <option value="CSE" <?php if($branch=="CSE") echo 'selected="selected"'; ?>>CSE</option>
<option value="Female" <?php if($branch=="EEE") echo 'selected="selected"'; ?>>EEE</option>
<option value="Transgender" <?php if($branch=="Others") echo 'selected="selected"'; ?>>Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Date of Birth*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="date" value="<?php echo $dob; ?>" name="dob" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="gender" disabled>
                                            <option value="">Select</option>
                                            <option value="Male" <?php if($gender=="Male") echo 'selected="selected"'; ?>>Male</option>
<option value="Female" <?php if($gender=="Female") echo 'selected="selected"'; ?>>Female</option>
<option value="Transgender" <?php if($gender=="Transgender") echo 'selected="selected"'; ?>>Transgender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Blood group*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="blood_grp" disabled>
                                            <option value="">Select</option>
                                            <option value="A" <?php if($blood_grp=="A") echo 'selected="selected"'; ?>>A</option>
<option value="AB" <?php if($blood_grp=="AB") echo 'selected="selected"'; ?>>AB</option>
<option value="O" <?php if($blood_grp=="O") echo 'selected="selected"'; ?>>O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Height (Cm) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"value="<?php echo $ht; ?>" name="ht" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Weight (kg) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="<?php echo $wt; ?>" name="wt" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Category*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="category" disabled>
                                            <option value="">Select</option>
                                            <option value="General" <?php if($category=="General") echo 'selected="selected"'; ?>>General/OBC(Creamy layer)</option>
<option value="EWS" <?php if($category=="EWS") echo 'selected="selected"'; ?>>Economically Weaker Section</option>
<option value="OBC" <?php if($category=="OBC") echo 'selected="selected"'; ?>>OBC(Non Creamy)</option>
<option value="SC" <?php if($category=="SC") echo 'selected="selected"'; ?>>Scheduled Caste</option>
<option value="ST" <?php if($category=="ST") echo 'selected="selected"'; ?>>Scheduled Tribes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Caste*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"value="<?php echo $caste; ?>" pattern="[A-Za-z\s]+" name="caste" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Religion*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"value="<?php echo $religion; ?>" pattern="[A-Za-z\s]+"  name="religion" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Father's Name*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+" value="<?php echo $fathers_name; ?>" name="fathers_name" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Category*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="category" disabled>
                                            <option value="">Select</option>
                                            <option value="General" <?php if($category=="General") echo 'selected="selected"'; ?>>General/OBC(Creamy layer)</option>
<option value="EWS" <?php if($category=="EWS") echo 'selected="selected"'; ?>>Economically Weaker Section</option>
<option value="OBC" <?php if($category=="OBC") echo 'selected="selected"'; ?>>OBC(Non Creamy)</option>
<option value="SC" <?php if($category=="SC") echo 'selected="selected"'; ?>>Scheduled Caste</option>
<option value="ST" <?php if($category=="ST") echo 'selected="selected"'; ?>>Scheduled Tribes</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Parent's/Guardian's Annual income (approx.) *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="income" disabled>
                                            <option value="">Select</option>
                                            <option value="<=100000"<?php if($income=="<=100000") echo 'selected="selected"'; ?>><=100000</option>
                                            <option value="100000-500000"<?php if($income=="100000-500000") echo 'selected="selected"'; ?>>100000-500000</option>
                                            <option value=">=500000"<?php if($income=="<=100000") echo 'selected="selected"'; ?>>>=500000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">The family belongs to area *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="area" disabled>
                                            <option value="">Select</option>
                                            <option value="rural"<?php if($area=="rural") echo 'selected="selected"'; ?>>rural</option>
                                            <option value="urban"<?php if($area=="urban") echo 'selected="selected"'; ?>>urban</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">RESIDENTIAL Mailing address : *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"value="<?php echo $res_mailing; ?>" pattern="[A-Za-z\s]+"  name="res_mailing" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">RESIDENTIAL Mailing address Nearest Police Station *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"value="<?php echo $res_mail_nearest_police; ?>" pattern="[A-Za-z\s]+"  name="res_mail_nearest_police" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">PERMANENT Mailing address : *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"value="<?php echo $per_mailing; ?>" pattern="[A-Za-z\s]+"  name="per_mailing" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">PERMANENT Mailing address Nearest Police Station *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"value="<?php echo $per_mail_nearest_police; ?>" pattern="[A-Za-z\s]+"  name="per_mail_nearest_police" disabled>
                                    </div>
                                </div>
                                <!-- editing ends here -->
                    <div class="form-group">
                        <center>
                            <p>
                            <h1>Decalaration:</h1><br>
                            You can't edit this form later!!<br></p>
                        </center>

                        <label><input type="checkbox" checked disabled> I hereby declare that the entries made in this application form are correct to the best of my knowledge and belief. If selected for admission, I promise to abide by the rules and regulations of the Institute. The Institute shall have the right to take any action it deems fit, including expulsion, against me at any time after my admission, if it is found that any information furnished by me is incorrect. I note that the decision of the Institute is final in regard to selection for admission and assignment to a particular department and field of study. </label>
                    </div>
                    <br>

                    <center><button type="submit" class="btn btn-primary" disabled>Submit</button></center>
                </div>
    </form>
    </div>

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
<?php
}
?>


<script type="text/javascript">
    $(function() {
        $('#demo-form').parsley();
    });
</script>