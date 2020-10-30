<?php 
include "../../connect.php";
session_start();
//$idd = $row5["user_id"];
$xidd = $_SESSION['uid'];
//echo "<script></script>"
//echo "<script>alert(".$xidd.")</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font awsomme/css/all.min.css">
    <link rel="stylesheet" href="mission.css">
    <title>Missions</title>
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-paw"></i>
            <h1>DzeD</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../home.php">Home</a></li>
                <li>Missions</li>
                <li><a href="Profile/profile.php">My Profile</a> </li>
                <li><a href="../../Log Out.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <section class='buttons'>
        <h1>for update or delete or declare that you have benn complete <br> your mission successfully or you failled <br> you schould give me your id missions</h1>
        <button id="addMission" onclick="toForm()">addMission</button>
        <button id="ToCategories"><a href="categorie/Categorie.php">To Categories</a></button>
      
        
        <br>
        <p class="scoreValue" id="scoreValue">
        <?php
        $deffaultValueScore = 0;
        //echo $deffaultValueScore;
        $useremail = $_SESSION['useremaill'];
        $userpassword = $_SESSION['userpasswordd'];
        $scoreql = "SELECT SUM(mission_points) AS totalpoints FROM mission_data,user_data  WHERE isDone = 1 and user_id = user_idk and  user_email = '$useremail'";
        //FROM mission_data,user_data where user_id = user_idk and user_first_name = '$userfname' and user_email = '$uemail'
        //mission_difficulty,mission_name,user_first_name,mission_date_start
        //ORDER BY mission_id DESC LIMIT 2
        //user_first_name = '$userfname' and
        $scoreres = mysqli_query($conn, $scoreql);

        if (mysqli_num_rows($scoreres) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($scoreres)) {
                //echo $row["totalpoints"] = 0;
                //$deffaultValueScore = $deffaultValueScore + $row["mission_points"];
                //echo "mission_points: " . $deffaultValueScore. "<br>";
                $row["totalpoints"] = 0;
                echo "Mission Score: " . $row["totalpoints"]. "<br>";
            }
            
            /*$row = mysqli_fetch_assoc($scoreres);
                $deffaultValueScore = $deffaultValueScore + $row["mission_points"];
                //echo "mission_points: " . $deffaultValueScore. "<br>";
                printf (" mission_points  %d \n ", $deffaultValueScore);
            */
        } else {
            echo "0 results in score";
        }
        
        
        
        
        ?></p>
        <div class="todata" id="todataa">
            <form action="" method="post">
                <input type="number" name="id_mission" id="id_mission" placeholder="Please Give me your mission Id" oninput="checkgo()"> <br>
                <input type="submit" value="Goo" name="Go" class="go" id="id_go" >
                <?php 
                if(isset($_POST['Go'])){
                    $_SESSION['md'] = $_POST['id_mission'];
                    header("location:functions.php");
                }
                ?>
            </form>
        </div>
        
    </section>
    <section class="missions-part">
        <div class="missions-menu">
            <ul>
                
                <li id="i7">Mission Form</li>
                <li id="i8">All Missions</li>
                <li id="i4">Future missions</li>
                <li id="i2">Tuday missions</li>
                <li id="i3">Missions Past</li>
                <li id="i5">missions complete successfuly</li>
                <li id="i6">missions failled</li>


            </ul>
        </div>
        <div class="missions-content" id="mission-form">
            <form action="" method='POST'>
                <h1 id="headerr">Mission Form</h1> 
                    <label>mission difficulty </label> <br> 
                        <input type="number" id="mission-difficulty" placeholder="mission-difficulty" name="mission-difficulty"> <br>
                        <p id="demo-difficulty">None</p>
                            
                    <label>mission urgency </label> <br>
                        <input type="number" id="mission-urgency" placeholder="mission-urgency" name="mission-urgency"> <br>
                        <p id="demo-urgency">None</p>
                    
                    <label>mission fear </label> <br>
                        <input type="number" id="mission-fear" placeholder="mission-fear" name="mission-fear"> <br>
                        <p id="demo-fear">None</p>
                    
                    <label>mission name </label> <br>
                        <input type="text" id="mission-name" placeholder="your mission's name" name="mission-name"> <br>
                    
                    <label>mission description </label> <br>
                        <input type="text" id="mission-description" placeholder="your mission's description" name="mission-description"> <br>
                    
                    <label>mission date start </label> <br>
                        <input type="date" id="mission-date-start" placeholder="mission-date-start" name="mission-date-start"> <br>
                    
                    <label>mission date end </label> <br>
                        <input type="date" id="mission-date-end" placeholder="mission-date-end" name="mission-date-end"> <br>
                    
                    <label>mission oints </label> <br>
                        <input type="number" id="mission-points" placeholder="mission-points" name="mission-points"> <br>      
                        <input type="submit" name="submit" value="Create" class="btn-create" onclick="create()" > 
                                
            </form>
            <!--type="submit"
            <button  name="submit" value="" class="btn-create" onclick="create()" >Create</button>                    
            -->
            <?php
        
                //welcom.php
                
                //echo $_SESSION['uname'];
                //$userfname = $_SESSION['uname'];
                //echo $_SESSION['uname']."<br>";
                //echo "zzzzzzzzzzzzzzzzzzzzzz"."<br>";
                //mission_id
                $idd1;
                $idd;
                
                if(isset($_POST['submit'])){
                    //echo "hhhhhhhhhhh"."<br>";
                    //echo "<script>alert('hhhh')</script>";
                    $missionDifficulty = $_POST['mission-difficulty'];
                    //echo "mission difficulty is : " . "    " .$missionDifficulty;
                    echo "<br>";
                    $missionurgency = $_POST['mission-urgency'];
                    //echo "mission urgency is : " . "    " .$missionurgency;
                    echo "<br>";
                    $missionfear = $_POST['mission-fear'];
                    //echo "mission fear is : " . "    " .$missionfear;
                    echo "<br>";
                    
                    /*$missionId = $_POST['mission-id'];
                    echo "mission id is : " . "    " .$missionId;*/
                    echo "<br>";
                    $missionName = $_POST['mission-name'];
                    //echo "mission name is : " . "    " .$missionName;
                    echo "<br>";
                    $missionDescription = $_POST['mission-description'];
                    //echo "mission name is : " . "    " .$missionDescription;
                    echo "<br>";
                    $missionDateStart = $_POST['mission-date-start'];
                    $_SESSION['datestart'] = $missionDateStart;
                    //echo "mission date start is : " . "    " .$missionDateStart;
                    echo "<br>";
                    $missionDateEnd = $_POST['mission-date-end'];
                    //echo "mission date end is : " . "    " .$missionDateEnd;
                    $_SESSION['dateend'] = $missionDateEnd;
                    echo "<br>";
                    $missionPoints = $_POST['mission-points'];
                    //echo "mission points is : " . "    " .$missionPoints;
                    echo "<br>";
                    if(empty($missionDifficulty)){
                        echo "<script>alert('Mission  Diffuculty is invalid')</script>";
                    }else if($missionDifficulty <=0 || $missionDifficulty >= 100){
                        //is a wrong value : difficulty schould be between 0 and 100
                        echo "<script>alert('".$missionDifficulty."is a wrong value : difficulty schould be between 0 and 100 ')</script>";
                        //echo "<script>alert('hola amigos')</script>";
                    }else if(empty($missionurgency)){
                        echo "<script>alert('Mission  Urgency is invalid')</script>";
                    }else if($missionurgency <=0 || $missionurgency >= 100){
                        //is a wrong value : difficulty schould be between 0 and 100
                        echo "<script>alert('".$missionurgency."is a wrong value : Urgency schould be between 0 and 100')</script>";
                        //echo "<script>alert('hola amigos')</script>";
                    }else if(empty($missionfear)){
                        echo "<script>alert('Mission  Fear is invalid')</script>";
                    }else if($missionfear <=0 || $missionfear >= 100){
                        //is a wrong value : difficulty schould be between 0 and 100
                        echo "<script>alert('".$missionfear."is a wrong value : Fear schould be between 0 and 100')</script>";
                    }else if(empty($missionName)){
                        echo "<script>alert('Mission  Name is invalid')</script>";
                    }else if(empty($missionDescription)){
                        echo "<script>alert('Mission  Description is invalid')</script>";
                    }else if(empty($missionDateStart)){
                        echo "<script>alert('Mission  Start Date is invalid')</script>";
                    }else if(empty($missionDateEnd)){
                        echo "<script>alert('Mission  End Date is invalid')</script>";
                    }else if(empty($missionPoints)){
                        echo "<script>alert('Mission Points  is invalid')</script>";
                    }else if($missionPoints <=0 || $missionPoints >= 100){
                        echo "<script>alert('".$missionPoints."is a wrong value : Points schould be between 0 and 100')</script>";
                    }else{
                        $queryxs1 = "INSERT INTO mission_data
                        (mission_difficulty,mission_urgency,mission_fear,mission_name,mission_description,mission_date_start,mission_date_end,mission_points,user_idk,isDone,isFailled,Mission_Category)
                        VALUES('$missionDifficulty','$missionurgency','$missionfear','$missionName','$missionDescription','$missionDateStart','$missionDateEnd','$missionPoints','$xidd',0,0,'None')";
                        mysqli_query($conn,$queryxs1);
                        if(mysqli_affected_rows($conn) > 0){
                            //echo "<p> mission added </p>";
                            //header("location:profile/indexprofile.php");

                            
                        }else{
                            echo "<p> mission not added </p>";
                            echo mysqli_error($conn);
                        }
                    }
                    // get the user id
                    //user_email
                    //mission_id  $missionId
                    // insert to database
                    //SELECT mission_difficulty,mission_name,user_first_name FROM mission_data,user_data
                    //where user_id = user_idk and user_first_name = '$userfname'
                    // email and id 
                    //$xidd = $_SESSION['uid'];
                    /*
                    $uemail = $_SESSION['useremaill'];
                    $q5 = "SELECT user_id,user_email FROM user_data WHERE user_email ='$uemail'";
                    $q5 = mysqli_query($conn,$q5);

                        //print_r($q5);
                    if(mysqli_num_rows($q5) >0 ){
                        $row5 = mysqli_fetch_assoc($q5);
                            //printf ("%s  \t %s \n ", $row4["user_id"] , $row4["user_first_name"]);
                        echo "user_id: " . $row5["user_id"]."   "."is found id "."<br>";
                        echo "user_email: " . $row5["user_email"]."   "."is found"."<br>";
                    }else{
                        echo "<p> user_email not founded </p>";
                        echo mysqli_error($conn);
                    }
                    $idd1 = $row5["user_email"];
                    $idd = $row5["user_id"];
                    */
                    
                
                        
                };
                /*

                $q4 = "SELECT * FROM user_data WHERE user_first_name ='$userfname'";
                $r4 = mysqli_query($conn,$q4);

                //print_r($r4);
                if(mysqli_num_rows($r4) >0 ){
                    $row4 = mysqli_fetch_assoc($r4);
                    //printf ("%s  \t %s \n ", $row4["user_id"] , $row4["user_first_name"]);
                    echo "user_id: " . $row4["user_id"]. " - user_first_name: " . $row4["user_first_name"]. "<br>";
                }
                */
                
                //SELECT mission_difficulty,mission_name,user_first_name FROM mission_data,user_data
                //where user_id = user_idk and user_first_name = '$userfname'
                    
                /*
            
                if (mysqli_num_rows($r4) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($r4)) {
                    echo " user id: " . $row["user_id"]."<br>";
                    }
                } else {
                    echo "0 results";
                }
                echo  $idd ."  ". "<br>";
                echo $idd1 . "<br>";
                */
                
            ?>
        </div>
        <div class="missions-content" id="all missions">
            <h1 id="headerr">All Missions </h1> <br> 
            <table class="ttable">
                <tr>
                    <th>Mission Difficulty</th>
                    <th>Mission Urgency</th>
                    <th>Mission Fear</th>
                    <th>Mission Id</th>
                    <th>Mission Name</th>
                    <th>Mission Description</th>
                    <th>Mission Date Start</th>
                    <th>Mission Date End</th>
                    <th>Mission Points</th>
                    <th>Mission isDone</th>
                    <th>Mission isFailled</th>
                </tr>
                <?php
                    $uemail = $_SESSION['useremaill'];
                    //$sql051 = "SELECT mission_difficulty,mission_name,user_first_name,mission_date_start FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail'";
                    $sql051 = "SELECT * FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail'";
                    $result051 = mysqli_query($conn, $sql051);
                    if (mysqli_num_rows($result051) > 0) {
                        //echo "<table><tr><th>mission_name</th></tr>";
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result051)) {
                            echo "<tr>";
                                echo "<td>".$row["mission_difficulty"]."</td>";
                                echo "<td>".$row["mission_urgency"]."</td>";
                                echo "<td>".$row["mission_fear"]."</td>";
                                echo "<td>".$row["mission_id"]."</td>";
                                echo "<td>".$row["mission_name"]."</td>";
                                echo "<td>".$row["mission_description"]."</td>";
                                echo "<td>".$row["mission_date_start"]."</td>";
                                echo "<td>".$row["mission_date_end"]."</td>";
                                echo "<td>".$row["mission_points"]."</td>";
                                echo "<td>".$row["isDone"]."</td>";
                                echo "<td>".$row["isFailled"]."</td>";
                            //echo "<td>".$row["mission_description"]."</td>";
                            echo "</tr>";
                        }
                        //echo "</table>";
                    } else {
                        echo "<tr>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                        
                            //echo "<td>".$row["mission_description"]."</td>";
                        echo "</tr>";
                        //echo "<tr><td>0 sqlresults </td></tr>";
                    }
                
                ?>
                
            </table>
        </div>
        <div class="missions-content" id="Future missions">
            <h1 id="header">Future missions</h1> <br> <br> <br> <br>
      
            <table class="ttable">
                <tr>
                    <th>Mission Difficulty</th>
                    <th>Mission Urgency</th>
                    <th>Mission Fear</th>
                    <th>Mission Id</th>
                    <th>Mission Name</th>
                    <th>Mission Description</th>
                    <th>Mission Date Start</th>
                    <th>Mission Date End</th>
                    <th>Mission Points</th>
                    <th>Mission isDone</th>
                    <th>Mission isFailled</th>
                </tr>
            
                <?php
                    $uemail = $_SESSION['useremaill'];
                    //$sql051 = "SELECT mission_difficulty,mission_name,user_first_name,mission_date_start FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail'";
                    //SELECT mission_difficulty,mission_name,user_first_name FROM mission_data,user_data where user_id = user_idk  and user_email = '$uemail' AND  mission_date_start > CURDATE()
                    $sql052 = "SELECT * FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail' AND mission_date_start > CURDATE()";
                    $result052 = mysqli_query($conn, $sql052);
                    if (mysqli_num_rows($result052) > 0) {
                        //echo "<table><tr><th>mission_name</th></tr>";
                        // output data of each row
                        while($row1 = mysqli_fetch_assoc($result052)) {
                            echo "<tr>";
                                echo "<td>".$row1["mission_difficulty"]."</td>";
                                echo "<td>".$row1["mission_urgency"]."</td>";
                                echo "<td>".$row1["mission_fear"]."</td>";
                                echo "<td>".$row1["mission_id"]."</td>";
                                echo "<td>".$row1["mission_name"]."</td>";
                                echo "<td>".$row1["mission_description"]."</td>";
                                echo "<td>".$row1["mission_date_start"]."</td>";
                                echo "<td>".$row1["mission_date_end"]."</td>";
                                echo "<td>".$row1["mission_points"]."</td>";
                                echo "<td>".$row1["isDone"]."</td>";
                                echo "<td>".$row1["isFailled"]."</td>";
                            //echo "<td>".$row["mission_description"]."</td>";
                            echo "</tr>";
                        }
                        //echo "</table>";
                    } else {
                        echo "<tr>";
                            echo "<td> 0 result Future </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                        
                            //echo "<td>".$row["mission_description"]."</td>";
                        echo "</tr>";
                        //echo "<tr><td>0 sqlresults </td></tr>";
                    }
                
                ?>
            </table>
        </div>
        <div class="missions-content" id="Tuday missions">
            <h1 id="header">Tuday missions</h1> <br> <br> <br> <br>
           
            <table class="ttable">
                <tr>
                    <th>Mission Difficulty</th>
                    <th>Mission Urgency</th>
                    <th>Mission Fear</th>
                    <th>Mission Id</th>
                    <th>Mission Name</th>
                    <th>Mission Description</th>
                    <th>Mission Date Start</th>
                    <th>Mission Date End</th>
                    <th>Mission Points</th>
                    <th>Mission isDone</th>
                    <th>Mission isFailled</th>
                </tr>
                <?php
                    $uemail = $_SESSION['useremaill'];
                    //$sql051 = "SELECT mission_difficulty,mission_name,user_first_name,mission_date_start FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail'";
                    //SELECT mission_difficulty,mission_name,user_first_name FROM mission_data,user_data where user_id = user_idk  and user_email = '$uemail' AND  mission_date_start > CURDATE()
                    $sql052 = "SELECT * FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail' AND mission_date_start = CURDATE()";
                    $result052 = mysqli_query($conn, $sql052);
                    if (mysqli_num_rows($result052) > 0) {
                        //echo "<table><tr><th>mission_name</th></tr>";
                        // output data of each row
                        while($row1 = mysqli_fetch_assoc($result052)) {
                            echo "<tr>";
                                echo "<td>".$row1["mission_difficulty"]."</td>";
                                echo "<td>".$row1["mission_urgency"]."</td>";
                                echo "<td>".$row1["mission_fear"]."</td>";
                                echo "<td>".$row1["mission_id"]."</td>";
                                echo "<td>".$row1["mission_name"]."</td>";
                                echo "<td>".$row1["mission_description"]."</td>";
                                echo "<td>".$row1["mission_date_start"]."</td>";
                                echo "<td>".$row1["mission_date_end"]."</td>";
                                echo "<td>".$row1["mission_points"]."</td>";
                                echo "<td>".$row1["isDone"]."</td>";
                                echo "<td>".$row1["isFailled"]."</td>";
                            //echo "<td>".$row["mission_description"]."</td>";
                            echo "</tr>";
                        }
                        //echo "</table>";
                    } else {
                        echo "<tr>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                        
                            //echo "<td>".$row["mission_description"]."</td>";
                        echo "</tr>";
                        //echo "<tr><td>0 sqlresults </td></tr>";
                    }
                
                ?>
                
            </table>
            
   

        </div>
        <div class="missions-content" id="missions Past">
            <h1 id="header">Missions Past</h1> <br> <br> <br> <br>
            <table class="ttable">
                <tr>
                    <th>Mission Difficulty</th>
                    <th>Mission Urgency</th>
                    <th>Mission Fear</th>
                    <th>Mission Id</th>
                    <th>Mission Name</th>
                    <th>Mission Description</th>
                    <th>Mission Date Start</th>
                    <th>Mission Date End</th>
                    <th>Mission Points</th>
                    <th>Mission isDone</th>
                    <th>Mission isFailled</th>
                </tr>
                <?php
                    $uemail = $_SESSION['useremaill'];
                    //$sql051 = "SELECT mission_difficulty,mission_name,user_first_name,mission_date_start FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail'";
                    //SELECT mission_difficulty,mission_name,user_first_name FROM mission_data,user_data where user_id = user_idk  and user_email = '$uemail' AND  mission_date_start > CURDATE()
                    $sql052 = "SELECT * FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail' AND mission_date_start < CURDATE()";
                    $result052 = mysqli_query($conn, $sql052);
                    if (mysqli_num_rows($result052) > 0) {
                        //echo "<table><tr><th>mission_name</th></tr>";
                        // output data of each row
                        while($row1 = mysqli_fetch_assoc($result052)) {
                            echo "<tr>";
                                echo "<td>".$row1["mission_difficulty"]."</td>";
                                echo "<td>".$row1["mission_urgency"]."</td>";
                                echo "<td>".$row1["mission_fear"]."</td>";
                                echo "<td>".$row1["mission_id"]."</td>";
                                echo "<td>".$row1["mission_name"]."</td>";
                                echo "<td>".$row1["mission_description"]."</td>";
                                echo "<td>".$row1["mission_date_start"]."</td>";
                                echo "<td>".$row1["mission_date_end"]."</td>";
                                echo "<td>".$row1["mission_points"]."</td>";
                                echo "<td>".$row1["isDone"]."</td>";
                                echo "<td>".$row1["isFailled"]."</td>";
                            //echo "<td>".$row["mission_description"]."</td>";
                            echo "</tr>";
                        }
                        //echo "</table>";
                    } else {
                        echo "<tr>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                        
                            //echo "<td>".$row["mission_description"]."</td>";
                        echo "</tr>";
                        //echo "<tr><td>0 sqlresults </td></tr>";
                    }
                
                ?>
                
            </table>
        </div>
        <div class="missions-content" id="missions complete successfuly">
            <h1 id="header">missions complete successfuly</h1> <br> <br> <br> <br>
            <table class="ttable">
                <tr>
                    <th>Mission Difficulty</th>
                    <th>Mission Urgency</th>
                    <th>Mission Fear</th>
                    <th>Mission Id</th>
                    <th>Mission Name</th>
                    <th>Mission Description</th>
                    <th>Mission Date Start</th>
                    <th>Mission Date End</th>
                    <th>Mission Points</th>
                    <th>Mission isDone</th>
                    <th>Mission isFailled</th>
                    

                </tr>
                <?php
                    $uemail = $_SESSION['useremaill'];
                    //$sql051 = "SELECT mission_difficulty,mission_name,user_first_name,mission_date_start FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail'";
                    //SELECT mission_difficulty,mission_name,user_first_name FROM mission_data,user_data where user_id = user_idk  and user_email = '$uemail' AND  mission_date_start > CURDATE()
                    $sql052 = "SELECT * FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail' AND  isDone = 1";
                    $result052 = mysqli_query($conn, $sql052);
                    if (mysqli_num_rows($result052) > 0) {
                        //echo "<table><tr><th>mission_name</th></tr>";
                        // output data of each row
                        while($row1 = mysqli_fetch_assoc($result052)) {
                            echo "<tr>";
                                echo "<td>".$row1["mission_difficulty"]."</td>";
                                echo "<td>".$row1["mission_urgency"]."</td>";
                                echo "<td>".$row1["mission_fear"]."</td>";
                                echo "<td>".$row1["mission_id"]."</td>";
                                echo "<td>".$row1["mission_name"]."</td>";
                                echo "<td>".$row1["mission_description"]."</td>";
                                echo "<td>".$row1["mission_date_start"]."</td>";
                                echo "<td>".$row1["mission_date_end"]."</td>";
                                echo "<td>".$row1["mission_points"]."</td>";
                                echo "<td>".$row1["isDone"]."</td>";
                                echo "<td>".$row1["isFailled"]."</td>";
                            //echo "<td>".$row["mission_description"]."</td>";
                            echo "</tr>";
                        }
                        //echo "</table>";
                    } else {
                        echo "<tr>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                        
                            //echo "<td>".$row["mission_description"]."</td>";
                        echo "</tr>";
                        //echo "<tr><td>0 sqlresults </td></tr>";
                    }
                
                ?>
                
            </table>
          
        </div>
        <div class="missions-content" id="missions failled">
            <h1 id="header">missions Failled</h1> <br> <br> <br> <br>
            <table class="ttable">
                <tr>
                    <th>Mission Difficulty</th>
                    <th>Mission Urgency</th>
                    <th>Mission Fear</th>
                    <th>Mission Id</th>
                    <th>Mission Name</th>
                    <th>Mission Description</th>
                    <th>Mission Date Start</th>
                    <th>Mission Date End</th>
                    <th>Mission Points</th>
                    <th>Mission isDone</th>
                    <th>Mission isFailled</th>
                </tr>
                <?php
                    $uemail = $_SESSION['useremaill'];
                    //$sql051 = "SELECT mission_difficulty,mission_name,user_first_name,mission_date_start FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail'";
                    //SELECT mission_difficulty,mission_name,user_first_name FROM mission_data,user_data where user_id = user_idk  and user_email = '$uemail' AND  mission_date_start > CURDATE()
                    $sql052 = "SELECT * FROM mission_data,user_data where user_id = user_idk and  user_email = '$uemail' AND  isFailled = 1";
                    $result052 = mysqli_query($conn, $sql052);
                    if (mysqli_num_rows($result052) > 0) {
                        //echo "<table><tr><th>mission_name</th></tr>";
                        // output data of each row
                        while($row1 = mysqli_fetch_assoc($result052)) {
                            echo "<tr>";
                                echo "<td>".$row1["mission_difficulty"]."</td>";
                                echo "<td>".$row1["mission_urgency"]."</td>";
                                echo "<td>".$row1["mission_fear"]."</td>";
                                echo "<td>".$row1["mission_id"]."</td>";
                                echo "<td>".$row1["mission_name"]."</td>";
                                echo "<td>".$row1["mission_description"]."</td>";
                                echo "<td>".$row1["mission_date_start"]."</td>";
                                echo "<td>".$row1["mission_date_end"]."</td>";
                                echo "<td>".$row1["mission_points"]."</td>";
                                echo "<td>".$row1["isDone"]."</td>";
                                echo "<td>".$row1["isFailled"]."</td>";
                            //echo "<td>".$row["mission_description"]."</td>";
                            echo "</tr>";
                        }
                        //echo "</table>";
                    } else {
                        echo "<tr>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                            echo "<td> 0 result </td>";
                        
                            //echo "<td>".$row["mission_description"]."</td>";
                        echo "</tr>";
                        //echo "<tr><td>0 sqlresults </td></tr>";
                    }
                
                ?>
                
            </table>
        </div>
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
    <script src="mission.js"></script>
 
</body>
</html> 