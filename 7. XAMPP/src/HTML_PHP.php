<html>
<title>HTML PHP in one</title>
<form>
<body style="background-color:lightblue;">
<h2 style="text-align:center;">Login Page</h2>
<center>
<table>
<tr><td>First Name</td><td><input type="text" name="fname"></td></tr>
<tr><td>Last name:</td><td><input type="text" name="lname"></td></tr>
<tr><td>Gender</td>
<td>
<select name="f">
<option value="m">Male</option>
<option value="f">Female</option>
<option value="o">Others</option>
</select>
</td>
</tr>
<tr><td><input type="submit" value="Submit"></td><td></td></tr>
</table>
</center>
</form>
</html>

<?php
$first=$_POST["fname"];
$last=$_POST["lname"];
$g=$_POST["f"];
$gender="Other";
if($f=="m")
{
$gender="Male";
}
if($f=="f")
{
$gender="Female";
}
echo "First Name: $first";
echo "Last Name: $last";
echo "Gender: $gender";
?>