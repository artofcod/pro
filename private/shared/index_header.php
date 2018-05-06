
<?php if(!isset($page_title)){ $page_title = "Learn"; } ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="title" content="l_ern_sell">
    <meta name="description" content="learn,earn,buy,shell menagement system">
    <meta name="author" content="soumitra_patra">
    <meta name="viewport" content="width=device-width,initial-scale=0.1">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="<?php echo url_for_i('css/style.css');?>">
    <link rel="stylesheet" href="<?php echo url_for_i('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo url_for_i('css/font-awesome.css');?>">
  </head>
  <body>
    <header class="header">
      <nav class="container">
        <div class="row">
          <div class="col nav">
            <span class="nav-brand nav-item">
            <a href="index.php"><img class="img-fluid logo" src="<?php echo url_for_i('images/logo.png');?>" alt="logo of the site"></a>
            </span>
            <a class="nav-item nav-link align-self-center" href="#">Library</a>
            <a class="nav-item nav-link align-self-center" href="#">Ecomarce</a>
            <a class="nav-item nav-link align-self-center" href="#">Earn</a>
            <a class="nav-item nav-link align-self-center" href="#">Help</a>
            <a class="nav-item nav-link align-self-center nav-pbtn mr-3 ml-2" href="<?php echo url_for_i('pages/authentication/signup.php');?>">Signup</a>
            <a class="nav-item nav-link align-self-center nav-pbtn" href="<?php echo url_for_i('pages/authentication/login.php');?>">Login</a>
          </div>
        </div>
      </nav>
    </header>
