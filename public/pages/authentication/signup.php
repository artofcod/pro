<?php require_once('../../../private/initiate.php') ?>
<?php include(SHARED_PATH.'\signup_header.php'); ?>
<?php 
      $signup_id = 'User'; 
?>
<?php
  if(is_post())
  {
    $args = [];
    $args['username'] = isset($_POST['user_name']) ? $_POST['user_name'] : '';
    $args['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $args['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    $args['roll'] = $signup_id;
    $args['created_at']= date("Y/m/d h:i:sa") ;

    $signup = new signup();
    $signup->olx($args);
    
    $result = $signup->create();
    if($result==true)
    {
       echo "<script>alert('".$signup_id."Student Data inserted successfully')</script>";
       echo "<script>window.location.href='".url_for_p('pages/authentication/signup.php')."'</script>";
       redirect(url_for_p('/pages/authentication/login.php'));
    }
    else {
      $flag_err = true;
    }
  }
  else {
    //Display the signup form
    $signup = new signup();
  }

 ?>
    <main id = "<?php echo $signup_id;?>" class="align-items-center m-0">
      <div class="container">
        <div class="row"style="height:90vh">
          <div class="col-sm-4 signup-frm align-self-center offset-sm-4 p-4 rounded">

            <form id="x" class="form-group" action="<?php echo url_for_p('/pages/authentication/signup.php')?>" method="post">
              <p class="form-text">Welcome please sign in</p>
              <!-- <small id="blank_error"></small> -->
              <?php echo display_errors($signup->errors);?>
              <div class="form-group mb-4 ">
                  <input class="form-control ml-0" type="text" id="u_name" name="user_name" value="" placeholder="User name">
                  <small id="uname_error"></small>
              </div>
              <div class="form-group mb-4 ">
                  <input class="form-control ml-0" type="email" id="email_id" name="email" value="" placeholder="Email">
                  <small id="email_error"></small>
              </div>
              <div class="form-group mb-4 ">
                  <input class="form-control ml-0" type="password" id="pswd" name="password" value="" placeholder="Password">
                  <small id="password_error"></small>
              </div>
              <button class="form-control signup-submit" id="sub">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </main>
<?php include(SHARED_PATH.'\signup_footer.php'); ?>
