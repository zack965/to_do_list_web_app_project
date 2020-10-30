<?php
include "../../../connect.php";
session_start();
//$idd = $row5["user_id"];
$xidd = $_SESSION['uid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../font awsomme/css/all.min.css">
    <link rel="stylesheet" href="UpdateCategory.css">
    <title>Update Categorie</title>
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



    <?php
    
    
    //$CatId = mysqli_real_escape_string($conn,$_POST['idModCat']) ;
    //echo $CatId;
 
    if(isset($_POST['Mod'])){
        $idModCat = $_POST['idModCat'];
        $sql = "SELECT * FROM `categories` where `Categorie_id` = $idModCat ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                //header("location:UpdateCategory.php");
                //echo "Categorie_id: " . $row["Categorie_id"]."<br>";
                $_SESSION['Categorie_id'] = $row["Categorie_id"];
                //header("Location:UpdateCategory.php");

                  //profile
            }
        } else {
            echo "0 results";
        }
    }
    /*
    echo "<br>";
    echo "hello";
    echo "<br>";
    */
    $CatId = $_SESSION['Categorie_id'];
    
    //echo $CatId;


    ?>
    
    <form action="" method="post" id="f1">
        <label><b>Categorie Name</b></label> <br>
        <input type="text" placeholder="Enter Categorie Name" name="catName"  value="
        <?php
            //echo $CatId;
            $sql1 = "SELECT * FROM `categories` where `Categorie_id` = '$CatId' ";
            $result1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($result1) > 0) {
            // output data of each row
                while($row1 = mysqli_fetch_assoc($result1)) {
                    echo $row1["Categorie_name"];
                }
            } else {
                echo "0 results";
            }
        ?>
        "> <br> 


        <label><b>Categorie Description</b></label> <br>
        <input type="text" placeholder="Enter Categorie Description" name="catDesc"  value="
        <?php
            //echo $CatId;
            $sql2 = "SELECT * FROM `categories` where `Categorie_id` = '$CatId' ";
            $res2 = mysqli_query($conn, $sql2);

            if (mysqli_num_rows($res2) > 0) {
            // output data of each row
                while($row2 = mysqli_fetch_assoc($res2)) {
                    echo $row2["Categorie_description"];
                }
            } else {
                echo "0 results";
            }
        ?>
        "> <br> 


        <label><b>Categorie Date</b></label> <br>
        <input type="date" placeholder="Enter Categorie Date" name="catDate"  value=
        <?php
            //echo $CatId;
            $sql3 = "SELECT * FROM `categories` where `Categorie_id` = '$CatId' ";
            $res3 = mysqli_query($conn, $sql3);

            if (mysqli_num_rows($res3) > 0) {
            // output data of each row
                while($row3 = mysqli_fetch_assoc($res3)) {
                    echo $row3["Categorie_date_set"];
                }
            } else {
                echo "0 results";
            }
        ?>
        > <br> 
                                

                                
                                    
        <input type="submit" value="Reset Data Categorie" name="ResetCategorie">
        <?php
            if(isset($_POST['ResetCategorie'])){
                $catName = $_POST['catName'];
                $Categorie_description = $_POST['catDesc'];
                $Categorie_date_set = $_POST['catDate'];
                echo "<br>";
                //echo $catName;
                echo "<br>";
                //echo $Categorie_description;
                echo "<br>";
                //echo $Categorie_date_set;
                echo "<br>";
                if(empty($catName)){
                    echo "<script>alert('Sorry , The Category Name is required')</script>";
                }elseif (empty($Categorie_description)) {
                    echo "<script>alert('Sorry , The Category Description is required')</script>";
                }elseif(empty($Categorie_date_set)){
                    echo "<script>alert('Sorry , The Category Date is required')</script>";
                }else{
                    $ssql = "UPDATE `categories` SET Categorie_name= '$catName',Categorie_description='$Categorie_description',Categorie_date_set = '$Categorie_date_set' where `Categorie_id` = '$CatId' and Categorie_idm = $xidd"; 
                    if (mysqli_query($conn, $ssql)) {
                        echo "Record updated successfully";
                        header("location:Categorie.php");
                    } else {
                        echo "Error updating record: " . mysqli_error($conn);
                    }
                }
                
                  
            }
        ?>
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