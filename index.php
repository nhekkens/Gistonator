<?php include("include/makeJson.php"); ?>
<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>


<div class="main">
	<div class="wrapper">

		<div class="search-wrapper" data-search="data/gistList.json">
			<div class="row">
				<div class="column">
					<h2>Welcome to pureGist.</h2>
					<!--
					<div class="autocomplete-wrapper" data-autocomplete="scripts/dev/data/search.json">
						<input type="text" placeholder="Search..." data-search-parameter="Title, Summary" data-autocomplete-parameter="Title">
					</div>
					-->
					<input type="text" placeholder="Search..." data-search-parameter="FileName">
				</div>
			</div>
			<div class="row">
				<div class="column" data-span="3">
					<select class="keep" data-search-parameter="Tags"></select>
				</div>
				<div class="column" data-span="3">
					<select class="keep" data-search-parameter="Categories"></select>
				</div>
				<div class="column" data-span="3">
					<select class="keep" data-search-parameter="Tech"></select>
				</div>
				<div class="column" data-span="3">
					<select class="keep" data-search-parameter="Author"></select>
				</div>
			</div>

			<div class="search-container"></div>
		</div>
	</div>
</div>


<?php include("include/footer.php"); ?>
<?php include("include/foot.php"); ?>