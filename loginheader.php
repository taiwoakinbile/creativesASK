<?php 
    session_start();
     include_once('creativaskclass.php');


     if (!isset($_SESSION['myuserid'])) {
        # redirect to login page
        header("Location:  http://localhost/creativesASK/signin.php");
        exit;
    }

    function sanitizeInput($data){
        // $data = trim(htmlspecialchars(addslashes($data)));
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);
    
    return $data;
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" content="creative, fashion, vocation, question, forum, shoe, bakers">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Taiwo">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Kalam|Permanent+Marker" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fa/css/all.css">
    <link rel="stylesheet" href="style1.css" type="text/css">
    <title>creativesASK | <?php echo $pagetitle;?></title>
    
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-green  bg-green">
            <a class="navbar-brand" href=""><img src="images/img.png" alt="creativeasklogo"></a>
            <button class="custom-toggler navbar-toggler d-lg-none " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2">
                    <div class="dropdown">
                        <a class="btn btn-green  ml-3 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Posts
                        </a>                      
                        
                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <button class="dropdown-item"  href="" id="writepost" >Post a question</button>
                            <a class="dropdown-item"  id="" href="">Answer a Question</a>
                        </div> -->
                    </div>

                    <a class="btn btn-green  ml-3 " href="writepost.php" role="button" > <i class="fa fa-plus-circle" aria-hidden="true"></i>Write Post
                        </a>  

                    
                    <div class="dropdown">
                        <a class="btn  btn-green ml-3 " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-layer-group"></i> Categories
                        </a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Expert Articles</a>
                            <a class="dropdown-item" href="#">Business List</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <a class=" ml-3 btn  btn-green " href="profile.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-portrait"></i> Profile
                        </a>
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="user-profile.php">Edit Profile</a>
                          <!-- the php code above may no longer be necessary -->
                          <a class="dropdown-item" href="logout.php">Sign Out</a>
                        </div>
                    </div>

                </div>
                <form class="form-inline ml-3 my-lg-0">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                    <!-- <button  id="login" type="submit" class="btn btn-wine ml-3"><a href="">Login</a></button> -->
                    
                </form>
            </div>
        </nav>

        <div class="postcontainer"></div>

    


    
    
                    
