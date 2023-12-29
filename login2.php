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
} catch (PDOException $e) {
   echo "connection error" . $e->getMessage();
}

$emailErr1 = $emailErr2 =  $passErr1 = $passErr2 = "";
//validation 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $userEmail = $_POST['userEmail'];
   $userPassword = $_POST['userPassword'];
}
if (empty($userEmail)) {
   //email validation
   $emailErr1 = "Please fill your email";
} else if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
   $emailErr2 = "Invalid email format";
} else  if (empty($userPassword)) {
   //password validation
   $passErr1 = "Please fill your password";
} else {
   //query send
   $stmt = $conn->prepare("SELECT * FROM students WHERE email = '$userEmail'");
   $stmt->execute();
   //fetch(PHP->MYSQL)
   $row = $stmt->fetch();
   $dbPassword = $row['password'];
   $_SESSION['userid'] = $row['id'];
   if (password_verify($userPassword, $dbPassword)) {
      header('location: home.php');
      exit();
   } else {
      $passErr2 = "password do not match";
   };
   //close connection
   $conn = null;
}
