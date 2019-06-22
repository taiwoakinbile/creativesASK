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
    <title>creativesASK | Website</title>
    
</head>
<body>
<?php 
    session_start();
     include_once('creativaskclass.php');
    function sanitizeInput($data){
        // $data = trim(htmlspecialchars(addslashes($data)));
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = addslashes($data);
    
    return $data;
    }
        
?>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-green bg-green">
            <a class="navbar-brand" href=""><img src="images/img.png" alt="creativeasklogo"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Join</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>
                </ul>
               
            </div> -->
        </nav>

    
                    
