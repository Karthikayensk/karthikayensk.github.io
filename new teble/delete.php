<?php

$con = new mysqli("localhost","root","sk153445","karthi");

if(isset($_GET['id'])){

    $id= $_GET['id'];

    delete($con, $id);

}

function delete($connection, $id){

    $query="DELETE from sk WHERE id=$id";

    $exec= mysqli_query($connection,$query);

   
      if ($exec === true) {

        echo json_encode(['sucess'=>'The Employee is Deleted Successfully','status'=>200]);
      }else{
        echo json_encode(["error"=>$con->error]);
      }

}
?>