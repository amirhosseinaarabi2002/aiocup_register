<?php
require_once('../config/loader.php');

if(isset($_POST['signin'])){
    try{
    //parameters
    $mobile = $_POST['mobile'];

    $sql = mysqli_query($db , "insert into users(mobile) values('$mobile')");
    // echo "<meta http-equiv='refresh' content='0;url=../index.php'>";

    // //sql
    // $query = 'INSERT INTO users SET mobile=?';

    // //stmt
    // $stmt = $conn->prepare($query);

    // //bind
    // $stmt->bindvalue(1, $mobile);

    // //exe
    // $stmt->execute();

    // // echo "created account";
    header('Location: ../index.php');

    }catch(PDOException $e){
        echo 'your error message is : ' . $e->getMessage();
    }

    $myfile = fopen("newfile.xls", "w") or die("Unable to open file!");
    $txt = $mobile;
    fwrite($myfile, $txt);
    fclose($myfile);
}