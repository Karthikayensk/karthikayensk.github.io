<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style>
  

  
table,tr,td{

border: 1px solid black;
border-collapse: collapse;
height:40px ;
margin-top: 10PX;
text-align: center;

}

th {

    border: 1px solid black;
    background-color: #04AA6D;
    color: white;
    padding: 40px;
    font-weight: bold;
}

.add{
   background-color: #4CAF50;
  color: white;
  padding: 15px 32px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;

}


</style>
<body>
<a href="http://localhost/sk/mysql/php.php"><button class="add">add</button></a>

<table>

  <th>Name</th>
  <th>DataOfBirth</th>
  <th>FatherName</th>
  <th>MotherName</th>
  <th>Address</th>
  <th>Qualification</th>
  <th>PanNumber</th>
  <th>AadharNumber</th>
  <th>PhoneNumber</th>

<?PHP






//$con=mysqli_connect("localhost","root","sk153445","karthi");
include("mysqldata.php");
$sk = new database();
$conn=$sk->basedata();

$data="SELECT * FROM sk";
$result = $conn->query($data);
// var_dump($result);


    if($result->num_rows > 0)
    {

       while($row=$result->fetch_assoc())
       {
        echo "<tr><td>" .$row["Name"] . "</td>";
        echo "<td>" .$row["DataOfBirth"] . "</td>";
        echo "<td>" .$row["FatherName"] . "</td>";
        echo "<td>" .$row["MotherName"] . "</td>";
        echo "<td>" .$row["Address"] . "</td>";
        echo "<td>" .$row["Qualification"] . "</td>";
        echo "<td>" .$row["PanNumber"] . "</td>";
        echo "<td>" .$row["AadharNumber"] . "</td>";
        echo "<td>" .$row["PhoneNumber"] . "</td></tr>";  
       }

    }
    else
    {
      echo "unsucess";
    }
?>



</table>

</body>
</html>
