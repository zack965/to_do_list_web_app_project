<?php 
include "../../connect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font awsomme/css/all.min.css">
    <link rel="stylesheet" href="functions.css">
    <title>Update Mission</title>
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
                <li>Contact me </li>
            </ul>
        </nav>
    </header>
    <?php
        /*$idm = $_POST['id_mission'];
        echo $idm;*/
        $idm = $_SESSION['md'];
        //echo $idm;
        //echo "<script>alert('$idm')</script>";
        $uemail = $_SESSION['useremaill'];
    ?>
    
    <form action="" method="post" class="gfg">
    <?php
                    echo "<br>";
                    //$idm = $_SESSION['id_mission'];
                        $uemail = $_SESSION['useremaill'];
                        if(isset($_POST['Update'])){
                           

                            $mdd = $_POST['num'];
                            $mu = $_POST['mission_urgency'];
                            $mf = $_POST['mission_fear'];
                            //$mi = $_POST['mission_id'];
                            $mn = $_POST['mission_name'];
                            $md = $_POST['mission_description'];
                            $mds = $_POST['mission_date_start'];
                            $mde = $_POST['mission_date_end'];
                            $mp = $_POST['mission_points'];


                            echo $mdd."<br>";
                            echo $mu."<br>";
                            echo $mf."<br>";
                            //echo $mi."<br>";
                            echo $mn."<br>";
                            echo $md."<br>";
                            echo $mds."<br>";
                            echo $mde."<br>";
                            echo $mp."<br>";

                            
                            echo "<br>";
                            echo "<br>";

                            echo $idm;
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            $sssql = "UPDATE `mission_data` SET `mission_difficulty`='$mdd',mission_urgency = '$mu',mission_fear = '$mf',mission_name = '$mn',mission_description = '$md',mission_date_start = '$mds',mission_date_end = '$mde',mission_points = $mp WHERE  mission_id = $idm";
                            if(mysqli_query($conn, $sssql)) { //user_id = user_idk AND                  user_data 
                                //echo "Record updated successfully";
                                //exit();
                                header("location:mission.php");
                            }else{
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                            /*
                            
                            
                            $ssql = "UPDATE mission_data SET mission_difficulty = '$mdd' WHERE mission_id = '$idm'";
                            if(mysqli_query($conn, $ssql)) { //user_id = user_idk AND                  user_data 
                                echo "Record updated successfully";
                            }else{
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                            // 
                        */
                            echo "<br>";
                            echo $mdd."<br>";
                            echo $mu."<br>";
                            echo $mf."<br>";
                            //echo $mi."<br>";
                            echo $mn."<br>";
                            echo $md."<br>";
                            echo $mds."<br>";
                            echo $mde."<br>";
                            echo $mp."<br>";
                            
                        }
                ?>
                <?php
                    if(isset($_POST['Done'])){
                        $upsal = "UPDATE mission_data SET isDone = 1 , isFailled = 0 WHERE  mission_id = $idm";
                        if (mysqli_query($conn, $upsal)) {
                            //echo "Record updated done  successfully";
                            header("location:mission.php");
                        } else {
                            echo "Error updating done record: " . mysqli_error($conn);
                        }
                        echo "<br>";
                    }
                    if(isset($_POST['Delete'])){
                        
                    $sql = "DELETE FROM mission_data WHERE mission_id=$idm";

                    if (mysqli_query($conn, $sql)) {
                    //echo "Record deleted successfully";
                    header("location:mission.php");
                    } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                    }
                    }
                ?>
                <?php 
                if(isset($_POST['Failled'])){
                    $d = "UPDATE mission_data SET isFailled = 1 , isDone = 0 WHERE  mission_id = $idm";
                    if (mysqli_query($conn, $d)) {
                        //echo "<script>alert('Record updated failled done  successfully');</script>";
                        header("location:mission.php");
                    } else {
                        //echo "Error updating failled done record: " . mysqli_error($conn);
                        echo "<script>alert('Error updating failled done record:');</script>";
                        echo "<script>alert(". mysqli_error($conn).")</script>";
                    }
                    echo "<br>";
                }
                
                ?>
    
        <label>mission diff :</label> <br> <br>
        <input type="number" name="num" value="<?php 
            //SELECT mission_difficulty,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'
            $sxx = "SELECT mission_difficulty,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res00xx = mysqli_query($conn, $sxx);
            
                if (mysqli_num_rows($res00xx) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res00xx)) {
                        echo  $row["mission_difficulty"];
                        $_SESSION['numrow'] = $row["mission_difficulty"];
                    }
                } else {
                    echo "0 results";
                }
        ?>" id="">
        <br> 
        <label>mission urgency :</label> <br> <br>
            <input type="number" name="mission_urgency" value="<?php 
                $sql02 = "SELECT mission_urgency,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res02 = mysqli_query($conn, $sql02);
            
                if (mysqli_num_rows($res02) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res02)) {
                        echo  $row["mission_urgency"];
                        $_SESSION['numurgency'] = $row["mission_urgency"];
                    }
                } else {
                    echo "0 results";
                }
            ?>" id=""> <br>
        <label>mission fear :</label> <br> <br>
            <input type="number" name="mission_fear" value="<?php 
                $sql03 = "SELECT mission_fear,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res03 = mysqli_query($conn, $sql03);
            
                if (mysqli_num_rows($res03) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res03)) {
                        echo  $row["mission_fear"];
                        $_SESSION['numfear'] = $row["mission_fear"];
                    }
                } else {
                    echo "0 results";
                }
            ?>" id=""> <br>
        <label>mission name :</label> <br> <br>
            <input type="text" name="mission_name" value="<?php
                $sql5 = "SELECT mission_name,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $result = mysqli_query($conn, $sql5);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo  $row["mission_name"];
                        $_SESSION['numname'] = $row["mission_name"];
                    }
                } else {
                    echo "0 results";
                }

            ?>" id=""> <br>
        <label>mission desc :</label> <br> <br>
            <input type="text" name="mission_description" value="<?php 
                $sql05 = "SELECT mission_description,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res05 = mysqli_query($conn, $sql05);
            
                if (mysqli_num_rows($res05) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res05)) {
                        echo  $row["mission_description"];
                        $_SESSION['numdescription'] = $row["mission_description"];
                    }
                } else {
                    echo "0 results";
                }
            ?>" id=""> <br>
        <label>mission date start  :</label> <br> <br>
            <input type="date" name="mission_date_start" value="<?php 
                $sql06 = "SELECT mission_date_start,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res06 = mysqli_query($conn, $sql06);
            
                if (mysqli_num_rows($res06) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res06)) {
                        echo  $row["mission_date_start"];
                        $_SESSION['numdatestart'] = $row["mission_date_start"];
                    }
                } else {
                    echo "0 results";
                }
            ?>" id=""> <br>
        <label>mission date end  :</label> <br> <br>
            <input type="date" name="mission_date_end" value="<?php 
                $sql07 = "SELECT mission_date_end,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res07 = mysqli_query($conn, $sql07);
            
                if (mysqli_num_rows($res07) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res07)) {
                        echo  $row["mission_date_end"];
                        $_SESSION['numdateEnd'] = $row["mission_date_end"];
                    }
                } else {
                    echo "0 results";
                }
            ?>" id=""> <br>
        <label>mission points:</label> <br> <br>
            <input type="number" name="mission_points" value="<?php 
                $sql08 = "SELECT mission_points,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res08 = mysqli_query($conn, $sql08);
            
                if (mysqli_num_rows($res08) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res08)) {
                        echo  $row["mission_points"];
                        $_SESSION['numpoints'] = $row["mission_points"];
                    }
                } else {
                    echo "0 results";
                }
            ?>" id=""> 
            
            <div class="buttons">

                <input type="submit" value="Update" name="Update" class="Update">
                <input type="submit" value="Done" name="Done" class="Done">
                <input type="submit" value="Failled" name="Failled" class="Failled">
                <input type="submit" value="Delete" name="Delete" class="Delete">
            </div>
    </form>
    
    
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


<!--           mission id :
            <input type="number" name="mission_id" readonly value="<?php 
            /*    $sql04 = "SELECT mission_id,mission_id FROM mission_data,user_data where user_id = user_idk AND  mission_id = '$idm' and user_email = '$uemail'";
                $res04 = mysqli_query($conn, $sql04);
            
                if (mysqli_num_rows($res04) > 0) {
                        // output data of each row
                    while($row = mysqli_fetch_assoc($res04)) {
                        echo  $row["mission_id"];
                    }
                } else {
                    echo "0 results";
                }*/
            ?>" id=""> <br>
            -->

<?php 
 /*$mdd = $_SESSION['numrow'];
                            $mu = $_SESSION['numurgency'];
                            $mf = $_SESSION['numfear'];
                            //$mi = $_POST['mission_id'];
                            $mn = $_SESSION['numname'] ;
                            $md = $_SESSION['numdescription'];
                            $mds = $_SESSION['numdatestart'];
                            $mde = $_SESSION['numdateEnd'];
                            $mp = $_SESSION['numpoints'];*/
                        ?>