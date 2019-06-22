<?php  

class Validation{

    //validation properties/class member variables
    public $firstname;
    public $lastname;
    public $emailaddress;
    public $password;
    public $username;


    //validation method

    public function login($emailaddress, $password){
        if ($emailaddress == 'akinbile5@yahoo.com' && $password == 'taiwo') {
            //redirect using header
            header('Location: http://localhost/creativesASK/index.php');
            exit;
        }
        else{
            $result = "<div class='alert alert-danger'>  Invalid Username/Password</div>";
        }
   // return $result;
    }

    public function signup($firstname, $lastname, $emailaddress, $password){


    }

    public function logout(){
    }

    //static method are not instantiated when an object is created
}

    $valid = new Validation;
    echo  $valid->login('taiwoooo', 'twyiuwoep');

?>