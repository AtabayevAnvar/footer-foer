<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration/sign-in.css">
    <title>Sign in</title>
</head>
<body>
<div class="sign">
    <form action="" method="post" enctype="multipart/form-data">
        <a href="index.php">
            <img src="registration/logom.png" class="login">
        </a>
        <h1>Tizimga kirish</h1>

        <input type="text" placeholder="Title" name="title" id="login"><br>
        <input type="text" placeholder="description" name="description" id="login"><br>
        <input type="number" placeholder="price" name="price" id="login"><br>
        <input type="file" placeholder="image" name="image" id="login"><br>





        <button type="submit" name="submit" class="login-btn">Kirish</button>

    </form>
</div>
</body>
</html>
<?php
include  'connect.php';
if(isset($_POST['submit'])){
if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){
    $title=$_POST['title'];
    $description=$_POST['description'];
    $price=$_POST['price'];

    $targetDir = "images/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    // Faylning vaqtincha joylashgan manzili
    $tmpFilePath = $_FILES["image"]["tmp_name"];

    // Faylni yangi manzilga ko'chirish
    if (move_uploaded_file($tmpFilePath, $targetFile)) {
        echo "Rasm muvaffaqiyatli yuklandi: " . basename($_FILES["image"]["name"]);
    } else {
        echo "Rasm yuklashda xatolik yuz berdi.";
    }



        $sql = "INSERT INTO `products` (`title`,`description`,`price`, `image`) VALUES ('$title','$description','$price','$targetFile')";
        $result=mysqli_query($connect,$sql) or die(mysqli_error($connect));
        if($result){
           header('Location:index.php');
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

}