<?php
/**
 * Get all posts from database
 */
function get_all_posts() {
	global $conn;
	$posts = array();

	$sql = "SELECT posts.id, posts.title, posts.sub_title, posts.body, posts.post_cover, posts.created_at, users.namecompany FROM posts INNER JOIN users WHERE posts.auth_id = users.id AND posts.status = 1";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $posts[] = $row;
	    }
	}

	return $posts;
}

/**
 * Get post by ID
 */
function get_post_by_id($id) {
	global $conn;
	$post = array();

	$sql = "SELECT * FROM posts INNER JOIN users WHERE posts.auth_id = users.id AND posts.status = 1 AND posts.id = {$id}";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $post[] = $row;
	    }
	}

	return $post;
	
}





?>