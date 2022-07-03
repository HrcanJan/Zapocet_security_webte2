<?php

$servername = "localhost";
$username = "xhrcan";
$password = "SQsBCnIEq5Vnxum";
$dbname = "zap";

if(isset($_POST['email'])){
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("select * from users WHERE name = :email AND (password = :password)");
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user = $stmt->fetch();

        var_dump($user);
    } catch (PDOException $e){
        echo "<br>" . $e->getMessage();
    }

    $conn = null;
}