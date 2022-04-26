<html>
<head>
<title>Registration Form</title>

</head>
<style>
    
    h3{
  font-family: Calibri; 
  font-size: 40px;         
  text-align: center; 
  text-decoration: underline;
  background-image: url(nature-5325411_1280.jpg);
  background-clip:text;
  -webkit-background-clip: text;
  color: transparent;
  font-style: italic;
}

table,tr,td,th{
font-family: Calibri; 
color:white; 
font-size: 16px; 
font-weight: bold;
background-color: transparent; 
border-collapse: collapse; 
border: 2px solid ;
margin-top: -420px;
padding: 20px;
padding-right: 100px;
padding-left: 100px;
font-weight: bold; 
border-radius: 25px;
}

input{
   border: 2px solid #ffd8d8c7;
    padding: 1px;
    border-radius: 22px;
    background: transparent;
}

textarea{
   border: 2px solid #ffd8d8c7;
    padding: 1px;
    border-radius: 22px;
    background: transparent;
}

.in{
    text-align: center;
    padding-right: 150px;

}


.td{
    text-align: center;
    width: 120px;
    padding-left: 50px;

}

.error{
color: red;
}

.back{
  background-color: transparent;
  color: white;
  padding: 10px 15px;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-top: -90px;
}


#sub{
    width: 300px;  
    height: 30px;  

}



<?php

$con=mysqli_connect("localhost","root","sk153445","karthi");
// define variables and set to empty values
$nameErr = $DOBErra = $FatherNameErrb = $MotherNameErrc = $AddressErrd = $QualificationErre = $PanNumberErrf = $AadharNumberErrg = $PhoneNumberErrh = NULL;
$name = $DOB = $FatherName = $MotherName = $Address = $Qualification =  $PanNumber = $AadharNumber = $PhoneNumber = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "* ENTER YOUR NAME ";
    } else {
      $name = ($_POST["name"]);
    }

    if (empty($_POST["dateofbirth"])) {
      $DOBErra = "* ENTER YOUR DATAOFBIRTH ";
    } else {
      $DOB = ($_POST["dateofbirth"]);
    }

    if (empty($_POST["FatherName"])) {
      $FatherNameErrb = "* ENTER YOUR FATHERNAME ";
    } else {
      $FatherName = ($_POST["FatherName"]);

    }

    if (empty($_POST["MotherName"])) {
      $MotherNameErrc = "* ENTER YOUR MOTHERNAME ";
    } else {
    $MotherName = ($_POST["MotherName"]);
    }

    if (empty($_POST["Address"])) {
    $AddressErrd = "* ENTER YOUR ADDRESS ";
    } else {
    $Address = ($_POST["Address"]);
    }

    if (empty($_POST["Qualification"])) {
    $QualificationErre = "* ENTER YOUR QUALIFICATION ";
    } else {
    $Qualification = ($_POST["Qualification"]);
    }

    if (empty($_POST["PanNumber"])) {
    $PanNumberErrf = "* ENTER YOUR PANNUMBER ";
    } else {
    $PanNumber = ($_POST["PanNumber"]);
    }

    if (empty($_POST["AadharNumber"])) {
    $AadharNumberErrg = "* ENTER YOUR AADHARNUMBER ";
    } else {
    $AadharNumber = ($_POST["AadharNumber"]);
    }

    if (empty($_POST["PhoneNumber"])) {
    $PhoneNumberErrh = "* ENTER YOUR PHONENUMBER ";
    } else {
    $PhoneNumber = ($_POST["PhoneNumber"]);
    }
} 

if (!empty($name) && !empty($DOB) && !empty($FatherName) && !empty($MotherName) && !empty($Address) && !empty($Qualification) && !empty($PanNumber) && !empty($AadharNumber) && !empty($PhoneNumber))
{

  $con=mysqli_connect("localhost","root","sk153445","karthi");

  $sql="INSERT INTO `sk`(`Name`, `DataOfBirth`, `FatherName`, `MotherName`, `Address`, `Qualification`, `PanNumber`, `AadharNumber`, `PhoneNumber`) VALUES ('$name','$DOB','$FatherName','$MotherName',' $Address','$Qualification','$PanNumber','$AadharNumber','$PhoneNumber')";

  $r=mysqli_query($con,$sql);

  if($r){
    echo "data inseart successfully";
    header("location: http://localhost/sk/mysql/backup.php");

  }else{
    echo "$con->error()";
  }

}
?>


</style>
 
<body background="nature_background_8.jpg" class="img">
<h3>PERSONAL FORM</h3>
 <a href="http://localhost/sk/mysql/backup.php"><button class="back">back</button></a>

<p><span class="error"></span></p>
<form method="post" class="main" action=""> 
 
<table align="center" cellpadding = "10">

<td  class="td"><label style="color: white;"> Name  :</label></td>
<td class="in"><input type="text" Name="name" maxlength="20"   placeholder="Enter Your NAME" autocomplete="off" value="<?php echo$name ?>">
<span class="error"> <?php echo $nameErr;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: white;"> date of birth  :</label></td>
<td class="in"><input type="date"   placeholder="Enter Your DOB" name="dateofbirth"  autocomplete="off" value="<?php echo$DOB ?>">
<span class="error"><?php echo $DOBErra;?></span>
</tr>
<br><br>

<tr>
<td class="td"> <label style="color: white;"> Father Name  :</label></td>
<td class="in"><input type="text"  placeholder="Enter Your FatherName" name="FatherName" autocomplete="off" value="<?php echo$FatherName ?>">
<span class="error"><?php echo $FatherNameErrb;?></span></td>
</tr>
<br><br>


<tr>
<td  class="td"> <label style="color: white;"> Mother Name  :</label></td>
<td class="in"><input type="text"   placeholder="Enter Your MotherName" name="MotherName" autocomplete="off" value="<?php echo$MotherName ?>">
<span class="error"><?php echo $MotherNameErrc;?></span></td>
</tr>
<br><br>

<tr>
 <td  class="td"> <label style="color: white;" "font-size: 50%;">Address  :</label></td> 
<td class="in"><textarea type="text"  placeholder="Enter Your Address" name="Address" autocomplete="off" rows="2" cols="20"><?php  if (isset($_POST['Address'])) { echo $_POST['Address']; } ?></textarea>
<span class="error"><?php echo $AddressErrd;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: white;"> Qualification  :</label></td>
<td class="in"><input type="text" placeholder="Enter Your Qualification" name="Qualification" autocomplete="off" value="<?php echo$Qualification ?>">
<span class="error"><?php echo $QualificationErre;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: white;"> Pan Number  :</label></td>
<td class="in"><input type="text"   placeholder="Enter Your PanNumber" name="PanNumber" autocomplete="off" value="<?php echo$PanNumber ?>">
<span class="error"><?php echo $PanNumberErrf;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: white;"> Aadhar Number :</label></td>
<td class="in"><input type="Number"  placeholder="Enter Your AadharNumber" name="AadharNumber" autocomplete="off" value="<?php echo$AadharNumber ?>">
<span class="error"><?php echo $AadharNumberErrg;?></span></td>
</tr>
<br><br>


<tr>
<td  class="td"><label style="color: white;"> Phone Number  :</label></td>
<td class="in"><input type="Number"  placeholder="Enter Your PhoneNumber" name="PhoneNumber" autocomplete="off" value="<?php echo$PhoneNumber ?>">
<span class="error"><?php echo $PhoneNumberErrh;?></span></td>
</tr>
<br><br>

 
<tr>
<td  class="td"><label style="color: white;">sign :</label></td>
<td class="in"><input type="file" name="sign">
</tr>
<br><br>


<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" id="sub">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>