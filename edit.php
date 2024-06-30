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
	for($i=0;$i<count($hobbies);$i++){
		$hbs.=$hobbies[$i].',';

	}
	$city=$_POST['city'];

	$country=$_POST['country'];

	$phone=$_POST['phone'];

   }
	$sel="select *from register where id='".$_GET['id']."'";
	$qry=mysqli_query($con,$sel);
	$rows=mysqli_fetch_array($qry);

?>
<h2>Registration Form</h2>
<form method="post" action="">
First Name:<input type="text" name="f_name" value="<?php echo $rows=['f_name'] ?>" ><br><br>
Last Name:<input type="text" name="l_name" value="<?php echo $rows=['l_name'] ?>"><br><br>
Email Id:<input type="email" name="email" value="<?php echo $rows=['email'] ?>"><br><br>
Password:<input type="password" name="password" value="<?php echo $rows=['password'] ?>"><br><br>
Gender:
Male<input type="radio" name="gender" value="male" 
<?php if($rows['gender']=='male') {echo "checked";} ?>

><br>
Female<input type="radio" name="gender" value="female"
<?php 
if($rows['gender']=='female') {echo "checked";} ?>
><br>
Address:<textarea name="address" value="<?php echo $$rows=['address'] ?>">
</textarea><br><br>
Date Of Birth:
<select name="dd">
	<?php
	$dated=explode('/',$rows['dob']);
	for($i=1;$i<=31;$i++){
	?>
	<option value='<?php echo $i ?>' <?php if($dates[0]==$i) {echo "selected"; } ?>> <?php echo $i?></option>
    <?php
     }
    ?>

</select>
<select name="mm">
	
	<?php
	for($i=1;$i<=12;$i++){
	?>

	 <option value='<?php echo $i ?>' <?php if($dates[1]==$i) {echo "selected"; } ?>> <?php echo $i?></option>
	<?php
	}
	?>
  
</select>
<select name="yy">
  <?php
	for($i=1980;$i<=2019;$i++){
   ?>

    <option value='<?php echo $i ?>' <?php if($dates[2]==$i) {echo "selected"; } ?>> <?php echo $i?></option>
	<?php
	}
	?>
</select>
<br>
<?php
$hobbies=explode(',',$rows['hobbies']);
//print("<pre>");
//print_r($hobbies)
?>
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