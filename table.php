<?php
$c=mysqli_connect("localhost","root");
if($c)
{
mysqli_select_db($c,"osppro");
//$r=mysqli_query($c,"create table aadhar(fname varchar(25),lname varchar(25),dob varchar(25),age int,gen varchar(25),faname varchar(25),dno int,street varchar(25),dist varchar(25),stat varchar(25),mobno int,username varchar(25),password varchar(25),email varchar(25),question varchar(30),ans varchar(30))");
//$r=mysqli_query($c,"create table license(fname varchar(25),lname varchar(25),uname varchar(25),password varchar(25),dob varchar(25),age int,gender varchar(25),faname varchar(25),dno int,street varchar(25),dist varchar(25),state varchar(25),pin int,vehiclemodel varchar(25),vehicletype varchar(25),mobno varchar(10),email varchar(25),question varchar(30),ans varchar(30))");
//$r=mysqli_query($c,"create table voter(name varchar(25),username varchar(25),password varchar(25),age int,dob varchar(25),gen varchar(25),mobno varchar(12),address varchar(100),pincode int,email varchar(25),district varchar(25),faname varchar(25),question varchar(25),ans varchar(25))");
//$r=mysqli_query($c,"create table ration(name varchar(25),username varchar(25),password varchar(25),age int,gen varchar(25),spouse varchar(25),dno int,street varchar(25),dist varchar(25),state varchar(25),pin int,email varchar(25),question varchar(25),ans varchar(25))");
if($r)
print "created";
mysqli_close($c);
}
else
print "not connected";
?>
