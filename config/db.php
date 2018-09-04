 <?php



$host = "localhost";
$user = "root"; 
$pass = "";
$dbname = "beejee";
$charset = 'utf8';

return [
    'database' => [
        'name' => $dbname,
        'user' => $user,
        'pass' => $pass,
        'connection' => "mysql:host=$host;charset=$charset",
        'options' => [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    ]
];
