<?php require_once('../../../private/initiate.php') ?>
<?php include(SHARED_PATH.'/signup_header.php');?>

<div class="col help align-items-center">
	<h1>Submit your query and get helped within few hour</h1>
</div>
<div class="col outer">
	<div class="row align-items-center mid">
		<div class="col-5 inner">
			<form id="x" class="form-group" action="" method="post">
		         <div class="form-group mb-4 ">
		             <input class="form-control ml-0" type="text" id="u_name" name="Email" value="" placeholder="Email">
		             <small id="uname_error"></small>
		         </div>
		         <div class="form-group mb-4 ">
		             <textarea class="form-control ml-0" placeholder="Your query"></textarea>
		         </div>
		         <button class="form-control signup-submit" id="sub">Submit query</button>
		    </form>
		</div>
	</div>
	
</div>

<?php include(SHARED_PATH.'\signup_footer.php'); ?>
