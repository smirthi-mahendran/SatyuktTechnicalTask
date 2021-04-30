<?php

$api_url = 'https://api.covid19india.org/data.json';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

$daily_data = $response_data->cases_time_series;

print '<table border=1><tr><th>Date</th><th>Daily Confirmed</th><th>Daily Recovered</th><th>Daily Deaths</th><th>Total Confirmed</th><th>Total Recovered</th><th>Total Deaths</th></tr>';
foreach ($daily_data as $daily) {
	print '<td><a href="'.$daily->dateymd.'">' .$daily->dateymd.'</a></td>' ;

	print '<td><a href="'.$daily->dailyconfirmed.'">' .$daily->dailyconfirmed.'</a></td>' ;

	print '<td><a href="'.$daily->dailyrecovered.'">' .$daily->dailyrecovered.'</a></td>' ;

	print '<td><a href="'.$daily->dailydeceased.'">' .$daily->dailydeceased.'</a></td>' ;

	print '<td><a href="'.$daily->totalconfirmed.'">' .$daily->totalconfirmed.'</a></td>' ;

	print '<td><a href="'.$daily->totalrecovered.'">' .$daily->totalrecovered.'</a></td>' ;

	print '<td><a href="'.$daily->totaldeceased.'">' .$daily->totaldeceased.'</a></td></tr>' ;
	
}


print '</table>';

?>