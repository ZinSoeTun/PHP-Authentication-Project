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

    //query send(PHP->MYSQL)
    $stmt = $conn->prepare("SELECT * FROM students WHERE id = '$userid'");
    $stmt->execute();
    //fetch (PHP<-MYSQL)
    $row = $stmt->fetch();
} catch (PDOException $e) {
    echo "connection error" . $e->getMessage();
}

//image upload 
$imageErr1 = $imageErr2 = $imageSuccess = $imageErr3 = "";
if (isset($_POST['imageBtn'])) {
    $tmpName = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageType = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    //store image path
    $path = "images/" . $imageName;
    if ($imageName == '') {
        $imageErr1 = "Please attach your image";
    } else {
        if ($imageName == $row['images']) {
            //validation the same image?
            $imageErr2 = "Image is already existed";
        } else {
            if ($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg') {
                //move into image folder
                move_uploaded_file($tmpName, $path);
                //save into database 
                //query send(PHP->MYSQL)
                $stmt = $conn->prepare("UPDATE students SET images= '$imageName' WHERE id = '$userid'");
                $stmt->execute();
                $imageSuccess = "Image Upload Success!";
            } else {
                $imageErr3 = "png/jpg/jpeg format only allowed";
            }
        }
    }
}
//log out
if (isset($_POST['logoutBtn'])) {
    session_start();
    session_destroy();
    header('location: login.php');
    exit();
}
