<?php
if($_POST){
require 'db_key.php';
$conn = connect_db();
if(isset($_POST['signup']) ){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$passwordHashed = password_hash($password, PASSWORD_BCRYPT);
//sanitize your input
$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);
$passwordHashed = mysqli_real_escape_string($conn, $passwordHashed);
$gender=mysqli_real_escape_string($conn, $gender);
//check for existing record
$query=mysqli_query($conn,"Select * From user_login_info Where username = '".$username."' and password = '".$password."'");
$numrows=mysqli_num_rows($query);
if($numrows!=0){
echo "That username already exists! Please try again with another.";
//header('location: register.php');
exit();
}else{
$sql = "Insert Into user_login_info (username, email,gender, password,) VALUES ('$username', '$email', '$gender', '$password')";
$result=mysqli_query($conn, $sql);  
    if($result){  
    echo "Account Successfully Created. You may <a href= '/'>Login</a> now";  
    } else {  
    echo "Failure!";  
    }  
//header('location: index1.php');
}
//$sql = $sql->fetch_assoc();
//echo $username.$email.$password;
}
}else if(isset($_POST['login']) ){
$username = $_POST['username'];
$password = $_POST['password'];
$query=mysqli_query($conn, "SELECT * FROM login WHERE username='".$username."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
	echo 'You have successfully logged-in';
    /* Redirect browser */  
    header("Location: account.php");  
    }  
	
}else{
echo "Invalid username or password!";
header('location: index1.php');
exit();
}
}else{
header('location: index1.php');
exit();
}
//header('location: index1.php');
?>