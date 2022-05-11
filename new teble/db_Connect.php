<?PHP

class database
{

    public $localhost;
    public $root;
    public $password;
    public $database;
    public $conn;



    public function basedata()
    {
        $this->localhost="localhost";
        $this->root="root";
        $this->password="sk153445";
        $this->database="karthi";


        $this->conn = new mysqli($this->localhost,$this->root,$this->password,$this->database);

        if(mysqli_connect_error())
        {
             echo "please connect to MySQL0" ;
        }else{

           return $this->conn;
        }
        
    }




        public function insertData($conn)
        {

        $name = $conn->real_escape_string($_POST['name']);   
        $DOB = $conn->real_escape_string($_POST['dateofbirth']);
        $FatherName = $conn->real_escape_string($_POST['FatherName']);
        $MotherName = $conn->real_escape_string($_POST['MotherName']);
        $Address = $conn->real_escape_string($_POST['Address']);
        $Qualification = $conn->real_escape_string($_POST['Qualification']);
        $PanNumber = $conn->real_escape_string($_POST['PanNumber']);
        $AadharNumber = $conn->real_escape_string($_POST['AadharNumber']);
        $PhoneNumber = $conn->real_escape_string($_POST['PhoneNumber']);
        $permanentaddress = $conn->real_escape_string($_POST['permanentaddress']);
        $familydetails = $conn->real_escape_string($_POST['familydetails']);
        $Singleparent = $conn->real_escape_string($_POST['Singleparent']);
        
          $sql="INSERT INTO `sk`(`Name`, `DataOfBirth`, `FatherName`, `MotherName`, `Singleparent` ,  `Address`, `permanentaddress`, `Qualification`, `PanNumber`, `AadharNumber`, `PhoneNumber`, `familydetails`) VALUES ('$name','$DOB','$FatherName','$MotherName',' $Address','$Qualification','$PanNumber','$AadharNumber','$PhoneNumber','$permanentaddress','$familydetails' ,'$singleparent' )";
            
        
        //$sql="INSERT INTO `sk`(`Name`, `DataOfBirth`, `FatherName`, `MotherName`, `Address`, `Qualification`, `PanNumber`, `AadharNumber`, `PhoneNumber`) VALUES ('$name','$DOB','$FatherName','$MotherName',' $Address','$Qualification','$PanNumber','$AadharNumber','$PhoneNumber')";


        if ($conn->query($sql) === TRUE) {
        echo "sucess";

            //header("Location:db_Listing.php");
            }else{
            echo " failed try again!";
            }
        }


public function getData($conn)
       {
           
            $mysql = "SELECT * FROM sk";
        
            $value = $conn->query($mysql);
           
            if ($value->num_rows > 0)
            {
                $data=array();
                while ($row = $value->fetch_assoc()) 
                {
                 $array[] =$row;    
                
                } 

                return $array;              
            }
                else
                {
                echo "not update";
            }
       }


public function getnd($conn)
       {
           
            $mysql = "SELECT Name,DataOfBirth FROM sk";
        
            $value = $conn->query($mysql);
           
            if ($value->num_rows > 0)
            {$data=array();
                
                while ($row = $value->fetch_assoc()) 
                {
                    $array[]=$row;

                                                
                }
                return $array;               
            }
                else
                {
                echo "not update";
            }
       }

}

     
 



?>