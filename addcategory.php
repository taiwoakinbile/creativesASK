<?php include_once('header.php');?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_name = sanitizeInput($_REQUEST['category']);
    


    if (empty($category_name) ) {
        $category_error = "<span class='text text-danger'>Required</span>";
    }


    if (empty($category_error)){
        $addcategoryobj = new User;

        $addcategoryobj->addCategory($category_name);
    }
}
?>
<div class="container">
    <?php if(isset( $category_error)){
        echo $category_error;
    }
    
    ?>
    <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="form-group row">
        
        <input type="text" class="form-control" name="category" >
        <button type="submit" class="btn btn-primary">Add category</button>
        </div>
    </form>
</div>

<?php include_once('footer.php');?>