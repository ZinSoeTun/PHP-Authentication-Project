<?php
//file added writing
include('register2.php');
?>
<DOCTYPE html>
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
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="mainForm">
        <!-- log in form -->
        <div class="mainContainer rounded shadow row">
            <!-- left sight -->
            <div class="leftSide col-xl-6 col-12 text-light p-5 rounded shadow">
                <h2>THE NAVIGATOR</h2>
                <p class="lh-lg mt-4">This class is web development class for studying frontend and backend (fullstack). <br>
                    Web foundation class includes these subjects (HTML, CSS, JavaScript, Bootstrap). <br>
                    Web advanced class includes these subjects (JavaScript, PHP, MySQL, Laravel). <br>
                    We learning about these subjects and trying the best for many real world projects. <br>
                    <em>We Navigates For Learning, Coding and Sharing...</em></p>
                    <div>
                        <a href="" class="btn btn-primary mt-5">Login</a>
                    </div>
            </div>
            <!-- right side -->
            <div class="rightSide col-xl-6 col-12 p-5 text-dark rounded shadow">
                <H2>REGISTRATION FORM...</H2>
                <!-- form -->
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <!-- full name -->
                <div class="mt-5">
                    <label class="fw-5 pb-2" for="fullName"> YOUR FULL NAME :</label>
                    <input class="form-control" type="text" name="fullName" id="fullName" placeholder="Enter Your Full Name...">
                </div>
                <!-- name error -->
                <p class="text-danger"><?php  echo $nameErr1; echo $nameErr2;?></p>
                <!-- comfirm email -->
                <div class="mt-5">
                    <label class="fw-5 pb-2" for="email"> YOUR EMAIL :</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="Enter Your Email...">
                </div>
                <!-- email error -->
                <p class="text-danger"><?php  echo $emailErr1; echo $emailErr2?></p>
                <!-- password -->
               <div class="mt-4">
                    <label class="fw-5 pb-2" for="password">PASSWORD :</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter Your Password...">
                </div>
                <!-- password error -->
                <p class="text-danger"><?php  echo $passwordErr1; echo $passwordErr2?></p>
                <!-- comfirm password -->
                <div class="mt-4">
                    <label class="fw-5 pb-2" for="comfirmPassword"> COMFIRM PASSWORD :</label>
                    <input class="form-control" type="password" name="comfirmPassword" id="comfirmPassword" placeholder="Enter Your Password Again...">
                </div>
                <!-- comfirm password error -->
                <p class="text-danger"><?php  echo $comfirmpassErr1; echo $comfirmpassErr2?></p>
                   <!-- birthday-->
                   <div class="mt-4">
                    <label class="fw-5 pb-2" for="date">BIRTHDAY(OPTIONAL): <div style="color: red; font-size : 20px;">*</div> </label><br>
                    <input  type="date" name="date" id="date">
                </div>
                 <!-- address -->
                    <div class="mt-4">
                    <label class="fw-5 pb-2" for="address"> ADDRESS(OPTIONAL) : <div style="color: red;font-size : 20px;">*</div></label>
                    <input class="form-control" type="text" name="address" id="address" placeholder="Enter Your Address...">
                </div>
                <!-- register button -->
                <div class="mt-5">
                <input type="submit" class=" btn btn-primary"value="Register" class="registerBtn">
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