<?php
    $con=new mysqli("localhost","root","letmein1!","ragavanform");
        $liveflname = $_FILES['dp'];
        $id=$_POST['employee_id'];
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $singleParant=$_POST['singleParant'];
        $raddress=$_POST['raddress'];
        $paddress=$_POST['paddress'];
        $eq_name=$_POST['eq_name'];
        $pan=$_POST['pan'];
        $aadhar=$_POST['aadhar'];
        $alterContact=$_POST['alterContact'];
        $family=$_POST['family'];
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

        if(!empty($id)){

            $sql="UPDATE employee_detials_form SET name='$name',dob='$dob',fname='$fname',mname='$mname',singleParant='$singleParant',r_address='$raddress',p_address='$paddress',eq_name='$eq_name',pan='$pan',aadhar='$aadhar',alter_contact='$alterContact',family='$family' WHERE id=$id";
            $msg="Update is success";
        }
        else{            
                $sql="INSERT INTO employee_detials_form(profile,name,dob,fname,mname,singleParant,r_address,p_address,eq_name,pan,aadhar,alter_contact,family)  
                    VALUES ('$liveflname','$name','$dob', '$fname','$mname','$singleParant', '$raddress','$paddress','$eq_name','$pan', '$aadhar',  '$alterContact','$family')";
                $msg="Update is success";
              
        }
            $data=$con->query($sql);

            if ($data === true) {

                echo json_encode(['sucess'=>$msg,'status'=>200]);
                }else{
                echo json_encode(["error"=>$con->error]);
                }
 
?>