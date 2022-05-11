<?php
 $con = new mysqli("localhost","root","sk153445","karthi");
    
    if(isset($_POST["employee_id"])){
                
        $sql = "SELECT * FROM sk WHERE id = '".$_POST["employee_id"]."'" ;
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
                
    }
?>
