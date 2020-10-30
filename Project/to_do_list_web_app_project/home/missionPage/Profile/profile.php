<?php
include "../../../connect.php";
session_start();
//$idd = $row5["user_id"];
$xidd = $_SESSION['uid'];
//echo $xidd;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../font awsomme/css/all.min.css">
    <link rel="stylesheet" href="proffile.css">
    <title>My Profile</title>
</head>
<body>
<?php
$xsl="SELECT * FROM user_data WHERE user_id = $xidd";
$xrsql = mysqli_query($conn,$xsl);
if(mysqli_num_rows($xrsql)>0){
    while($rowname= mysqli_fetch_assoc($xrsql)){
        

    }
}else{
    echo "Sorry You are not exists";
    return;
}
?>
    <header>
        <div class="logo">
            <i class="fas fa-paw"></i>
            <h1>DzeD</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../../home.php">Home</a></li>
                <li><a href="../mission.php">Missions</a></li>
                <li>My Profile</li>
                <li><a href="../../../Log Out.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <div class="mydata">
        <!--<p> <b>First Name:</b> <--<p> <b>First Name:</b><label>First Name</label> <br>
            <input type="text" name="userFirstName" id="in1" > -->
        
        <form action="" method="post">
            <?php
                //UPDATE `user_data` SET `user_first_name`='flasko',`user_last_name`='zack',`user_email`='flasko@gmail.com',`user_password`='flasko' WHERE `user_id` = 22
                $isUserExists;
                $sqlname="SELECT * FROM user_data WHERE user_id = $xidd";
                $resname = mysqli_query($conn,$sqlname);
                if(mysqli_num_rows($resname)>0){
                    while($rowname= mysqli_fetch_assoc($resname)){
                        //$rowname = 
                            //echo "<p> <b> First Name </b>".$rowname["user_first_name"]."</p>";
                        echo "<b> First Name </b> <br> <input type='text' name='userFirstName' id='in1'value=".$rowname["user_first_name"]." > <br>";
                        echo "<br> Last Name </br> <br> <input type='text' name='userLastName' id='in1'value=".$rowname["user_last_name"]." > <br>";
                        echo "<br> Email </br> <br> <input type='email' name='UserEmail' id='in1'value=".$rowname["user_email"]." > <br>";
                        echo "<br> Password </br> <br> <input type='password' name='UserPwd' id='in1'value=".$rowname["user_password"]." > <br>";
                            //echo "<p> <b> Last Name </b>".$rowname["user_last_name"]."</p>";
                            //echo "<h1>".$rowname["user_first_name"]."</h1>";
                            //$_SESSION['lol'] = $rowname["user_first_name"];
                            $isUserExists = TRUE;

                    }
                }else{
                    echo "<b> First Name </b> <br> <input type='text' name='userFirstName' id='in1'value='No Result' > <br>";
                    echo "<br> Last Name </br> <br> <input type='text' name='userLastName' id='in1'value='No Result' > <br>";
                    echo "<br> Email </br> <br> <input type='email' name='UserEmail' id='in1'value='NoResult@gmail.com' > <br>";
                    echo "<br> Password </br> <br> <input type='password' name='UserPwd' id='in1'value='No Result' > <br>";
                    $isUserExists = FALSE;
                }
                    //$tx = $_POST['userFirstName'];
                
                
                //echo $_SESSION['UFN'];
                
            ?>
            
            <!--
            <input type="text" name="userFirstName" value="<?php
            /*
            $sqlname="SELECT * FROM user_data WHERE user_id = $xidd";
            $resname = mysqli_query($conn,$sqlname);
            if(mysqli_num_rows($resname)>0){
                while($rowname= mysqli_fetch_assoc($resname)){
                    //$rowname = 
                    //echo "<p> <b> First Name </b>".$rowname["user_first_name"]."</p>";
                    //echo "<b> First Name </b> <br> <input type='text' name='userFirstName' id='in1'value=".$rowname["user_first_name"]." > <br>";
                    //echo "<br> Last Name </br> <br> <input type='text' name='userLastName' id='in1'value=".$rowname["user_last_name"]." > <br>";
                    //echo "<br> Email </br> <br> <input type='email' name='UserEmail' id='in1'value=".$rowname["user_email"]." > <br>";
                    //echo "<br> Password </br> <br> <input type='password' name='UserPwd' id='in1'value=".$rowname["user_password"]." > <br>";
                    //echo "<p> <b> Last Name </b>".$rowname["user_last_name"]."</p>";
                    //echo "<h1>".$rowname["user_first_name"]."</h1>";
                    //$_SESSION['lol'] = $rowname["user_first_name"];
                    echo $rowname["user_first_name"];
                    //$tx = $_POST['userFirstName'];

                }
            }
            */
            ?>">
            -->
            
            <input type="submit" value="ssssss" name="ss">
            <?php
            if(isset($_POST['ss'])){
                
                $tx1 = $_POST['userFirstName'];
                //echo $tx1;
                //echo "<br>";
                $tx2 = $_POST['userLastName'];
                //echo $tx2;
                //echo "<br>";
                $tx3 = $_POST['UserEmail'];
                //echo $tx3;
                //echo "<br>";
                $tx4 = $_POST['UserPwd'];
                //echo $tx4;
            }
                
            ?>
            <!--
            <br>
            <label>loolkooi</label>
            <input type="text" name="" value="lool" id="">
            <br>
            <label>loolkooi</label>
            <input type="text" name="" value="<?php //echo $tx ?>" id="">
            -->
            <div class="btn">
                <input type="submit" value="Delete my Account" name="del" id="del"> <br>
                <input type="submit" value="Update my Account" name="up" id="up">
            </div>
        </form>
        <form action="" method="post">
            
        </form>
        
        <?php
            if(isset($_POST['del'])){
                if($isUserExists == FALSE){
                    echo "Sorry That user does not exists";
                    return;
                }else{
                        
                    // sql to delete a record
                    $isFileDeleted = FALSE;
                    $isUserDeleted = FALSE;
                    /*
                    if($isFileDeleted == FALSE){
                        echo "false";
                    }
                    */
                    //echo "<br>";
                    //echo ($isFileDeleted);
                    
                    $sql = "DELETE FROM file_data WHERE user_idf=$xidd";

                    if (mysqli_query($conn, $sql)) {
                        //echo "Record deleted successfully";
                        echo "<br>";
                        $isFileDeleted = true;
                        
                    } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                    }
                    echo $isFileDeleted . "file deleted";
                    if($isFileDeleted == TRUE){
                        $sql1 = "DELETE FROM user_data WHERE user_id=$xidd";

                        if (mysqli_query($conn, $sql1)) {
                            //echo "Record deleted successfully";
                            echo "<br>";
                            $isUserDeleted = TRUE;
                            
                        } else {
                        echo "Error deleting record: " . mysqli_error($conn);
                        }
                    }
                    echo $isUserDeleted."userdeleted";
                }
            }
            if(isset($_POST['up'])){
                if($isUserExists == FALSE){
                    echo "Sorry That user does not exists";
                    return;
                }else{
                    /*$tx1 = $_POST['userFirstName'];
                    $ULN = $_POST['userLastName'];
                    $UE = $_POST['UserEmail'];
                    $UP = $_POST['UserPwd'];
                    */
                    $tx1 = $_POST['userFirstName'];
                    //echo $tx1;
                    //echo "<br>";
                    $tx2 = $_POST['userLastName'];
                    //echo $tx2;
                    //echo "<br>";
                    $tx3 = $_POST['UserEmail'];
                    //echo $tx3;
                    //echo "<br>";
                    $tx4 = $_POST['UserPwd'];
                    //echo $tx4;
                    /*
                    echo $tx1."<br>";
                    echo $tx2."<br>";
                    echo $tx3."<br>";
                    echo $tx4."<br>";
                    */
                    //UPDATE `user_data` SET user_first_name`=$UFN,`user_last_name`=$ULN,`user_email`=$UE,`user_password`=UP WHERE user_id = $xidd
                    $sqlUp = "UPDATE `user_data` SET `user_first_name`='$tx1',`user_last_name`='$tx2',`user_email`='$tx3',`user_password`='$tx4' WHERE user_id = $xidd";
                    if (mysqli_query($conn, $sqlUp)) {
                    echo "Record updated successfully";
                    header("../mission.php");
                    } else {
                    echo "Error updating record: " . mysqli_error($conn);
                    }
                }
                
            }


        ?>
      
    </div>
    <footer>
        <div class="foo1">
            <h1>LOCATION</h1>
            <p>some where in morocco</p> <br>
        </div>
        <div class="foo2">
            <h1>Contact Me in my accounts</h1>
            
            <a href="https://www.facebook.com/zak.hsn.71/"><i class="fab fa-facebook"> </i></a>
            <a href="https://www.instagram.com/hsnzak/?r=nametag"><i class="fab fa-instagram-square"></i></a>
            <a href="https://twitter.com/zakaria97253683"><i class="fab fa-twitter"></i></a>
            <a href="https://github.com/zack965?tab=repositories"><i class="fab fa-github"></i></a>
            
            <p>My Email : elhossnizakaria@gmail.com </p>  <br>
            <p></p>
        </div>
        <div class="foo3">
            <h1>About DzeD</h1>
            <p>DzeD is a application web for <br>  time management  </p>
        </div>
        <div class="copyright_part">
            <h1>Copyright part <i class="far fa-copyright"></i> , All Rights Receved   </h1>
        </div>
    </footer>
</body>
</html>