<?php 

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php echo "Welcome <b>".  $_SESSION['lastname']. " ". $_SESSION['firstname']. ",</b><br>";
                echo "You login as <b>" . $_SESSION['roletitle']. ".</b>" ?>
                
            <hr>
            <!-- display profile photo -->
            <?php 
            //var_dump($_SESSION);
            if (empty($_SESSION['photo'])) {
              ?>
              <img src="images/female.jpg" alt="profile photo" class="img-fluid w-50 h-50"><br>
              <a href="#">Upload Profile Photo</a>
              <?php
            }else{
                ?>
                <img src="<?php echo $_SESSION['photo'];?>" alt="<?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?>"  class="img-fluid w-50 h-50">
                <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-unstyled ">
                    <li class="">
                        <a class="nav-link active" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#">Delete User</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="addcategory.php">Add Category</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#">Delete Post</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="showallusers.php">View Users</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="#">View Posts</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>