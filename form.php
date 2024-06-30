<?php 
include('db_connect.php');

if($_POST){
	//print"<pre>";
	//print_r($_POST);

	$first_name=$_POST['f_name'];
	$last_name=$_POST['l_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$dob=$_POST['dd'].'/'.$_POST['mm'].'/'.$_POST['yy'];

	$hobbies=$_POST['hobbies'];
	$hbs='';
	for ($i=0;$i<count($hobbies);$i++){
		$hbs.=$hobbies[$i].',';

	}
	$city=$_POST['city'];

	$country=$_POST['country'];

	$phone=$_POST['phone'];


	
	$insert="insert into register(
       f_name,
       l_name,
       email,
       password,
       gender,
       address,
       dob,
       hobbies,
       city,
       country,
       phone
       )
       VALUE(
       '$first_name',
       '$last_name',
       '$email',
       '$password',
       '$gender',
       '$address',
       '$dob',
       '$hbs',
       '$city',
       '$country',
       '$phone'
   )";

   mysqli_query($con,$insert);

   }

?>
<h2>Registration Form</h2>
<form method="post" action="">
First Name:<input type="text" name="f_name"><br><br>
Last Name:<input type="text" name="l_name"><br><br>
Email Id:<input type="email" name="email"><br><br>
Password:<input type="password" name="password"><br><br>
Gender:
Male<input type="radio" name="gender" value="male"><br>
Female<input type="radio" name="gender" value="female"><br>
Address:<textarea name="address">
</textarea><br><br>
Date Of Birth:
<select name="dd">
	<?php
	for($i=1;$i<=31;$i++){
		echo "<option value='".$i."'>".$i."</option>";
	}
	?>
</select>
<select name="mm">
	
	<?php
	for($i=1;$i<=12;$i++){
		echo "<option value='".$i."'>".$i."</option>";
	}
	?>
  
</select>
<select name="yy">
  <?php
	for($i=1980;$i<=2019;$i++){
		echo "<option value='".$i."'>".$i."</option>";
	}
	?>
</select>
<br>
Hobbies:<br>
Movie<input type="checkbox" name="hobbies[]" value="Movie"> 
 Cricket<input type="checkbox" name="hobbies[]" value="Cricket">
 Reading<input type="checkbox" name="hobbies[]" value="Reading">
 Swiming<input type="checkbox" name="hobbies[]" value="Swiming"><br><br>
 City:<input type="text" name="city" value="city"><br><br>
Country:
<select name="country">
  <option value="India">India</option>
  <option value="Pakisthan">Pakisthan</option>
  <option value="China">China</option>
  <option value="Srilanka">Srilanka</option>
  <option value="Bengladesh">Bengladesh</option>
</select><br><br>

Phone Number:<input type="phone" name="phone"><br><br>
Submit:<input type="submit" name="submit" value="Register Now">
</form>
<body>

</body>
</html>