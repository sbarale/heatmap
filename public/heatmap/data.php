<?php
include(__DIR__ . '/includes/config.php');

switch ($action) {
	case "put":
		if (!file_exists($data_file)) {
			$separator = '';
		} else {
			$separator = ',';
		}
		file_put_contents($data_file, $separator . $data, FILE_APPEND);
		break;
	case "get";
		header('Content-Type: application/json');
		$content = file_exists($data_file) ? file_get_contents($data_file) : '';
		echo '{"min":0, "max":1, "data":[' . file_get_contents($data_file) . ']}';
		break;
}
