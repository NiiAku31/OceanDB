<?php
	include('../dbcon.php');
	session_start();

	if (isset($_SESSION['uid']))
	{
		header('location: index.php');
	}
	else
	{

	}

	if(isset($_POST['add_to_cart']))
	{
		header('location: ../login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>OceanDB</title>
	<!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	<!-- CSS Styling -->
	<link rel="stylesheet" type="text/css" href="../css/menu_menu_styles.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<!-- Increament & Decreament JS -->
	<script type="text/javascript" src="../javascript/quantity_inc_dec.js"></script>

</head>
<style>
body{
	background-image: url("/OceanDB/dataimg/coral2.jpeg");
	
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
</style>
<body>
	<div class="main-menu sticky-top">
		
		<div class="inner-menu sticky-top">
			<a href="../index.php" style="float: left;">HOME</a>
			<a href="../login.php" style="float: right;">CART 0
			</a>
		</div>
	</div>

	<div class="container" style="padding-top: 70px;">
		<div class="row">
			<?php
			$query = "SELECT * FROM `menu`";
			$run = mysqli_query($conn, $query);

			if(mysqli_num_rows($run) < 1)
			{
				echo "No data found";
			}
			else
			{
				$qty = 0;

				while ($data = mysqli_fetch_assoc($run))
				{
					$qty++;
					?>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="card bg-dark text-light" style="margin: 0 auto 30px auto;">
  					<img class="card-img-top img-fluid " src="../dataimg/<?php echo $data['image']; ?>" alt="Card image cap">
  					<div class="card-body">
  			  			<div>
  			  				
  			  				<h5 class="card-title text-uppercase"><?php echo $data['name']; ?></h5>
  			  			</div>
    					<p class="card-text"><?php echo $data['detail']; ?></p>

						<div class="row">
							<div class="col-lg-5 col-md-5 col-5">
								<h5 style="font-family: 'Bree Serif', serif;"><?php echo "GHc. ".$data['price']; ?></h5>
							</div>
							<div class="col-lg-7 col-md-7 col-7">
								<form method="post" action="" class="form-inline">
									<input type='button' name='subtract' onclick=subtractQty(qty1); value='-' class="btn btn-danger"  style="border-radius: 50px; padding: 7px 16px">
									<input type='text' name='qty1' id='<?php echo $qty ?>' size="1" value="1" class="qty form-control d-inline text-center" style="width: 30%; margin: 0 5px; font-weight: 700; border-radius: 50px" readonnly/>
									<input type='button' name='add' onclick='javascript: document.getElementById("<?php echo $qty ?>").value++;' value='+' class="btn btn-success" style="border-radius: 50px; padding: 7px 14px;">





									<input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
							</div>
								<?php


								?>

    								<button class="btn btn-primary w-100 mt-4" id="cart" name="add_to_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> ADD TO CART</button>
    							</form>
    					</div>
  					</div>
				</div>
			</div>
			<?php
					}
					}
					?>
		</div>
	</div>

	<script src="bootstrap/jss/jquery.min.js"></script>
	<script src="bootstrap/jss/popper.min.js"></script>
	<script src="bootstrap/jss/bootstrap.min.js"></script>

	<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 13303971;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/13303971/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

<!--footer-->
<footer class="p-5 bg-dark text-white text-center postion-relative">
    <div class="container">
        <p class="lead">Copyright &copy; 2021  <span class="text-warning">OceanDB</span></p>
        <a href="" class="postion-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up circle h1"></i>
        </a>
    </div>
</footer>

</body>
</html>
