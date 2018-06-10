<?php

function getAllContact(){

    global $conn;
    $contacts = array();

    $sql = "SELECT * FROM contacts";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $contacts[] = $row;
        }
    }
    return $contacts;
}

function getUContactByID($id){
    global $conn;

    $contacts = array();
    $sql = "SELECT * FROM contacts WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $contacts = $row;
        }
    }
    return $contacts;

}

function ContactEdit($id, $name, $email, $phone, $message, $status){
    global $conn;

    $qr = "update contacts set name = '".$name."', email = '".$email."', phone = ".$phone.", message = '".$message."', status = ".$status." where id =" .$id;

    $rs = mysqli_query($conn, $qr);
    return $rs;

}

function ContactCreate($name, $email, $phone, $message, $status){
    global $conn;

    $query = "insert into contacts(name, email, phone, message, status) values('".$name."', '".$email."', ".$phone.", '".$message."', ".$status.")";

    $result = mysqli_query($conn, $query);

    return $result;
}

function ContactDelete($id){
    global $conn;

    $query = "delete from contacts where id = ". $id;

    $rs = mysqli_query($conn, $query);

    return $rs;
}
function ContactSearch($key){
    global $conn;
    $posts = array();

    $sql = "SELECT * FROM contacts WHERE name like '%".$key."%' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $posts[] = $row;
        }
    }

    return $posts;
}

?>