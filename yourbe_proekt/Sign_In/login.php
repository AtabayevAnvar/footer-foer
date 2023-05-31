<?php
include '../connect.php';
$username=$_POST['username'];
$parol=md5($_POST['parol']);
//var_dump($username,$parol);
$sql="SELECT * FROM `users` WHERE `username`='{$username}' AND `parol`='{$parol}'";
$result=mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0){
    $user=mysqli_fetch_assoc($result);

    header('Location:../index.php');
}
else {
    ?>
    <script>alert("Parol yoki login xato")</script>
    <?php
}