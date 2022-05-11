<html lang="en">
 <head>

                <title>Teble</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="C:\wamp64\www\sk\new teble\font-awesome.min.css">

                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <!-- Bootstrap -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                 <!-- DataTable -->
                <link rel="stylesheet" href="bootstrap-edit\jq\bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            
  </head>
     <style>
           @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,400;1,700&display=swap');

            div.container{

                width: 98%;
                height:98%;
                background: linear-gradient(to bottom, #000099 36%, #ffffff 36%);
                box-shadow: 0 6px 8px 0 rgb(0 0 0 / 20%);
            }
            
            .page-header {

                padding-left: 0%;
                padding-bottom: 6px;
                margin: -10px 0 0px;
                border-bottom: 1px solid rgba(238, 238, 238, 0.356);

            }
            .container1{

                position: absolute;
                width: 80%;
                height: 76%;
                left: 10%;
                top: 18%;
                padding-top: 65px;
                background: linear-gradient(to bottom,   #0c1e69 23% , #fffafae2 23%);
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
               
                margin: 0;
                padding: 1px;
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
            /*input.form-control {

                width: 14%;
                margin-left: 85%;
                margin-top: -70px;
                margin-bottom: 42px;
                border: none;
                background: transparent;
                border-bottom: 3px solid rgb(216, 213, 255);*/
                        
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

            .Add {
                    margin-left: 90%;
                    margin-top: -53px;
                    width: 109px;
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

            .error{
                color: darkred;
            }

        </style>
        <body>
            <div class="container" >

                <div class="page-header"> 
                   
                    <a href="#default">
                        <div  class="circle">
                            <img src="PRF_Logo.png" width="100px" height="auto">
                        </div>
                    </a>
                    
                </div>

            </div>
           
            <div class="container1" >

                <a href="#default">
                    <div class="circle1">
                        <img src="PRF_Logo.png" width="80px" height="auto">
                        
                    </div>   
                </a> 
                
                <div class="text-left">
                    <button  class="add" id="adddetails"  class="btn btn-success" >+ADD</button>

                    <div class="container5"> 

          <div class="modal fade" id="theModal">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title" >Create New Entry</h4>
                       </div>
                          <div class="modal-body" >
                            <form method="post" id="testForm" onsubmit="response" >
                              <input type="hidden" name="employee_id" id="employee_id" value="">


                        <div class="form-group">
                            <div class="form-group">
                              <label>Employee Photo</label>
                              <input type="file" class="form-control"type="file" name="dp" id="image" class="form-control"placeholder="Enter employee photo">
                        </div>

                        <div>
                           <label>Name</label>
                             <input type="text" name="name" id="name" class="form-control"  placeholder="Enter Name">
                               <span class="error" id="nameErr"></span>
                        </div>

                     
                        <div class="form-group">
                                <label>Data Of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control"  placeholder="DOB">
                                <span class="error" id="dobErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Father Name</label>
                            <input type="text" name="FatherName" id="fathername"  class="form-control" placeholder="Enter FatherName">
                            <span class="error" id="fatherErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Mother Name</label>
                            <input type="text" name="MotherName" id="mothername" class="form-control" placeholder="Enter MotherName">
                            <span class="error" id="motherErr"></span>
                        </div>

                        <div class="form-group">
                            <label>In Case Of Single Parent</label>
                            <input type="text" class="form-control" id="singleparent"  name="singleparent" placeholder="Enter SingleParent" >
                        </div>


                        <div class="form-group">
                            <label>Residential address(1)</label>
                            <input type="text" name="Address" id="address" rows="5" cols="5" class="form-control" placeholder="Enter Residential address">
                            <span class="error" id="addErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Residential address(2)</label>
                            <input type="text" name="Address2" id="address2" rows="5" cols="5" class="form-control" placeholder="Enter Residential address">
                            <span class="error" id="addErr1"></span>
                        </div>

                        <div class="form-group">
                            <label>Residential city</label>
                            <input type="text" name="rcity" id="rcity" rows="5" cols="5" class="form-control" placeholder="Enter Residential address">
                            <span class="error" id="rcityErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Residential state</label>
                            <input type="text" name="rstate" id="rstate" rows="5" cols="5" class="form-control" placeholder="Enter Residential address">
                            <span class="error" id="rstateErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Permanent address(1)</label>
                            <input type="text" class="form-control" id="permanent" rows="5" cols="5" name="permanentaddress"   placeholder="Enter permanent address">
                            <span class="error" id="perErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Permanent address(2)</label>
                            <input type="text" class="form-control" id="permanent1" rows="5" cols="5" name="permanent1"   placeholder="Enter permanent address">
                            <span class="error" id="perErr1"></span>
                        </div>

                        <div class="form-group">
                            <label>Permanent city</label>
                            <input type="text" class="form-control" id="pcity" rows="5" cols="5" name="pcity"   placeholder="Enter permanent address">
                            <span class="error" id="pcityErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Permanent state</label>
                            <input type="text" class="form-control" id="pstate" rows="5" cols="5" name="pstate"   placeholder="Enter permanent address">
                            <span class="error" id="pstateErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" class="form-control" id="Qualification" name="Qualification"  placeholder="Enter Qualification">
                            <span class="error" id="quliErr"></span>
                        </div>
  
                        <div class="form-group">
                            <label>Pan Number</label>
                            <input type="text" class="form-control"  id="pan"   name="PanNumber"  placeholder="Enter PanNumber">
                            <span class="error" id="panErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Aadhar Number</label>
                            <input type="number" class="form-control" id="aadhar" name="aadhar"  placeholder="Enter AadharNumber">
                            <span class="error" id="aaErr"></span>
                        </div>



                        <div class="form-group">
                            <label>Alternate contact details</label>
                            <input type="number" name="Alternate" id="Alternate" class="form-control"placeholder="Enter alternate contact ">
                            <span class="error" id="altErr"></span>
                        </div>


                        <div class="form-group">
                            <label>Family details</label>
                            <input type="text" class="form-control" id="family"  name="familydetails"   placeholder="Enter family details">
                            <span class="error" id="familyErr"></span>
                        </div>

                        <div class="form-group">
                            <label>Signature</label>
                            <input type="file" class="form-control" Sign placeholder="Enter signature">
                       </div>

                           <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary">Submit</button>
                           <input type="hidden" name="sk_id" id="sk_id" />
            </form>

                       <p id="response"></p>
            </div>  
      

                   <div class="modal-footer">

                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                   </div>
                 </div> 
              </div>
           </div>
       </div>
    </div>
<div>

 <div class="container2">
        <center><p class="Employee">Employee Details</p></center>

        </div>
           <div class="heander_fixed">
              <table id="dataTable">
                 <thead>
                    <tr>
                       <th>profile</th>
                        <th>Name</th>
                        <th>DataOfBirth</th>
                        <th>FatherName</th>
                        <th>MotherName</th>
                        <th>singleparent</th>
                        <th>Address(1)</th>
                        <th>Address(2)</th>
                        <th>residential city</th>
                        <th>residential state</th>
                        <th>permanentaddress(1)</th>
                        <th>permanentaddress(2)</th>
                        <th>permanent city</th>
                        <th>permanent state</th>
                        <th>Qualification</th>
                        <th>PanNumber</th>
                        <th>AadharNumber</th>
                        <th>PhoneNumber</th>
                     
                        <th>familydetails</th>
                        <th>action</th>
                    </tr>
                </thead>
            <tbody>

                <?php
                    require 'db_Connect.php';
                    $sk = new database();
                    $conn=$sk->basedata();
                    $array=$sk->getData($conn);
                    if($array != null)
                    foreach($array as $data){
             ?>
               <tr>
                    <td><img src='images/<?php echo $data["profile"]; ?>' id="upload-img" style='height:50px;width:50px;align:middle;'/><?php ?></td>
                    <td><?php echo $data['Name'];?></td>
                    <td><?php echo $data['DataOfBirth'];?></td>
                    <td><?php echo $data['FatherName'];?></td>
                    <td><?php echo $data['MotherName'];?></td>
                    <td><?php echo $data['Singleparent'];?></td>
                    <td><?php echo $data['Address'];?></td>
                    <td><?php echo $data['r_address'];?></td>
                    <td><?php echo $data['r_city'];?></td>
                    <td><?php echo $data['r_state'];?></td>
                    <td><?php echo $data['permanentaddress'];?></td>
                    <td><?php echo $data['per_address'];?></td>
                    <td><?php echo $data['per_city'];?></td>
                    <td><?php echo $data['per_state'];?></td>
                    <td><?php echo $data['Qualification'];?></td>
                    <td><?php echo $data['PanNumber'];?></td>
                    <td><?php echo $data['AadharNumber'];?></td>
                    <td><?php echo $data['PhoneNumber'];?></td>
                    <td><?php echo $data['familydetails'];?></td>

                     <td><button type="button" name="edit"  value="edit" id="<?php echo $data["id"]; ?>" class=" edit_data"><i class="fas fa-pen"style="font-size:14px;color:blue"></i></button>
                    <button  id="deleteid" class="delete" value="<?php echo $data["id"]; ?>"><i class="fa fa-trash"style="font-size:14px;color:red"></i></button></td>
             </tr>

             <!-- <i class="fas fa-pen"style="font-size:14px;color:blue"></i>
                                <i class="fa fa-trash"style="font-size:14px;color:red"></i>
 -->
            <?php
               }
             ?>
                    
                </tbody>
            </table>
        </div>
         
          <script src="bootstrap-edit\jq\jquery.min.js"></script>
           <script src="bootstrap-edit\jq\bootstrap.min.js"></script>
             <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> 
               <script  type="text/javascript">
                
            //Popup Form and DataTable..

              $(document).ready(function(){
                $("#adddetails").click(function () {
                    $('.modal').modal('show');
                });
               $('#dataTable').DataTable();
               });



        $(document).on('click','.edit_data',function(){
          var employee_id = $(this).attr("id");
          $.ajax({
            url:"re_edit.php",
            method:"POST",
            data:{employee_id:employee_id},
            dataType:"json",
            success:function(data){
           $("#employee_id").val(data.id);
           $("#dp").val(data.profile);
           $("#name").val(data.Name);
           $("#dob").val(data.DataOfBirth);
           $("#fathername").val(data.FatherName);
           $("#mothername").val(data.MotherName);
           $("#singleparent").val(data.Singleparent);
           $("#address").val(data.Address);
            $("#address1").val(data.r_address);
            $("#rcity").val(data.r_city);
            $("#rstate").val(data.r_state);
           $("#permanent").val(data.permanentaddress);
           $("#permanent1").val(data.per_address);
           $("#pcity").val(data.per_city);
           $("#pstate").val(data.per_state);
           $("#Qualification").val(data.Qualification);
           $("#pan").val(data.PanNumber);
           $("#aadhar").val(data.AadharNumber);
           $("#Alternate").val(data.PhoneNumber);
           $("#family").val(data.familydetails);
           $("#theModal").modal('show');
           $('#submit').val("update");
           
            }
          })
        });
      

              //validation..

              $("#submit").click(function(event) {
                  event.preventDefault();
                  var name = $("#name").val();
                  var dob = $("#dob").val();
                  var Fathername = $("#fathername").val();
                  var Mothername = $("#mothername").val();
                  var singleparent = $('#singleparent').val();
                  var Address = $("#address").val();
                  var address1 = $("#address1").val();
                  var rcity = $("#rcity").val();
                  var rstate = $("#rstate").val();
                  var permanentaddress = $("#permanent").val();
                  var permanent1 = $("#permanent1").val();
                  var pcity = $("#pcity").val();
                  var pstate = $("#pstate").val();
                  var Qualification = $("#Qualification").val();
                  var PanNumber = $("#pan").val();
                  var aadhar = $("#aadhar").val();
                  var Alternate = $("#Alternate").val();
                  var familydetails = $("#family").val();
                 

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
                   
                   if (Fathername == '' ) {             
                     $("#fatherErr").html("Empty fields ");
                  } else{
                    $("#fatherErr").html("");
                  }
                   
                   if (Mothername == '' ) {             
                     $("#motherErr").html("Empty fields ");
                  } else{
                    $("#motherErr").html("");
                  }
                   
                   if (Address == '' ) {             
                     $("#addErr").html("Empty fields ");
                  } else{
                    $("#addErr").html("");
                  }

                  if (address1 == '' ) {             
                     $("#addErr1").html("Empty fields ");
                  } else{
                    $("#addErr1").html("");
                  }

                  if (rcity == '' ) {             
                     $("#rcityErr").html("Empty fields ");
                  } else{
                    $("#rcityErr").html("");
                  }

                  if (rstate == '' ) {             
                     $("#rstateErr").html("Empty fields ");
                  } else{
                    $("#rstateErr").html("");
                  }
                   
                   if (permanentaddress == '' ) {             
                     $("#perErr").html("Empty fields ");
                  } else{
                    $("#perErr").html("");
                  }

                  if (permanent1 == '' ) {             
                     $("#perErr1").html("Empty fields ");
                  } else{
                    $("#perErr1").html("");
                  }

                  if (pcity == '' ) {             
                     $("#pcityErr").html("Empty fields ");
                  } else{
                    $("#pcityErr").html("");
                  }

                  if (pstate == '' ) {             
                     $("#pstateErr").html("Empty fields ");
                  } else{
                    $("#pstateErr").html("");
                  }
                   

                   if (Qualification == '' ) {             
                     $("#quliErr").html("Empty fields ");
                  } else{
                    $("#quliErr").html("");
                  }
                   
                   if (PanNumber == '' ) {             
                     $("#panErr").html("Empty fields ");
                  } else{
                    $("#panErr").html("");
                  }
                   
                   if (aadhar == '' ) {             
                     $("#aaErr").html("Empty fields ");
                  } else{
                    $("#aaErr").html("");
                  }
                   
                   if (Alternate == '' ) {             
                     $("#altErr").html("Empty fields ");
                  } else{
                    $("#altErr").html("");
                  }
                   
                   if (familydetails == '' ) {             
                     $("#familyErr").html("Empty fields ");
                  } else{
                    $("#familyErr").html("");
                  }
                
                //insert database...

               var formData = new FormData ($("#testForm")[0]);
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
                    
            
              /*var data = 'name='+name+'&dob='+dob+'&Fathername='+Fathername+'&Mothername='+Mothername+'&singleparent='+singleparent+'&Address='+Address+'&permanentaddress='+permanentaddress+'&Qualification='+Qualification+'&PanNumber='+PanNumber+'&aadhar='+aadhar+'&Alternate='+Alternate+'&familydetails='+familydetails;
              

                 
                 $.ajax ({
                       url:"db_insert.php",
                       type:"post",
                       data:data,
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
     */
                    //insert database Delete...

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
       </div>
    </div>

</body> 
</html>