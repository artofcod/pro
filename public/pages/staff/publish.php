<?php require_once('../../../private/initiate.php');?>
<?php include(SHARED_PATH.'\signup_header.php');?>


<div class="container">
	<div class='row mt-4 mb-4'>
		<div class="col-4 " style="border-right:1px solid #0078ff;">
			<p>Path name</p>
			<input type="text" name="path_name" value="" placeholder="">
			<button><a href>Go</a></button></br>
			<select name="path_option">
				<option value="a">a</option>
				<option value='b'>b</option>
				<option value='c'>c</option>
				<option value='d'>d</option>
			</select>
			<button>Go</button><br>
			<button>Create Path</button>
			<button>Publish Path</button>
		</div>
		<div class="col-4 " style="border-right:1px solid #0078ff;">
			<p>Path name</p>
			<input type='text' name='path_name' value="" placeholder=" path name will appear">
			<p>Cource name</p>
			<input type="text" name="path_name" value="" placeholder="">
			<button>Go</button></br>
			<select name="path_option">
				<option value="a">a</option>
				<option value='b'>b</option>
				<option value='c'>c</option>
				<option value='d'>d</option>
			</select>
			<button>Go</button><br>
			<button>Create cource</button>
			<button>Publish cource</button>
		</div>
		<div class="col-4" >
			<p>Path name</p>
			<input type='text' name='path_name' value="" placeholder=" path name will appear">
			<button>Go</button></br>
			<p>Cource name</p>
			<input type="text" name="path_name" value="" placeholder="ource will appear">
			<button>Go</button></br>
			<p>Content name</p>
			<input type="text" name="content_name" value="">
			<button>Go</button></br>
			<select name="path_option">
				<option value="a">a</option>
				<option value='b'>b</option>
				<option value='c'>c</option>
				<option value='d'>d</option>
			</select>
			<button>Go</button></br>
			<button>Create content</button>
			<button>Publish content</button>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<ul class='row ' style="border-top:1px solid black; margin-top: 5px;">
				<li class='col-4'>
					<p>Path name</p>
					<input type='text' name='path_name' value="" placeholder=" path name will appear">
					<button>Go</button></br>
				</li>
				<li class='col-4'>
					<p>Cource name</p>
					<input type="text" name="path_name" value="" placeholder="ource will appear">
					<button>Go</button></br>
				</li>
				<li class='col-4'>
					<p>Content name</p>
					<input type="text" name="content_name" value="" placeholder="Content will appear hear">
					<button>Go</button></br>
				</li>
			</ul>
			<table border="1" style="text-align: center; width:100%;">
				<tr >
					<th style="text-align: center; " >Path</th>
					<th style="text-align: center; ">Cource</th>
					<th style="text-align: center; ">Content</th>
					<th style="text-align: center; ">Sub content</th>
					<th style="text-align: center; ">Video</th>
					<th style="text-align: center; ">Status</th>
					<th colspan="2" style="text-align: center; ">action</th>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
					<td><button><a href="#">on</a></button></td>
					<td><button><a href="#">off</a></button></td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
					<td><button><a href="#">on</a></button></td>
					<td><button><a href="#">off</a></button></td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
					<td><button><a href="#">on</a></button></td>
					<td><button><a href="#">off</a></button></td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
					<td><button><a href="#">on</a></button></td>
					<td><button><a href="#">off</a></button></td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
					<td><button><a href="#">on</a></button></td>
					<td><button><a href="#">off</a></button></td>
				</tr>
				<tr>
					<td>web</td>
					<td>html</td>
					<td>tag</td>
					<td>heading</td>
					<td>c:\pro\videos\1.mp4</td>
					<td>off</td>
					<td><button><a href="#">on</a></button></td>
					<td><button><a href="#">off</a></button></td>
				</tr>
		</table>
		</div>
	</div>
</div>

<?php include(SHARED_PATH.'\signup_footer.php');?>