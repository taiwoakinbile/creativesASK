<?php

$errordisplay = array();

// var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //assign the variables to form input   
    $postcontent = $_POST['postcontent'];

    //sanitize the user input   
    $postcontent = sanitizeInput($postcontent);


    if (empty($postcontent) ) {
        $errordisplay['postcontent'] = "<span class='text text-danger'>Post Content is required!</span>";
    }


    if(count($errordisplay) == 0){
        // create an object of user class and reference signup method
        $userobj = new Post;
        $userobj->addQuestion( $postcontent,$userid);
    }


    var_dump($_POST);
}

?>

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-body">
        
            <form method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            
                <div class="form-group">
                  <label for="postcontent" class="col-md-12 col-form-label h5">Ask Question</label>
                  <textarea class="form-control" name="postcontent" id="postcontent" rows="3"><?php if (isset($_POST['postcontent'])) { echo $_POST['postcontent']; } ?></textarea>

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