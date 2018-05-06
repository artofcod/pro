<?php require_once('../../../private/initiate.php') ?>
<?php include(SHARED_PATH.'\signup_header.php'); ?>
<?php $signup_id = 'Admin'; ?>
    <main id="<?php echo $signup_id ?>" class="align-items-center m-0">
      <div class="container">
        <div class="row"style="height:90vh">
          <div class="col-sm-4 signup-frm align-self-center offset-sm-4 p-4 rounded">

            <form class="form-group" action="login.html" method="post">
              <p class="form-text">Welcome <?php echo $signup_id ?> please sign in</p>
              <div class="form-group mb-4">
                  <input class="form-control" type="text" name="User-name" value="" placeholder="User name">
                  <small id="u-name"></small>
              </div>
              <div class="form-group mb-4">
                  <input class="form-control" type="email" name="Email" value="" placeholder="Email">
                  <small id="u-name"></small>
              </div>
              <div class="form-group mb-4">
                  <input class="form-control" type="password" name="Password" value="" placeholder="Password">
                  <small id="u-name"></small>
              </div>
              <input class="form-control signup-submit" id="sub" type="submit" name="" value="Sign up">
            </form>
          </div>
        </div>
      </div>
    </main>
