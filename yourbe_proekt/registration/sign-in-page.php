<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign-in.css">
    <title>Sign in</title>
</head>
<body>
    <div class="bg">
        <div class="sign">
            <form action="../Sign_In/register.php" method="post">
                <a href="../index.php">
                    <img src="./logom.png">    
                </a>
                <h1>Ro'xatdan o'tish</h1>
                <input type="text" name="name" placeholder="ismi" id="login">
                <input type="text" placeholder="Foydalanuvchi nomi" name="username"id="login"><br>
                <input type="password" placeholder="Parol" name="parol" id="pass"><br>
                <input type="password" placeholder="Parolni takrorlang" name="parol_confirm" id="pass"><br>
                

                <input type="submit" value="Ro'yxatdan o'tish" name="submit" id="sub">
            </form>
        </div>
    </div>  
</body>
</html>