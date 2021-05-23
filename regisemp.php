<?php include("connec.php");?>
<?php

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

    
     //$id_line = $_POST["id_line"];
     $timestamp =date("Y-m-d H:i:s");
     $first_name = $_POST["first_name"];
     $last_name = $_POST["last_name"]; 
     $birthday = date("Y-m-d ");  	 
     $gender = $_POST["gender"];    
     $phone = $_POST["phone"];	 

     
     $str = "INSERT INTO customer (timeD,name_cus,surname_cus,birthday,gender,tel_cus) 
     VALUES ('$timestamp','$first_name','$last_name','$birthday','$gender','$phone')";
    
     if ($conn->query($str) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>
