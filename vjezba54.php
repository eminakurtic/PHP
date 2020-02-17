<?php


$server = "localhost";
$user = "root";
$password = "";
$database = "";
$port = "3309";
$connection = mysqli_connect($server, $user, $password, $database, $port);

if(!$connection){
    die("Connection failed" . mysqli_connect_error());
}

mysqli_set_charset($connection, "utf8");

$query = "SELECT * FROM superheroes.users";

$results = mysqli_query($connection, $query);

if(mysqli_num_rows($results) > 0){
    while($row = mysqli_fetch_assoc($results)){
        echo "Hello, I am " . $row['name'] . " " . $row['lastname'] . ".<br>";
    }
}

#Odavde radimo INSERT
/*
$queryInsert = "INSERT INFO superheroes.users (name, lastname, date) VALUES
('Tim', 'Drake', '21.12.2019')";

if(mysqli_query($connection, $queryInsert)){
    echo "Data inserted...";
}
*/

#Odavne radimo UPDATE
$queryUpdate = "UPDATE superheroes.users SET name='Barry', lastname='Alan' WHERE id=4";

if(mysqli_query($connection, $queryUpdate)){
    echo "Data update...";
}else{
    echo "Data not update...";
}

#Odavde radimo DELETE
$queryDelene = "DELETE FROM superheroes.users WHERE id = 5";

if(mysqli_query($connection, $queryDelene)){
    echo "Data deleted...";
}else{
    echo "Data not delete...";
}

?>