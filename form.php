<html>
<head>
<script language="javascript">
function val()
{
if (document.form1.name.value=="")
{
alert('null found for name');
document.form1.name.focus();
return false ;

}
if (document.form1.pass.value=="")
{
alert('pass null found');
document.form1.pass.focus();
return false ;

}
if (document.form1.email.value=="")
{
alert("email can't be null");
document.form1.email.focus();
return false ;

function validateEmail(value) {
  var input = document.createElement('input');

  input.type = 'email';
  input.required = true;
  input.value = value;

  return typeof input.checkValidity === 'function' ? input.checkValidity() : /\S+@\S+\.\S+/.test(value);
}
}
if (document.form1.gender.value=="")
{
alert('gender null found');
document.form1.gender.focus();
return false ;

}
if (document.form1.day.value=="")
{
alert('select day');
document.form1.day.focus();
return false ;

}
if (document.form1.month.value=="")
{
alert('select month');
document.form1.month.focus();
return false ;

}
if (document.form1.year.value=="")
{
alert('select year');
document.form1.year.focus();
return false ;

}
if (document.form1.bg.value=="")
{
alert('select a blood group');
document.form1.bg.focus();
return false ;

}
if (document.form1.deg.checked)
{
alert('select a degree');
document.form1.deg.focus();
return false ;
}
document.form1.onsubmit();
}

</script>
</head>
<title></title>
<body>
<form name="form1" onsubmit = " return val()" action="anika.php" method="post">
	<table border= '1px' align="center" >
		<tr>
			<td colspan="3" align="center"  > <h2> Person Profile </h2> </td>
		</tr>
		
		<tr>
			<td width="20%" > UserName : </td>
			<td width="70%" > <input type="text" name="name" placeholder="your username" value="" /> </td>
			<td > </td>
		</tr>
		<tr>
			<td> Password : </td>
			<td> <input type="password" name="pass" placeholder="your password" value="" /> </td>
			<td> </td>
		</tr>
		<tr>
			<td> Email : </td>
			<td> <input type="email" name="email" placeholder="example@example.com" value=""/> </td>
			<td> </td>
		</tr>
		<tr>
		<td>Gender:</td>
		<div class="gender">
			<td>
			<input type="radio" name="gender" name="gender" /> Male 
			<input type="radio" name="gender" name="gender"/> female 
			<input type="radio" name="gender" name="gender"/> Other 
			</td>
			<td> </td>
			</div>
		</tr>
		<tr>
			<td> Date of Birth : </td>
			<td id="dob">
			<input type="number"  name="day"      style="width:100px ;" /> /
			<input type="number"  name="month"    style="width:100px ;" /> /
			<input type="number"  name="year"    style="width:100px ;" />(dd/yy/mm)
			
			
			</td>
			<td> </td>
		</tr>
		<tr>
		<div class="bg">
			<td name="bg"> Blood Group : </td>
			<td> 
				<select name="bg"> 
				<option name="bg" ></option>
				<option name="bg" value = "AB+" > AB+ </option>
				<option name="bg" value = "AB-" > AB- </option>
				<option name="bg" value = "B" > B </option>
				<option name="bg" value = "B+" > B+ </option>
				<option name="bg" value = "O"> O </option>

				</select>
			
			</td>
			<td> </td>
			</div>
		</tr>
		
		<tr>
			<td name = "deg"> Degree : </td>
			<td>
				<input type="checkbox" name="deg" id = "deg"  value = "SSC"> SSC
				<input type="checkbox" name="deg" id = "deg"  value = "HSC">HSC
				<input type="checkbox" name="deg" id = "deg"  value = "BSC"> BSC
				<input type="checkbox" name="deg" id = "deg"  value = "MSC"> MSC

				</td>
				<td> </td>
			
		</tr>
			<tr>
			<td> Photo:</td>
			<td>
				<input type="file" name="" id="photo"/>
			</td>
			<td> </td>
		</tr>
		<tr>
			<td colspan="3" height="40px" ></td>
		</tr>
		<tr>
			<td colspan="3" align="right" >
				<input type="submit" name="submit" value="submit" >
				<input type="reset" name="" value="Reset">
				</td>
		</tr>
		





</table>
</form>
</body>
</html>
