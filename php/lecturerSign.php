<?php
$conn = mysqli_connect('localhost', 'root', '', 'snesystem');
$data = $_POST;
$message = "Password missmatch";
$message2 = "User already exist!";
$message3 = "Register succesfull..";

if($data['pass'] !== $data['confirmpass']){
    echo "<SCRIPT>
        alert('$message')
        window.location.replace('../lect_signup.php');
    </SCRIPT>";
    exit;
}

$usercheck = "SELECT * FROM lecturer ";
$check = $conn -> query($usercheck);
$row = $check -> fetch_assoc();
if($data['email'] == $row['email']){
    echo "<SCRIPT>
        alert('$message2')
        window.location.replace('../lect_signup.php');
    </SCRIPT>";
    exit;
}

$sql = "INSERT INTO lecturer (email, password, name) 
        VALUES ('".$data['email']."', '".$data['pass']."', '".$data['name']."')";
$res = $conn -> query($sql);
if($res){
    echo "<SCRIPT>
        alert('$message3')
        window.location.replace('../lecturer_login.php');
    </SCRIPT>";
    exit;
}
?>


