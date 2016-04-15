<?php 
class DB{

	private static $conn;
	public static $last_error = '';
	public static function init(){
		self::$conn = mysqli_connect('localhost' , 'root', '', 'serg_a');  
	}

	public static function create_post($post){
 		$title = addslashes($post->title);
 		$content = addslashes($post->content);
 		$query = "INSERT INTO posts(title, content) VALUES ('{$title}', '{$content}') "; 
 		mysqli_query(self::$conn, $query);
 		self::$last_error = mysqli_error(self::$conn);
 	}

 	public static function get_post(){
 		
 		$query = "SELECT * FROM  posts";
 		 $result = mysqli_query(self::$conn, $query);

 		$posts = [];

 		while($post_array = mysqli_fetch_assoc($result) ){
 			$posts[] = new Post($post_array);
 		}
			return $posts;
	}
}

 ?>