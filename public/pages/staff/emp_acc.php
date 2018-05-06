<?php require_once('../../../private/initiate.php') ?>
<?php include(SHARED_PATH.'\signup_header.php'); ?>

<div class="container">
	<div class="row">
		<nav>
			<a href="<?php echo url_for_p('/pages/staff/create.php');?>">Create</a>
			<a href="<?php echo url_for_p('/pages/staff/edit.php');?>">Edit</a>
			<a href="<?php echo url_for_p('/pages/staff/delete.php');?>">Delete</a>
			<a href="<?php echo url_for_p('/pages/staff/publish.php');?>">Publish</a>
			<a href="<?php echo url_for_p('../index.php');?>">Logout</a>
			<a href="#">Update account detailse</a>
		</nav>
		<div>
			<h1>Search for values</h1>
			<input type='search' name='search' value="" placeholder='Search...'>
			<table border="1" style="text-align: center; width:1000px">
				<tr>
					<th>Path</th>
					<th>Cource</th>
					<th>Content</th>
					<th>Sub content</th>
					<th>Video</th>
					<th>Status</th>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
				</tr>
			</table>
		</div>	
	</div>
</div>

<?php include(SHARED_PATH.'\signup_footer.php'); ?>