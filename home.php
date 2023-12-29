<?php
session_start();
$userid = $_SESSION['userid'];
//file added writing
include('home2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME PAGE</title>
  <!-- font aweson link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--bootstrap css link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- main css link -->
  <link rel="stylesheet" href="style2.css">
</head>

<body style="background-color: grey;">
  <!-- header -->
  <div class="d-flex bg-success py-4 text-light justify-content-center align-items-center ">
    <img src="./images/logo.jpg" class=" rounded me-3" alt="logoImage" width="70px">
    <h1>THE NAVIGATOR CLASS</h1>
  </div>
  <!-- student card -->
  <div class="card mx-auto text-center bg-info  " style="max-width: 70vw;">
    <?php
    //uploaded image show
    if ($row['images'] == NULL) {
      echo " <img src='./images/noimage.png' style='width: 300px; height:300px;' class='card-img-top d-inline-block mx-auto shadow my-3' alt='profile'> ";
    } else {
      echo " <img src='./images/{$row['images']}' style='width: 300px; height:300px;' class='card-img-top d-inline-block mx-auto shadow my-3' alt='profile'> ";
    };
    ?>
    <!-- card start -->
    <div class="card-body">
      <!-- student detail -->
      <h5 class="card-title text-success stuDetail">STUDENT DETAIL</h5>
      <p class="card-text lh-lg Detail">
        I am a good student from navigator.<br>
        I am learning about the web development.<br>
        I want to be a professional fullstack developer.
      </p>
    </div>
    <ul class="list-group list-group-flush Detail">
      <li class="list-group-item">STUDENT ID :<b><?php echo "100" . $row['id']; ?></b></li>
      <li class="list-group-item">STUDENT NAME :<b><?php echo $row['full_name']; ?></b></li>
      <li class="list-group-item">STUDENT EMAIL :<b><?php echo $row['email']; ?></b></li>
      <li class="list-group-item">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
          <label for=""> CHANGE IMAGES:</label>
          <input type="file" name="image" id="">
          <!-- upload button -->
          <input type="submit" value="upload" class="btn btn-primary " name="imageBtn">
          <p class="text-danger warning-letter"><?php echo $imageErr1;
                                                echo $imageErr2; ?></p>
          <p class="text-success warning-letter"> <?php echo $imageSuccess; ?></p>
          <p class="text-danger warning-letter"> <?php echo $imageErr3; ?></p>
        </form>
      </li>
    </ul>
    <div class="card-body">
      <!-- log out button -->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="submit" class="btn btn-danger px-4  " value="Log Out" name="logoutBtn">
      </form>
    </div>
  </div>
  </div>
</body>

</html>