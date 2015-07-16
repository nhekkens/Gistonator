<?php
	// SECTION - Includes ******************************************************************
	require "include/scss.php";

	// print_r($_POST);


	// SECTION - Assign form data to vars **************************************************
	$fileName 		= $_POST["Title"];
	$author 		= $_POST["Author"];
	$description	= $_POST["Description"];
	$tech			= $_POST["tag-0"];
	$tags 			= $_POST["tag-1"];
	$category 		= $_POST["Catagory"];
	$jsCode 		= $_POST["jsCode"];
	$cssCode 		= $_POST["cssCode"];
	$htmlCode 		= $_POST["htmlCode"];
	$year 			= date("Y");
	$month 			= date("m");
	$day 			= date("d");
	$date			= date();


	// Add path and create a timestamp and add it to filename for unique filenames
	$timestamp		= time();
	$uniqueFileName = "gist/" . $timestamp . ".php";


	// SECTION - Encode code blocks ********************************************************
	$encodedHtmlCode = htmlentities ( $htmlCode );
	$encodedCssCode = htmlentities ( $cssCode );
	$encodedJsCode = htmlentities ( $jsCode );


	// SECTION - Create metaData var *******************************************************
	$metaData =	'
<?php
	// Meta DATA
	$fileName = "' . $fileName . '";
	$author = "' . $author . '";
	$description = "' . $description . '";
	$tech = [' . $tech . '];
	$tags = [' . $tags . '];
	$category = [' . $category . '];
	$year = "' . $year . '";
	$month = "' . $month . '";
	$day = "' . $day . '";
	$date = "' . $date . '";
?>';


	// SECTION - Create convertedScss var *****************************************************
	$scss = new scssc();
	$convertedScss = $scss->compile($cssCode);


	// SECTION - Create header var using convertedScss ****************************************
	$header	= '
<?php include("../include/head-gist.php"); ?>

<style>
	' . $convertedScss . '
</style>
	</head>

<?php include("../include/header-gist.php"); ?>

<div class="main">
	<div class="wrapper">
		<div class="row">';


	// SECTION - Create heading var *******************************************************
	$heading = '
			<div class="column" data-span="12">
				<h1>
					' . $fileName . '
				</h1>
				<p>
					Author: ' . $author . '
				</p>
				<p>
					' . $description . '
				</p>
			</div>';


	// SECTION - Create html pre var *******************************************************
	$htmlPre = '
<div class="column" data-span="12">
	<h3 class="html">HTML Code:</h3>
	<pre class="prettyprint">

' . $encodedHtmlCode . '
	</pre>
</div>';


	// SECTION - Create css var ************************************************************
	$cssPre	= '
<div class="column" data-span="12">
	<h3 class="css">CSS Code:</h3>
	<pre class="prettyprint">

' . $encodedCssCode . '
	</pre>
</div>';


	// SECTION - Create js var *************************************************************
	$jsPre = '
<div class="column" data-span="12">
	<h3 class="js">JS Code:</h3>
	<pre class="prettyprint">

' . $encodedJsCode . '
	</pre>
</div>';


	// SECTION - Create live html var ******************************************************
	$htmlLive = '
<div class="column" data-span="12">
<h3 class="live">Example:</h3>
' . $htmlCode . '</div>';


	// SECTION - Create live JS var ********************************************************
	$jsLive = '
<script>
	$( document ).ready(function() {

		' . $jsCode . '

		console.log("Live JS Completed Succesfully");
	});
</script>';


	// SECTION - Create foot var ***********************************************************
	$foot =	'

		</div>
	</div>
</div>
<?php include("../include/foot-gist.php"); ?>';


	// SECTION - Write VARS to newGist ****************************************************
	$newGist = fopen( $uniqueFileName, "w" );
	fwrite($newGist, $metaData);
	fwrite($newGist, $header);
	fwrite($newGist, $heading);

	if ( $_POST["workingVersion"] === 'on' ) {
		fwrite($newGist, $htmlLive);
		fwrite($newGist, $jsLive);
	}

	fwrite($newGist, $htmlPre);
	fwrite($newGist, $cssPre);
	fwrite($newGist, $jsPre);

	fwrite($newGist, $foot);
	fclose($newGist);


	// SECTION - All done, redirect to index ***********************************************
	header('Location: index.php');
?>