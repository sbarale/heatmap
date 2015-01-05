<?php
/*
 * Usage:
 * - Wrap all the content of the page in a div called 'heatmapContainerWrapper'
 * 	(right below the body tag)
 * - Create a div right underneath it to show the heatmap.
 *
	 <body>
		 <div id="heatmapContainerWrapper">
			<div id="heatmapContainer"></div>
			... your content ....
		</div>
	</body>
 *
 * Actions:
 * Passing a query string value for 'action' will control what you can do
 * 'view' -> Shows the heatmap
 * 'reset' -> Duh!
 */

include(__DIR__ . '/includes/config.php');

$content = null;
$alert   = null;

switch ($action) {
	case "view":
		if ($granted) {
			$loader  = file_get_contents(__DIR__ . '/includes/actions/init.min.js');
			$content = $loader . file_get_contents(__DIR__ . '/includes/actions/view.min.js');
		} else {
			$alert = "alert('Not enough privileges to view heatmap');";
		}
		break;
	case "reset":
		if ($granted) {
			@unlink($data_file);
			$alert = "alert('Database Reset');";
		} else {
			$alert = "alert('Not enough privileges to reset database');";
		}
	default:
		$loader  = file_get_contents(__DIR__ . '/includes/actions/init.min.js');
		$content = $loader . file_get_contents(__DIR__ . '/includes/actions/track.min.js');
};

echo "<script>" . $alert . $content . "</script>";
