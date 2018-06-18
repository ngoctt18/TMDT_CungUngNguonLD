<?php

function getAllOrder(){

    global $conn;
    $contacts = array();

    $sql = "SELECT orders.id, orders.username, orders.post_id, users.namecompany, users.representative, users.email, users.phone, users.address, orders.created_at, orders.status FROM `orders`, users WHERE orders.username = users.username";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $contacts[] = $row;
        }
    }
    return $contacts;
}

function getUOrderByID($id){
    global $conn;

    $contacts = array();
    $sql = "SELECT * FROM orders WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $contacts = $row;
        }
    }
    return $contacts;

}

function OrderEdit($id, $name, $email, $phone, $message, $status){
    global $conn;

    $qr = "update contacts set name = '".$name."', email = '".$email."', phone = ".$phone.", message = '".$message."', status = ".$status." where id =" .$id;

    $rs = mysqli_query($conn, $qr);
    return $rs;

}

function OrderCreate($name, $email, $phone, $message, $status){
    global $conn;

    $query = "insert into contacts(name, email, phone, message, status) values('".$name."', '".$email."', ".$phone.", '".$message."', ".$status.")";

    $result = mysqli_query($conn, $query);

    return $result;
}

function OrderDelete($id){
    global $conn;

    $query = "delete from orders where id = ". $id;

    $rs = mysqli_query($conn, $query);

    return $rs;
}

function OrderSearch($key){
    global $conn;
    $posts = array();

    $sql = "SELECT orders.id, orders.username, orders.post_id, users.namecompany, users.representative, users.email, users.phone, users.address, orders.created_at, orders.status FROM `orders`, users WHERE orders.username = users.username AND username like '%".$key."%' OR representative like '%".$key."%' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;
        }
    }

    return $posts;
}

?>