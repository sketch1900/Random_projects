<?php
#basic for a test.

echo "<h2>Hello from Bob the cat and Docker!</h2>";

echo "<p></br> I have " . 5 * 4 . " apples to eat!</p>";

echo "<p></br>Game dev is fun esp the <b><i>idea</i></b> generating and experiment part.</p>";

//(1 = database, 2=username, 3=password, 4=table)
$mysqli = new mysqli("db", "root", "example", "company");

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

//echo var_dump($users);

foreach ($users as $user){
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}

?>