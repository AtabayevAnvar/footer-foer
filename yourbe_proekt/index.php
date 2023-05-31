<?php
include  'connect.php';
$sql="SELECT * FROM `products`";
$result=mysqli_query($connect,$sql) or die(mysqli_error($connect));


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<title>BraveShop</title>
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
				<li><a href="Sign_In/log-in.php" title="Kirish"><i class="fa fa-sign-in"></i></a></li>
			</ul>

			<div class="menu-btn">
				<i class="fa fa-bars"></i>
			</div>
	</nav>
	</header>

	<section class="content" id="main">
		<h1>New Arrival For Men </h1>
		<p>Get The Best Man Fashion Arrivals</p>
		<a href="#sec">
				<button>Harid qilish</button>		
		</a>
	
	</section>	

	<h1 class="pheading">Eng so'ngi mahsulotlarimiz</h1>
    <div style="text-align: right;margin-right: 2%">
        <a href="products.php" style="background-color: green;color: white;text-decoration: none;padding: 15px;border-radius: 10%" > Mahsulot qoshish</a>
    </div>
	<section class="sec" id="sec">
		<div class="products">
			
			<!-- Card boshlashi -->
			<?php
while($row=mysqli_fetch_assoc($result)){


?>
<div class="card">
				<div class="img"> <img src="<?php echo $row['image']?>"></div>
				<div class="dosc"><?php echo $row['description'];?></div>
				<div class="title"><?php echo $row['title'];?></div>
				 <div class="box">
					<div class="price"><?php echo $row['price'];?>$</div>
					<a href="product.php?id=<?php echo $row['id']?>">
					<button href="" class="btn">Sotib olish</button>
					</a>
			 	 </div>	
			</div>
<?php }?>
			

		</div>
	</section>

	<footer id="about-me">
		<div class="footer-content">
			<h3>BraveShop</h3>
			<p> Ushbu Vebsayt Erkaklar uchun kastyum shim ijarasini onlayn ko'rinishi uchun ishlandi </p>
			<ul class="socials">
				<li><a href="https://facebook.com" title="FaceBook" target="_blank"> <i id="face" class="fab fa-facebook" ></i></a>  </li>
				<li><a href="https://github.com/AtabayevAnvar/footer-foer" title="GitHub" target="_blank"> <i id="github" class="fab fa-github"></i></a>     </li>
				<li><a href="https://www.instagram.com/anvarbekraxatovich/" title="Instagram" target="_blank"> <i id="insta" class="fab fa-instagram"></i></a>  </li>
				<li><a href="https://www.youtube.com/channel/UC6HzJX3DEHPRrExNZyXr7lQ" title="YouTube" target="_blank"> <i id="yutub" class="fab fa-youtube"></i></a>    </li>
				<li><a href="https://t.me/Anvar_Atabayev" title="Telegram" target="_blank"> <i id="tg" class="fab fa-telegram"></i></a>   </li>
				
			</ul>
		</div>
		<div class="footer-bottom">
			<p>copyright &copy; 2023 codePacity. designed by <span>Atabayev</span></p>
		</div>
	</footer>

	<!-- jQuery  -->
		<script >
			$(".menu-btn").click(function() {
				$(".navbar .menu").toggleClass("active");
				$(".menu-btn i").toggleClass("active");
			});
		</script>

</body>
</html>