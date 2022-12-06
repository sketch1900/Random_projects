<?php
    //basic add to my swli db

    //(1 = database, 2=username, 3=password, 4=table)
    $mysqli = new mysqli("db", "root", "example", "company");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    } 
    else{
        $sql = "INSERT INTO users (name, fav_color) VALUES('Andrew', 'Red')";
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO users (name, fav_color) VALUES('Mason', 'Green')";
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO users (name, fav_color) VALUES('James', 'Yellow')";
        $result = $mysqli->query($sql);
        $sql = "INSERT INTO users (name, fav_color) VALUES('Paul', 'Black')";
        $result = $mysqli->query($sql);

        $sql = 'SELECT * FROM users';

        if($result = $mysqli->query($sql)){
            while ($data = $result->fetch_object()){
                $users[] = $data;
            }
        }

        foreach ($users as $user){
            echo "<br>";
            echo $user->name . " " . $user->fav_color;
            echo "<br>";
        }
    }

    $mysqli->close();
?>