<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax.min.js"></script>
<script type="text/javascript">
function check(fname)
{
	var letters=/^[A-Za-z]+$/;
	if(!fname.value.match(letters))
	{
    alert('Name must have alphabet characters only');
    fname.focus();
	}
}
function cemail(email)
{
	var format=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!email.value.match(format))
	{
    alert('You have entered an invalid email');
		email.focus();
	}
}
function pin(upin)
{
	var numbers=/^[0-9]+$/;
	if(upin.value.length==6)
	{
	if(!upin.value.match(numbers))
	{
	alert('Enter your pin code');
	upin.focus();
	}
	}
	else
	{
	alert('enter 6 digits');
  upin.focus();
	}
}
function pno(uphone)
{
	var numbers=/^[0-9]+$/;
	if(uphone.value.length==10)
	{
	if(!uphone.value.match(numbers))
	{
	alert('invalid phone no');
	uphone.focus();
	}
	}
	else
	{
	alert('enter 10 digits');
  uphone.focus();
	}
}
function cage(age)
{
  var numbers=/^[0-9]+$/;
	if(!age.value.match(numbers))
	{
	alert('invalid age');
  age.focus();
	}
  else
   {
     if(age.value<22)
     {
       alert('not eligible to apply');
       age.focus();
     }
   }
}
function pm(rep)
{
  pas=document.newuser1.password;
  if(pas.value!=rep.value)
  {
  alert('password and re-password doesnt match');
  rep.focus();
  }
}
</script>
</head>
<style type="text/css">
.parallax-window {
position:absolute;
left:0px;
top:0px;
right:0px;
min-height: 600px ;
width:1365px;
background: transparent;
}
.parallax-window1 {
position:absolute;
left:0px;
top:600px;
right:0px;
min-height:800px ;
width:1365px;
background: transparent;
}
body
{
	background-color:rgb(163,163,194);
}
div#head{
background-color:rgba(81,81,122,0.5);
width:1357px;
height:80px;
position:absolute;
top:1px;
}
img.logo
{
width:80px;
height:80px;
position:absolute;
left:20px;
}
div#login
{
background-color:rgba(81,81,122,0.5);
width:500;
height:320px;
position:absolute;
top:140px;
left:400px;
line-height:45px;
padding:40px;
}
img.captcha
{
width:110px;
min-height:25px;
position:absolute;
left:145px;
}
a:link{text-decoration:none;line-height:30px;}
a:hover{color:black;}
input.login_button
{
width:140px;
height:35px;
background-color:lightgreen;
position:relative;
top:10px;
}
div#registeration
{
width:520px;
height:970px;
background-color:rgba(81,81,122,0.5);
position:absolute;
top:630px;
left:400px;
padding:30px;
}
font.form
{
font-family:Calibri;
color:red;
font-size:18px;
}
input.form_button
{
width:150px;
height:30px;
background-color:lightgreen;
}
input[type=date]
{
width:72%;
}
th
{
text-align:left;
width:55%;
}
td
{
text-align:center;
width:100%;
}
select
{
width:73%;
}
</style>
<body bgcolor="cyan">
<div class="parallax-window" data-parallax="scroll" data-image-src=""></div>
<div class="parallax-window1" data-parallax="scroll" data-image-src=""></div>
<div id="head">
<img class="logo" src="rationlogo.png">
<font size="16" style="font-family:;"><center>RATION CARD REGISTRATION</center></font>
</div>
<div id="login">
<center>
<form name="login" method="post" action="rationdetails.php">
<font color="" style="font-family:Calibri;font-size:28;">TRACK YOUR CARD</font><br><br>
<font color="" style="font-family:Calibri;font-size:24;">USERNAME:</font><input type="text" name="username" required><br>
<font color="" style="font-family:Calibri;font-size:24;">PASSWORD:</font><input type="password" name="password" required><br>
<img src="captcha.php" class="captcha"><input style="position:absolute; left:262px;"type="text" name="captcha" required><br>
<input class="login_button" type="submit" name="submit" value="Login">
<input class="login_button" type="reset" name="reset" value="Reset"><br>
</form>
<a href="rationforget.php"><font size="6" style="font-family:Calibri;">Forget password?</font></a><br>
<a href="#newuser"><font size="6" style="font-family:Calibri;">New User?</font></a>
</center>
</div>
<a name="newuser"></a>
<div id="registeration">
<form name="newuser" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<center><font size="7" color="green">REGISTRATION</font></center>
<table border="0" width="500" align="center">
<tr><th><font class="form">No. of Member's in family:</th><th></th><th>
<select name="members">
<option>No. of Members</option>
<option name="1" value="1">1</option>
<option name="2" value="2">2</option>
<option name="3" value="3">3</option>
<option name="4" value="4">4</option>
<option name="5" value="5">5</option>
</select><input type="submit" name="ok" value="ok"></th></tr>
<?php
if(isset($_POST['ok']) && isset($_POST['members']))
{
$num_of_members=$_POST['members'];
for($i=1;$i<=$num_of_members;$i++)
{
echo '<tr><th><font class="form">Member '.$i.' Name:</font></th><td></td>';
echo '<th><input type="text" name="member-'.$i.'"></th></tr>';
}
}
?>
</form>
<form name="newuser1" method="post" action="rationdetails.php">
<tr><th><font class="form">Name:</font></th><td></td><th><input type="text" name="lname"  required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Username:</font></th><td></td><th><input type="text" name="uname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Password:</font></th><td></td><th><input type="password" name="password" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Re-Password:</font></th><td></td><th><input type="password" name="repassword" onchange="pm(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">DOB:</font></th><td></td><th><input id="date" type="date" name="date"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Age:</font></th><td></td><th><input type="text" name="age" onchange="cage(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Gender:</font></th><td></td><th><input type="radio" name="gender" value="Male" required><span>Male</span>
<input type="radio" name="gender" value="Female"><span>Female</span></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Father Name:</font></th><td></td><th><input type="text" name="fname" ></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Mother Name:</font></th><td></td><th><input type="text" name="fname" ></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Spouse Name:</font></th><td></td><th><input type="text" name="wife" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Occupation:</font></th><td></td><th><input type="text" name="fname"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Door No:</font></th><td></td><th><input type="text" name="door" maxlength="3" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Street Name:</font></th><td></td><th><input type="text" name="sname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">District:</font></th><td></td><th><input type="text" name="dname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Village:</font></th><td></td><th><input type="text" name="vname"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">State:</font></th><td></td><th><input type="text" name="stname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">PIN Code:</font></th><td></td><th><input type="text" name="zip" maxlength="6"  required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">MobileNo:</font></th><td></td><th><input type="text" name="mob" minlength="10" maxlength="10" ></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Email:</font></th><td></td><th><input type="email" name="email" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Secret Question:</font></th><td></td><th>
<select name="question" required>
<option></option>
<option value="pet">What is your pet's name?</option>
<option value="father">In what year was your father born?</option>
<option value="dish">What is your favorite Dish?</option></select>
</th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Answer:</font></th><td></td><th><input type="text" name="answer" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Attachment:</font></th><td><input type="checkbox" name="en" value="noen"><b>Birth Certificate</b></td><td><input type="file"/></th></tr><tr></tr><tr></tr>
<tr><th></th><td><input type="checkbox" name="mc" value="mc"><b>Marriage Certificate</b></td><th><input type="file" file="img"></th></tr>
<tr><th></th><td><input type="checkbox" name="ac" value="ac"><b>Aadhar card</b></td><th><input type="file"></th></tr>
<tr><th></th><td><input type="checkbox" name="vid" value="vid"><b>Voter ID</b></td><th><input type="file"></th></tr>
<tr><th></th><td><input type="checkbox" name="pp" value="tc"><b>Passport photo</b></td><th><input type="image" file="img"></th></tr><tr></tr><tr></tr>
<tr><th colspan="2"><input class="form_button" type="submit" value="Submit" name="sub"></th><th><input class="form_button" type="reset" name="clear" value="Clear"></th></tr>
</table>
<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:910px; left:-360px; padding:25px;">
<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>
</div>
</form>
</div>
</body>
</html>
