<html>
	<?php session_start();?>
<head>
		<meta charset="UTF-8">
		<meta name="description" content="Specer Template">
		<meta name="keywords" content="Specer, unica, creative, html">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Barcelona Official page</title>
		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
		
		<!-- Css Styles -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
		<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>
	
	<body>
		
		<!-- Offcanvas Menu Section Begin -->
		<div class="offcanvas-menu-overlay"></div>
		<div class="offcanvas-menu-wrapper">
			<div class="canvas-close">
				<i class="fa fa-close"></i>
			</div>
			<div class="search-btn search-switch">
				<i class="fa fa-search"></i>
			</div>
			<div class="header__top--canvas">
				
				<div class="ht-links">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-vimeo"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
			<div id="mobile-menu-wrap"></div>
		</div>

		
		<!-- Header Section Begin -->
		<header class="header-section">
			<div class="header__top">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-6">
							<div class="ht-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vimeo"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header__nav">
				<div class="container">
					<div class="row">
						<div class="col-lg-2">
							<div class="logo">
					<img src="img/barca logo.jpg" alt=""></a>
							</div>
						</div>
						
					<div class="canvas-open">
						<i class="fa fa-bars"></i>
					</div>
				
				</div>
			</div>
		</header>
		
			<div class="card">
				<?php
						
						$conn=mysqli_connect('localhost','root','','icsd17093');
						$user=$_SESSION['username'];
						
						if($_SESSION['role']=='2'){
							echo "<h4>Fan Profile:".$_SESSION['username']."</h4>";
							echo "<img src='img/hero/fans.jpg' style='width:100%'/>";						
							
							
						} 
						else if($_SESSION['role']=='3')
						{
						
							echo "<h4>Player Profile:".$_SESSION['username']."</h4>";
							echo "<button>Add Profile Picture</button>";
							
							
						}
						
						
					?>
					</div>
		
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>

      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
	  
	  <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="fs-logo">
							<div class="logo">
								<a href="./index.html"><img src="img/logo.png" alt=""></a>
							</div>
							<ul>
								<li><i class="fa fa-envelope"></i> icsd.com</li>
								<li><i class="fa fa-copy"></i> +(12) 345 6789 10</li>
								<li><i class="fa fa-thumb-tack"></i> karlovasi Samos Greece</li>
							</ul>
							<div class="fs-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-tumblr"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="container">
				<div class="copyright-option">
					<div class="row">
						<div class="col-lg-12">
							<div class="co-text"><p>
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="http://www.icsd.aegean.gr/icsd/" target="_blank">icsd</a>
							</p></div>
							<div class="co-widget">
								<ul>
									<li><a href="#">Copyright notification</a></li>
									<li><a href="#">Terms of Use</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</body>
	
	</html>