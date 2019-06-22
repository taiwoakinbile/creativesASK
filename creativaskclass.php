<?php

class DatabaseConfig{
    //member variable
    public $dbcon; //db connection handler


    //member function/method
    public function __construct(){
        //create connection by instatiating mySQLi class
        $this->dbcon = new mysqli('localhost','root', '','creativeask');
        //mysqli class is an inbuilt PHP class

        //check connection
        if ($this->dbcon->connect_error) {
            die('Connection failed: '. $this->dbcon->connect_error);
        }
        else{
            //echo "Connection successful";
        }
    }

}

class User{
    //member variables
    public $lastname;
    public $firstname;
    //obj handler for DatabaseConfig class
    public $dbobj;

    //member function/method
    public function __construct(){
        //create instance/object of  DatabaseConfig class
        $this->dbobj = new DatabaseConfig();
    }
    


    public function signup($lastname, $firstname, $email, $pswd){

        $pswd =md5($pswd);

        // var_dump($pswd);
        // exit;
        //write the query to insert into ta;able
        $insertquery = "INSERT INTO users(lastname, firstname, emailaddress, user_password)  
                            VALUES ('$lastname', '$firstname', '$email', '$pswd');";

        //check if the query() runs // data is insert into users table
        if ($this->dbobj->dbcon->query($insertquery) === true){

            //get last inserted user_id
            $user_id = $this->dbobj->dbcon->insert_id;

            //create session variable
            $_SESSION['myuserid'] = $user_id;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['email'] = $email;
            
            // //redirect to dashboard
            header("Location: http://localhost/creativesASK/user-profile.php");
            exit;
        }
        else{
            echo "Error:".$this->dbobj->dbcon->error;
        }
    }


    public function login($email, $pswd){

        $pswd =md5($pswd);
        // var_dump($mypswd);
        //write your query
        $loginquery = "SELECT * FROM users WHERE user_password = '$pswd' LIMIT 1;";

        //run the query
        $result = $this->dbobj->dbcon->query($loginquery);

        //check if the number of row return is equal to one
        if ($this->dbobj->dbcon->affected_rows == 1) {

            //fetch the result
            $row = $result->fetch_assoc();
            
            //create session variables
            $_SESSION['myuserid'] = $row['user_id'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['email'] = $row['emailaddress'];
            


            //redirect to dashboard
            
        }
        else {
            //display invalid login credentials
            $result = "<div class='alert alert-danger'>Invalid Email/Password! </div>";
        }
        return $result;
    }

}

?>