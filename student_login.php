<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','snesystem') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM student WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["class_name"] = $row['class_name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:student_page/index.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
  crossorigin="anonymous"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet"/>
<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="form_wrapper">
        <div id="form_left">
          <img src="img/student.png" alt="computer icon" />
        </div>
        <div id="form_right">
          <h1>Student Login</h1>
          <div class="input_container">

            <form name="frmUser" action="" method="post">
            <i class="fas fa-envelope"></i>
            <input
              placeholder="Email"
              type="email"
              name="email"
              id="field_email"
              class="input_field"
            />
          </div>
          <div class="input_container">
            <i class="fas fa-lock"></i>
            <input
              placeholder="Password"
              type="password"
              name="password"
              id="field_password"
              class="input_field"
            />
          </div>
          <input
            type="submit"
            value="Login"
            id="input_submit"
            class="input_field"
          />
          </form>
          <span><a href="stud_signup.php">SignUp</a></span>
          <span>Forgot <a href="#"> Username / Password ?</a></span>
          <span id="create_account">
            <a href="lecturer_login.php">Lecturer Login ➡ </a>
          </span>
        </div>
      </div>
</body>
</html>