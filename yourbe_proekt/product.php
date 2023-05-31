<?php
include 'connect.php';

$sql="SELECT * FROM `products` where id={$_GET['id']}";
$result=mysqli_query($connect,$sql);
$product=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<title>DU Shop</title>
</head>

<body>
	<header>
	<nav class="navbar">
		<div class="logo">
			<a href="index.php">
			<h1>BraveShop</h1>
			</a>
		</div>
			<ul class="menu">
				<li><a href="#main" class="active">Bosh sahifa</a></li>
				<li><a href="#sec">Mahsulotlar</a></li>
				
				<li><a href="#about-me">Biz haqimizda</a></li>
				<li><a href="Sign_In/log-in.php"><i class="fa fa-sign-in"></i></a></li>
			</ul>

			<div class="menu-btn">
				<i class="fa fa-bars"></i>
			</div>
	</nav>
	</header>
   <section class="ui">

        <div class="product-one">
            <div class="product-img">
                <img src="./<?php echo $product['image']?>">

            </div>
            <div class="product-item">
                <h2 class="heading-1">ASOS DESIGN black skinny suit</h2>
                <p class="heading-2">ASOS DESIGN skinny suit jacket in black</p>
                <h3>Kiyim o'lchamlari</h3>
                <div class="razmer-suit">
                    <div class="razmer41">
                        <label for=razmer>46</label>
                        <input type="radio" name="razmer" >
                    </div>
                    <div class="razmer41">
                        <label for=razmer>48</label>
                        <input type="radio" name="razmer" >
                    </div>
                    <div class="razmer41">
                        <label for=razmer>50</label>
                        <input type="radio" name="razmer" >
                    </div>
                    <div class="razmer41">
                        <label for=razmer>54</label>
                        <input type="radio" name="razmer" >
                    </div>
                    <div class="razmer41">
                        <label for=razmer>56</label>
                        <input type="radio" name="razmer" >
                    </div>
                    <br>
                    <p>5 kunlik ijara <span>$21.01</span> </p>


                </div>
                <div class="p-price">
                    <p>narxi</p>
                    <h2 class=""><?php echo $product['price'] ?>$</h2>
                </div>

                <div class="p-btn">
                    <button class="buy-btn" type="submit">Sotib olish</button>
                </div>

            </div>
        </div>





   </section>




</body>



</html>