<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax.min.js"></script>
<script>
function backgroundchanger( )
{
document.body.style.backgroundColor =f1.c.value;
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
div#theme
{
background-color:rgba(81,81,122,0.5);
width:150px;
height:23px;
position:absolute;
top:90px;
}
img.logo
{
top:1px;
width:120px;
height:78px;
position:absolute;
left:10px;
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
font.form
{
font-family:Calibri;
color:red;
font-size:18px;
}
input[type=text],select
{
width:90%;
}
</style>
<body>
<div class="parallax-window" data-parallax="scroll" data-image-src=""></div>
<div id="head">
<img class="logo" src="voterlogo.png">
<font size="16" style="font-family:;"><center>VOTER ID FORGET PASSWORD</center></font>
</div>
<div id="theme">
<form name="f1">
<input type="color" name="c"/><input type="button" name="theme" value ="Change Theme" Onclick = "backgroundchanger();"/>
</form>
</div>
<div id="login">
<form name="voteforget" method="post" action="voterdetails.php">
<center><font size="14" color="brown">Forget Password</font></center>
<table>
<br>
<tr><td><center><font color="brown" size="6">Username</font></center></td><td><center><input type="text" background-color="brown" name="username" placeholder="UserName" required></center></td></tr>
<tr><td><center><font color="brown" size="6">Secret Question</font></center></td>
<td><center><select name="question" placeholder="Select your Question" required>
<option></option>
<option value="pet">What is your pet's name?</option>
<option value="father">In what year was your father born?</option>
<option value="dish">What is your favorite Dish?</option></select></center></td></tr>
<tr><td><center><font size="6" color="brown">Answer</font></center></td><td><center><input type="text" name="answer" placeholder="Answer" required></center></td></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr><td><center><img style="min-height:25px;" src="captcha.php" class="captcha"></center></td><td><center><input type="text" name="captcha" required></center></td></tr>
<tr><td><center><input class="login_button" type="submit" name="submit1" value="Login"></center></td>
<td><center><input class="login_button" type="reset" name="reset"></center></td></tr>
</table>
<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:280px; left:-360px; padding:25px;">
<center><a href="voter.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>
</div>
<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:280px; left:590px; padding:25px;">
<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>
</div>
</form>
</body>
</html>
