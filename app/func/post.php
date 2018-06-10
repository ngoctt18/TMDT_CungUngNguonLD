<?php
/**
 * Get all posts from database
 */
function get_all_posts() {
	global $conn;
	$posts = array();

	$sql = "SELECT posts.id, posts.title, posts.sub_title, posts.body, posts.post_cover, posts.created_at, users.namecompany FROM posts INNER JOIN users WHERE posts.auth_id = users.id AND posts.status = 1 ORDER BY posts.id DESC";

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
 * Get all posts from database
 */
function get4Posts() {
	global $conn;
	$posts = array();

	$sql = "SELECT posts.id, posts.title, posts.sub_title, posts.body, posts.post_cover, posts.created_at, users.namecompany FROM posts INNER JOIN users WHERE posts.auth_id = users.id AND posts.status = 1 ORDER BY posts.id DESC LIMIT 4";

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

function get3News(){
	global $conn;
	$news = array();

	$sql = "SELECT news.id, news.title, news.sub_title, news.body, news.post_cover, news.created_at, users.representative FROM news INNER JOIN users WHERE news.auth_id = users.id AND news.status = 1 LIMIT 3";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $news[] = $row;
	    }
	}
	return $news;	
}

function searchPost($key) {
	global $conn;
	$posts = array();

	$sql = "SELECT posts.id, posts.title, posts.sub_title, posts.body, posts.post_cover, posts.created_at, users.namecompany FROM posts INNER JOIN users WHERE posts.auth_id = users.id AND posts.status = 1 AND title like '%".$key."%' ";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	        $posts[] = $row;
	    }
	}

	return $posts;
}

function getNewsByID($id){
	global $conn;
	$news = array();

	$sql = "SELECT * FROM news INNER JOIN users WHERE news.auth_id = users.id AND news.status = 1 AND news.id = {$id}";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $news[] = $row;
	    }
	}
	return $news;
}


?>