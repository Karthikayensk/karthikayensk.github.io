<html>

<head>
<style>
.error {color: red}; 

  .main
    {
    height:750px ;
    width: 750px;
    background-color: ;
    box-shadow: 1px 1px 20px 2px   ;
    margin-top:25px ;
    margin-left: 370px;
    background-clip: border-box;
    padding-left: 500px;
}

table{

border: 3px solid black;
border-collapse: collapse;
height:90px ;
margin-top: -330PX;
margin-left: 500px;
}

tr{
  border: 3px solid black;
border-collapse: collapse;
height:70px ;
margin-top: -350PX;

}


.td{
width: 290px;
padding-left: 55px;
border: 3px solid black;
text-align: center;
}

.in{
padding-left: 50px;
font-size: 10px;
padding: -20px;
text-align: center;

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

if (!empty($name) || !empty($DOB) || !empty($FatherName) || !empty($MotherName) || !empty($Address) || !empty($Qualification) || !empty($PanNumber) || !empty($AadharNumber) || !empty($PhoneNumber))
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
</head>
<body>

 <a href="http://localhost/sk/mysql/backup.php"><button>back</button></a> 

<p><span class="error"></span></p>
<form method="post" class="main" action=""> 
<table> 

<tr> 
<td  class="td"><label style="color: darkred;"> Name  :</label></td>
<td class="in"><input type="text" Name="name" maxlength="20"   placeholder="ENTER YOUR NAME" autocomplete="off">
<span class="error"> <?php echo $nameErr;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: darkslateblue;"> date of birth  :</label></td>
<td class="in"><input type="date"   placeholder="ENTER YOUR DOB" name="dateofbirth"  autocomplete="off">
<span class="error"> <?php echo $DOBErra;?></span>
</tr>
<br><br>

<tr>
<td class="td"> <label style="color: darkred;"> Father Name  :</label></td>
<td class="in"><input type="text"  placeholder="ENTER YOUR FatherName" name="FatherName" autocomplete="off">
<span class="error"><?php echo $FatherNameErrb;?></span></td>
</tr>
<br><br>


<tr>
<td  class="td"> <label style="color: darkred;"> Mother Name  :</label></td>
<td class="in"><input type="text"   placeholder="ENTER YOUR MotherName" name="MotherName" autocomplete="off">
<span class="error"><?php echo $MotherNameErrc;?></span></td>
</tr>
<br><br>

<tr>
 <td  class="td"> <label style="color: darkred;" "font-size: 50%;">Address  :</label></td> 
<td class="in"><textarea type="text"  placeholder="ENTER YOUR Address" name="Address" autocomplete="off" rows="2" cols="20"></textarea>
<span class="error"><?php echo $AddressErrd;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: darkred;"> Qualification  :</label></td>
<td class="in"><input type="text"   placeholder="ENTER YOUR Qualification" name="Qualification" autocomplete="off">
<span class="error"><?php echo $QualificationErre;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: darkred;"> Pan Number  :</label></td>
<td class="in"><input type="text"   placeholder="ENTER YOUR PanNumber" name="PanNumber" autocomplete="off">
<span class="error"><?php echo $PanNumberErrf;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: darkred;"> Aadhar Number :</label></td>
<td class="in"><input type="number"   placeholder="ENTER YOUR AadharNumber" name="AadharNumber" autocomplete="off">
<span class="error"><?php echo $AadharNumberErrg;?></span></td>
</tr>
<br><br>

<tr>
<td  class="td"><label style="color: darkred;"> Phone Number  :</label></td>
<td class="in"><input type="text"   placeholder="ENTER YOUR PhoneNumber" name="PhoneNumber" autocomplete="off">
<span class="error"><?php echo $PhoneNumberErrh;?></span></td>
</tr>
<br><br>

<tr>
<td colspan="3" style="text-align: center;" "font-size: 100%;"> <input style="color:yellow; background-color: black"; type="submit" name="submit" value="Submit"></td> 
</tr>
</table>
</form>

<br><br>

</body>
</html>


