<?php
include  '../connect.php';
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
           header('Location:../index.php');
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

