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
     if(age.value<18)
     {
       alert('not eligible to apply');
       age.focus();
     }
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
.parallax-window{
position:absolute;
left:0px;
top:0px;
right:0px;
min-height: 600px ;
width:1365px;
background: transparent;
}
.parallax-window1{
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
width:45px;
min-height:45px;
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
height:920px;
background-color:rgba(81,81,122,0.5);
position:absolute;
top:630px;
left:400px;
padding:30px;
text-align:left;
}
font.form
{
font-family:Calibri;
color:green;
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
select
{
width:72%;
}
</style>
<body bgcolor="indigo">
<div class="parallax-window" data-parallax="scroll" data-image-src=""></div>
<div class="parallax-window1" data-parallax="scroll" data-image-src=""></div>
<div id="head">
<img class="logo" src="logo.png">
<font size="16" style="font-family:;"><center>DRIVING LICENCE REGISTRATION</center></font>
</div>
<div id="login">
<center>
<form name="login" method="post" action="licensedetails.php">
<font color="" style="font-family:Calibri;font-size:28;">TRACK YOUR CARD</font><br><br>
<font color="" style="font-family:Calibri;font-size:24;">USERNAME:</font><input type="text" name="username" required><br>
<font color="" style="font-family:Calibri;font-size:24;">PASSWORD:</font><input type="password" name="password" required><br>
<img src="captcha.php" class="captcha"><input style="position:absolute; left:262px;"type="text" name="captcha" required><br>
<input class="login_button" type="submit" name="submit" value="Login">
<input class="login_button" type="reset" name="reset" value="Reset"><br>
</form>
<a href="licenseforget.php"><font size="6" style="font-family:Calibri;">Forget password?</font></a><br>
<a href="#newuser"><font size="6" style="font-family:Calibri;">Want to Register???</font></a>
</center>
</div>
<a name="newuser"></a>
<div id="registeration">
<form name="newuser" method="post" action="licensedetails.php">
<center><font size="7" color="red">REGISTRATION</font></center>
<table border="0" width="500" align="center">
<tr><th><font class="form">First Name:</font></th><th></th><th><input type="text" name="fname" onchange="check(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Last Name:</font></th><th></th><th><input type="text" name="lname" onchange="check(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Username:</font></th><td></td><th><input type="text" name="uname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Password:</font></th><td></td><th><input type="password" name="password" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Re-Password:</font></th><td></td><th><input type="password" name="repassword" onchange="pm(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">DOB:</font></th><th></th><th><input id="date" type="date" name="date" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Age:</font></th><th></th><th><input type="text" name="age" onchange="cage(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Gender:</font></th><th></th><th><input type="radio" name="gender" value="Male" required><span>Male</span>
<input type="radio" name="gender" value="Female"><span>Female</span></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Father Name:</font></th><th></th><th><input type="text" name="faname" onchange="check(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Mother Name:</font></th><th></th><th><input type="text" name="moname"></th></tr><tr></tr><tr></tr>
<tr><th colspan="2" align="left"><font class="form" align="left">Residential Address:</font></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Door No:</font></th><th></th><th><input type="text" name="door" maxlength="3" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Street Name:</font></th><th></th><th><input type="text" name="sname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">District:</font></th><th></th><th><input type="text" name="dname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Village:</font></th><th></th><th><input type="text" name="vname"></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">State:</font></th><th></th><th><input type="text" name="stname" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">PIN Code:</font></th><th></th><th><input type="text" name="zip" maxlength="6" onchange="pin(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Vehicle Model:</font></th><th></th><th>
<select name="vehiclemodel" required>
<option name="" value="">Select Vehicle model</option>
<option name="2wheeler" value="2wheeler">Two-Wheeler</option>
<option name="3wheeler" value="3wheeler">Three-Wheeler</option>
<option name="4wheeler" value="4wheeler">Four-Wheeler</option>
<option name="6wheeler" value="6wheeler">Six-Wheeler</option>
<option name="8wheeler" value="8wheeler">Eight-Wheeler</option>
</select>
</th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Vehicle Type:</font></th><th></th><th>
<select name="vehicletype" required>
<option name="" value="">Select Vehicle type</option>
<option name="gear" value="gear">Geared vehicle</option>
<option name="gearless" value="gearless">Gearless vehicle</option>
</select>
</th></tr><tr></tr><tr></tr>
<tr><th><font class="form">MobileNo:</font></th><th></th><th><input type="text" name="mob" minlength="10" maxlength="10" onchange="pno(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Email:</font></th><th></th><th><input type="email" name="email" onchange="cemail(this)" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Secret Question:</font></th><th></th>
<th>
<select name="question" required>
<option></option>
<option value="pet">What is your pet's name?</option>
<option value="father">In what year was your father born?</option>
<option value="dish">What is your favorite Dish?</option></select>
</th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Answer:</font></th><th></th><th><input type="text" name="ans" required></th></tr><tr></tr><tr></tr>
<tr><th><font class="form">Document:</font></th><th><input type="checkbox" name="en" value="noen">Birth Certificate</th><th><input type="file"/></th></tr><tr></tr><tr></tr>
<tr><th></th><th><input type="checkbox" name="vid" value="vid">Voter ID</th><th><input type="file"></th></tr><tr></tr><tr></tr>
<tr><th></th><th><input type="checkbox" name="ac" value="ac">Aadhar Card</th><th><input type="file"></th></tr><tr></tr><tr></tr>
<tr><th></th><th><input type="checkbox" name="en" value="tc">Passport photo</th><th><input type="file" file="img"></th></tr><tr></tr><tr></tr>
<tr><th colspan="2"><input class="form_button" type="submit" name="sub" value="Submit"></th><th><input class="form_button" type="reset" name="clear" value="Clear"></th></tr>
</table>
<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:860px; left:-360px; padding:25px;">
<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>
</div>
</form>
</div>
</body>
</html>
