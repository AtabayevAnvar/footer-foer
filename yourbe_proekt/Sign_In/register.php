<?php
include "../connect.php";
$username=$_POST['username'];
$name=$_POST['name'];
$parol=md5($_POST['parol']);
$parol_confirm=md5($_POST['parol_confirm']);
if($parol==$parol_confirm){
    $sql="INSERT INTO `users`(`name`, `username`, `parol`) VALUES ('$name','$username','$parol')";
    $result=mysqli_query($connect,$sql);
    if($result){
//        header('Location:../index.php');
        echo "fuuu";
    }
    else {
        ?>
        <script>alert("Parol yoki login xato")</script>
        <?php
    }
}
else {
    ?>
    <script>alert("Parollar mos emas")</script>
    <?php
}

