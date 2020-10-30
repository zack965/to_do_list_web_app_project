<?php 
include "../connect.php" ;
session_start();
echo "<br>";
$emailerr = "";
//echo "hello i am 'zakaria hossni \"hhhhhhh\" ' "."<br>";
//echo "i am"."zzz"."jjj 'ppppp  ' echo \"kkkkkkk\" jj";
$passworderr = "";
if(isset($_POST['submit'])){
    
    //email
    //ayman_hossni@gmail.com                                          ayman123456
    $useremail = $_POST['emaill'];  
    //zeerlo
    $userpassword = $_POST['password'];
    $_SESSION['useremaill'] = $useremail;
    $_SESSION['userpasswordd'] = $userpassword;
    
    //$emailerr = "";
    if(empty($useremail)){
        $emailerr = "email is required";
    }
    if(empty($userpassword)){
        $passworderr = "password is required";
    }else{
        $q1 = "SELECT user_first_name,user_last_name FROM `user_data` WHERE user_email = '$useremail' and user_password = '$userpassword'";
        $r1 = mysqli_query($conn,$q1);
        if(mysqli_num_rows($r1)>0){
            echo "<script>alert('login successful')</script>";
            header('location:../home/home.php');
        }else{
            echo "<script>alert('login not  successful')</script>"; //mysqli_error()
        }
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="countainer">
        <form action="" method="post">
            <h1>Account Log In</h1>
            <input type="email" name="emaill" id="" placeholder="Your Email"> <br>
            <span id="erreur"><?php  echo $emailerr; ?></span> <br> <br>
            <input type="password" name="password" id="" placeholder="Your Password"> <br>
            <span id="erreur"><?php  echo $passworderr; ?></span>

            <div class="buttons">
                <input type="submit" value="Submit" name='submit' class="in"> 
                <button><a href="create account/createAccount.php">Create Account</a></button>
                <button>Password Sorget ? </button>
            </div>
            

            
        </form>
    </div>


</body>
</html>
<!--

</*?php if(!empty($erreur)){ ?*/>
            <div id="erreur">
                </*?php echo $erreur; ?>
            </div>
            </*?php } ?*/>

-->