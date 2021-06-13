<?php
$msg = '';
$dis = '';
$photo = '';


	if(isset($_POST['form_submit'])) {
		
		$first_name = $_POST['first_name'];
		$mid_name = $_POST['mid_name'];
		$last_name = $_POST['last_name'];
		$photo = $_POST['photo'];
		$father_name = $_POST['father_name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$percent = $_POST['percent'];
		$hobbies = $_POST['hobbies'];
		$institute = $_POST['institute'];
		$course_std = $_POST['course_std'];
		$course_now = $_POST['course_now'];
		$dis1 = '<tr><td>First Name: </td>
									  <td>' . $first_name . '</td></tr>
									  <tr><td>Mid Name: </td>
									  <td>' . $mid_name . '</td></tr>
									  <tr><td>Last Name: </td>
									  <td>' . $last_name . '</td></tr>
									  <tr><td>Father Name: </td>
									  <td>' . $father_name . '</td></tr>
									  <tr><td>Address: </td>
									  <td>' . $address . '</td></tr>
									  <tr><td>Email: </td>
									  <td>' . $email . '</td></tr>
									  <tr><td>Contact Number: </td>
									  <td>' . $contact . '</td></tr>
									  <tr><td>DOB: </td>
									  <td>' . $dob . '</td></tr>
									  <tr><td>Gender: </td>
									  <td>' . $gender . '</td></tr>
									  <tr><td>Percentage: </td>
									  <td>' . $percent . '</td></tr>
									  <tr><td>Hobbies: </td>
									  <td>' . $hobbies . '</td></tr>
									  <tr><td>Previous Institute: </td>
									  <td>' . $institute . '</td></tr>
									  <tr><td>Previous Course: </td>
									  <td>' . $course_std . '</td></tr>
									  <tr><td>Course selected: </td>
									  <td>' . $course_now . '</td></tr>';
		if ($course_now == 'MTECH') {
			if($percent > 70)
			{
				if($course_now == 'MTECH' && $course_std == 'BE')
				{
					$dis = $dis1;
				}
				else
				{
					$msg = '!!Previous course must be BE!!';
				}
			}
			else
			{
				$msg = 'Percentage should be more than 70% for ' . $course_now;
			}
		}
		elseif ($course_now == 'MCA') {
			if($percent > 70)
			{
				if($course_now == 'MCA' && ($course_std == 'BSC' || $course_std == 'BCA'))
				{
					$dis = $dis1;
				}
				else
				{
					$msg = '!!Previous course must be BCA or BSC!! ';
				}
			}	
			else
			{
				$msg = 'Percentage should be more than 70% for ' . $course_now;
			}
		}
		elseif($course_now == 'MBA')
		{
			if($percent > 60)
			{
				$dis = $dis1;

			}
			else
			{
				$msg = '!!Percentage should be more than 60% for MBA!!';
			}
		}
		elseif($course_now == 'MSC')
		{
			if($percent > 40)
			{
				if($course_now == 'MSC' && ($course_std == 'BSC' || $course_std == 'BCA' ))
				{
					$dis = $dis1;
				}
				else
				{
					$msg = '!!Previous course must be BSC or BCA!! ';
				}
			}
			else
			{
				$msg = '!!Percentage should be more than 40% for MSC!!';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
	<div class="w3-container w3-margin-top">
		<form class="w3-container w3-card-4" method="POST">
			<center><h2>Fill the form</h2></center>
			<br>
			<input class="w3-input" type="text" name="first_name" placeholder="Enter First Name" required>
			<br>
			<input class="w3-input" type="text" name="mid_name" placeholder="Enter Mid Name" required>
			<br>
			<input class="w3-input" type="text" name="last_name" placeholder="Enter Last Name" required>
			<br>
			<label>Select Your Photo</label>
			<br>
			<input class="w3-input" type="file" name="photo" required>
			<br>
			<input class="w3-input" type="text" name="father_name" placeholder="Enter Father's Name" required>
			<br>
			<textarea class="w3-input" type="text" name="address" placeholder="Enter Your Address" required></textarea>
			<br>
			<input class="w3-input" type="text" name="contact" placeholder="Enter Phone Number" required>
			<br>
			<input class="w3-input" type="email" name="email" placeholder="Enter Email " required>
			<br>
			<label>Select DOB</label>
			<input class="w3-input" type="date" name="dob" required>
			<br>
			<label>Select Gender</label>
			<br>
			<input class="w3-radio" type="radio" name="gender" value="Male" required>
			<label>Male</label>
			<br>
			<input class="w3-radio" type="radio" name="gender" value="Female" required>
			<label>Female</label>
			<br>
			<br>
			<input class="w3-input" type="text" name="percent" placeholder="Enter Previous year percentage" required>
			<br>
			<label>Select Your Hobbies</label>
			<br>
			<input class="w3-check" type="checkbox" name="hobbies" value="Singing">
			<label>Singing</label>
			<br>
			<input class="w3-check" type="checkbox" name="hobbies" value="Photography">
			<label>Sports</label>
			<br>
			<input class="w3-check" type="checkbox" name="hobbies" value="Dancing">
			<label>Dancing</label>
			<br>
			<br>
			<input class="w3-input" type="text" name="institute" placeholder="Enter Previous Institution">
			<br>
			<label>Select Previous Course</label>
			<br>
			<input class="w3-radio" type="radio" name="course_std" value="BCA">
			<label>BCA</label>
			<br>
			<input class="w3-radio" type="radio" name="course_std" value="BSC">
			<label>BSC</label>
			<br>
			<input class="w3-radio" type="radio" name="course_std" value="BCOM">
			<label>BCOM</label>
			<br>
			<input class="w3-radio" type="radio" name="course_std" value="BE">
			<label>BE</label>
			<br>
			<br>
			<label>Courses we offer</label>
			<br>
			<input class="w3-radio" type="radio" name="course_now" value="MCA">
			<label>MCA</label>
			<br>
			<input class="w3-radio" type="radio" name="course_now" value="MBA">
			<label>MBA</label>
			<br>
			<input class="w3-radio" type="radio" name="course_now" value="MTECH">
			<label>MTECH</label>
			<br>
			<input class="w3-radio" type="radio" name="course_now" value="MSC">
			<label>MSC</label>
			<br>
			<br>
			<input class="w3-button w3-black w3-left" type="reset" name="" value="Reset">
			<input class="w3-button w3-blue w3-right" type="submit" name="form_submit">
			<br>
			<br>
		</form>
	</div>
	<div class="w3-container w3-margin-top w3-card-4">
		<center><h2>Student Details</h2></center>
		<br>
		<img src="<?php echo $photo; ?>" class="w3-round" alt="image" width="250" height="250">
		<hr>
		<table class="w3-table">
			<tr>
				<th></th>
				<th></th>
			</tr>
				<?php echo $dis; ?>
		</table>
		<h2><?php echo $msg; ?></h2>
	</div>
</body>
</html>


