<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../registration/sign-in.css">
    <title>Sign in</title>
</head>
<body>
        <div class="sign">
            <form action="login.php" method="post">
                <a href="../index.php">
                    <img src="../registration/logom.png" >    
                </a>
                <h1>Tizimga kirish</h1>
               
                <input type="text" placeholder="Foydalanuvchi nomi" name="username" id="login"><br>
                <input type="password" placeholder="Parol" name="parol" id="pass"><br>
               
                <a href="../registration/sign-in-page.php" class="login-text">Ro'yxatdan o'tish</a>

                <button type="submit" name="submit" class="login-btn">Kirish</button>
                
            </form>
        </div> 
</body>
</html>