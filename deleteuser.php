<?php 
$pagetitle = "Delete Product";
include_once('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $userid = $_POST['userid'];



    // create object of users class
    $userobj = new User;
    $output =  $userobj -> deleteUser($userid);

    var_dump($output);
}


?>

<div class="container">
    <div class="row">
        <div class="col-md-2">
       
        </div>

        <div class="col-md-10">
            <h2>Are you sure you want to delete user,<?php if(isset($_GET['name'])){echo $_GET['name']; }?> ?</h2>
            <?php if (isset($output)) { echo $output; }?>

            <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?userid=<?php echo $_GET['userid'];?>&name=<?php echo $_GET['name'];?>" >
                                  
                    
                <div class="form-group row">
                    <div class="col-md">
                        <input type="hidden" name="userid" value="<?php if(isset($_GET['userid'])){echo $_GET['userid'];}?>">
                        <button type="submit" class="btn btn-danger btn-lg">Yes, Delete User</button>
                    </div>
                </div>


            </form>
        </div>
        
    </div>
</div>
<?php include_once('footer.php')?>