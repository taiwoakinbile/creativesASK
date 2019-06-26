<?php include_once('header.php');?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role_title = sanitizeInput($_REQUEST['role']);
    


    if (empty($role_title) ) {
        $role_error = "<span class='text text-danger'>Required</span>";
    }


    if (empty($role_error)){
        $addroleobj = new User;

        $addroleobj->addrole($role_title);
    }
}
?>
<div class="container">
    <?php if(isset( $role_error)){
        echo $role_error;
    }
    
    ?>
    <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group row">
        
        <input type="text" class="form-control" name="role" >
        <button type="submit" class="btn btn-primary">Add Role</button>
        </div>
    </form>
</div>

<?php include_once('footer.php');?>