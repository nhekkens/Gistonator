
<?php
	// Meta DATA
	$fileName = "SVG's with PNG fallback.";
	$author = "Vinny";
	$description = "SVG support for vector icons with a png fallback. This include a mixin for colouring your svg's ( Not supported on the .png )";
	$tech = [JS,CSS,HTML];
	$tags = [Png,Svg,Mixin,Images,Icons,Vector];
	$category = [Gist];
	$year = "2015";
	$month = "07";
	$day = "16";
	$date = "";
?>
<?php include("../include/head-gist.php"); ?>

<style>
	.icon {
  display: inline-block;
  position: relative;
  width: 40px;
  height: 40px;
  fill: black;
  path: black;
  line: black;
  stroke: none !important;
  text-decoration: none !important;
  overflow: visible; }
  .icon path, .icon polygon, .icon rect {
    fill: black;
    path: black;
    line: black;
    stroke: none !important; }

</style>
	</head>

<?php include("../include/header-gist.php"); ?>

<div class="main">
	<div class="wrapper">
		<div class="row">
			<div class="column" data-span="12">
				<h1>
					SVG's with PNG fallback.
				</h1>
				<p>
					Author: Vinny
				</p>
				<p>
					SVG support for vector icons with a png fallback. This include a mixin for colouring your svg's ( Not supported on the .png )
				</p>
			</div>
<div class="column" data-span="12">
<h3 class="live">Example:</h3>
<img class="svg icon" src="../img/icons/icon-check.svg" width="40" height="40" onerror="this.onerror=null;this.src='../img/icons/icon-check.png'"></div>
<script>
	$( document ).ready(function() {

		var initSVGs = function() {
	if ( $('img.svg').length ) {
		var svgCount = 0;

		$('img.svg').each(function(i) {
			var img = $(this),
				imgID = img.attr('id'),
				imgClass = img.attr('class'),
				imgURL = img.attr('src');

			svgCount = i;

			$.get(imgURL, function(data) {
				var svg = $(data).find('svg');
				if(typeof imgID !== 'undefined') svg = svg.attr('id', imgID);
				if(typeof imgClass !== 'undefined') svg = svg.attr('class', imgClass + ' replaced-svg');
				if ( img.hasClass("icon") ) svg.find("*").removeAttr("style");
				svg = svg.removeAttr('xmlns:a');
				img.replaceWith(svg);
			}, 'xml');
		});

		console.log("Live :: SVG Injection @ " + svgCount + " images");
	}
}

initSVGs();

		console.log("Live JS Completed Succesfully");
	});
</script>
<div class="column" data-span="12">
	<h3 class="html">HTML Code:</h3>
	<pre class="prettyprint">

&lt;img class=&quot;svg icon&quot; src=&quot;../img/icons/icon-check.svg&quot; width=&quot;40&quot; height=&quot;40&quot; onerror=&quot;this.onerror=null;this.src='../img/icons/icon-check.png'&quot;&gt;
	</pre>
</div>
<div class="column" data-span="12">
	<h3 class="css">CSS Code:</h3>
	<pre class="prettyprint">

$iconSize: 40px;

@mixin svgColor($color) {
	fill: $color;
	path: $color;
	line: $color;
	stroke: none !important;

	path,
	polygon,
	rect {
		fill: $color;
		path: $color;
		line: $color;
		stroke: none !important;
	}
}

.icon {
	display: inline-block;
	position: relative;
	width: $iconSize;
	height: $iconSize;
	@include svgColor(black);
	text-decoration: none !important;
	overflow: visible;
}
	</pre>
</div>
<div class="column" data-span="12">
	<h3 class="js">JS Code:</h3>
	<pre class="prettyprint">

var initSVGs = function() {
	if ( $('img.svg').length ) {
		var svgCount = 0;

		$('img.svg').each(function(i) {
			var img = $(this),
				imgID = img.attr('id'),
				imgClass = img.attr('class'),
				imgURL = img.attr('src');

			svgCount = i;

			$.get(imgURL, function(data) {
				var svg = $(data).find('svg');
				if(typeof imgID !== 'undefined') svg = svg.attr('id', imgID);
				if(typeof imgClass !== 'undefined') svg = svg.attr('class', imgClass + ' replaced-svg');
				if ( img.hasClass(&quot;icon&quot;) ) svg.find(&quot;*&quot;).removeAttr(&quot;style&quot;);
				svg = svg.removeAttr('xmlns:a');
				img.replaceWith(svg);
			}, 'xml');
		});

		console.log(&quot;Live :: SVG Injection @ &quot; + svgCount + &quot; images&quot;);
	}
}

initSVGs();
	</pre>
</div>

		</div>
	</div>
</div>
<?php include("../include/foot-gist.php"); ?>