
<?php
include "../connect.php";

session_start();
//echo "hello from world"."<br>";
//$let = $_SESSION["fname"];
/*
$query3 = "SELECT name,position FROM file_data where name='$let'";
$res3 = mysqli_query($conn,$query3);


$row = mysqli_fetch_assoc($res3);
*/
//printf ("%s \n %s \n \n", $row["name"], $row["position"]);
/*
$_SESSION['profilname'] = $row["name"];
$_SESSION['profilpath'] = $row["position"];
*/


/*
$_SESSION['uname'];
$_SESSION['lname'];

*/
//$_SESSION['lname'];
//$_SESSION['useremaill'];


/*
 $_SESSION['userremail']."<br>";
 $_SESSION['userrpassword']."<br>";
 //."<br>" ;
 $_SESSION['lname']."<br>" ;

 $_SESSION['profilname']."<br>";
 $_SESSION['profilpath']."<br>";
*/

/*
    $query3 = "SELECT name,position FROM file_data where id_file=1";
    $res3 = mysqli_query($conn,$query3);


    $row = mysqli_fetch_assoc($res3);
    printf ("%s \t %s \n", $row["name"], $row["position"]);
    $_SESSION['profilname'] = $row["name"];
    $_SESSION['profilpath'] = $row["position"];
    
    echo "<br>";
    echo $_SESSION['profilname']."<br>";;
    echo $_SESSION['fname']."<br>";;
    */
    
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font awsomme/css/all.min.css">
    <link rel="stylesheet" href="home.css">

    <title>TO-DO-LIST</title>
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-paw"></i>
            <h1>DzeD</h1>
        </div>
        <nav>
            <ul>
                <li>Home</li>
                <li><a href="missionPage/mission.php">Missions</a></li>
                <li><a href="../Log Out.php">Log Out</a></li>
                <li>
                    
                    <div class="profile-data">
                        <p><?php
                        
                        
                        //echo "  ". $_SESSION['uname']."  ". $_SESSION['lname']."    "; 
                        $useremail = $_SESSION['useremaill'] ;
                        $userpassword = $_SESSION['userpasswordd'];
                        
                        $nameql = "SELECT user_first_name,user_last_name,user_id FROM `user_data` WHERE user_email = '$useremail' and user_password = '$userpassword'";
                        $nameres = mysqli_query($conn,$nameql);
                        if (mysqli_num_rows($nameres) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($nameres)) {
                                echo  $row["user_first_name"] ."     ". $row["user_last_name"]. "<br>";
                                $_SESSION['uid'] = $row["user_id"];
                                $xidd = $_SESSION['uid'];
                            }
                        } else {
                                echo "0 results";
                        }                        
                        
                        //echo "<script>console.log(".$row["user_id"].");</script>";
                        //echo "<script>alert(".$row["user_id"].");</script>";
                        //echo "<script>alert(".$xidd.");</script>";
                        ?> </p> 
                        <img src= "../login page/create account/profile/files/<?php 
                        /*$xidd = $row['user_id'];
                        echo "<script>console.log(".$xidd.");</script>";*/
                        $xq3 = "SELECT name,position,user_id FROM file_data,user_data where  user_id = user_idf and user_idf = '$xidd' ";              //name='$let'
                        $xr3 = mysqli_query($conn,$xq3);
                
                        if(mysqli_num_rows($xr3) > 0){
                            //$xxrow = mysqli_fetch_assoc($xr3);
                            //printf ("%s \t %s \n", $xxrow["name"], $xxrow["position"]);
                            //$_SESSION['profilname'] = $xxrow["name"];
                            //echo $_SESSION['profilname'];
                            //$_SESSION['profilpath'] = $xxrow["position"];
                            //echo "my name is"."   ".$myname;
                            //echo $xxrow["name"];
                            while($xxrow = mysqli_fetch_assoc($xr3)) {
                                echo  $xxrow["name"];
                            }
                            //echo' <img src="'$row["position"]'" alt="mmmmm"  width="300" height="200" />';
                        }else{
                            echo "hhhhhhhhhhhh";
                        }
                        
                        
                        
                        ?>" alt=""  width="30" height="20" />
                    </div>
                </li>
            </ul>
        </nav>
        <div class="content">
            <h1>Your Welcom In DzeD</h1>
            <p>Hello , You can use this website for organize your life</p>
        </div>
    </header>
    <section class="sec1">
        <h1 class="qes1"><i class="fas fa-clock"></i>Why your Life depends on Time Management Is Important ?</h1>
        <div class="ans1">
            <blockquote>
                Lack of clarity is the number-one time-waster . <br> Always be asking <br><q>What i am trying to do ? How am i trying to <br> do it </q> <br>
                <p>--BRIAN TRACY--</p>
            </blockquote>
        </div>
    </section>
    <section class="sec2">
        <div id="ss1">
            <h1>Time Poverty</h1>
            <p>In our days the greatest problem is <q>Time Poverty</q> . People spend a lot of their time in work but they don't do the same in their personal life </p>
            <p>Instead of clearly deciding what is important  to do , people countinually react to what happen's arround them . In the end they lose their controll in their lifes</p> <br>
            <p>So here is some important words to remember abput <q>Time></q>  </p>
            <ul>
                <li>-- It Is your must precious resource </li>
                <li>-- It Is the most valuable thing you have </li>
                <li>-- It is irreplaceable , It is perishable , It can not be  Saved </li>
                <li>-- All Work requires time </li>
            </ul>
            <h1>-- Your time is your responsaboloty --</h1>
        </div>
        <div id="ss2">
            <h1>Begins</h1>
            <p> <q>Time Management</q> is not a peripheral activity or skill , it is the core skill upon which everything else in life depends </p> <br>
            <p>The personal time management begins with you when you decide what is really important in our life and set a smart goals </p> <br>
            <p>So in the moment were you think how do u spend your time , you start change your life  </p>
            <ul>
                <li>-- Family Goals</li>
                <li>-- Buisnesse and carrer goals</li>
                <li></li>
            </ul>
            <h1>-- Your time is your responsaboloty --</h1>
        </div>
        <div id="ss3">
            <h1>Family Goals</h1>
            <p>What's going on between you and your familly effect you outside the familly , so try to spend a good time arround your them , it's so important .</p> <br>
            <p>Read books watch fils and series , learn a new things . </p> <br>
            <p>that make your emotional state better .</p> <br>
            <p>that good relationships make you more ready for life outside , and get your buisnesse and carrer goals </p>
            <h1>-- Your time is your responsaboloty --</h1>
        </div>
        <div id="ss4">
            <h1>Buisnesse and carrer goals</h1> <br>
            <p>They are the How Why Goals</p>
            <p>They are absolutly essebtial and they schould be a balence with FAMILLY GOALS</p>
            <h1>Personnal Developpement Goals </h1> <br>
            <p>Your outer life will be a reflection of your inner life .</p>
            <p>You must become a worthwhile person in your own self-developpement and build yourself for build your life </p>
            <p>ask yourself these questions</p>
            <ul>
                <li>What is the really important thing in your life ?</li>
                <li>What are my highest value activities in your personal life ?</li>
            </ul>
            <h1>-- Your time is your responsaboloty --</h1>
        </div>
        <button class="next" onclick="next()">Next</button> 
        <button class="prev" onclick="prev()">Prev</button>
    </section>
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
    <script src="home.js"></script>
</body>
</html>
<!--
                

    <i class="fab fa-instagram-square"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-facebook-f"></i>

-->
