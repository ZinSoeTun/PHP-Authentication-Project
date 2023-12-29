<?php
//DATABASE connetion
$servername = "localhost";
$username = "root";
$passworddb = "";
$dbname = "navigator";
// [PDO]
try {
    //create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passworddb);
    //check connection
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //query create [PHP->MYSQL]
     $stmt = $conn->prepare("INSERT INTO students (full_name, email, password, comfirm_password, birthday, address)
    VALUES (:full_name, :email, :password, :comfirm_password, :birthday, :address)");
} catch (PDOException $e) {
    echo "connection error" . $e->getMessage();
}
//validation
$nameErr1 = $nameErr2 = $emailErr1 = $emailErr2 = $passwordErr1 = $passwordErr2 =
    $comfirmpassErr1 = $comfirmpassErr2 =   "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $comfirmPassword =  $_POST['comfirmPassword'];
    $date =  $_POST['date'];
    $address =  $_POST['address'];
    if (empty($fullName)) {
        //name validation
        $nameErr1 = "Please fill your full name";
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $fullName)) {
        $nameErr2 = "Only letters and white space allowed";
    } else if (empty($email)) {
        //email validation
        $emailErr1 = "Please fill your email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr2 = "Invalid email format";
    } else if (empty($password)) {
        //password validation
        $passwordErr1 = "Please fill your password";
    } else if (strlen($password) < 8) {
        $passwordErr2 = "Password  must  exist at least 8 characters long";
    } else if (empty($comfirmPassword)) {
        // comfirm password validation
        $comfirmpassErr1 = "Please fill your  password again";
    } else if ($password != $comfirmPassword) {
        $comfirmpassErr2 = "Password  do not match";
    } else {
        //password hash
         $passHash = password_hash($password,PASSWORD_DEFAULT);
         //comfirm password hash
         $comfirmpassHash = password_hash($comfirmPassword,PASSWORD_DEFAULT);
        //fetch (PHP<-MYSQL)
        $stmt->bindParam(':full_name', $fullName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $passHash);
        $stmt->bindParam(':comfirm_password', $comfirmpassHash);
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':address', $address);
        $stmt->execute();
        //close connection
        $conn = null;
        header('location: login.php');
        exit();
    }
};
