<?php
include "../../../connect.php";
session_start();
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=to_do_list_database;",$username,$password);
//$myname = "zack";
//echo "my name is"."   ".$myname;
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
if(isset($_POST['upload'])){
    $fileType = $_FILES["file"]["type"];
    $fileName = $_FILES["file"]["name"];
    $file = $_FILES["file"]["tmp_name"];
    //echo $fileName."<br>";
    $_SESSION['fname'] = $fileName;
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
    $_SESSION['user_id'] = $idd;

    move_uploaded_file($file,"files/".$fileName);
    $position = "files/".$fileName;
    $uploadFile = $database->prepare("INSERT INTO file_data(name,type,position,user_idf) VALUES(:name,:type,:position,$idd)");
    //$uploadFile = $database->prepare("INSERT INTO file_data(name,type,position) VALUES($fileName,$fileType,$position)");
    $uploadFile->bindParam("name",$fileName);
    $uploadFile->bindParam("type",$fileType);
    $uploadFile->bindParam("position",$position);
    if($uploadFile->execute()){
        echo 'تم رفع ملف بنجاح ';
        header("location:../../../home/home.php");
        //header("location:viwprofile.php");
        $let = $_SESSION["fname"];
        //echo $fileName."<br>";
        //echo $fileType."<br>";
        //echo $file."<br>";
        
        $query3 = "SELECT name,position FROM file_data where name='$let'";
        $res3 = mysqli_query($conn,$query3);

        if(mysqli_num_rows($res3)>0){
            $row = mysqli_fetch_assoc($res3);
            //printf ("%s \t %s \n", $row["name"], $row["position"]);
            $_SESSION['profilname'] = $row["name"];
            $_SESSION['profilpath'] = $row["position"];
            //echo "my name is"."   ".$myname;

            //echo' <img src="'$row["position"]'" alt="mmmmm"  width="300" height="200" />';
        }else{
            echo "hhhhhhhhhhhh";
        }
        
        //echo '<img src="'.$row["position"].'"alt="mmmmm"  width="300" height="200"/>';
        
    }else{
        echo 'فشل رفع ملف ';                        //. mysqli_error($con)
    }
    
    //echo $let;
}
//exit("hello world");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexprofile.css">
    <title>Document</title>
</head>
<body>
    
    <div class="cco">
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="file" accept="image/*,video/*,audio/*"required class="upload"  /> 
            <input type="submit" name="upload" value=' upload file' id='upf'/>
        </form>
        <div class="images">
            
        </div>
    </div>
   

   
</body>
</html>
<!--     <img src="" alt="zzzzzzzzzzz" id='profimage'>
 -->
