<?php
    echo "test";
    //
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddres = $_POST['emailAddres'];
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
    $repassWord = $_POST['repassWord'];
    $phoneNumber = $_POST['phoneNumber'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'account');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into register(firstName, lastName, emailAddres, userName, 
        passWord, repassWord, phoneNumber) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss1" $firstName, $lastName, $emailAddres, $userName, $passWord,  $repassWord, $phoneNumber);
    $stmt->execute();
    echo "registeration is successfully ...";
    $stmt->close();
    $stmt->close();
}

?> 
