<?php
include("config/database.php");

$mobile = '';
$ok=false;

if(isset($_GET['mobile'])){
    try{
    //parameters
    $mobile = $_GET['mobile'];
    if($mobile == '' || !is_numeric($mobile) || strlen($mobile)<11 || strlen($mobile)>11 || substr($mobile, 0, 2) !== '09'){
        $ok=false;
    }else{
        $ok=true;
        $sql = mysqli_query($db , "insert into users(mobile) values('$mobile')");
    }
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
    // header('Location: ../index.php');


    }catch(PDOException $e){
        echo 'your error message is : ' . $e->getMessage();
    }

    $myfile = fopen("newfile.xls", "w") or die("Unable to open file!");
    $txt = $mobile;
    fwrite($myfile, $txt);
    fclose($myfile);
}

if ($ok==true){
    echo '1';
}else{
    echo '0';
}
?>