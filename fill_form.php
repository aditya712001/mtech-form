<?php 
include_once('dbconn.php');
if (isset($_POST['reg_user'])) {
	$id_number="";
    $mtech_application_category = mysqli_real_escape_string($conn, $_POST['mtech_application_category']);
    $mtech_department= mysqli_real_escape_string($conn, $_POST['mtech_department']);
	$mtech_ex=explode("-",$mtech_department);
	//$mtech_code=trim($mtech_ex[1]);
    $email= mysqli_real_escape_string($conn, $_POST['personal_email']);
$mtech_is_your_btech_from_iit = mysqli_real_escape_string($conn, $_POST['mtech_is_your_btech_from_iit']);

$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `email`='$email'   LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
			
		
		if ($user) { // if user exists
			if($user['filled_status']==1)
		{
            
			exit('Already registered');
           
		}
		else{
			$id_number=$user['id_number'];
		}
			}

		// Finally, register user if there are no errors in the form
		else {
			$query = "INSERT INTO `mtp_application_info` (`id_number`,`email`,`mtech_application_category`, `mtech_department`, `mtech_is_your_btech_from_iit`) values (NULL,'$email','$mtech_application_category', '$mtech_department','$mtech_is_your_btech_from_iit')"; 
			//echo $query;
			mysqli_query($conn, $query);
			$user_check_query = "SELECT * FROM `mtp_application_info` WHERE `mtech_application_category`='$mtech_application_category' and `mtech_department`='$mtech_department' and `email`='$email'  LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);
		$id_number=$user['id_number'];
		}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IITP mtech Application Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://parsleyjs.org/src/parsley.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="http://parsleyjs.org/dist/parsley.min.js" type="text/javascript"></script>
	
	<script>
	
	 function daysDifference1() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("work_1_from_date").value;
         var dateI2 = document.getElementById("work_1_to_date").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
		 var diff_date =  date2 - date1;
		 var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

		 document.getElementById("work_1_experience_duration").value =  Math.floor(num_years) + " Years, " +Math.floor(num_months)+" months," + Math.floor(num_days)+" days";
                           }
						   
						  function daysDifference2() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("work_2_from_date").value;
         var dateI2 = document.getElementById("work_2_to_date").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
		 var diff_date =  date2 - date1;
		 var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

		 document.getElementById("work_2_experience_duration").value =  Math.floor(num_years) + " Years, " +Math.floor(num_months)+" months," + Math.floor(num_days)+" days";
                           }
						 function daysDifference3() {
         //define two variables and fetch the input from HTML form
         var dateI1 = document.getElementById("work_3_from_date").value;
         var dateI2 = document.getElementById("work_3_to_date").value;

        //define two date object variables to store the date values
         var date1 = new Date(dateI1);
         var date2 = new Date(dateI2);
		 var diff_date =  date2 - date1;
		 var num_years = diff_date/31536000000;
var num_months = (diff_date % 31536000000)/2628000000;
var num_days = ((diff_date % 31536000000) % 2628000000)/86400000;

		 document.getElementById("work_3_experience_duration").value =  Math.floor(num_years) + " Years, " +Math.floor(num_months)+" months," + Math.floor(num_days)+" days";
                           }
						   </script>
</head>

<body>
<table align="left">
<tr>
<td><table align="left" border = 4><tr><td><a href="welcome.php"> HOME </a></td></tr></table>
</table>
<table align="right">
<tr>
<td><table align="right" border = 8><tr><td><a href="logout.php">LOGOUT</a></td></tr></table>
</table>
    <center>
        <h1 class="my-5">Hi, Welcome to M.Tech Registration Form</h1>
    </center>
    <form action="server.php" method="post" enctype="multipart/form-data">
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
                                        <input class="form-control" type="email"  name="email" value="<?php echo $email; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gate Application No.*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" name="app_no" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gate Roll No *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text"  value="" name="roll_no" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">All India Rank (Category) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" name="air" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Name (write surname, then first name and lastly middle name leaving one space blank between each part) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="name" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Course Admitted to (use letter code given in JEE Counselling Brochure) *</label>
                                <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Your answer" maxlength="200">
                            </div> -->
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Course Admitted to (use letter code given in Gate Counselling Brochure) *</label>
                                <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Your answer" value="" name="course" required>
                            </div>
                                </div>
                                <!-- <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">IITPatna Assigned Roll Number *</label>
                                <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Your answer" maxlength="200">
                            </div>
                                </div> -->
                                <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">IITPatna Assigned Roll Number *</label>
                                <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Your answer" value="" name="iitp_roll_no" required>
                            </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Select Branch Alloted *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="branch" required>
                                            <option value="">Select</option>
                                            <option value="CSE">CSE</option>
                                            <option value="EEE">EEE</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Date of Birth*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="date" name="dob" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Gender*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="gender" required>
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Transgender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Blood group*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="blood grp" required>
                                            <option value="">Select</option>
                                            <option value="A">A</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Height (Cm) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" name="ht" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Weight (kg) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" value="" name="wt" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Category*</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="category" required>
                                            <option value="">Select</option>
                                            <option value="General">General/OBC(Creamy layer)</option>
											<option value="EWS">Economically Weaker Section</option>
                                            <option value="OBC_NCL">OBC(Non Creamy)</option>
                                            <option value="SC">Scheduled Caste</option>
                                            <option value="ST">Scheduled Tribes</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Are you a PwD candidate? *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_gender4" required>
                                            <option value="">Select</option>
                                            <option value="Male">Yes</option>
                                            <option value="Female">No</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Caste*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+" name="caste" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Religion*</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="religion" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Father's Name (write surname, then first name and lastly middle name leaving one space blank between each part) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="fathers_name" required>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Guardian's Name (write surname, then first name and lastly middle name leaving one space blank between each part) *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="personal_full_name5" required>
                                    </div>
                                </div> -->
                                <!-- <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Father's/Guardian's Profession *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="personal_gender5" required>
                                            <option value="">Select</option>
                                            <option value="Male">Agri</option>
                                            <option value="Female">business</option>
                                            <option value="Others">retired</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Parent's/Guardian's Annual income (approx.) *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="income" required>
                                            <option value="">Select</option>
                                            <option value="<=100000"><=100000</option>
                                            <option value="100000-500000">100000-500000</option>
                                            <option value=">=500000">>=500000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">The family belongs to area *</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" size="0" name="area" required>
                                            <option value="">Select</option>
                                            <option value="Male">rural</option>
                                            <option value="Female">urban</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">RESIDENTIAL Mailing address : *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="res_mailing" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">RESIDENTIAL Mailing address Nearest Police Station *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="res_mail_nearest_police" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">PERMANENT Mailing address : *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="per_mailing" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">PERMANENT Mailing address Nearest Police Station *</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="text" pattern="[A-Za-z\s]+"  name="per_mail_nearest_police" required>
                                    </div>
                                </div>
                                <!-- editing ends here -->
                    <div class="form-group">
                        <center>
                            <p>
                            <h1>Decalaration:</h1><br>
                            <h2>You can't edit this form later!!</h2><br></p>
                        </center>

                        <label><input type="checkbox" value="" checked required> I hereby declare that the entries made in this application form are correct to the best of my knowledge and belief. If selected for admission, I promise to abide by the rules and regulations of the Institute. The Institute shall have the right to take any action it deems fit, including expulsion, against me at any time after my admission, if it is found that any information furnished by me is incorrect. I note that the decision of the Institute is final in regard to selection for admission and assignment to a particular department and field of study. </label>
                    </div>
					
					
                    <div class="form-group">
                        <center>
                            <p>
                            <h1>Important:</h1><br>
                            
                        </center>

                        <label>  You should receive an email with the title <b>"M.Tech Application Filled Information" </b>in your_inbox from: no-reply@iitp.ac.in after submitting the form.
Please check you Spam, All Mail, folders.
 </label>
                    </div>
					
                    <br>
                    <input type="hidden"  name="mtech_application_category" value="<?php echo $mtech_application_category; ?>">
                    <input type="hidden"  name="mtech_department" value="<?php echo $mtech_department; ?>">
                    
                    <input type="hidden"  name="id_number" value="<?php echo $id_number; ?>">
                    <center><button type="submit" name="regf_user" class="btn btn-primary">Submit</button></center>
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