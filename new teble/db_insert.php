<?php 

$con = new mysqli("localhost","root","sk153445","karthi");

$liveflname = $_FILES['dp'];
$id=$_POST['employee_id'];
$name =$_POST['name'];
$dob = $_POST['dob'];
$Fathername = $_POST['FatherName']; 
$Mothername = $_POST['MotherName'];
$singleparent = $_POST['singleparent'];
$Address = $_POST['Address'];
$Address2 = $_POST['Address2'];
$rcity = $_POST['rcity'];
$rstate = $_POST['rstate'];
$permanentaddress = $_POST['permanentaddress'];
$permanent1 = $_POST['permanent1'];
$pcity = $_POST['pcity'];
$pstate = $_POST['pstate'];
$Qualification = $_POST['Qualification'];
$PanNumber = $_POST['PanNumber'];
$aadhar = $_POST['aadhar'];
$Alternate = $_POST['Alternate'];
$familydetails = $_POST['familydetails'];
$data=false;
$msg="";

        //Get a file name
        $liveflname = $_FILES['dp']['name'];

        // Location
        $file_places = 'images/'.$liveflname;

        //Get file extension using PHP
        $fl_ext = pathinfo($file_places, PATHINFO_EXTENSION);
        $fl_ext = strtolower($fl_ext);

        // Valid image extensions
        $image_ext = array("jpg","png","jpeg","gif");

        $results = 0;

        if(in_array($fl_ext,$image_ext))
        {
        // Upload file
          if(move_uploaded_file($_FILES['dp']['tmp_name'],$file_places))
          {
              $results = $file_places;

          }
        }

          if(!empty($name) && !empty($dob) && !empty($Fathername) && !empty($Mothername) && !empty($singleparent) && !empty($Address)  && !empty($Address2)  && !empty($rcity)  && !empty($rstate) && !empty($permanentaddress) && !empty($permanent1) && !empty($pcity) && !empty($pstate) && !empty($Qualification) && !empty($PanNumber) && !empty($aadhar) && !empty($Alternate) && !empty($familydetails))
          {  
           if(!empty($id)){

              $sql=  "UPDATE `sk` SET Name='$name',DataOfBirth='$dob',FatherName='$Fathername',MotherName='$Mothername',Singleparent='$singleparent',Address='$Address',r_address='$Address2',r_city='$rcity',r_state='$rstate',permanentaddress='$permanentaddress',per_address='$permanent1',per_city='$pcity',per_state='$pstate',Qualification='$Qualification',PanNumber='$PanNumber',AadharNumber='$aadhar',PhoneNumber='$Alternate',familydetails='$familydetails',action='' WHERE id=$id";

               $msg="Update is success";

            }
            else{

                $sql = "INSERT INTO sk(profile,Name, DataOfBirth, FatherName, MotherName, Singleparent, Address,r_address,r_city,r_state,permanentaddress,per_address,per_city,per_state,Qualification,PanNumber, AadharNumber, PhoneNumber, familydetails) VALUES('$liveflname','$name', '$dob', '$Fathername', '$Mothername', '$singleparent', '$Address', '$Address2','$rcity','$rstate' , '$permanentaddress', '$permanent1','$pcity','$pstate', '$Qualification', '$PanNumber', '$aadhar', '$Alternate', '$familydetails')";

                $msg="Update is success";
              }

                $data =$con->query($sql);

                
                if ($data === true) {

                echo json_encode(['success'=>$msg,'status'=>200]);
                }else{
                  echo json_encode(["error"=>$con->error]);

                }
          }      
?>