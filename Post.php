<?php 

class Post {

public  $id;
public  $title;
public  $content;


	public function __construct($post_array){
		if(key_exists('id', $post_array)){
		$this ->id = $post_array['id'];
			
		};

	$this ->title = $post_array['title'];
	$this ->content = $post_array['content'];		


	}
		}

?>