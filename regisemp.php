<?php include("connec.php");

if (isset($_POST['line_id'])) {
    
    $line_id = $_POST['line_id'];
} else {
    $line_id = null;
}
if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    //echo $first_name;
} else {
    $first_name = null;
}
if (isset($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
     //echo $last_name;
} else {
    $last_name = null;
}
if (isset($_POST['birthday'])) {
    $birthday = $_POST['birthday'];
} else {
    $birthday = null;
}

if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
     //echo $gender;
} else {
    $gender = null;
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
} else {
    $phone = null;
}
$timestamp =date("Y-m-d H:i:s");

    

     

    $sql = "SELECT count(*)  FROM customer where line_id = '$line_id'";
    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($res);
    if ($data[0] != 0) {
        echo 2;
    }else{
     $str = "INSERT INTO customer (line_id,name_cus,surname_cus,birthday,gender,tel_cus,timeD) 
     VALUES ('$line_id','$first_name','$last_name','$birthday','$gender','$phone','$timestamp')";
    
     if ($conn->query($str) === TRUE) {
        echo 0;
      } else {
        echo 1;
      }
    }
