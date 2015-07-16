<?php
	// Object to hold all gists
	$jsonObject = [];

	// loop iterator
	$iterator = 0;

	// Loop gist folder for gists.
	foreach(glob('gist/*.php') as $file) {
		ob_start();
		// Include the file
		include($file);

		// make array for THIS gist
		$newdata =  array (
			'Id' => $iterator,
			'FileName' => $fileName,
			'Author' => $author,
			'Url' => $file,
			'Description' => $description,
			'Tags' => $tags,
			'Tech' => $tech,
			'Categories' => $category,
			'Year' => $year,
			'Month' => $month,
			'Day' => $day
		);


		ob_end_clean();

		// Add THIS array to the $jsonObject
		$jsonObject[$iterator] = $newdata;

		// Increase iteration by 1
		$iterator++;
	}

	$results = array (
		'Results' => $jsonObject
	);

	// Get json file and add $jsonObject to it.
	$fp = fopen('data/gistList.json', 'w');
	fwrite($fp, json_encode($results));
	fclose($fp);
?>