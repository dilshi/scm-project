<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax.min.js"></script>
<script>
var ig,cont,t;
function imgStart()
{
ig=new Array();
ig[0]="1.jpg";
ig[1]="3.png";
ig[2]="rat.jpg";
ig[3]="4.png";
document.ig.src=ig[0];
cont = 0;
t=setTimeout('imgDis()',2000);
}
function imgDis()
{
if (cont<4)
{
document.ig.src =ig[cont];
cont=cont+1;
}
else
{
cont = 0;
}
t=setTimeout('imgDis()',2000);
}
function imgStop()
{
clearTimeout(t);
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
min-height: 600px ;
width:1365px;
background: transparent;
}
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
width:45px;
min-height:45px;
position:absolute;
left:20px;
}
div#link
{
background-color:rgba(81,81,122,0.5);
width:400px;
height:320px;
position:absolute;
top:140px;
left:50px;
padding:40px;
line-height:60px;
}
div#slide
{
background-color:rgba(81,81,122,0.5);
width:600;
height:400px;
position:absolute;
top:140px;
left:650px;
}
img.slide
{
width:600;
height:400px;
}
div#rules
{
width:650px;
height:480px;
background-color:rgba(81,81,122,0.5);
position:absolute;
top:630px;
left:375px;
}
a:hover{color:black;}
a:link{text-decoration:none;}
</style>
<body onload="imgStart()" onunload="imgStop()">
<div class="parallax-window" data-parallax="scroll" data-image-src="background.jpg"></div>
<div class="parallax-window1" data-parallax="scroll" data-image-src="background2.jpg"></div>
<div id="head">
<img class="logo" src="logo.png">
<font size="16" style="font-family:;"><center>GOVERNMENT ID CARD REGISTRATION</center></font>
</div>
<div id="link">
<center>
<a href="aadhar.php"><font size="8" style="font-family:Calibri;">AADHAR CARD</font></a><br>
<a href="voter.php"><font size="8" style="font-family:Calibri;">VOTER ID</font></a><br>
<a href="ration.php"><font size="8" style="font-family:Calibri;">RATION CARD</font></a><br>
<a href="license.php"><font size="8" style="font-family:Calibri;">DRIVING LICENCE</font></a><br>
<a href="#rules"><font size="8" style="font-family:Calibri;">ABOUT THIS SITE</font></a>
</center>
</div>
<div id="slide">
<img class="slide" name="ig" src="1.png">
</div>
<a name="rules"></a>
<div id="rules">
<center><b><font size="7px">ABOUT THIS WEBSITE...</font></b></center>
<font size="5px">
<pre>
<ol>
      <li>This website is to apply for the identity cards.</li>
      <li>Provide true details.</li>
      <li>In any case the details are found to be fake you <br>will be punished by the law.</li>
      <li>It may take about a week to send the card.</li>
      <li>Thanks for visiting our website.</li>
</ol>
</pre>
</font>
</div>
</body>
</html>
