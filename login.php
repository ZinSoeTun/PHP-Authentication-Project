<?php
session_start();
//file added writing
include ('login2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP project</title>
    <!-- font aweson link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- main css link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mainForm">
        <!-- log in form -->
        <div class="mainContainer row rounded shadow">
            <!-- left sight -->
            <div class="leftSide col-xl-6 col-12 text-light p-5">
                <h2>THE NAVIGATOR</h2>
                <p class="lh-lg mt-4">This class is web development class for studying frontend and backend (fullstack). <br>
                    Web foundation class includes these subjects (HTML, CSS, JavaScript, Bootstrap). <br>
                    Web advanced class includes these subjects (JavaScript, PHP, MySQL, Laravel). <br>
                    We learning about these subjects and trying the best for many real world projects. <br>
                    <em>We Navigates For Learning, Coding and Sharing...</em></p>
                    <div>
                        <a href="./register.php" class="btn btn-primary mt-5">Have a account</a>
                    </div>
            </div>
            <!-- right side -->
            <div class="rightSide col-xl-6 col-12 p-5 text-dark">
                <H2>LOG IN...</H2>
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <!-- user email -->
               <div class="mt-5">
                    <label class="fw-5 pb-2" for="userEmail"> YOUR EMAIL :</label>
                    <input class="form-control" type="text" name="userEmail" id="userEmail" placeholder="Enter Your Email...">
                </div>
                <!-- email error -->
                <p class="text-danger"><?php  echo $emailErr1; echo $emailErr2?></p>
                <!-- user password -->
                <div class="mt-5">
                    <label class="fw-5 pb-2" for="userPassword"> YOUR PASSWORD :</label>
                    <input class="form-control" type="password" name="userPassword" id="userPassword" placeholder="Enter Your Password...">
                </div>
                <!-- password error -->
                <p class="text-danger"><?php  echo $passErr1; echo $passErr2?></p>
                <!-- login button -->
                <div class="mt-5">
                <input type="submit" class=" btn btn-primary"value="Log In" class="submitBtn">
                </div>
               </form>
            </div>
        </div>
    </div>
</body>
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</html>