<?php
include "../../../connect.php";
session_start();
//$idd = $row5["user_id"];
$xidd = $_SESSION['uid'];
//echo $xidd;
//echo $xidd;
//echo "hhhhhhhhhhh";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>My Profxxxxxxxxxxxile</title>
</head>
<body>
    <?php
        /*
        $sql = "SELECT * FROM user_data";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
            while($row = $result->fetch_assoc()) {
                echo $row["user_first_name"]."            ". $row["user_last_name"]. "<br>";
                
            }
        } else {
            echo "0 results";
        }
        $sqlx = "SELECT user_email FROM user_data";
        $resultx = mysqli_query($conn, $sqlx);

        if (mysqli_num_rows($resultx) > 0) {
        // output data of each row
            while($rowx = mysqli_fetch_assoc($resultx)) {
                echo "user_email: " . $rowx["user_email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        */
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
        
    ?>

</body>
</html>