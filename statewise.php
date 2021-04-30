<?php

$api_url = 'https://api.covid19india.org/data.json';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All data exists in 'data' object
$daily_data = $response_data->statewise;

$daily_data = array_slice($daily_data, 1, 36);

// Traverse array and display data
print '<table border=1><tr><th>State</th><th>State Code</th><th>Confirmed</th><th>Active Cases</th><th>Recovered</th></tr>';
foreach ($daily_data as $daily) {
	print '<td><a href="'.$daily->state.'">' .$daily->state.'</a></td>' ;

	print '<td><a href="'.$daily->statecode.'">' .$daily->statecode.'</a></td>' ;

	print '<td><a href="'.$daily->confirmed.'">' .$daily->confirmed.'</a></td>' ;

	print '<td><a href="'.$daily->active.'">' .$daily->active.'</a></td>' ;

	print '<td><a href="'.$daily->recovered.'">' .$daily->recovered.'</a></td></tr>' ;
	
}


print '</table>';

?>