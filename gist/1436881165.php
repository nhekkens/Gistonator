
<?php
	// Meta DATA
	$fileName = "Responsive Table";
	$author = "Vinny";
	$description = "A working demo of responsive tables. Simply add an HTML table to you're page, include JS and CSS and you're done: Responsive tables.";
	$tech = [JS,CSS,HTML];
	$tags = ['Tables','Responsive','Media Query'];
	$category = [Gist];
	$year = "2015";
	$month = "07";
	$day = "14";
	$date = "";
?>
<?php include("../include/head-gist.php"); ?>

<style>
.table-mirror {
  display: none !important; }

table {
  display: table;
  table-layout: fixed;
  position: relative;
  margin: 20px auto;
  width: auto;
  min-width: 100%;
  text-align: center;
  border-radius: 3px;
  border-collapse: collapse; }
  table caption {
    position: relative;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 19px;
    font-weight: bold; }
  table thead, table tbody {
    position: relative;
    margin: 0 auto; }
  table th, table tr, table td {
    margin: 0;
    padding: 10px 15px;
    border: 1px solid #ddd; }
    table th > *, table tr > *, table td > * {
      margin: 0 !important; }
  table tr:first-child th, table tr:first-child td {
    font-weight: bold;
    text-align: center;
    background: #eee;
    white-space: nowrap; }
    table tr:first-child th:first-child, table tr:first-child td:first-child {
      border-top-left-radius: 3px; }
    table tr:first-child th:last-child, table tr:first-child td:last-child {
      border-top-right-radius: 3px; }
    table tr:last-child th:first-child, table tr:last-child td:first-child {
      border-bottom-left-radius: 3px; }
    table tr:last-child th:last-child, table tr:last-child td:last-child {
      border-bottom-right-radius: 3px; }
    table tr.even td {
      background: #fff; }
    table tr th:first-child, table tr td:first-child {
      font-weight: bold;
      text-align: center;
      background: #eee;
      white-space: nowrap; }
  table td {
    text-align: left;
    background: #fff; }

@media screen and (max-width: 768px) {
  .table-mirror {
    display: block !important; }

  .table-original {
    display: none; }

  table caption {
    font-size: 16px;
    text-align: center; }
    table tr th:last-child, table tr td:last-child {
      font-weight: normal;
      text-align: left;
      background: none; } }

</style>
	</head>

<?php include("../include/header-gist.php"); ?>

<div class="main">
	<div class="wrapper">
		<div class="row">
			<div class="column" data-span="12">
				<h1>
					Responsive Table
				</h1>
				<p>
					Author: Vinny
				</p>
				<p>
					A working demo of responsive tables. Simply add an HTML table to you're page, include JS and CSS and you're done: Responsive tables.
				</p>

			</div>
			<div class="column" data-span="12">
<h3 class="live">Example:</h3>
<table summary="Each row names a Nordic country and specifies its total area and land area, in square kilometers">
	<caption>Sample table: Areas of the Nordic countries, in sq km</caption>

	<tr>
		<td>Country</td>
		<td>Total area</td>
		<td>Land area</td>
	</tr>
	<tr>
		<td>Denmark</td>
		<td>43,070</td>
		<td>42,370</td>
	</tr>
	<tr>
		<td>Finland</td>
		<td>337,030</td>
		<td>305,470</td>
	</tr>
	<tr>
		<td>Iceland</td>
		<td>103,000</td>
		<td>100,250</td>
	</tr>
	<tr>
		<td>Norway</td>
		<td>324,220</td>
		<td>307,860</td>
	</tr>
	<tr>
		<td>Sweden</td>
		<td>449,964</td>
		<td>410,928</td>
	</tr>
</table>
</div>
<script>
$( document ).ready(function() {

	var initTables = function() {
	if ( $("table").length ) {
		$("table").addClass("table-original").each(function(index) {
			var el = $(this),
                caption = el.children("caption"),
                table = this,
				data = [],
				headers = [];

			for ( var i = 0, rlen = table.rows.length; i < rlen; i++ ) {
                var rowData = {};
				for ( var j = 0, clen = table.rows[i].cells.length; j < clen; j++ ) {
                    var cellData = table.rows[i].cells[j].innerHTML;
                    if ( i > 0 )
					    rowData[headers[j]] = cellData;
                    else
						headers[j] = cellData;
                }
                if ( i > 0 ) data.push(rowData);
			}

			for ( var l = data.length - 1; l >= 0; l-- ) {
				var rowGroup = data[l];
                var tbody = $("<tbody/>");

				for ( var key in rowGroup ) {
					var row = '<tr>\
								   <th scope="row">' + key + '</th>\
								   <td>' + rowGroup[key] + '</td>\
							   </tr>';

					tbody.append(row);
				}

                var mobileTable = $("<table/>").addClass("table-mirror");
                if ( caption.length )
                    $('<caption/>').text("Row of " + caption.text()).prependTo(mobileTable);

                mobileTable.append(tbody).insertAfter(el);
			}
		});

		console.log("System :: Tables");
	}
}

initTables();

		console.log("Live JS Completed Succesfully");
	});
</script>
<div class="column" data-span="12">
	<h3 class="html">HTML Code:</h3>
	<pre class="prettyprint">

&lt;table summary=&quot;Each row names a Nordic country and specifies its total area and land area, in square kilometers&quot;&gt;
	&lt;caption&gt;Sample table: Areas of the Nordic countries, in sq km&lt;/caption&gt;

	&lt;tr&gt;
		&lt;td&gt;Country&lt;/td&gt;
		&lt;td&gt;Total area&lt;/td&gt;
		&lt;td&gt;Land area&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Denmark&lt;/td&gt;
		&lt;td&gt;43,070&lt;/td&gt;
		&lt;td&gt;42,370&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Finland&lt;/td&gt;
		&lt;td&gt;337,030&lt;/td&gt;
		&lt;td&gt;305,470&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Iceland&lt;/td&gt;
		&lt;td&gt;103,000&lt;/td&gt;
		&lt;td&gt;100,250&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Norway&lt;/td&gt;
		&lt;td&gt;324,220&lt;/td&gt;
		&lt;td&gt;307,860&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;Sweden&lt;/td&gt;
		&lt;td&gt;449,964&lt;/td&gt;
		&lt;td&gt;410,928&lt;/td&gt;
	&lt;/tr&gt;
&lt;/table&gt;
	</pre>
</div>
<div class="column" data-span="12">
	<h3 class="css">CSS Code:</h3>
	<pre class="prettyprint">

.table-mirror {
	display: none !important;
}

table {
	display: table;
	table-layout: fixed;
	position: relative;
	margin: 20px auto;
	width: auto;
	min-width: 100%;
	text-align: center;
	border-radius: 3px;
	border-collapse: collapse;

	caption {
		position: relative;
		margin-top: 10px;
		margin-bottom: 10px;
		font-size: 19px;
		font-weight: bold;
	}

	thead,
	tbody {
		position: relative;
		margin: 0 auto;
	}

	th,
	tr,
	td {
		margin: 0;
		padding: 10px 15px;
		border: 1px solid #dddddd;

		&gt; * {
			margin: 0 !important;
		}
	}

	tr {
		&amp;:first-child {
			th,
			td {
				font-weight: bold;
				text-align: center;
				background: #eeeeee;
				white-space: nowrap;

				&amp;:first-child {
					border-top-left-radius: 3px;
				}
				&amp;:last-child {
					border-top-right-radius: 3px;
				}
			}
		}

		&amp;:last-child {
			th,
			td {
				&amp;:first-child {
					border-bottom-left-radius: 3px;
				}
				&amp;:last-child {
					border-bottom-right-radius: 3px;
				}
			}
		}

		&amp;.even {
			td {
				background: #ffffff;
			}
		}

		th,
		td {
			&amp;:first-child {
				font-weight: bold;
				text-align: center;
				background: #eeeeee;
				white-space: nowrap;
			}
		}
	}

	td {
		text-align: left;
		background: #ffffff;
	}
}

@media screen and (max-width: 768px) {

	.table-mirror {
		display: block !important;
	}

	.table-original {
		display: none;
	}

	table {
		caption {
			font-size: 16px;
			text-align: center;
		}

		tr {
			th,
			td {
				&amp;:last-child {
					font-weight: normal;
					text-align: left;
					background: none;
				}
			}
		}
	}
}
	</pre>
</div>
<div class="column" data-span="12">
	<h3 class="js">JS Code:</h3>
	<pre class="prettyprint">

var initTables = function() {
	if ( $(&quot;table&quot;).length ) {
		$(&quot;table&quot;).addClass(&quot;table-original&quot;).each(function(index) {
			var el = $(this),
				caption = el.children(&quot;caption&quot;),
				table = this,
				data = [],
				headers = [];

			for ( var i = 0, rlen = table.rows.length; i &lt; rlen; i++ ) {
				var rowData = {};
				for ( var j = 0, clen = table.rows[i].cells.length; j &lt; clen; j++ ) {
					var cellData = table.rows[i].cells[j].innerHTML;
					if ( i &gt; 0 )
						rowData[headers[j]] = cellData;
					else
						headers[j] = cellData;
				}
				if ( i &gt; 0 ) data.push(rowData);
			}

			for ( var l = data.length - 1; l &gt;= 0; l-- ) {
				var rowGroup = data[l];
				var tbody = $(&quot;&lt;tbody/&gt;&quot;);

				for ( var key in rowGroup ) {
					var row = 	'&lt;tr&gt;\
						&lt;th scope=&quot;row&quot;&gt;' + key + '&lt;/th&gt;\
						&lt;td&gt;' + rowGroup[key] + '&lt;/td&gt;\
						&lt;/tr&gt;';

					tbody.append(row);
				}

				var mobileTable = $(&quot;&lt;table/&gt;&quot;).addClass(&quot;table-mirror&quot;);
				if ( caption.length )
					$('&lt;caption/&gt;').text(&quot;Row of &quot; + caption.text()).prependTo(mobileTable);

				mobileTable.append(tbody).insertAfter(el);
			}
		});

		console.log(&quot;System :: Tables&quot;);
	}
}

initTables();
	</pre>
</div>
			</div>
		</div>
	</div>
</div>
<?php include("../include/foot-gist.php"); ?>