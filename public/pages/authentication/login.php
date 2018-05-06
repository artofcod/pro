<?php require_once('../../../private/initiate.php');?>
<?php include(SHARED_PATH.'\signup_header.php');?>
<?php $signup_id = 'login'?>
<?php
  if(is_post())
  {
    $args = [];
    $args['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $args['password'] = isset($_POST['password']) ? $_POST['password'] : '';
    $args['username'] = isset($_POST['email']) ? $_POST['email'] : '';

    $login = new login($args);
    $result = $login->login();
    if($result==true)
    {
       echo "<script>alert('you successfully logged in')</script>";
       echo "<script>window.location.href='".url_for_p('pages/authentication/login.php')."'</script>";
       redirect(url_for_p('/pages/staff/emp_acc.php'));
    }
    else {
      $flag_err = true;
    }
  }
  else {
    //Display the signup form
    $login = new login();
  }

?>
<main id = "<?php echo $signup_id;?>" class="align-items-center m-0">
      <div class="container">
        <div class="row"style="height:90vh">
          <div class="col-sm-4 signup-frm align-self-center offset-sm-4 p-4 rounded">

            <form id="x" class="form-group" action="<?php echo url_for_p('/pages/authentication/login.php')?>" method="post">
              <p class="form-text">Welcome Please Login in</p>
              <?php echo display_errors($login->errors);?>
              <div class="form-group mb-4 ">
                  <input class="form-control ml-0" type="text" id="u_name" name="email" value="" placeholder="User name / Email">
                  <small id="uname_error"></small>
              </div>
              <div class="form-group mb-4 ">
                  <input class="form-control ml-0" type="password" id="pswd" name="password" value="" placeholder="Password">
                  <small id="password_error"></small>
              </div>
              <button class="form-control signup-submit" id="sub">Login</button>
            </form>
          </div>
        </div>
      </div>
    </main>
<?php include(SHARED_PATH.'\signup_footer.php'); ?>
