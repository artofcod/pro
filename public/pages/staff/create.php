<?php require_once('../../../private/initiate.php') ?>
<?php include(SHARED_PATH.'/signup_header.php');?>
<?php 
	$args = [];
	if(is_post())
	{
		$args['path_name'] = isset($_POST['path_name']) ? $_POST['path_name'] : NULL;
		$args['cource_name'] = isset($_POST['cource_name']) ? $_POST['cource_name'] : NULL;
		$args['content'] = isset($_POST['content_name']) ? $_POST['content_name'] : NULL;
		$args['desc'] = isset($_POST['desc']) ? $_POST['desc'] : NULL;
		$args['f_name']=isset($_FILES['filex']['name']) ? $_FILES['filex']['name'] : NULL;
		$args['f_type']=isset($_FILES['filex']['type']) ? $_FILES['filex']['type'] : NULL;
 		$args['f_size']=isset($_FILES['filex']['size']) ? $_FILES['filex']['size'] : NULL;
		$args['f_temp_name']= isset($_FILES['filex']['tmp_name']) ? $_FILES['filex']['tmp_name'] : NULL ;
		$args['f_error']=isset($_FILES['filex']['error']) ? $_FILES['filex']['error'] : NULL;
		$fp = new file_process($args);
		echo $fp->save();

	}
	//print_r($args);
?>
	<div>
		<div class="container">
			<div class="row">
				<div class="col-4">
					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
						<h3><u>Create Path</u></h3>
						<span>path name</span><br>
						<input class="m-0" type="text" name="path_name" value=""><br>
						<span>Image</span><br>
						<input class="m-0" type="file" name="filex[]"><br>
						<span>Description</span><br>
						<textarea name="desc" value=""></textarea><br>
						<input class="m-0" type="submit" name="next" value="next (add cource)">
						<button><a href="#">cretate new path</a></button>
					</form>
				</div>
				<div class="col-4">
					<h3><u>Add cource</u></h3>
					<span>path name</span><br>
					<input type="text" name="path_name" value=""><br>
					<span>Cource name</span><br>
					<input type="text" name="cource_name" value=""><br>
					<span>Image</span><br>
					<input type="file" name="filex[]"><br>
					<span>Description</span><br>
					<textarea></textarea>
					<button><a href="#">next (Add content to the cource)</a></button>
					<button><a href="#">Add new cource</a></button>
				</div>
				<div class="col-4">
					<h3><u>Add content sub content and videos</u></h3>
					<span>path name</span><br>
					<input type="text" name="path_name" value=""><br>
					<span>Cource name</span><br>
					<input type="text" name="cource_name" value=""><br>
					<ol>
						<li>
							<span>Content name</span><br>
							<input type="text" name="content_name" value="">
						</li>
						<ol>
							<li>
								<span>sub content name</span><br>
								<input type="text" name="sub_cont_name">
								<span>Video</span>
								<input type="file" name="filex[]">
							</li>
							<li>
								<span>sub content name</span><br>
								<input type="text" name="sub_cont_name">
								<span>Video</span>
								<input type="file" name="filex[]">
							</li>
							<li>
								<span>sub content name</span><br>
								<input type="text" name="sub_cont_name">
								<span>Video</span>
								<input type="file" name="filex[]">
							</li>
							<li>
								<span>sub content name</span><br>
								<input type="text" name="sub_cont_name"><span>+</span>
								<span>Video</span>
								<input type="file" name="filex[]">
							</li>
						</ol>
					</ol>
					<button><a href="#">Another content</a></button>
					<button><a href="#">finish</a></button>
					<button><a href="#">Add another cource</a></button>
					<button><a href="#">publish</a></button>
				</div>
			</div>
		</div>
	</div>

<?php include(SHARED_PATH.'/signup_footer.php');?>