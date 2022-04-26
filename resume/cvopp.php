
    <?php
    class sk {
      public $Skills;
      public $language;
      public $strength;
      public $hobbies;
     
      function __construct($Skills,$language,$strength,$hobbies) 
      {
        $this->skills = $Skills;
        $this->language  = $language;
        $this ->strength = $strength;
        $this->hobbies = $hobbies;

       }

      function getSkills()
      {
        return $this->skills;
      }

      function getLanguage() 
      {
        return $this->language;
      }

      function getStrength()
      {
       return $this ->strength;
       }

       function getHobbies()
       {
       return $this ->hobbies;
       }
       
       
    }


$sk = new  sk ("*Html <br> *PHP <br> *CSS","*TAMIL <br> *ENGLISH <br> *MALAYALAM" ,"*POSITIVE THINKING <br> *SELF CONFIDEANCE <br> *TIME MANAGEMENT","*GAMING  <br> *PLAYING CRICKET <br> *MUSIC");
  //echo $sk->getSkills();

echo "<br><br>";
//echo $sk->getLanguage();
echo "<br>";
//echo $sk->getStrength();
echo "<br>";
//echo $sk->getHobbies();


?>
 
</body>
</html>

