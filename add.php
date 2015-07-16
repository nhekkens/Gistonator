<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>


<div class="main">
	<div class="wrapper">
		<div class="row">
			<div class="column" data-span="12">
				<h3>Add a Gist</h3>
				<form action="make.php" method="POST">
					<div class="row">
						<div class="column" data-span="6">
							<label>Title</label>
							<input type="text" name="Title" placeholder="Title" required>
						</div>
						<div class="column" data-span="6">
							<label>Author</label>
							<input type="text" name="Author" placeholder="Author" required>
						</div>
						<div class="column" data-span="12">
							<label>Description</label>
							<textarea type="textarea" rows="5" cols="50" name="Description" placeholder="Description" required></textarea>

							<label>Tech</label>
							<select class="Form-trigger" name="Tech" data-tagcloud="true">
								<option value="" default selected>Please select Tech used.</option>
								<option value="JS">JS</option>
								<option value="CSS">CSS</option>
								<option value="HTML">HTML</option>
							</select>

							<label class="js-form">JS</label>
							<textarea class="js-form" type="textarea" rows="5" cols="50" name="jsCode" placeholder="Enter your JS"></textarea>

							<label class="html-form">HTML</label>
							<textarea class="html-form" type="textarea" rows="5" cols="50" name="htmlCode" placeholder="Enter your HTML"></textarea>

							<label class="css-form">CSS</label>
							<textarea class="css-form" type="textarea" rows="5" cols="50" name="cssCode" placeholder="Enter your CSS"></textarea>
						</div>
						<div class="column" data-span="12">
							<label>Tags</label>
							<input type="text" name="Tags" placeholder="Type and press Enter to add to the tag cloud" data-tagcloud="true">
						</div>
						<div class="column" data-span="12">
							<label>Category</label>
							<select name="Catagory">
								<option value="" default selected>Please select a Category</option>
								<option value="Gist">Gist</option>
								<option value="two">two</option>
								<option value="three">three</option>
								<option value="four">four</option>
								<option value="five">five</option>
								<option value="six">six</option>
								<option value="seven">seven</option>
								<option value="eight">eight</option>
								<option value="nine">nine</option>
								<option value="ten">ten</option>
							</select>
						</div>
						<div class="column" data-span="6">
							<input id="f116" type="checkbox" data-toggle="true" name="workingVersion" data-validation="checkbox">
							<label for="f116">Working example?</label>
						</div>
						<div class="column text-right" data-span="6">
							<button type="submit" class="primary">Add Gist</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php include("include/footer.php"); ?>
<?php include("include/foot.php"); ?>