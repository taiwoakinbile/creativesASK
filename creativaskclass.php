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


    //function to add role
    public function addrole($role_title){

        //write the query to insert into taable
        $addrolequery = "INSERT INTO roles(role_title)  
                            VALUES ('$role_title')";

        //check if the query() runs // data is insert into users table
        if ($this->dbobj->dbcon->query($addrolequery)===true){

            
            //create session variable
           echo "role was successfully added";
            
        }
        else{
            echo "Error".$this->dbobj->dbcon->error;
        }
    }

    //function to get roles from the table
    public function getRoles(){
        //write the query to select all roles except super admin
        $sql = "SELECT * FROM roles WHERE role_title != 'Super Admin'";

        //check if the query() runs the sql statement
        if ($result = $this->dbobj->dbcon->query($sql)) {
            $row = $result->fetch_all(MYSQLI_ASSOC);
        }
        else{
            echo "Error" .$this->dbobj->dbcon->error;
        }
        return $row;
    }

    //user signup function
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
            //$user_id = $this->dbobj->dbcon->insert_id;

            //create session variable
            // $_SESSION['myuserid'] = $user_id;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['email'] = $email;

            
            // //redirect to user's profile

            header("Location: http://localhost/creativesASK/user-profile.php");
            exit;
        }
        else{
            echo "Error:".$this->dbobj->dbcon->error;
        }
    }

    //user login function
    public function login($email, $pswd){

        $pswd =md5($pswd);
        // var_dump($mypswd);
        //write your query
        $loginquery = "SELECT * FROM users WHERE user_password = '$pswd'AND emailaddress = '$email' LIMIT 1;";

        //run the query
        $result = $this->dbobj->dbcon->query($loginquery);

        //check if the number of row return is equal to one
        if ($this->dbobj->dbcon->affected_rows == 1) {

            //fetch the result
            $row = $result->fetch_assoc();
            
            //create session variables
            $_SESSION['myuserid'] = $row['user_id'];
            $userid =  $_SESSION['myuserid'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['email'] = $row['emailaddress'];
            $_SESSION['profilephoto'] = $row['photo'];
            $_SESSION['bio'] = $row['user_biography'];

            


            //redirect to user's profile page for now  --  to homepage later
            header("Location: http://localhost/creativesASK/profile.php");
            exit;
        }
        else {
            //display invalid login credentials
            $result = "<div class='alert alert-danger'>Invalid Email/Password! </div>";
        }
        return $result;
    }

    //function to update user profie and upload profile photo
    public function updateProfile($userbio){        

        if ($_FILES['profilephoto']['error'] == 0) {
            # start file upload
            $filesize = $_FILES['profilephoto']['size'];
            $filename = $_FILES['profilephoto']['name'];
            $filetype =  $_FILES['profilephoto']['type'];
            $filetempname = $_FILES['profilephoto']['tmp_name'];

            //specify the destination folder to upload files to 
            $folder = "profilephotos/";

            //limit file size, check file type (extensions)
            if($filesize > 2097152){
                $error[] = 'File size must be exactly or less than 2MB!';
            }
            //GET FILE EXTENSION
            $file_ext = explode('.', $filename);
            $file_ext = strtolower(end($file_ext)); // to get last element in an array and to lowercase

            //specify the extensions allowed

            $extensions = array('png', 'jpeg', 'gif', 'jpg', 'bmp', 'svg', );

            if (in_array($file_ext , $extensions) === false){
                $error[] = 'Extension not allowed';
            }

            //change the filename
            $filename = time()."_";
            $destination = $folder.$filename.".". $file_ext;

            // var_dump($destination);

            //now check if there is no error and upload the file
            if(!empty($error)){
                var_dump($error);
            }
            else{
                //otherwise, upload profile picture
                move_uploaded_file($filetempname, $destination);

                // update photograph column in users based on userid
                $userid =  $_SESSION['myuserid'];
                //write query to update the table column
                $sql = "UPDATE users SET user_biography = '$userbio', photo = '$destination' WHERE user_id = '$userid';";
                $result = $this->dbobj->dbcon->query($sql);

                if ($this->dbobj->dbcon->affected_rows == 1) { 
                    //create session variable
                    
                    $result = "<div class='alert alert-success'> Image uploaded!</div>";

                }
                else{
                    $result = "<div class='alert alert-danger'> No image uploaded!</div>". $this->dbobj->dbcon->error;

                }

            }

           
        }
        else {
            $result = "<div class='alert alert-danger'> You have not uploaded any image!</div>";
        }


        return $result;
    }

    //function to add interest categories
    public function addCategory($category_name){

        //write the query to insert into  taable
        $query = "INSERT INTO category(category_name)  
                            VALUES ('$category_name')";

        //check if the query() runs // data is insert into users table
        if ($this->dbobj->dbcon->query($query)===true){


            
           echo " Category was successfully added";
            
        }
        else{
            echo "Error".$this->dbobj->dbcon->error;
        }
    }


    //function to display all users
    public function getUsers(){
        //write the query to select all users with their role title
        $userrolequery = "SELECT *  FROM users;";

        //check if the query() runs the sql statement
        if ($result = $this->dbobj->dbcon->query($userrolequery)) {
            $row = $result->fetch_all(MYSQLI_ASSOC);

        }
        else{
            echo "Error" .$this->dbobj->dbcon->error;
        }
        return $row;
    }


    //function to delete user based on the userID
    public function deleteUser($userid){
        $sql = "DELETE FROM users where user_id = '$userid';";

        //RUN THE QUERY
        $this->dbobj->dbcon->query($sql);

        //to know how many rows affected
        if($this->dbobj->dbcon->affected_rows == 1){
            //redirect to show all product page
            header("Location: http://localhost/creativesASK/showallusers.php");
            exit;
        }else{
            $msg ="<div class='alert alert-danger'> Oops! Something happened.".$this->dbobj->dbcon->error."</div>";
        }

        return $msg;
    }
}  

    // class for post 
    class Post{
        //member variables
        
        //obj handler for DatabaseConfig class
        public $dbobj;
    
        //member function/method
        public function __construct(){
            //create instance/object of  DatabaseConfig class
            $this->dbobj = new DatabaseConfig();
        }

        //function to submit add post to post 'table'
        public function addPost(){

        //write the query to insert into  taable
        $sql = "INSERT INTO posts(post_title, content, user_id, category_id) VALUES ('$post_title', '$postcontent', '$userid', '$categoryid')";

         //check if the query() runs // data is insert into posts table
            if ($this->dbobj->dbcon->query($sql)===true){
                
            header("Location: http://localhost/creativesASK/homepage.php");
            exit;
            
            // echo " Post successfully added";
                
            }
            else{
                echo "Error".$this->dbobj->dbcon->error;
            }
        }


}

?>