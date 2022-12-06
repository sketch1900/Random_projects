<?php

//ofc you would escape these. but for this i wont.
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$queryType = $_POST["radio"];
$comment = $_POST["textBox"];
$email = $_POST["email"];

//(1 = database, 2=username, 3=password, 4=table)
$mysqli = new mysqli("db", "root", "example", "contacts");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} 
else{
    $sql = "INSERT INTO `users`(fname, lname, email, type, comment) VALUES('$fname', '$lname', '$email', '$queryType', '$comment')";
    $result = $mysqli->query($sql);

    $sql = 'SELECT * FROM users';

    if($result = $mysqli->query($sql)){
        while ($data = $result->fetch_object()){
            $users[] = $data;
        }
    }
}

$mysqli->close();
?>