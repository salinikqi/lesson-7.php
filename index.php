<?php 

$host = "localhost";
$user = "root";
$dbname = "test2";
$pass = "";

// try {
//     $conn = new PDO("mysql:host = $host; dbname = $dbname;", $user , $pass);

//     echo "Connected";
// }
// catch (Exeption $e) {
//     echo "Not connected";
// };

try{
    $conn = new PDO("mysql:host=$host", $user,$pass);

    $sql = "CREATE DATABASE testdb";
    $conn->exec($sql);

    echo "Databasa u krijua";
}
catch (Exeption $e){
    echo "Databaza nuk eshte kriju";
}


?>