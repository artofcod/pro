<?php require_once('../../../private/initiate.php') ?>
<?php include(SHARED_PATH.'\signup_header.php'); ?>
<?php $signup_id = 'Employee'; ?>
<?php

  if(is_post())
  {
    $args = [];
    $args['username']= isset($_POST['User-name']) ? $_POST['User-name'] : '';
    $args['email']= isset($_POST['Email']) ? $_POST['Email'] : '';
    $args['password']= isset($_POST['Password']) ? $_POST['Password'] : '';
    $args['roll']= isset($signup_id) ? $signup_id : '';
    $args['created_at']= date("Y/m/d h:i:sa");

    $signup = new signup();
    $signup->olx($args);
    $result = $signup->create();

    if($result == true)
    {
      echo "<script>alert('".$signup_id." Data inserted successfully')</script>";
      echo "<script>window.location.href='".url_for_p('pages/authentication/signupE.php')."'</script>";
    }
    else {
      # code...
    }
  }
  else{
    $signup = new signup();
  }
?>
    <main id="<?php echo $signup_id;?>" class="align-items-center m-0">
      <div class="container">
        <div class="row"style="height:90vh">
          <div class="col-sm-4 signup-frm align-self-center offset-sm-4 p-4 rounded">
            <form class="form-group" action="<?php echo url_for_p('/pages/authentication/signupE.php');?>" method="post">
              <p class="form-text">Welcome <?php echo $signup_id;?> please sign in</p>
              <?php echo display_errors($signup->errors);?>
              <div class="form-group mb-4">
                  <input class="form-control ml-0" type="text" name="User-name" value="" placeholder="User name">
                  <small id="u-name"></small>
              </div>
              <div class="form-group mb-4">
                  <input class="form-control ml-0" type="email" name="Email" value="" placeholder="Email">
                  <small id="u-name"></small>
              </div>
              <div class="form-group mb-4">
                  <input class="form-control ml-0" type="password" name="Password" value="" placeholder="Password">
                  <small id="u-name"></small>
              </div>
              <input class="form-control ml-0 signup-submit" id="sub" type="submit" name="" value="Sign up">
            </form>
          </div>
        </div>
      </div>
    </main>