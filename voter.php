<html>
<head>
<title>VOTER ID REGISTRATION</title>
<style type="text/css">
.parallax-window {
position:absolute;
left:0px;
top:0px;
right:0px;
min-height:800px ;
width:1365px;
background: transparent;
}
.parallax-window1 {
position:absolute;
left:0px;
top:800px;
right:0px;
min-height:975px ;
width:1365px;
background: transparent;
}
img.logo
{
top:1px;
width:120px;
height:78px;
position:absolute;
left:10px;
}
body
{
	background-color:rgb(163,163,194);
}
div#head{
left:1px;
background-color:rgba(81,81,122,0.5);
width:1357px;
height:80px;
position:absolute;
top:1px;
}
div#login
{
background-color:rgba(81,81,122,0.5);
width:500;
height:340px;
position:absolute;
top:210px;
left:400px;
line-height:45px;
padding:40px;
}
img.captcha
{
width:110px;
min-height:25px;
position:absolute;
left:80px;
}
div#registration{
position:absolute;
width:1357px;
top:840px;
}
a:link{text-decoration:none;}
table
{
align-content: center;
background-color:rgba(81,81,122,0.5);
border="0px"
border-spacing: 0px;
width: 50%;
}
tr,th
{
  padding:10px;
  text-align: center;
}
body
{
background-color:rgb(163,163,194);
}
caption
{
background-color:rgba(81,81,122,0.5);
}
input[type=text],[type=password]
{
background-color: 6666ff;
width: 60%;
}
input[type=file]
{
  background-color: 6666ff;
width: 60%;
}
input[type=date]
{
width: 60%;
background-color: 6666ff;
}
textarea,select
{
width: 60%;
background-color: 6666ff;
}
</style>
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
       alert('not eligible to vote');
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
<body>
<div class="parallax-window" data-parallax="scroll" data-image-src=""></div>
<div class="parallax-window1" data-parallax="scroll" data-image-src=""></div>
<div id="head">
<img class="logo" src="voterlogo.png">
<font size="16" color=""style="font-family:;"><center>VOTER ID REGISTRATION</center></font>
</div>
<div id="login">
<center>
<form name="login" method="post" action="voterdetails.php">
<font color="" style="font-family:Calibri;font-size:28;"><b>TRACK YOUR CARD</b></font><br><br>
<font color="" style="font-family:Calibri;font-size:24;">USERNAME:</font><input type="text" name="username" required><br>
<font color="" style="font-family:Calibri;font-size:24;">PASSWORD:</font><input type="password" name="password" required><br>
<img src="captcha.php" class="captcha"><input style="position:absolute; left:202; width:51%;"type="text" name="captcha" required><br>
<input class="login_button" type="submit" name="submit" value="Login">
<input class="login_button" type="reset" name="reset" value="Reset"><br>
</form>
<a href="voteforget.php"><font size="6" style="font-family:Calibri;">Forget password?</font></a><br>
<a href="#newuser"><font size="6" style="font-family:Calibri;">Want to Register???</font></a>
</center>
</div>
<a name="newuser"></a>
<div id="registration">
<form name="newuser" method="post" action="voterdetails.php">
<table align="center" cellspacing="2" cellpadding="2">
<tr>
  <caption colspan="2" align="center"><b>APPLY VOTER ID CARD</b></caption>
  </tr>
  <tr><th>Name:</th>
  <th><input type="text" name="name" placeholder="Name"  required></th></tr>
  <tr><th>Username:</th>
  <th><input type="text" name="uname" placeholder="Username" required></th></tr>
  <tr><th>Password:</th>
  <th><input type="password" name="password" placeholder="Password" required></th></tr>
  <tr><th>Re-Password:</th>
  <th><input type="password" name="repassword" placeholder="Re-Password" onchange="pm(this)" required></th></tr>
  <tr><th>AGE:</th>
  <th><input type="text" name="age" placeholder="age" onchange="cage(this)" required></th></tr>
  <tr><th>DOB</th>
  <th><input type="date" name="date" required></th></tr>
  <tr><th>Gender:</th>
  <th><input type="radio" name="gender" value="Male" required/>Male
  <input type="radio" name="gender" value="Female" />Female</th></tr>
  <tr><th>MobileNo:</th>
  <th><input type="text" name="mob" minlength="10" maxlength="10" placeholder="mobile number"  required></th></tr>
  <tr><th>Address	:</th>
  <th><textarea name="address" rows="6" style="resize:none" placeholder="address" required></textarea></th><tr>
  <tr><th>PIN Code:</th>
  <th><input type="text" name="zip" maxlength="6" minlength="6" placeholder="pincode"  required></th></tr>
  <tr><th>Email:</th>
  <th><input type="email" name="email" placeholder="email id"  required></thr></tr>
  <tr><th>District:</th>
  <th><select name="dname" required>
  <option selected="" value="Default" >(Please select a District)</option>
  <option >Chennai</option>
  <option >Salem</option>
  <option >Vellore</option>
  <option >Kanchipuram</option>
  <option >Madurai</option>
  </select></th></tr>
  <tr><th>Fathers Name:</th>
  <th><input type="text" name="fname" placeholder="Father's name"  required></th></tr>
  <tr><th>Mothers Name:</th>
  <th><input type="text" name="mname" placeholder="Mother's name" onchange="check(this)"></th></tr>
  <tr><th>Secret Question:</th>
  <th>
  <select name="question" required>
<option></option>
<option value="pet">What is your pet's name?</option>
<option value="father">In what year was your father born?</option>
<option value="dish">What is your favorite Dish?</option></select>
  </th></tr>
  <tr><th>Answer:</th>
  <th><input type="text" name="answer" placeholder="Answer" required></th></tr>
  <tr><th>Attachement:</th></tr>
  <tr><th>
  <input type="checkbox" name="en"/>Adhaar Card</th>
  <th><input type="file"/></th></tr>
  <tr><th>
  <input type="checkbox" name="en"/>Birth Certificate</th>
  <th><input type="file"/></th></tr>
  <tr><th>
  <input type="checkbox" name="en"/>Passport photo</th>
  <th><input type="file"/></th></tr>
  <tr><th style="text-align:right"><input type="submit" name="sub"/></th><th><input type="reset"></th></tr>
  </table>
</form>
  </div>
<div style="width:290px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:1700px; left:5px; padding:25px;">
<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>
</div>
</body>
</html>
