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
          <img src="img/lecturer.png" alt="computer icon" />
        </div>
        <div id="form_right">
          <h1>Lecturer Sign Up</h1>
          <div class="input_container">

            <form name="frmUser" action="php/lecturerSign.php" method="post">
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
            <i class="fas fa-user"></i>
            <input
              placeholder="Lecturer Name"
              type="text"
              name="name"
              id="field_password"
              class="input_field"
            />
          </div>
          <div class="input_container">
            <i class="fas fa-lock"></i>
            <input
              placeholder="Password"
              type="password"
              name="pass"
              id="field_password"
              class="input_field"
            />
          </div>
          <div class="input_container">
            <i class="fas fa-lock"></i>
            <input
              placeholder="Confirm Password"
              type="password"
              name="confirmpass"
              id="field_password"
              class="input_field"
            />
          </div>
          <input
            type="submit"
            value="Sign Up"
            id="input_submit"
            class="input_field"
          />
          </form>
          <span><a href="lecturer_login.php">Login Page</a></span> 
        </div>
      </div>
</body>
</html>