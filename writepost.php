<?php
function sanitizeInput($data){
    // $data = trim(htmlspecialchars(addslashes($data)));
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data);

return $data;
}
include_once('creativaskclass.php');

$errordisplay = array();

var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //assign the variables to form input
    $post_title = $_POST['posttitle'];
    $postcontent = $_POST['postcontent'];

    //sanitize the user input
    $post_title = sanitizeInput($post_title);
    $postcontent = sanitizeInput($postcontent);

    if (empty($post_title) ) {
    $errordisplay['posttitle'] = "<span class='text text-danger'>Post Title is required!</span>";
    }

    if (empty($postcontent) ) {
        $errordisplay['postcontent'] = "<span class='text text-danger'>Post Content is required!</span>";
    }


    if(count($errordisplay) == 0){
        // create an object of user class and reference signup method
        $userobj = new User;
        $output =  $userobj->submitPost();
    }

}

?>

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-body">
        
            <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group row">
                    <label for="posttitle" class="col-md-12 col-form-label h5">Post Title</label>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="posttitle" id="posttitle" placeholder="Write a title..." value="<?php if (isset($_POST['posttitle'])) { echo $_POST['posttitle']; } ?>">
                    </div>
                </div>
                
                <div class="form-group">
                  <label for="postcontent" class="col-md-12 col-form-label h5">Post</label>
                  <textarea class="form-control" name="postcontent" id="postcontent" rows="3" value="<?php if (isset($_POST['postcontent'])) { echo $_POST['postcontent']; } ?>"></textarea>

                </div>
                
                <div class="form-group row">
                    <div class="col-md-12">
                        <button type="submit" id="submitpost" class="btn btn-green float-right">Submit</button>
                    </div>
                </div>
            </form>
        
    </div>
    </div>
    
</div>