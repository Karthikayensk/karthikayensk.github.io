<?php
require ('db_connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
span{
  color:red;
}
      
div.container{
width: 98%;
height:98%;
background: linear-gradient(to bottom, #000099 35%, #ffffff 35%);
box-shadow: 0 6px 8px 0 rgb(0 0 0 / 20%);
}

.page-header {

padding-left: 0%;
padding-bottom: 6px;
margin: 8px 0 0px;
border-bottom: 1px solid rgba(238, 238, 238, 0.356);

}
.container1{

position: absolute;
width: 80%;
height: 76%;
left: 10%;
top: 18%;
padding-top: 65px;
background: linear-gradient(to bottom,  #0c1e69cc 23%, #fffafae2 23%);
box-shadow: 0 6px 8px 0 rgb(0 0 0 / 20%);
}
.text-right{

margin: 1%;
}
.text-center{

text-align: center;
margin-top: -30.0px;
margin-left: 20px;
font-size: 180%;
color: rgba(241, 241, 241, 0.955);


}
.btn-default {

color: 0FFD700;
background-color: #30f4b8a8;
border-color: rgb(255 255 255);
margin-top: 2%;
font-size: 75%;

}

*{

margin:0;
padding:0;
box-sizing: border-box;

}
body{

width: 100%;
display: flex;
justify-content: center; 
font-family: 'Roboto', sans-serif;
background-color: rgb(249, 248, 248);

}
table{

border-collapse: collapse ;


}
.heander_fixed{

height: 80%;
overflow: auto;
margin-top: -10px 10px;
border: 1px solid #dddddd;
}
.heander_fixed thead th{

position: sticky;
top: 0;
text-align: center;
background-color: #ffffff;
color:#0059b3;
font-size:15px ;
font-weight: 800;


}

th,td{

border-bottom: 1px solid #dddddd;
padding: 8px 51px;
font-size: 14px;

}

td img{

margin-top: 8;
height: 60px;
width: 60px;
border-radius: 100%;
border: 1px solid #E6E7E8;

}
tr:nth-child(even){

background-color: #dddddd;

}
tr:nth-child(odd){

background-color: #EDEEF1;

}
tr:hover td{

color: #a68b04;
cursor: pointer;
background-color: #ffffff;
}
button{

border: none;
border-radius:0px;
cursor: pointer;
padding: 5px;


}

::-webkit-scrollbar{

width: 1px;


}
::-webkit-scrollbar-track{

-webkit-box-shodow:inset 0 0 6px rgba(0,0,0,0.3);

}
::-webkit-scrollbar-thumb{

-webkit-box-shodow:inset 0 0 6px rgba(0,0,0,0.3);

}
input::-webkit-input-placeholder {
color: rgb(252, 252, 252) !important;
}
input.form-control {

width: 14%;
margin-left: 85%;
margin-top: -70px;
margin-bottom: 42px;
border: none;
background: transparent;
border-bottom: 3px solid rgb(216, 213, 255);
        
}
.circle {

height: 100px;
width: 100px;
background-color: rgb(255, 255, 255);
border-radius: 100%;
padding-top: .6%;
margin-left: 20px;
}
.circle1{

height: 80px;
width: 80px;
background-color: rgb(255, 255, 255);
border-radius: 100%;
padding-top: .6%;
margin-left: 30px;
margin-top: -50px;

}
.Add{

margin-left: 80%;
margin-top: -70px;
width: 42px;
background: linear-gradient(to left, #cc9900 30%, #996600 96%);
}
p.Employee {
text-align: center;
margin-left: 3%;
font-size: 41px;
margin-top: -98px;
margin-bottom: 40px;
font-family: 'Roboto', sans-serif;
color:#ffd900e8;
}

    </style>
</head>
<body>
  
<div class="container" >

<div class="page-header"> 
   
    <a href="#default">
        <div  class="circle">
            <img src="images/PRF_Logo.png" width="100px" height="auto">
        </div>
    </a>
    

      <div class="container" class="center hideform">
        <a type="popup" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">Add New</a>
        <!-- Modal -->
        <div class="modal fade"  id="mymodal" role="dialog">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title">FORM</h2>

                </div>
                  <!-- body -->
                <div class="modal-body  modal-md">
                  <p class="statusMsg"></p>
                  <form   id="employeeForm"  method="post" autocomplete="on">

                    <input type="hidden" name="employee_id" id="employee_id" value="">

                    <div class="form-group" >
                    <input type="file" name="dp" id="image" class="form-control">
                    <!-- <img src="https://localhost/Employee/images/"> -->
                    </div>

                    <div class="form-group">
                      <label for="name">Name</label> 
                      <input  type="text" name="name" id="name" class="form-control"   value = "">
                      <span id="nameErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="dob">Date of Birth</label>
                      <input  type="date" name="dob" id="dob" class="form-control"  value="">
                      <span id="dobErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="fname">Father Name</label>
                      <input  type="text" name="fname" id="fname" class="form-control"  value="" >
                      <span id="fnameErr"></span>  
                    </div>

                    <div class="form-group">
                      <label for="mname">Mother Name</label>
                      <input  type="text" name="mname" id="mname" class="form-control"  value="">
                      <span id="mnameErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="singleParant">In case of Single<br>Parent</label>
                      <input  type="text" name="singleParant" id="singleParant" class="form-control"  value="">
                    </div>

                    <div class="form-group">
                      <label for="raddress">Residential Address<br>(With contact Number)</label>
                      <textarea  type="text,number" name="raddress" id="raddress" class="form-control"  row="5" cols="20"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="paddress">Permanent Address<br>(With contact Number)</label>
                      <textarea type="text,number" name="paddress" id="paddress" class="form-control"  row="5" cols="20"></textarea>
                      <span id="paddressErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="eq_name">Qualification</label>
                      <input  type="text" name="eq_name" id="eq_name" class="form-control"  value="" >
                      <span id = "eq_nameErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="pan">PAN Number</label>
                      <input  type="text" name="pan" id="pan" class="form-control"  value="" maxlength="10" >
                      <span id ="panErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="aadhar">Aadhar Number</label>
                      <input  type="number" name="aadhar" id="aadhar" class="form-control"  value="" maxlength="12" >
                      <span id="aadharErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="alterContact">Alternate Contact Details<br>(contact any emergency)</label>
                      <input  type="text" name="alterContact" id="alterContact" class="form-control"  value="" >
                      <span id="alterContactErr"></span>
                    </div>

                    <div class="form-group">
                      <label for="family">Family Details<br>(in case of married person)</label>
                      <input  type="text" name="family" id="family" class="form-control"  value="" >
                    </div>

                    <div class="form-group">
                      <label for="sign">sign</label>
                      <input  type="file" name="sign" class="form-control"   >
                    </div>
                
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input type="submit" name="insert" id="insert"  value="Insert" class="btn btn-primary ">
                    </div>

                  </form>
                  <p id="response"></p>
                  </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

</div>   
  <table id="dataTable" class="display"> 
    <thead>
      <tr>
        <th>Profile</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>singleParant</th>
        <th>Residential Address</th>
        <th>Permanent Address</th>
        <th>Educational Qualification</th>
        <th>PAN Number</th>
        <th>Aadhar Number</th>
        <th>Alternate Contact Details</th>
        <th>Family Details</th>
        <th>Action</th>
      </tr>
    </thead> 
    <tbody>
      <?php
          //class for database connection
        
        $res=new db_connect();
        $array=$res->getData();

        if (!empty($array)){
        foreach($array as $data){
          
      ?>
        <tr>
        <td><img class='' src='images/<?php echo $data["profile"]; ?>' id="upload-img" style='height:50px;width:50px;align:middle;'/><?php ?></td>
          <td><?php echo $data["name"] ?></td>
          <td><?php echo $data["dob"] ?></td>
          <td><?php echo $data["fname"] ?></td>
          <td><?php echo $data["mname"] ?></td>
          <td><?php echo $data["singleParant"] ?></td>
          <td><?php echo $data["r_address"] ?></td>
          <td><?php echo $data["p_address"] ?></td>
          <td><?php echo $data["eq_name"] ?></td>
          <td><?php echo $data["pan"] ?></td>
          <td><?php echo $data["aadhar"] ?></td>
          <td><?php echo $data["alter_contact"] ?></td>
          <td><?php echo $data["family"] ?></td>
          <td>         
            <input type="button" name="edit"  value="edit" id="<?php echo $data["id"]; ?>" class="btn btn-primary edit_data" /> 
            <button  id="deleteid" class="btn btn-danger delete" value="<?php echo $data["id"]; ?>">delete</button></td>           
          </td>
        </tr>

        <?php
        }
      }
        ?>

    </tbody>
    
  </table>

  
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready( function () 
    {
        $('#dataTable').DataTable()
        $( "#mymodal" ).on('shown.bs.modal', function(){
         
        });
 
        $(document).on('click','.edit_data',function(){
          var employee_id = $(this).attr("id");
          $.ajax({
            url:"edit.php",
            method:"POST",
            data:{employee_id:employee_id},
            dataType:"json",
            success:function(data){
           $("#employee_id").val(data.id);
           $("#name").val(data.name);
           $("#dp").val(data.profile);
           $("#dob").val(data.dob);
           $("#fname").val(data.fname);
           $("#mname").val(data.mname);
           $("#singleParant").val(data.singleParant);
           $("#raddress").val(data.r_address);
           $("#paddress").val(data.p_address);
           $("#eq_name").val(data.eq_name);
           $("#pan").val(data.pan);
           $("#aadhar").val(data.aadhar);
           $("#alterContact").val(data.alter_contact);
           $("#family").val(data.family);
           $("#mymodal").modal('show');
           $('#insert').val("update");
           
            }
          })
        });
      });
        //insert data to form and db
        $('#insert').click(function(event) {
          event.preventDefault();
            // var img = $('#image').val();
            
            var name = $('#name').val();
            var dp = $('#image').val();
            var dob = $('#dob').val();
            var fname = $('#fname').val();
            var mname = $('#mname').val();
            var singleParant = $('#singleParant').val();
            var raddress = $('#raddress').val();
            var paddress = $('#paddress').val();
            var eq_name = $('#eq_name').val();
            var pan = $('#pan').val();
            var aadhar = $('#aadhar').val();
            var alterContact = $('#alterContact').val();
            var family = $('#family').val();
            
            if (name == '' ) {             
                 $("#nameErr").html("Empty fields ");
              } else{
                $("#nameErr").html("");
              }
               
               if (dob == '' ) {             
                 $("#dobErr").html("Empty fields ");
              } else{
                $("#dobErr").html("");
              }
               
               if (fname == '' ) {             
                 $("#fnameErr").html("Empty fields ");
              } else{
                $("#fnameErr").html("");
              }
               
               if (mname == '' ) {             
                 $("#mnameErr").html("Empty fields ");
              } else{
                $("#mnameErr").html("");
              }
               
               if (singleParant == '' ) {             
                 $("#singleParantErr").html("Empty fields ");
              } else{
                $("#singleParantErr").html("");
              }
               
               if (raddress == '' ) {             
                 $("#raddressErr").html("Empty fields ");
              } else{
                $("#raddressErr").html("");
              }
               
               if (paddress == '' ) {             
                 $("#paddressErr").html("Empty fields ");
              } else{
                $("#paddressErr").html("");
              }
               
               if (eq_name == '' ) {             
                 $("#eq_nameErr").html("Empty fields ");
              } else{
                $("#eq_nameErr").html("");
              }
               
               if (pan == '' ) {             
                 $("#panErr").html("Empty fields ");
              } else{
                $("#panErr").html("");
              }
               
               if (aadhar == '' ) {             
                 $("#aadharErr").html("Empty fields ");
              } else{
                $("#aadharErr").html("");
              }
               
               if (alterContact == '' ) {             
                 $("#alterContactErr").html("Empty fields ");
              } else{
                $("#alterContactErr").html("");
              }

              if (family == '' ) {             
                 $("#familyErr").html("Empty fields ");
              } else{
                $("#familyErr").html("");
              }
           
              
              var formData = new FormData ($("#employeeForm")[0]);
              $.ajax ({
                       url:"db_insert.php",
                       type:"post",
                       data:formData,
                       processData:false,
                       contentType:false,
                       success:function(response)
                       {
                        var data = JSON.parse(response);
                        console.log(data.status);
                        if(data.status == '200'){
                          location.reload();
                        }
                       }
                });             
          });
          
          $(".delete").click(function() {
            if(confirm("Are you sure you want to delete this?")){
                var id = $(this).val();
                    $.ajax({    
                        type: "GET",
                        url: "delete.php", 
                        data: 'id='+id,                
                        success: function(response){   
                           var data = JSON.parse(response);
                            
                            if(data.status == '200'){
                              location.reload();
                           }
                         }
                     });
            }else{
                return false;
            }
        }); 
          
           $("body").on("click", ".delete", function(){  
            $(this).parents("tr").remove();  
          });
 </script>

</body>
</html>