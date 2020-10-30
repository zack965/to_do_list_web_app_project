<?php
include "../../../connect.php";
session_start();
//$idd = $row5["user_id"];
$xidd = $_SESSION['uid'];
//echo "<script>alert(".$xidd.")</script>";
//echo "<script>alert(</script>";
//echo "<script>alert(".$xidd.")</script>";
//INSERT INTO `categories`(`Categorie_name`, `Categorie_date_set`, `Categorie_description`, `Categorie_idm`) VALUES ('watching list','2020-10-3','moop',21)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../font awsomme/css/all.min.css">
    <title>Categorie</title>
    <link rel="stylesheet" href="Categorie.css">
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-paw"></i>
            <h1>DzeD</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../../home.php">Home</a></li>
                <li><a href="../mission.php">Missions</a></li>
                <li><a href="../../../Log Out.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <article class="countainer">
        <section class="missions">
            <div class="mission-cards"> 
                <form method="post" id="missionCrudForm">
                    <label> Entrez le ID de la categorie ou vous vouleez ajouter la mission</label> <br>
                    <input type="number" name="id_cat" id="id_cat" placeholder=" Entrez le ID de la categorie ou vous vouleez ajouter la mission"> <br>
                    <label> Entrez le ID de mission que vous voulez ajouter </label> <br>
                    <input type="number" name="id_miss" id="id_miss" placeholder="Entrez le ID de mission que vous voulez ajouter "> <br>
                    <input type="submit" value="Add Mission" id="Add_Mission" name="Add_Mission" > <br>
                    <input type="button" value="Close" id="CloseMissionForm" onclick="document.getElementById('missionCrudForm').style.display='none'">
                    
                </form>
                <?php 
                    if(isset($_POST['Add_Mission'])){
                        $idMission = $_POST['id_miss'];   //You Schould Refresh The Page
                        $idCat = $_POST['id_cat'];
                        if(empty($_POST['id_miss'])){
                            echo "<script>alert('Sorry Mision is Required ')</script>";
                            //return;
                            //die();
                            //echo "fuck you";
                        }
                        else if(empty($_POST['id_cat'])){
                            echo "<script>alert("."Sorry Category is Required".")</script>";
                            return;
                        }else{
                            $sqlSelectCategoryName = "SELECT `Categorie_name` FROM `categories` WHERE `Categorie_id`= $idCat and Categorie_idm = $xidd";
                            $sqlSelectCategoryNameResult = mysqli_query($conn,$sqlSelectCategoryName);
                            
                            if (mysqli_num_rows($sqlSelectCategoryNameResult) > 0) {
                                // output data of each row
                                while($rowShowMissions = mysqli_fetch_assoc($sqlSelectCategoryNameResult)) {
                                    //echo $rowShowMissions["Categorie_name"];
                
                                    $_SESSION['Categorie_name'] = $rowShowMissions["Categorie_name"];
                        
                                
                                }
                                
                            }else{
                                echo "0 results";
                            }
                            $Categorie_name = $_SESSION['Categorie_name'];
                            //echo $Categorie_name;
                            //echo '<script>alert('.$Categorie_name.')</script>';
                            //echo "<script>alert('.$Categorie_name.')</script>";
                            //echo "<script>alert('.$idMission.')</script>";
                            //$sqlUpdate = "UPDATE mission_data SET Mission_Category = $_SESSION['Categorie_name'] WHERE `mission_id` = $idMission";
                            //$sqlUpdateX = "UPDATE mission_data SET Mission_Category=$_SESSION['Categorie_name'] WHERE mission_id = $idMission";
                            $sqlUpdateX = "UPDATE mission_data SET Mission_Category = '$Categorie_name' WHERE mission_id=$idMission";
                            if (mysqli_query($conn, $sqlUpdateX)) {
                                //echo "Record updated successfully";
                            } else {
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                        }

                        
                        
                        
                        
                        /*$sqlSelectMissionName = "SELECT * FROM `mission_data` WHERE `Mission_Category`= $idCat";
                        $sqlSelectMissionNameResult = mysqli_query($conn,$sqlSelectMissionName);
                        
                        if (mysqli_num_rows($sqlSelectMissionNameResult) > 0) {
                            // output data of each row
                            while($rowShowMissions = mysqli_fetch_assoc($sqlSelectMissionNameResult)) {
                                echo $rowShowMissions["mission_name"];
                                
                                $_SESSION['mission_name'] = $rowShowMissions["mission_name"];
                      
                            
                            }
                            
                        }else{
                            echo "0 results";
                        }
                        */
                        //$missions = $_SESSION['mission_name'];
                        



                        //echo $Categorie_name;
                        //echo $_SESSION['mission_name'];
                        /*
                        $sqlMission = "SELECT `mission_name` FROM mission_data WHERE `mission_id` = $idMission";
                        $sqlMissionResult = mysqli_query($conn,$sqlMission);
                        if (mysqli_num_rows($sqlMissionResult) > 0) {
                            // output data of each row
                            while($rowShowMissions = mysqli_fetch_assoc($sqlMissionResult)) {
                                //echo "<div class='catcc'> ";
                                //echo "<p>".$rowShowMissions["mission_name"]."</p>";
                                $_SESSION['missid'] = $rowShowMissions["mission_name"];
                                //echo "<script>alert(".$rowShowMissions["mission_name"].")</script>";
                                //echo "<button class='btn'> add </button>";
                                //echo "</div>";
                            
                            }
                            
                        }else{
                            echo "0 results";
                        }
                        */
                        //$Categorie_name = $_SESSION['Categorie_name'];
                        
                    }

                    /*$sqlShowCategories = "SELECT * FROM `categories` ";
                    $resultShowCategories = mysqli_query($conn, $sqlShowCategories);
                    while($rowShowCategories = mysqli_fetch_assoc($resultShowCategories)) {
                        echo "<div class='catcc'> ";
                        echo "<h1>".$rowShowCategories["Categorie_name"]."</h1>";
                        echo "<button class='btn'> add </button>";
                        
                        echo "</div>";
                    }else {
                    echo "0 results";
                    }
                    */
                    //SELECT `Categorie_name` FROM `categories` 
                    
                    
                    //echo "<div class='catcc'> ";
                    $CATEGORIES = array();   //$Categorie_namex
                    $sqlShowCategories = "SELECT * FROM `categories` WHERE Categorie_idm = $xidd";
                    $resultShowCategories = mysqli_query($conn, $sqlShowCategories);
                    if (mysqli_num_rows($resultShowCategories) > 0) {
                        // output data of each row
                        while($rowShowCategories = mysqli_fetch_assoc($resultShowCategories)) {
                            
                            //echo "<h1>".$rowShowCategories["Categorie_name"]."</h1>";
                            array_push($CATEGORIES,$rowShowCategories["Categorie_name"]);
                            
                            $_SESSION['Categorie_name'] = $rowShowCategories["Categorie_name"];
                            //$_SESSION['Categorie_id '] = $rowShowCategories["Categorie_id "];
                            //echo "<button class='btn'> add </button>";
                            /*if(isset($_POST['Add_Mission'])){
                                //echo $Categorie_name;
                                //echo $missions;
                                echo $_SESSION['mission_name'];
                            }
                            */
                            //echo $_SESSION['mission_name'];3030
                            //echo $Categorie_name;
                            
                        
                        }
                        
                    }else{
                        echo "<div class='err'>";
                        echo "0 results";
                        echo "</div>";
                    }
                    //$Categorie_name = $_SESSION['Categorie_name'];
                    //echo $Categorie_namex;
                    //echo "<br>";
                    //$i=0;
                    /*for($i=0;$i<count($CATEGORIES);$i++){
                        echo $CATEGORIES[$i];
                        echo "<br>";
                    };
                    */
                    //echo "<br>";
                    //print_r($CATEGORIES);
                    //echo "<br>";
                    //echo count($CATEGORIES);

                    //echo "<br>";
                    /*
                    for($i=0;$i<count($CATEGORIES);$i++){

                    }
                    */
                    //mission_name
                    for($i=0;$i<count($CATEGORIES);$i++){
                        echo "<div class='xcard'>";
                        $xxsql = "SELECT * FROM `categories` WHERE Categorie_name='$CATEGORIES[$i]' AND Categorie_idm = $xidd";
                        $xxres = mysqli_query($conn, $xxsql);

                        if (mysqli_num_rows($xxres) > 0) {
                        // output data of each row
                        while($xxrow = mysqli_fetch_assoc($xxres)) {
                            echo  "Id : ".$xxrow["Categorie_id"]. "<br>";
                            //$_SESSION["Categorie_id"] = $xxrow["Categorie_id"];
                        }
                        } else {
                        echo "0 results";
                        }
                        //$ctd = $_SESSION['Categorie_id '];
                        $sqlMission = "SELECT * FROM `mission_data` WHERE `Mission_Category`='$CATEGORIES[$i]' AND user_idk = $xidd";
                        echo "<br>";
                        echo "<h1>".$CATEGORIES[$i]."</h1>";
                        echo "<br>";
                        $sqlMissionResult = mysqli_query($conn,$sqlMission);
                        if (mysqli_num_rows($sqlMissionResult) > 0) {
                            // output data of each row
                            
                            while($rowShowMissions = mysqli_fetch_assoc($sqlMissionResult)) {
                                //$i++;
                                //echo "<div class='catcc'> ";
                                echo "<p>".$rowShowMissions['mission_name']."</p>";
                                
                                
                                //echo "<br>";
                                //echo "<p>".$rowShowMissions["Categorie_id"]."</p>";
                                echo "<br>";
                                //echo $ctd;
                                //echo "<p>".$rowShowMissions["mission_name"]."</p>";
                                //echo "<script>alert(".$rowShowMissions["mission_name"].")</script>";
                                //echo "<button class='btn'> add </button>";
                                //echo "</div>";
                                
                            }
                                
                        }else{
                            echo "No Missions";
                        }
                        echo "<br>";
                        //echo $i;
                        echo "<br>";
                        echo "</div>";
                    }
                    
                    //echo "</div>";
                ?>
            </div>
            <div class="CrudButtonsMissions">
                
                <input type="button" value="Add Categorie " id="AddCategorie"  style="width:auto;">
                <input type="button" value="Delete" id="DeleteCategorie" >
                <input type="button" value="Modify Category" id="ModifyCategory" onclick="document.getElementById('ModifyCat01').style.display='block'">
                <div id="id01" class="modal">
                
                    <form class="modal-content animate" action="" method="post">
                    
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                    

                        <div class="container">
                            <label><b>Categorie Name</b></label>
                            <input type="text" placeholder="Enter Categorie Name" name="catName" >


                            <label><b>Categorie Description</b></label>
                            <input type="text" placeholder="Enter Categorie Description" name="catDesc" >


                            <label><b>Categorie Date</b></label> <br>
                            <input type="date" placeholder="Enter Categorie Date" name="catDate" >
                            

                            
                                
                            <input type="submit" value="Create Categorie" name="submitCategorie">

                            <?php

                                if(isset($_POST['submitCategorie'])){
                                    $Categorie_name = $_POST['catName'];
                                    $Categorie_description = $_POST['catDesc'];
                                    $Categorie_date_set = $_POST['catDate'];
                                    if(empty($Categorie_name)){
                                        echo "<script>alert('Sorry the Category Name Is Required')</script>";
                                    }else if(empty($Categorie_description)){
                                        echo "<script>alert('Sorry the Category Description Is Required')</script>";
                                    }else if(empty($Categorie_date_set)){
                                        echo "<script>alert('Sorry the Category Date Is Required')</script>";
                                    }else{
                                        $sqlCreateCategory = "INSERT INTO `categories`(`Categorie_name`, `Categorie_date_set`, `Categorie_description`, `Categorie_idm`) VALUES ('$Categorie_name','$Categorie_date_set','$Categorie_description','$xidd')";
                                        if (mysqli_query($conn, $sqlCreateCategory)) {
                                            //echo "<script>alert('New record created successfully')</script>";
                                        } else {
                                            echo "Error: " . $sqlCreateCategory . "<br>" . mysqli_error($conn);
                                        }
                                    }
                                    
                                };
                            ?>
                        </div>
                        

                        <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                        
                    </form>
                </div>
                
                <div id="Del01" class="modal02">
                    <form action="" id="DelCat" method="post">
                    <label>Give me the id of categorie that you wanna delete</label>
                        <input type="number" name="IdDelValue" id="IdDelValue"> <br>
                        <input type="submit" value="DELETE" id="dele" name="dele"> <br>
                        <input type="button" value="CLOSE" id="cls" onclick="document.getElementById('Del01').style.display='none'">
                        <?php
                            if(isset($_POST['dele'])){
                                $iddel = $_POST['IdDelValue'];
                                //echo "<script>alert(".$iddel.")</script>";
                                if(empty($iddel)){
                                    echo "<script>alert('Sorry , The id mission is required')</script>";
                                }else{
                                    $sqlDeleteCat = "DELETE FROM `categories` WHERE `Categorie_id` = $iddel and Categorie_idm = $xidd";
                                    if (mysqli_query($conn, $sqlDeleteCat)) {
                                        echo "<script>alert('Record deleted successfully')</script>";
                                    } else {
                                        $errr = "Error deleting record: " . mysqli_error($conn);
                                        echo "<script>alert(".$errr.")</script>";
                                    }
                                }
                                
                            }
                        ?>
                    </form>                
                
                </div>
                <div id="ModifyCat01">
                   
                    <form action="UpdateCategory.php" id="MDCat" method="post">
                        <label>Give me the id of Categorie that you wanna modify</label>
                        <input type="number" name="idModCat" id="idModCat"> <br>
                        <input type="submit" value="Modify" id="Mod" name="Mod"> <br>
                        <input type="button" value="CLOSE" id="clsx" onclick="document.getElementById('ModifyCat01').style.display='none'"> <br>
                        
                    </form>
               
                </div>
                <div id="DelMissCat">
                    <form action=""method="post" id="DelMiss">
                        <label>Enter the id of the mission for be deleated from Categorie</label>
                        <input type="number" name="DelM" id="DelM"> <br>
                        <input type="submit" value="Delete" id="Mod" name="Delete"> <br>
                        <input type="button" value="CLOSE" id="clsx" onclick="document.getElementById('DelMissCat').style.display='none'"> <br>
                        
                    </form>
                    <?php
                        if(isset($_POST['Delete'])){
                            $MissId = $_POST['DelM'];
                            if(empty($MissId)){
                                echo "<script>alert('Sorry , The Missions ID  is required')</script>";
                            }else{
                                $sql = "UPDATE mission_data SET Mission_Category='none' WHERE mission_id = $MissId AND Categorie_idm = $xidd"; 

                                if (mysqli_query($conn, $sql)) {
                                    echo "Record updated successfully";
                                } else {
                                    echo "Error updating record: " . mysqli_error($conn);
                                }
                            }
                            
                        }
                    ?>
                </div>
             
            </div>
            
        </section>
        <aside class="CrudButtonsCategorie">
            <input type="button" value="Add Mission On  Categorie" id="AddCategorie" onclick="document.getElementById('missionCrudForm').style.display='block'">
            <input type="button" value="Delete Mission On  Categorie" id="DelCategorie" onclick="document.getElementById('DelMissCat').style.display='block'">
                
             
        </aside>
    </article>
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
        
    

    <script src="Categorie.js"></script>
</body>
</html>
<!--
    <label> Entrez le ID de la categorie ou vous vouleez ajouter la mission</label> <br>
    <input type="number" name="id_cat" id="id_cat" placeholder=" Entrez le ID de la categorie ou vous vouleez ajouter la mission"> <br>
-->