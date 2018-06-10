<?php
function getAllPosts(){
    global $conn;
    $posts = array();

    $sql = "SELECT posts.id, posts.title, posts.sub_title, posts.body, posts.post_cover, posts.created_at, users.representative, posts.status FROM posts INNER JOIN users WHERE posts.auth_id = users.id";

    // echo "<pre>";
    // print_r($sql);
    // die;
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $posts[] = $row;
        }
    }
    return $posts;

}

function getPostsByID($id){
    global $conn;

    $posts = array();
    $sql = "SELECT * FROM posts WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $posts = $row;
        }
    }
    return $posts;

}

function postsEdit($id, $title, $subtitle, $body, $status){
    global $conn;

    $title = mysqli_real_escape_string($conn, $title);
    $subtitle = mysqli_real_escape_string($conn, $subtitle);
    $body = mysqli_real_escape_string($conn, $body);
    $status = mysqli_real_escape_string($conn, $status);

    $sql = "Update posts Set title = '{$title}', sub_title = '{$subtitle}', body = '{$body}', status = '{$status}' Where id = '{$id}'";
    //echo $sql; die;
    if(mysqli_query($conn, $sql)){
        return true;
    } else {
        return false;
        echo mysqli_error($conn);
    }

}

function postsDelete($id){
    global $conn;

    $sql = "Update Posts Set status = 2 Where id = {$id}";
    if(mysqli_query($conn, $sql)){
        return true;
    } else {
        return false;
        echo mysqli_error($conn);
    }
}


?>