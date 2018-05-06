<?php require_once('../../../private/initiate.php') ?>
<?php include(SHARED_PATH.'/signup_header.php');?>

	<div>
		<div class="container">
			<div class="row">
				<div class="col-4">
					<h3><u>Create Path</u></h3>
					<span>path name</span><br>
					<input type="text" name="path_name" value=""><br>
					<span>Image</span><br>
					<input type="file" name="image_file"><br>
					<span>Description</span><br>
					<textarea></textarea>
					<button><a href="#">next (Add cource)</a></button>
					<button><a href="#">cretate new path</a></button>
				</div>
				<div class="col-4">
					<h3><u>Add cource</u></h3>
					<span>path name</span><br>
					<input type="text" name="path_name" value=""><br>
					<span>Cource name</span><br>
					<input type="text" name="cource_name" value=""><br>
					<span>Image</span><br>
					<input type="file" name="image_file"><br>
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
								<input type="file" name="video_file">
							</li>
							<li>
								<span>sub content name</span><br>
								<input type="text" name="sub_cont_name">
								<span>Video</span>
								<input type="file" name="video_file">
							</li>
							<li>
								<span>sub content name</span><br>
								<input type="text" name="sub_cont_name">
								<span>Video</span>
								<input type="file" name="video_file">
							</li>
							<li>
								<span>sub content name</span><br>
								<input type="text" name="sub_cont_name"><span>+</span>
								<span>Video</span>
								<input type="file" name="video_file">
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