<?php
function getAllPosts(){
    global $conn;
    $posts = array();

<<<<<<< HEAD
    $sql = "SELECT posts.id, posts.title, posts.sub_title, users.representative, posts.status FROM posts INNER JOIN users WHERE posts.auth_id = users.id";

    // echo "<pre>";
    // print_r($sql); 
=======
    $sql = "SELECT posts.id, posts.title, posts.sub_title, posts.body, posts.post_cover, posts.created_at, users.representative, posts.status FROM posts INNER JOIN users WHERE posts.auth_id = users.id";

    // echo "<pre>";
    // print_r($sql);
>>>>>>> 324b477c916fca5d4c5a9e3667c8e3d42e1b7aa8
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

function postsEdit($id, $title, $subtitle, $body, $salary, $experience, $JobType, $location, $AgeRequest, $GenderRequest, $DegreeRequest, $amount, $description, $benefit, $FileRequest, $deadline, $another, $status){

    global $conn;

    /*$qr = "update posts set title = '".$title."', sub_title = '".$subtitle."', body = '".$body."', salary = '".$salary."', experience = '".$experience."', JobType = '".$JobType."', location = '".$location."', AgeRequest = '".$AgeRequest."', GenderRequest = '".$GenderRequest."', DegreeRequest = '".$DegreeRequest."', amount = '".$amount."', description = '".$description."', benefit = '".$benefit."', FileRequest = '".$FileRequest."', deadline = '".$deadline."', another = '".$another."', status = ".$status." where id =" .$id;*/

    $qr = "UPDATE `posts` SET `title` = '".$title."', `sub_title` = '".$subtitle."', `body` = '".$body."', `salary` = '".$salary."', `experience` = '".$experience."', `JobType` = '".$JobType."', `location` = '".$location."', `AgeRequest` = '".$AgeRequest."', `GenderRequest` = '".$GenderRequest."', `DegreeRequest` = '".$DegreeRequest."', `amount` = '".$amount."', `description` = '".$description."', `benefit` = '".$benefit."', `FileRequest` = '".$FileRequest."', `deadline` = '".$deadline."', `another` = '".$another."', `status` = ".$status." WHERE `posts`.`id` = " . $id;

    $rs = mysqli_query($conn, $qr);
    return $rs;

}
function postCreate(){
    global $conn;

    $sql = "insert into users(namecompany, representative, email, username, password, phone, address, type_user, status) values('".$namecompany."', '".$representative."', '".$email."', '".$username."', '".$password."', ".$phone.", '".$address."', ".$type_user.", ".$status.")";

    $rs = mysqli_query($conn, $sql);
    return $rs;
}

function postsDelete($id){
    global $conn;

    $query = "delete from posts where id = ". $id;

    $rs = mysqli_query($conn, $query);

    return $rs;
}

function PostSearch($key){
    global $conn;
    $posts = array();

    $sql = "SELECT posts.id, posts.title, posts.sub_title, users.representative, posts.status FROM posts INNER JOIN users WHERE posts.auth_id = users.id AND title like '%".$key."%' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;
        }
    }

    return $posts;
}


?>