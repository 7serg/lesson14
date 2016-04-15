<?php 

require 'base.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

$post = new POST($_POST);
DB::create_post($post);
if(DB::$last_error){
	die(DB::$last_error);
}


	header('Location: /14');
	exit() ;
};


echo (DB::$last_error);



$posts = DB::get_post();

foreach ($posts as $post) {
	include 'post.html';
	
}
include 'post_form.html'; 
?>