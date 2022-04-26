<html>

<head>
<style>
 .error {color: red}; 
</style>
</head>
<body style="background-color:lightblue;">


<?php





// define variables and set to empty values
$nameErr = $subErra = $subErrb = $subErrc = $subErrd = $subErre = NULL;
$name = $Tamil = $English = $Maths = $Science = $Cscience = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "* PLEASE ENTER YOUR DETAILS ";
  } else {
    $name = ($_POST["name"]);
  }
  
  if (empty($_POST["Tamil"])) {
    $subErra = "* PLEASE ENTER YOUR DETAILS ";
  } else {
    $Tamil = ($_POST["Tamil"]);
  }
    
  if (empty($_POST["English"])) {
    $subErrb = "* PLEASE ENTER YOUR DETAILS ";
  } else {
    $English = ($_POST["English"]);

  }

  if (empty($_POST["Maths"])) {
    $subErrc = "* PLEASE ENTER YOUR DETAILS ";
  } else {
    $Maths = ($_POST["Maths"]);
  }

  if (empty($_POST["Science"])) {
    $subErrd = "* PLEASE ENTER YOUR DETAILS ";
  } else {
    $Science = ($_POST["Science"]);
  }
 
 if (empty($_POST["Cscience"])) {
    $subErre = "* PLEASE ENTER YOUR DETAILS ";
  } else {
    $Cscience = ($_POST["Cscience"]);
  }
} 
?>

<center><br><br>  
<h2 style="color:darkgoldenrod;">STUDENT MARK LIST</h2><br>
<p><span class="error"></span></p>
<table>
  <form method="post">  

    
  <label style="color: darkred;"> Name  :</label>

  <input type="text" Name="name" min="0" max="100"  placeholder="ENTER YOUR NAME" autocomplete="off">
  <span class="error"> <?php echo $subErra;?></span>
  <br><br>

  <label style="color: darkslateblue;"> Tamil  :</label>
  <input type="number" min="0" max="100"  placeholder="ENTER YOUR MARK" name="Tamil"  autocomplete="off">
  <span class="error"> <?php echo $subErra;?></span>
  <br><br>

    <label style="color: darkred;"> English  :</label>
  <input type="number" min="0" max="100"  placeholder="ENTER YOUR MARK" name="English" autocomplete="off">
  <span class="error"><?php echo $subErrb;?></span>
  <br><br>

    <label style="color: darkred;"> Maths  :</label>
 <input type="number" min="0" max="100"  placeholder="ENTER YOUR MARK" name="Maths" autocomplete="off">
  <span class="error"><?php echo $subErrc;?></span>
  <br><br>

    <label style="color: darkred;"> Science  :</label>
 <input type="number" min="0" max="100"  placeholder="ENTER YOUR MARK" name="Science" autocomplete="off">
  <span class="error"><?php echo $subErrd;?></span>
  <br><br>

    <label style="color: darkred;"> Cscience  :</label>
  <input type="number" min="0" max="100"  placeholder="ENTER YOUR MARK" name="Cscience" autocomplete="off">
  <span class="error"><?php echo $subErre;?></span>
  <br><br>


  <input style="color:yellow; background-color: black"; type="submit" name="submit" value="Submit">  
</table>
</form>


<?php

// subject name
$subjectneme1 = $Tamil;
$subjectneme2 = $English;
$subjectneme3 = $Maths;
$subjectneme4 = $Science;
$subjectneme5 = $Cscience;

if(isset($_POST['submit'])) {
 echo "<h2  style=color:red;>STUDENT MARK DETAILS</h2>";


  if(isset($name)){
    echo "Name: " .$name. "<br>";
  }else{
    echo "";
  }
   if(isset($subjectneme1)){
    echo "TAMIL :".$subjectneme1."<br>";
  }else{
    echo "";
  }

  if (isset($subjectneme2)){
   echo "ENGLISH :".$subjectneme2."<br>";
 }else {
  echo "";
}

if (isset($subjectneme3)){
   echo "Maths :".$subjectneme3."<br>";
}else {
  echo "";
}

if (isset($subjectneme4)){
   echo "Science :".$subjectneme4."<br>";
}else {
  echo "";
}
if (isset($subjectneme5)){
   echo "Cscience :".$subjectneme5."<br>";
}else {
  echo "";
}

// Student Total Marks
$Total = $Tamil+$English+$Maths+$Science+$Cscience ;  

if (isset($Total) & $Total  != 0 ){
   echo "Total :".$Total."<br>";
}else {
  echo "";
}

//Find the Avarage      
$Average = $Total/5;

if (isset($Average) & $Average  != 0){
   echo "Average :".$Average."<br>";
}else {
  echo "";
}

// Student Grade
$Grade = $Average;

//student grade

if ($Grade > 60 ) {
 echo(ucfirst("distinct"));
 
 }elseif ($Grade > 50) {
   echo(ucfirst("first"));

 }elseif ($Grade >40) {
  echo (ucfirst("second"));

}elseif ($Grade > 30) {
   echo(ucfirst("pass")); 

}elseif($Grade <30) {
 echo(ucfirst("")); 
}

else{
echo "Better luck next time";  }


}die;
?>


</center>   

</body>
</html>