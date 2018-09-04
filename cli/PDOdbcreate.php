
<?php
//print_r(PDO::getAvailableDrivers());
$host = "localhost";
$user = "root"; 
$pass = "";
$dbname = "beejee";

try{
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql="INSERT INTO admin(login, pass) VALUE ('adddd', 321)";
    $DBH->exec($sql);
    echo"db create";
    
}
catch(PDOException $e){
echo"У вас проблемы";
file_put_contents('PDOerrors.log', $e->getMessage(), FILE_APPEND );
}
finally {
    $DBH = null;
}