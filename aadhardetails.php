<html>
<style type="text/css">
div#head{
background-color:rgba(81,81,122,0.5);
width:1357px;
height:80px;
position:absolute;
top:1px;
}
body
{
	background-color:rgb(163,163,194);
}
img.logo
{
width:120px;
min-height:40px;
position:absolute;
left:20px;
}
</style>
<body>
<div id="head">
<img class="logo" src="aadhaar_logo.png">
<font size="16" style="font-family:;"><center>AADHAR CARD DETAILS</center></font>
</div>
</body>
</html>
<?php
if (isset($_POST['submit']))
{
session_start();
if($_POST['captcha'] == $_SESSION['my_captcha'])
{
$r=1;
}
else
{
$r=0;
}
unset($_SESSION['my_captcha']);
if($r==1)
{
$uname=$_POST['username'];
$pa=$_POST['password'];
$c=mysqli_connect("localhost","root");
if($c)
{
  mysqli_select_db($c,"osppro");
  $k=0;
  $q=mysqli_query($c,"select username,password from aadhar");
  while ($r=mysqli_fetch_row($q))
  {
    if($r[0]==$uname)
    {
      if($r[1]==$pa)
      {
        $k=1;
        echo "<script language=javascript>alert(\"your card is under process will be delivered soon\");</script>";
        $re=mysqli_query($c,"select * from aadhar where username='$uname'");
        $ans=mysqli_fetch_row($re);
        $i=0;
        print '<div style="width:350px; height:450px; background-color:rgba(81,81,122,0.5); position:absolute; top:220px; left:500px;">';
        print '<table border="1px" align="center" style="border-color:#660066;">';
        print '<font size="6px"><center>Your Details</center></font>';
        while($i<16)
        {
		$field=mysqli_fetch_field($re);
        print '<tr><td><b><p style="text-transform:uppercase;">'.$field->name.'</p></b></td><td><b><p style="text-transform:uppercase;">'.$ans[$i].'</p></b></td></tr>';
        $i++;
        }
        print "</table>";
        print '</div>';
        break;
      }
    }
  }
  if($k!=1)
  echo "<script language=javascript>alert(\"username or passwordis wrong\");</script>";
  //header("location:aadhar.php");
  print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
  print '<center><a href="aadhar.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
  print '</div>';
  print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
  print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
  print '</div>';
}
}
else
{
	echo "<script language=javascript>alert(\"Invalid Captcha\");</script>";
	print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
  print '<center><a href="aadhar.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
  print '</div>';
  print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
  print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
  print '</div>';
}
}
 ?>
 <?php
 if(isset($_POST['sub']))
 {
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $dob=$_POST['date'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $faname=$_POST['faname'];
   $dno=$_POST['door'];
   $street=$_POST['sname'];
   $dis=$_POST['dname'];
   $stat=$_POST['stname'];
   $mob=$_POST['mob'];
   $uname=$_POST['uname'];
   $pass=$_POST['password'];
   $email=$_POST['email'];
   $sq=$_POST['question'];
   $ans=$_POST['answer'];
	 $pas=0;
	 if(preg_match("#^[A-Za-z\ ]*$#",$fname))
	 {
		 if (preg_match("#^[A-Za-z\ ]*$#",$lname))
		 {
			  if(preg_match("#^[0-9]{1,3}$#",$age))
				{
						if(preg_match("#^[A-Za-z\ ]*$#",$faname))
						{
							if(preg_match("#^[0-9]{1,3}$#",$dno))
							{
								if(preg_match("#^[0-9]{10}$#",$mob))
								{
									if(preg_match("#^[A-z0-9]+[\.A-z0-9]*@[A-z]*\.com$#",$email))
									{
										$pas=1;
									}
									else
									{
										echo "<script language=javascript>alert(\"invalid mail id \");</script>";
									}
								}
								else
								{
								echo "<script language=javascript>alert(\"invalid mobile num\");</script>";
								}
							}
							else
							 {
								 echo "<script language=javascript>alert(\"invalid door num\");</script>";
							 }
						}
						else
						{
							echo "<script language=javascript>alert(\"name should have alphabets only\");</script>";
						}
				}
				else
				 {
					echo "<script language=javascript>alert(\"invalid age\");</script>";
				}
		 }
		 else
		 {
			 echo "<script language=javascript>alert(\"name should have alphabets only\");</script>";
		 }
	 }
	 else
	 {
		 echo "<script language=javascript>alert(\"name should have alphabets only\");</script>";
	 }
	 if($pas==1)
	 {
 $c=mysqli_connect("localhost","root");
 mysqli_select_db($c,"osppro");
 $q=mysqli_query($c,"select username from aadhar");
 $k=0;
 while ($r=mysqli_fetch_row($q))
 {
   if($r[0]==$_POST['uname'])
   {
     print "<script language='JavaScript'>alert('User already exist');</script>";
     $k=1;
     print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
  print '<center><a href="aadhar.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
  print '</div>';
     print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
  print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
  print '</div>';
   }
 }

 if($k!=1)
 {
 if(mysqli_query($c,"insert into aadhar values('$fname','$lname','$dob',$age,'$gender','$faname',$dno,'$street','$dis','$stat',$mob,'$uname','$pass','$email','$sq','$ans')"))
 {
 print "<script language='JavaScript'>alert('user added');</script>";
    echo "<script language=javascript>alert(\"your card is under process will be delivered soon\");</script>";
    $re=mysqli_query($c,"select * from aadhar where username='$uname'");
    $ans=mysqli_fetch_row($re);
    $i=0;
    print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
  print '<center><a href="aadhar.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
  print '</div>';
    print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
  print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
  print '</div>';
    print '<div style="width:400px; height:450px; background-color:rgba(81,81,122,0.5); position:absolute; top:220px; left:500px;">';
        print '<table border="1px" align="center" style="border-color:#660066;">';
        print '<font size="6px"><center>Your Details</center></font>';
        while($i<16)
        {
		$field=mysqli_fetch_field($re);
		print '<tr><td><b><p style="text-transform:uppercase;">'.$field->name.'</p></b></td><td><b><p style="text-transform:uppercase;">'.$ans[$i].'</p></b></td></tr>';
        //print "<tr><td>$field->name</td><td>".$ans[$i]."</td></tr>";
        $i++;
        }
        print "</table>";
        print '</div>';
 }
 else
 {
print mysqli_error($c);
 }
 }
 }
 else
 {
 print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
 print '<center><a href="aadhar.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
 print '</div>';
 print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
 print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
 print '</div>';
 }
 }
  ?>
<?php
if(isset($_POST['fsubmit']))
{
session_start();
if($_POST['captcha'] == $_SESSION['my_captcha'])
{
$v=1;
}
else
{
$v=0;
}
unset($_SESSION['my_captcha']);
if($v==1)
{
    $uname=$_POST['username'];
    $sq=$_POST['question'];
    $ans=$_POST['answer'];
    $c=mysqli_connect("localhost","root");
    mysqli_select_db($c,"osppro");
    $k=0;
    $q1=mysqli_query($c,"select username from aadhar");
    while ($r=mysqli_fetch_row($q1))
    {
      if($r[0]==$uname)
      {
        $k=1;
      }
    }
    if($k==1)
    {
    $q=mysqli_query($c,"select question,ans from aadhar where username='$uname'");
    $r=mysqli_fetch_row($q);
    if($r[0]==$sq && $r[1]==$ans)
    {
      echo "<script language=javascript>alert(\"your card is under process will be delivered soon\");</script>";
      $re=mysqli_query($c,"select * from aadhar where username='$uname'");
      $ans=mysqli_fetch_row($re);
      $i=0;
      print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
  print '<center><a href="aadhar.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
  print '</div>';
    print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
  print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
  print '</div>';
      print '<div style="width:400px; height:450px; background-color:rgba(81,81,122,0.5); position:absolute; top:220px; left:500px;">';
        print '<table border="1px" align="center" style="border-color:#660066;">';
        print '<font size="6px"><center>Your Details</center></font>';
        while($i<16)
        {
		$field=mysqli_fetch_field($re);
		print '<tr><td><b><p style="text-transform:uppercase;">'.$field->name.'</p></b></td><td><b><p style="text-transform:uppercase;">'.$ans[$i].'</p></b></td></tr>';
        //print "<tr><td>$field->name</td><td>".$ans[$i]."</td></tr>";
        $i++;
        }
        print "</table>";
        print '</div>';
    }
    else
    {
    echo "<script language=javascript>alert(\"wrong answer\");</script>";
    print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
  print '<center><a href="aadharforget.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
  print '</div>';
  print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
  print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
  print '</div>';
    }
  }
  else
  {
    echo "<script language=javascript>alert(\"user doesn't exist\");</script>";
  print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
  print '<center><a href="aadharforget.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
  print '</div>';
  print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
  print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
  print '</div>';
  }
}
else
{
echo "<script language=javascript>alert(\"Invalid Captcha\");</script>";
print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:300px; padding:25px;">';
print '<center><a href="aadharforget.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO BACK</a></center>';
print '</div>';
print '<div style="width:300px; height:70px; background-color:rgba(81,81,122,0.5); position:absolute; top:90px; left:700px; padding:25px;">';
print '<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>';
print '</div>';  
}
}
?>
