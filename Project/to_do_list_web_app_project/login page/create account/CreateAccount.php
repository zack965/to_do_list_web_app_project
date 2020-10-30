<?php
include "../../connect.php";
session_start();
// create user variables


$FirstNameErr = "";
$LastNameErr = "";
$EmailErr = "";
$PasswordErr = "";
// sql part
if(isset($_POST['submit'])){
    $user_first_name = $_POST['user_first_name'];
    $user_last_name = $_POST['user_last_name'];
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];

    if(empty($user_first_name)){
        $FirstNameErr = "Sorry your first name is required"."<br>";
    }
    if (empty($user_last_name)) {
        $LastNameErr = "Sorry your last name is required"."<br>";
    }
    if(empty($useremail)){
        $EmailErr = "Sorry your email is required"."<br>";
    }
    if(empty($userpassword)){
        $PasswordErr = "Sorry your email is required"."<br>";
    }else{
        
        $_SESSION['uname'] = $_POST['user_first_name'];
        $_SESSION['lname'] = $_POST['user_last_name'];

        $_SESSION['useremaill'] = $useremail;
        $_SESSION['userpasswordd'] = $userpassword;
        mysqli_query($conn,"INSERT INTO user_data(user_first_name,user_last_name,user_email,user_password) VALUES('$user_first_name','$user_last_name','$useremail','$userpassword')");
        if(mysqli_affected_rows($conn) > 0){
            echo "<p> user added </p>";
            header("location:profile/indexprofile.php");

            
        }else{
            echo "<p> user not added </p>";
            echo mysqli_error($conn);
        }
    }

}
//todatabase


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CreateAccount.css">
    <title>Check Page </title>
</head>
<body>
    <div class="ccountainer">
        <form action="" method = 'POST'>
            fname  : <input type="text" name="user_first_name" id=""> <br>
            <span id="erreur"><?php echo $FirstNameErr ; ?></span> <br>
            lname  : <input type="text" name="user_last_name" id=""> <br>
            <span id="erreur"><?php echo $LastNameErr ; ?></span> <br>
            email : <input type="email" name="email" id=""> <br>
            <span id="erreur"><?php echo $EmailErr ; ?></span> <br>
            password : <input type="password" name="password" id=""> <br>
            <span id="erreur"><?php echo $PasswordErr ; ?></span> <br>
            <input type="submit" value="send data" name ='submit'>
        </form>
    </div>

</body>
</html>