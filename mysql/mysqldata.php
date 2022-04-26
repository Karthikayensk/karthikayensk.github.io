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


        $conn = new mysqli($this->localhost,$this->root,$this->password,$this->database);
        if ($conn) {
            echo "connect";

        }else{

            echo "not connect";
        }
        return $conn;
    }

}
    

?>