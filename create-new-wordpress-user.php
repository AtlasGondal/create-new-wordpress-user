<?php

//loading wordpress necessary files and functions
require_once "wordpress/wp-load.php";

//setting up new user info array
$new_user_info = array(
	"user_pass"     => "123456",
	"user_login"    => "username",
	"user_nicename" => "username",
	"user_email"    => "email@example.com",
	"display_name"  => "User Name",
	"first_name"    => "User",
	"last_name"     => "Name",
);

//creating user
$insert_user_result = wp_insert_user( $user_info );

//checking user created or not and displaying message on it's behalf
if ( is_wp_error($return) ) {
   die($insert_user_result->get_error_message());
} else {
	echo "Successfully created user with id: {$insert_user_result}";
}
