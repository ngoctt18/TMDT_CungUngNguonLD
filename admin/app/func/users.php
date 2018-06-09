<?php

function getAllUsers(){

    global $conn;
    $users = array();

    /*$sql = "SELECT posts.id, posts.title, posts.sub_title, posts.body, posts.post_cover, posts.created_at, users.fullname, posts.status FROM posts INNER JOIN users WHERE posts.auth_id = users.id ";*/

    $sql = "SELECT * FROM users";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }
    }
    return $users;
}

function getUserByID($id){
    global $conn;

    $users = array();
    $sql = "SELECT * FROM users WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $users = $row;
        }
    }
    return $users;

}

function usersEdit($id, $namecompany, $representative, $email, $username, $phone, $address, $status){
    global $conn;

    $namecompany = mysqli_real_escape_string($conn, $namecompany);
    $representative = mysqli_real_escape_string($conn, $representative);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $phone = mysqli_real_escape_string($conn, $phone);
    $address = mysqli_real_escape_string($conn, $address);
    $status = mysqli_real_escape_string($conn, $status);

    $sql = "Update users Set namecompany = '{$namecompany}', representative = '{$representative}', email = '{$email}', username = '{$username}', phone = '{$phone}', address = '{$address}', status = '{$status}' Where id = '{$id}'";
    //echo $sql; die;
    if(mysqli_query($conn, $sql)){
        return true;
    } else {
        return false;
        echo mysqli_error($conn);
    }

}

function usersCreate($namecompany, $representative, $email, $username, $password, $phone, $address, $status){
    global $conn;

    $namecompany = mysqli_real_escape_string($conn, $namecompany);
    $representative = mysqli_real_escape_string($conn, $representative);
    $email = mysqli_real_escape_string($conn, $email);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $phone = mysqli_real_escape_string($conn, $phone);
    $address = mysqli_real_escape_string($conn, $address);
    $status = mysqli_real_escape_string($conn, $status);

    $sql = "insert into users(namecompany, representative, email, username, password, phone, address, status) values('".$namecompany."', '".$representative."', '".$email."', '".$username."', '".$password."', ".$phone.", '".$address."', ".$status.")";

    //echo $sql; die();
    if(mysqli_query($conn, $sql)){
        return true;
    } else {
        return false;
        echo mysqli_error($conn);
    }

}

function usersDelete($id){
    global $conn;

    $query = "delete from users where id = ". $id;

    $rs = mysqli_query($conn, $query);

    return $rs;
}


?>