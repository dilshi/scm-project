<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax.min.js"></script>
</head>
<style type="text/css">
.parallax-window {
position:absolute;
left:0px;
top:0px;
right:0px;
min-height:1400px ;
width:1365px;
background: transparent;
}
.parallax-window1 {
position:absolute;
left:0px;
top:1400px;
right:0px;
min-height:1300px ;
width:1365px;
background: transparent;
}
div#head{
background-color:rgba(78,84,96,0.5);
width:1357px;
height:80px;
position:absolute;
top:1px;
left:0px;
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
background-color:rgba(78,84,96,0.5);
width:500;
height:320px;
position:absolute;
top:110px;
left:400px;
line-height:45px;
padding:40px;
}
div#details1
{
background-color:rgba(78,84,96,0.5);
width:1300px;;
height:405px;
position:absolute;
top:620px;
left:20px;
line-height:20px;
}
div#details2
{
background-color:rgba(78,84,96,0.5);
width:1300px;;
height:1630px;
position:absolute;
top:1050px;
left:20px;
line-height:20px;
}
table
{
width:100%;
}
td
{
width:30px;
}
tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {background-color:rgba(255,200,120,0.5);}
font.form
{
color:black;
}
input[type=text],[type=date],[type=password]
{
border: 2px solid black;
background-color:rgb(102, 194, 255);
margin: 8px 0;
}
input[type=date]
{
border: 2px solid black;
background-color:rgb(102, 194, 255);
margin: 8px 0;
width:17%;
}
select
{
width:20%;
}
input[type=text]:focus
{
border: 3px solid rgb(128, 51, 0);
}
select
{
background-color:#66c2ff;
border: 2px solid black;
margin: 8px 0;
}
a:hover{color:black;}
div#submit
{
background-color:rgba(255, 243, 227,0.5);
width:1300px;;
height:30px;
position:absolute;
top:2690px;
left:20px;
text-align:center;
padding-top:8px;
}
</style>
<body bgcolor="cyan">
<div class="parallax-window" data-parallax="scroll" data-image-src="pan3.jpg"></div>
<div class="parallax-window1" data-parallax="scroll" data-image-src="pan5.jpg"></div>
<div id="head">
<img class="logo" src="logo.png">
<font size="16" color="black" style="font-family:;"><center>PANCARD REGISTRATION</center></font>
</div>
<div id="login">
<center>
<form name="login" method="post" action="">
<font color="" style="font-family:Calibri;font-size:28;">TRACK YOUR CARD</font><br><br>
<font color="" style="font-family:Calibri;font-size:24;">USERNAME:</font><input type="text" name="username"><br>
<font color="" style="font-family:Calibri;font-size:24;">PASSWORD:</font><input type="password" name="password"><br>
<input class="login_button" type="submit" name="submit" value="Login">
<input class="login_button" type="reset" name="reset" value="Reset"><br>
</form>
<a href="panforget.php"><font size="6" style="font-family:Calibri;">Forget password?</font></a><br>
<a href="#newuser"><font size="6" style="font-family:Calibri;">Want to Register???</font></a>
</center>
</div>
<a name="newuser"></a>
<div id="details1"><br>
<center><font size="6" color="green">REGISTRATION</font></center>
<table style="border-collapse: collapse" width="98%">
<tr><font size="4" color="black"><b>Sir, <br/>
&nbsp;I/We hereby request that a permanent account number be allotted to me/us.<br>
&nbsp;I/We give below the necessary details:</b></font></tr>
<tr><td width="50%" colspan="4"><font class="form">1. Full Name</font><small style="color: red">*</small></td></tr>
<tr>
<td>
<select name="title">
<option value="">Select Title</option>
<option value="1">KUMARI</option>
<option value="2">M/S</option>
<option value="3">SHRI</option>
<option value="4">SMT</option>
</select>
</td>
<td>
<font class="form">Last Name/Surname:</font><input type="text" name="lastname">
</td>
<td>
<font class="form">First Name:</font><input type="text" name="firstname">
</td>
<td>
<font class="form">Middle Name:</font><input type="text" name="middlename">
</td>
</tr>
<tr><td><font class="form">2. Name on Card<small style="color: red">*</small></font></td><td colspan="3"><input type="text" name="panname" width="30"></td></tr>
<tr><td><font class="form">3. Gender:</font></td><td colspan="3"><input type="radio" name=“gender" value="Male"><span>Male</span>
<input type="radio" name=“gender" value="Female"><span>Female</span></td></tr>
<tr><td><font class="form">4. Date Of Birth:<small style="color: red">*</small></></td><td colspan="3"><input type="date" name="dob" width="30"></td></tr>
<tr><td colspan="4"><font class="form">5. Details of Parents(applicable only for Individual applicants)<small style="color: red">*</small></font></td></tr>
<tr><td colspan="4"><font class="form">Father's Name(Mandatory - Even married woman should fill in father's name only)<small style="color: red">*</small></font></td></tr>
<tr><td>
<font class="form">Last Name/Surname:</font><input type="text" name="flastname">
</td>
<td>
<font class="form">First Name:</font><input type="text" name="ffirstname">
</td>
<td colspan="2">
<font class="form">Middle Name:</font><input type="text" name="fmiddlename">
</td></tr>
<tr><td colspan="4"><font class="form">Mother's Name(optional)<small style="color: red">*</small></font></td></tr>
<tr><td>
<font class="form">Last Name/Surname:</font><input type="text" name="flastname">
</td>
<td>
<font class="form">First Name:</font><input type="text" name="ffirstname">
</td>
<td colspan="2">
<font class="form">Middle Name:</font><input type="text" name="fmiddlename">
</td></tr>
</table>
</div>

<div id="details2">
<table style="border-collapse: collapse" width="98%">
<tr><td colspan="4">6. Residential Address <small style="color: red">*</small></td></tr>
<tr><td colspan="2"><font class="form">Flat/Door/Block Number:</font></td><td colspan="2"><input type="text" name="doorno"></td></tr>
<tr><td colspan="2"><font class="form">Name of Premises/Building/Village:</font></td><td colspan="2"><input type="text" name="building"></td></tr>
<tr><td colspan="2"><font class="form">Road/Street/Lane/Post Office:</font></td><td colspan="2"><input type="text" name="streetname"></td></tr>
<tr><td colspan="2"><font class="form">Area/Locality/Taluka/Sub-Division:</font></td><td colspan="2"><input type="text" name="area"></td></tr>
<tr><td colspan="2"><font class="form">Town/City/District:</font></td><td colspan="2"><input type="text" name="city"></td></tr>
<tr><td colspan="2"><font class="form">State/Union Territory:</font></td><td colspan="2"><select name="state" style="width:173px">
<option value="">Select State</option>
<option value="2">ANDHRA PRADESH</option>
<option value="1">ANDMAN NICOBAR</option>
<option value="3">ARUNACHAL PR</option>
<option value="4">ASSAM</option>
<option value="5">BIHAR</option>
<option value="6">CHANDIGARH</option>
<option value="33">CHHATISHGARH</option>
<option value="7">DADR &amp; NAGAR H</option>
<option value="8">DAMAN AND DIU</option>
<option value="9">DELHI</option>
<option value="10">GOA</option>
<option value="11">GUJARAT</option>
<option value="12">HARYANA</option>
<option value="13">HIMACHAL PR</option>
<option value="14">JAMMU KASHMIR</option>
<option value="35">JHARKHAND</option>
<option value="15">KARNATAKA</option>
<option value="16">KERALA</option>
<option value="17">LAKHSWADEEP</option>
<option value="18">MADHYA PRADESH</option>
<option value="19">MAHARASHTRA</option>
<option value="20">MANIPUR</option>
<option value="21">MEGHALAYA</option>
<option value="22">MIZORAM</option>
<option value="23">NAGALAND</option>
<option value="24">ORISSA</option>
<option value="99">OTHER</option>
<option value="25">PONDICHERRY</option>
<option value="26">PUNJAB</option>
<option value="27">RAJASTHAN</option>
<option value="28">SIKKIM</option>
<option value="29">TAMILNADU</option>
<option value="36">TELENGANA</option>
<option value="30">TRIPURA</option>
<option value="31">UTTAR PRADESH</option>
<option value="34">UTTRAKHAND</option>
<option value="32">WEST BENGAL</option></select></td></tr>
<tr><td colspan="2"><font class="form">Pincode/Zip code:</font></td><td colspan="2"><input type="text" name="pin"></td></tr>
<tr><td colspan="4">7. Office Address <small style="color: red">*</small></td></tr>
<tr><td colspan="2"><font class="form">Flat/Door/Block Number:</font></td><td colspan="2"><input type="text" name="doorno"></td></tr>
<tr><td colspan="2"><font class="form">Name of Premises/Building/Village:</font></td><td colspan="2"><input type="text" name="building"></td></tr>
<tr><td colspan="2"><font class="form">Road/Street/Lane/Post Office:</font></td><td colspan="2"><input type="text" name="streetname"></td></tr>
<tr><td colspan="2"><font class="form">Area/Locality/Taluka/Sub-Division:</font></td><td colspan="2"><input type="text" name="area"></td></tr>
<tr><td colspan="2"><font class="form">Town/City/District:</font></td><td colspan="2"><input type="text" name="city"></td></tr>
<tr><td colspan="2"><font class="form">State/Union Territory:</font></td><td colspan="2"><select name="state" style="width:173px">
<option value="">Select State</option>
<option value="2">ANDHRA PRADESH</option>
<option value="1">ANDMAN NICOBAR</option>
<option value="3">ARUNACHAL PR</option>
<option value="4">ASSAM</option>
<option value="5">BIHAR</option>
<option value="6">CHANDIGARH</option>
<option value="33">CHHATISHGARH</option>
<option value="7">DADR &amp; NAGAR H</option>
<option value="8">DAMAN AND DIU</option>
<option value="9">DELHI</option>
<option value="10">GOA</option>
<option value="11">GUJARAT</option>
<option value="12">HARYANA</option>
<option value="13">HIMACHAL PR</option>
<option value="14">JAMMU KASHMIR</option>
<option value="35">JHARKHAND</option>
<option value="15">KARNATAKA</option>
<option value="16">KERALA</option>
<option value="17">LAKHSWADEEP</option>
<option value="18">MADHYA PRADESH</option>
<option value="19">MAHARASHTRA</option>
<option value="20">MANIPUR</option>
<option value="21">MEGHALAYA</option>
<option value="22">MIZORAM</option>
<option value="23">NAGALAND</option>
<option value="24">ORISSA</option>
<option value="99">OTHER</option>
<option value="25">PONDICHERRY</option>
<option value="26">PUNJAB</option>
<option value="27">RAJASTHAN</option>
<option value="28">SIKKIM</option>
<option value="29">TAMILNADU</option>
<option value="36">TELENGANA</option>
<option value="30">TRIPURA</option>
<option value="31">UTTAR PRADESH</option>
<option value="34">UTTRAKHAND</option>
<option value="32">WEST BENGAL</option></select></td></tr>
<tr><td colspan="2"><font class="form">Pincode/Zip code:</font></td><td colspan="2"><input type="text" name="pin"></td></tr>
<tr><td colspan="2">8. Address for Communication</td>
<td colspan="2"><select name="comaddr">
<option value="">Select Address for Communication</option>
<option value="B">OFFICE</option>
<option value="A">RESIDENCE</option>
</select></td></tr>
<tr><td rowspan="3" colspan="2">9. Telephone number</td><td>Telephone ISD Code:</td><td><input type="text" name="isdcode"></td></tr>
<tr><td>Area/STD Code</td><td><input type="text" name="stdcode"></td></tr>
<tr><td>Telephone/Mobile number</td><td><input type="text" name="mobile"></td></tr>
<tr><td colspan="2">10. Email ID:</td><td colspan="2"><input type="text" name="email"></td></tr>
<tr><td colspan="2">11. Please Mention your AADHAAR number(if alloted):</td><td colspan="2"><input type="text" name="aadhaarno"></td></tr>
<tr><td colspan="2">12. Are you a citizen of INDIA?</td><td colspan="2"><select name="citizen">
<option value="yes">YES</option>
<option value="no">NO</option>
</select></td></tr>
<tr><td colspan="4">13. Source Of Income:</td></tr>
<tr><td colspan="2"><input type="checkbox" name="en" value="">Are you a salaried Employee?</td><td colspan="2"><input type="checkbox" name="en" value="">Are you are engaged in a business/profession?</td></tr>
<tr><td colspan="2"><input type="checkbox" name="en" value="">Income from House Property</td><td colspan="2"><input type="checkbox" name="en" value="">Capital Gains</td></tr>
<tr><td colspan="2"><input type="checkbox" name="en" value="">Income from Other source</td><td colspan="2"><input type="checkbox" name="en" value="">No Income</td></tr>
<tr><td colspan="4">14.Representative Assessee(RA)<br>Full name and address of the Representative Assessee, who is assessable under the Income Tax Act in respect of the person, whose particulars have been given above</td></tr>
<tr><td>
<select name="reptitle">
<option value="">Select Title</option>
<option value="1">KUMARI</option>
<option value="2">M/S</option>
<option value="3">SHRI</option>
<option value="4">SMT</option>
</select>
</td>
<td>
<font class="form">Last Name/Surname:</font><input type="text" name="replastname">
</td>
<td>
<font class="form">First Name:</font><input type="text" name="repfirstname">
</td>
<td>
<font class="form">Middle Name:</font><input type="text" name="repmiddlename">
</td>
</tr>
<tr><td colspan="2"><font class="form">Flat/Door/Block Number:</font></td><td colspan="2"><input type="text" name="repdoorno"></td></tr>
<tr><td colspan="2"><font class="form">Name of Premises/Building/Village:</font></td><td colspan="2"><input type="text" name="repbuilding"></td></tr>
<tr><td colspan="2"><font class="form">Road/Street/Lane/Post Office:</font></td><td colspan="2"><input type="text" name="repstreetname"></td></tr>
<tr><td colspan="2"><font class="form">Area/Locality/Taluka/Sub-Division:</font></td><td colspan="2"><input type="text" name="reparea"></td></tr>
<tr><td colspan="2"><font class="form">Town/City/District:</font></td><td colspan="2"><input type="text" name="repcity"></td></tr>
<tr><td colspan="2"><font class="form">State/Union Territory:</font></td><td colspan="2"><select name="repstate" style="width:173px">
<option value="">Select State</option>
<option value="2">ANDHRA PRADESH</option>
<option value="1">ANDMAN NICOBAR</option>
<option value="3">ARUNACHAL PR</option>
<option value="4">ASSAM</option>
<option value="5">BIHAR</option>
<option value="6">CHANDIGARH</option>
<option value="33">CHHATISHGARH</option>
<option value="7">DADR &amp; NAGAR H</option>
<option value="8">DAMAN AND DIU</option>
<option value="9">DELHI</option>
<option value="10">GOA</option>
<option value="11">GUJARAT</option>
<option value="12">HARYANA</option>
<option value="13">HIMACHAL PR</option>
<option value="14">JAMMU KASHMIR</option>
<option value="35">JHARKHAND</option>
<option value="15">KARNATAKA</option>
<option value="16">KERALA</option>
<option value="17">LAKHSWADEEP</option>
<option value="18">MADHYA PRADESH</option>
<option value="19">MAHARASHTRA</option>
<option value="20">MANIPUR</option>
<option value="21">MEGHALAYA</option>
<option value="22">MIZORAM</option>
<option value="23">NAGALAND</option>
<option value="24">ORISSA</option>
<option value="99">OTHER</option>
<option value="25">PONDICHERRY</option>
<option value="26">PUNJAB</option>
<option value="27">RAJASTHAN</option>
<option value="28">SIKKIM</option>
<option value="29">TAMILNADU</option>
<option value="36">TELENGANA</option>
<option value="30">TRIPURA</option>
<option value="31">UTTAR PRADESH</option>
<option value="34">UTTRAKHAND</option>
<option value="32">WEST BENGAL</option></select></td></tr>
<tr><td colspan="2"><font class="form">Pincode/Zip code:</font></td><td colspan="2"><input type="text" name="reppin"></td></tr>
<tr><td colspan="4">15.Documents submitted as Proof of Identity(POI),Proof of Address(POA)and Date of Birth Proof:</td></tr>
<tr><td colspan="2">Which of these documents are you submitting as an Identity Proof<small style="color: red">*</small></td>
<td><select name="idproof" style="width:173px">
<option value="">Select Identity proof</option>
<option value="16">AADHAAR Card issued by UIDAI (In Copy)</option>
<option value="15">Arms License (In Copy)</option>
<option value="21">Bank certificate in original on letter head of the branch ( alongwith  name &amp; stamp of issuing officer) containing duly attested photograph and bank A/c no of the Applicant</option>
<option value="19">Central Govt Health Scheme  Card or Ex serviceman Contributory Health Scheme photo card (In Copy)</option>
<option value="20">Certificate of identity in original signed by MP or MLA or Municipal Councilor (Annexure-A)</option>
<option value="57">Certificate of identity in original signed from Gazetted Officer</option>
<option value="3">Driving License (In Copy)</option>
<option value="4">Passport  (In Copy)</option>
<option value="18">Pensioner Card having photograph of Applicant (In Copy)</option>
<option value="17">Photo ID card issued by Central Govt or State Govt or a Public Sector Undertaking (In Copy)</option>
<option value="5">Ration Card having photograph of the applicant. (In Copy)</option>
<option value="1">Voters ID card (In Copy)</option>
</select></td>
<td><input type="file" name="idproof"></td></tr>
<tr><td colspan="2">Which of these documents are you submitting as an Address Proof<small style="color: red">*</small></td>
<td><select name="addproof" style="width:173px">
<option value="">Select Address proof</option>
<option value="21">AADHAAR Card issued by UIDAI (In Copy)</option>
<option value="22">Allotment letter of accomodation issued by Central Govt or State Govt not more than 3 Years old (In Copy)</option>
<option value="3">Bank Account Statement not more than 3 months old (In Copy)</option>
<option value="24">Certificate of address in original signed by MP or MLA or Municipal Councilor (Annexure-A)</option>
<option value="25">Certificate of address in original signed from Gazetted Officer</option>
<option value="17">Consumer Gas connection card or book or piped gas bill not more than 3 months old (In Copy)</option>
<option value="1">Copy Electricity bill not more than 3 months old.</option>
<option value="2">Copy Land Line telephone Bill or Broad band connection bill not more than 3 months old</option>
<option value="9">Credit card statement not more than 3 months old (In Copy)</option>
<option value="8">Depository account statement not more than 3 months old (In Copy)</option>
<option value="19">Domicile certificate issued by Government (In Copy)</option>
<option value="6">Driving License (In Copy)</option>
<option value="26">Employer certificate in ORIGINAL</option>
<option value="12">Latest Property tax assessment order (In Copy)</option>
<option value="5">Passport (In Copy)</option>
<option value="20">Passport of  the Spouse  (In Copy)</option>
<option value="18">Post office pass book having address of applicant (In Copy)</option>
<option value="23">Property registration document (In Copy)</option>
<option value="11">Voters ID card (In Copy)</option>
<option value="16">Water Bill not more than 3 months old (In Copy)</option>
</select></td>
<td><input type="file" name="addproof"></td></tr>
<tr><td colspan="2">Which of these documents are you submitting as DOB Proof<small style="color: red">*</small></td>
<td><select name="dobproof" style="width:173px">
<option value="">Select DOB proof</option>
<option value="21">AADHAAR Card issued by UIDAI (In Copy)</option>
<option value="13">Affidavit sworn before Magistrate stating Date of Birth (In Copy)</option>
<option value="2">Birth Certificate issued by Municipal Authority or  any office  authorized  to issue Birth &amp; Death Certificate by  Registrar of Birth and Deaths or the Indian Consulate (In Copy)</option>
<option value="23">Central Govt Health Scheme  Card or Ex serviceman Contributory Health Scheme photo card (In Copy)</option>
<option value="12">Domicile certificate issued by Government (In Copy)</option>
<option value="5">Driving License (In Copy)</option>
<option value="11">Marriage Certificate issued by Registrar of Marriages (In Copy)</option>
<option value="14">Matriculation certificate or mark sheet of recognised board (In Copy)</option>
<option value="6">Passport (In Copy)</option>
<option value="10">Pension payment order (In Copy)</option>
<option value="22">Photo ID card issued by Central Govt or State Govt or a Public Sector undertaking or State Public sector undertaking (In Copy) </option>
<option value="3">Voters ID card (In Copy)</option>
</select></td>
<td><input type="file" name="dobproof"></td></tr>
<tr><td colspan="2">16. You do hereby declare that whatever stated above is true in the capacity of<small style="color: red">*</small></td>
<td colspan="2"><select name="capacity" style="width:173px">
<option value="">Select Capacity</option>
<option value="4">AUTHORIZED SIGNATUREE</option>
<option value="3">DIRECTOR</option>
<option value="1">HIMSELF/HERSELF</option>
<option value="2">KARTA</option>
<option value="5">PARTNER</option>
<option value="7">REPRESENTATIVE ASSESSEE</option>
<option value="6">TRUSTEE</option>
</select></td></tr>
<tr><td colspan="2">Verifier Name:</td><td colspan="2"><input type="text" name="verifiername"></td></tr>
<tr><td colspan="2">Verifier Place:</td><td colspan="2"><input type="text" name="verifierplace"></td></tr>
<tr><td colspan="2">Secret Question:</td><td colspan="2"><select name="question">
<option></option>
<option value="pet">What is your pet's name?</option>
<option value="father">In what year was your father born?</option>
<option value="dish">What is your favorite Dish?</option></select></td></tr>
<tr><td colspan="2">Answer:</td><td colspan="2"><input type="text" name="answer"></td></tr>
</table>
</div>
<div id="submit">
<input type="submit" name="submit" value="SUBMIT" style="font-size:16px; color:orange; background-color:blue; width:20%;height:27.5px;">
<input type="reset" name="reset" value="RESET" style="font-size:16px; color:orange; background-color:blue; width:20%;height:27.5px;">
</div>
<div style="width:300px; height:70px; background-color:rgba(255,255,255,0.5); position:absolute; top:2740px; left:20px; padding:25px;">
<center><a href="home.php" style="text-decoration:none;"><font size="6px">CLICK HERE TO GO TO HOME PAGE</a></center>
</div>
</body>
</html>
