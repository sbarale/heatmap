<?php
/*
 * Path to our data file. We want it outside of public
 * access...
 */
$data_file = __DIR__ . "/../../../data/data.json";

/*
 * This 'security_token' is to prevent someone deleting
 * our data.
 *
 * As long as you don't give this to anyone, nor access it from a
 * public server where the URL can be retrieved by other people,
 * we're safe.
 *
 * GRANTED, this is a very very very poor way to enforce security
 * but will do for now.
 */

$token = 'a7aa3875fc4422ca78f7b4216205b9a5';

/*
 * Parse the parameters (if any) passed in the URL.
 */
$action  = isset($_GET['action']) ? $_GET['action'] : '';
$data    = isset($_GET['data']) ? $_GET['data'] : '';
$granted = isset($_GET['token']) ? $_GET['token'] == $token : false;

