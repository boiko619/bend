<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);


if (mysqli_connect_errno()){
    printf("Не удалось подключится : %s/n",
    mysqli_connect_error());
    exit();
}

echo"Connect";

$sql = "CREATE TABLE admin(
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(25) NOT NULL,
    mail varchar(25) NOT NULL,
    pass varchar(25) NOT NULL,
    created_ad TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
    );";

$sql = " CREATE DATABASE beejee";

if (mysqli_query($conn, $sql)){
    echo"Datebase create";

}
else{
    echo'error',mysqli_error($conn);
}
mysqli_close($conn);
?>