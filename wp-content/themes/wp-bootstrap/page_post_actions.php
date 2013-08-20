<?php
/*
Template Name: Post Actions
 */

function redirect ($uri = '')
{
	$url = get_site_url().'/'.$uri;
	header("Location: ".$url, TRUE, 302);
	exit;
}

// check if it is real POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	die('Wrong approach! Are you a hacker?');
}

/*****************
 * MAIN FUNCTIONS
 *****************/


function register_subscriber ($name, $email)
{
	global $wpdb;

	$data = array(
		'name' => $name,
		'email' => $email,
	);

	$wpdb->insert('wp_subscribers', $data);

	return $wpdb->insert_id;
}


/*******************
 * REQUEST HANDLING
 *******************/

$action = $_POST['action'];

switch($action)
{
	case 'subscribe':
		$name  = $_POST['name'];
		$email = $_POST['email'];


		//---DEBUG---
		var_dump($name);
		var_dump($email);
		//---DEBUG---

		// if ($insert_id = register_subscriber($name, $email))
		// {
		// 	echo 'success';
		// }

		break;
}

die('hello');