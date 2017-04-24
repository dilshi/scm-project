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
}
function pm(rep)
{
  pas=document.newuser.password;
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
width:120px;
min-height:40px;
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
a:link{text-decoration:none;line-height:30px;color:green;}
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
height:800px;
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
input[type=date],select
{
width:72%;
}
</style>
<body>
<div class="parallax-window" data-parallax="scroll" data-image-src="main.jpg"></div>
<div class="parallax-window1" data-parallax="scroll" data-image-src="main3.jpg"></div>
<div id="head">
<img class="logo" src="aadhaar_logo.png">
<font size="16" style="font-family:;"><center>AADHAR CARD REGISTRATION</center></font>
</div>
<div id="login">
<center>
<form name="login" method="post" action="aadhardetails.php">
<font color="" style="font-family:Calibri;font-size:28;">TRACK YOUR CARD</font><br><br>
<font color="" style="font-family:Calibri;font-size:24;">USERNAME:</font><input type="text" name="username" required><br>
<font color="" style="font-family:Calibri;font-size:24;">PASSWORD:</font><input type="password" name="password" required><br>
<img src="captcha.php" class="captcha"><input style="position:absolute; left:262px;"type="text" name="captcha" required><br>
<input class="login_button" type="submit" name="submit" value="Login">
<input class="login_button" type="reset" name="reset" value="Reset"><br>
</form>
<a href="aadharforget.php"><font size="6" style="font-family:Calibri;">Forget password?</font></a><br>
<a href="#newuser"><font size="6" style="font-family:Calibri;">Want to Register???</font></a>
</center>
</div>
<a name="newuser"></a>
<div id="registeration">
<form name="newuser" method="post" enctype="multipart/formdata" action="aadhardetails.php">
<center><font size="7" color="green">REGISTRATION</font></center>
<table border="0" width="500" align="center">
<tr><th><font class="form">First Name:</font></th><th></th><th><input type="text" name="fname" minlength="1" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Last Name:</font></th><th></th><th><input type="text" name="lname" minlength="1" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Username:</font></th><th></th><th><input type="text" name="uname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Password:</font></th><th></th><th><input type="password" name="password" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Re-Password</font></th><th></th><th><input type="password" name="repassword" onchange="pm(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">DOB:</font></th><th></th><th><input id="date" type="date" name="date" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Age:</font></th><th></th><th><input type="text" name="age"  required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Gender:</font></th><th></th><th><input type="radio" name="gender" value="Male" required><span>Male</span>
<input type="radio" name="gender" value="Female"><span>Female</span></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Father Name:</font></th><th></th><th><input type="text" name="faname"  required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Mother Name:</font></th><th></th><th><input type="text" name="moname" onchange="check(this)"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Occupation:</font></th><th></th><th><input type="text" name="occ"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Door NO:</font></th><th></th><th><input type="text" name="door" maxlength="3" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Street Name:</font></th><th></th><th><input type="text" name="sname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">District:</font></th><th></th><th><input type="text" name="dname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Village:</font></th><th></th><th><input type="text" name="vname"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">State:</font></th><th></th><th><input type="text" name="stname"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">PIN Code:</font></th><th></th><th><input type="text" name="zip" onchange="pin(this)" minlength="6" maxlength="6"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">MobileNo:</font></th><th></th><th><input type="text" name="mob"   minlength="10" maxlength="10" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Email:</font></th><th></th><th><input type="email" name="email"  required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Secret Question:</font></th><th></th><th>
<select name="question" required>
<option></option>
<option value="pet">What is your pet's name?</option>
<option value="father">In what year was your father born?</option>
<option value="dish">What is your favorite Dish?</option></select>
</th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Answer:</font></th><th></th><th><input type="text" name="answer" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Document:</font></th><th><input type="checkbox" name="en" value="noen" required>Birth Certificate</th><th><input type="file" name="file" required></th></tr><tr></tr><tr></tr>
<tr><th></th><th><input type="checkbox" name="en" value="tc" required>Passport photo</th><th><input type="file" file="img" required></th></tr><tr></tr><tr></tr>
<tr><th colspan="2"><input class="form_button" type="submit" name='sub' value="Submit"></th><th><input class="form_button" type="reset" name="clear" value="Clear"></th></tr>
</table>
</form>
</div>
<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:1370px; left:40px; padding:25px;">
<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>
</div>
</body>
</html>
