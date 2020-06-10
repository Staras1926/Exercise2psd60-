<!DOCTYPE html>
<html lang="zxx">
	<?php session_start(); ?>
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
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>
		
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
			<ul class="main-menu mobile-menu">
				<li class="active"><a href="./index.php">Home</a></li>
				<li><a href="./club.html">Club</a></li>
				<li><a href="./schedule.html">Schedule</a></li>
				<li><a href="./result.html">Results</a></li>
				<li><a href="#">Pages</a>
					<ul class="dropdown">
						<li><a href="./blog.html">Blog</a></li>
						<li><a href="./blog-details.html">Blog Details</a></li>
						<li><a href="#">Schedule</a></li>
						<li><a href="#">Results</a></li>
					
					</ul>
				</li>
				
				<li><a href="./contact.php">Contact Us</a></li>
					<?php if(isset($_SESSION['role']) && $_SESSION['role']="3" ){ ?>
											<li>
												<a href="profile.php">Profile</a>												
											</li>
										<?php } ?>
			</ul>
			<div id="mobile-menu-wrap"></div>
		</div>
		<!-- Offcanvas Menu Section End -->
		
		
		
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
								<a href="./index.html"><img src="img/barca logo.jpg" alt=""></a>
							</div>
						</div>
						<div class="col-lg-10">
							<div class="nav-menu">
								<ul class="main-menu">
									<li class="active"><a href="./index.php">Home</a></li>
									<li><a href="./club.html">Club</a></li>
									<li><a href="./schedule.html">Schedule</a></li>
									<li><a href="./result.html">Results</a></li>
									
									<li><a href="#">Pages</a>
										<ul class="dropdown">
											<li><a href="./blog.html">Blog</a></li>
											<li><a href="./blog-details.html">Blog Details</a></li>
											<li><a href="#">Schedule</a></li>
											<li><a href="#">Results</a></li>
											
										</ul>
									</li>
									<li><a href="./contact.php">Contact Us</a></li>
								<?php if(isset($_SESSION['role']) && $_SESSION['role']="3" ){ ?>
											<li>
												<a href="profile.php">Profile</a>												
											</li>
										<?php } ?>
								</ul>
								<div class="nm-right search-switch">
									<i class="fa fa-search"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="canvas-open">
						<i class="fa fa-bars"></i>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->
		
		<!-- Hero Section Begin -->
		<section class="hero-section set-bg" data-setbg="img/hero/campnou.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hs-item">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="hs-text">
											
											<h1 style="font-family:courier; color:white;">MES QUE UN CLUB</h1>
											<h4>30 september 2020 / 9:00 GMT+2</h4>
											<h2>Barcelona VS Liverpool in Barcelona Stadium</h2>
											<a href="#" class="primary-btn">More Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Hero Section End -->
		
		<!-- Trending News Section Begin -->
		<div class="trending-news-section">
			<div class="container">
				<div class="tn-title"><i class="fa fa-caret-right"></i> Trending News</div>
				<div class="news-slider owl-carousel">
					<div class="nt-item">Barca goes on for the first place of the cup</div>
					<div class="nt-item">Griezman is on fire</div>
				</div>
			</div>
		</div>
		<!-- Trending News Section End -->
		
		<!-- Match Section Begin -->
		<section class="match-section set-bg" data-setbg="img/match/match-bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="ms-content">
							<h4>Next Match</h4>
							<div class="mc-table">
								<table>
									<tbody>
										<tr>
											<td class="left-team">
												<img src="img/schedule/mallorca.jpg" alt="">
												<h6>Mallorca</h6>
											</td>
											<td class="mt-content">
												<div class="mc-op">Mallorca vs Barca</div>
												<h4>VS</h4>
												<div class="mc-op">29 june 2020</div>
											</td>
											<td class="right-team">
												<img src="img/barca logo.jpg" alt="">
												<h6>Barca</h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mc-table">
								<table>
									<tbody>
										<tr>
											<td class="left-team">
												<img src="img/barca logo.jpg" alt="">
												<h6>Barca</h6>
											</td>
											<td class="mt-content">
												<div class="mc-op">Barca vs Napoli</div>
												<h4>VS</h4>
												<div class="mc-op">15 August 2020</div>
											</td>
											<td class="right-team">
												<img src="img/schedule/napoli.jpg" alt="">
												<h6>Napoli</h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mc-table">
								<table>
									<tbody>
										<tr>
											<td class="left-team">
												<img src="img/barca logo.jpg" alt="">
												<h6>Barca</h6>
											</td>
											<td class="mt-content">
												<div class="mc-op">Barca vs Leganes</div>
												<h4>VS</h4>
												<div class="mc-op">15 September 2020</div>
											</td>
											<td class="right-team">
												<img src="img/schedule/leganes.jpg" alt="">
												<h6>Leganes</h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ms-content">
							<h4>Recent Results</h4>
							<div class="mc-table">
								<table>
									<tbody>
										<tr>
											<td class="left-team">
												<img src="img/flag/betis logo.png" alt="">
												<h6>Real Betis</h6>
											</td>
											<td class="mt-content">
												<div class="mc-op">Real Betis vs Barca</div>
												<h4>2 : 4</h4>
												<div class="mc-op">15 May 2020</div>
											</td>
											<td class="right-team">
												<img src="img/Barca logo.jpg" alt="">
												<h6>Barca</h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mc-table">
								<table>
									<tbody>
										<tr>
											<td class="left-team">
												<img src="img/barca logo.jpg" alt="">
												<h6>Barca</h6>
											</td>
											<td class="mt-content">
												<div class="mc-op">Barca vs Real Madrit</div>
												<h4>0 : 1</h4>
												<div class="mc-op">15 March 2020</div>
											</td>
											<td class="right-team">
												<img src="img/schedule/real.png" alt="">
												<h6>Real Madrit</h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mc-table">
								<table>
									<tbody>
										<tr>
											<td class="left-team">
												<img src="img/barca logo.jpg" alt="">
												<h6>Barca</h6>
											</td>
											<td class="mt-content">
												<div class="mc-op">Barca vs Atlentico Madrit</div>
												<h4>1 : 2</h4>
												<div class="mc-op">15 February 2019</div>
											</td>
											<td class="right-team">
												<img src="img/schedule/atlentico.png" alt="">
												<h6 class="mi-right">Atlentico Madrit </h6>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Match Section End -->
		
		<!-- Soccer Section Begin -->
		<section class="soccer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 p-0">
						<div class="section-title">
							<h3>Soccer <span>News</span></h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="soccer-item set-bg" data-setbg="img/soccer/soccer-1.jpg">
							<div class="si-tag">Soccer</div>
							<div class="si-text">
								<h5><a href="#">We are the Champions</a></h5>
								<ul>
									<li><i class="fa fa-calendar"></i> May 19, 2019</li>
									<li><i class="fa fa-edit"></i> 2000 Comment</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="soccer-item set-bg" data-setbg="img/soccer/soccer-2.jpg">
							<div class="si-tag">Basketball</div>
							<div class="si-text">
								<h5><a href="#">3points shouters</a></h5>
								<ul>
									<li><i class="fa fa-calendar"></i> May 19, 2019</li>
									<li><i class="fa fa-edit"></i> 3 Comment</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="soccer-item set-bg" data-setbg="img/soccer/soccer-3.jpg">
							<div class="si-tag">Soccer</div>
							<div class="si-text">
								<h5><a href="#">Astronomy Binoculars A Great Alternative</a></h5>
								<ul>
									<li><i class="fa fa-calendar"></i> May 19, 2019</li>
									<li><i class="fa fa-edit"></i> 3 Comment</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="soccer-item set-bg" data-setbg="img/soccer/soccer-4.jpg">
							<div class="si-tag">Soccer</div>
							<div class="si-text">
								<h5><a href="#">Decorate For Less With Art Posters</a></h5>
								<ul>
									<li><i class="fa fa-calendar"></i> May 19, 2019</li>
									<li><i class="fa fa-edit"></i> 3 Comment</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Soccer Section End -->
		
		<!-- Latest Section Begin -->
		<section class="latest-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="section-title latest-title">
							<h3>Latest <span>News</span></h3>
							<ul>
								<li>All</li>
								<li>Football</li>
								<li>Soccer</li>
								<li>Basketball</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="news-item left-news">
									<div class="ni-pic set-bg" data-setbg="img/news/latest-b.jpg">
										<div class="ni-tag">Soccer</div>
									</div>
									<div class="ni-text">
										<h4><a href="#">barcelona goes for champions leugue</a></h4>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
										<p>Relive the 2011 Champions League semi-final match against Real Madrid at the Bernabéu. As Messi acknowledged in a previous interview, it's his favourite Barça match. Do not miss it!</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-1.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">How To Quit Smoking Using Zyban</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-2.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">Decorate For Less With Art Posters</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-3.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">Home Business Advertising Ideas</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-4.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">Lasik Doesn T Stop Your Eyes From Aging</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="section-title">
							<h3>Club <span>Ranking</span></h3>
						</div>
						<div class="points-table">
							<table>
								<thead>
									<tr>
										<th class="th-o">Pos</th>
										<th>Team</th>
										<th class="th-o">P</th>
										<th class="th-o">W</th>
										<th class="th-o">L</th>
										<th class="th-o">PTS</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td class="team-name">
											<img src="img/barca logo.jpg" alt="">
											<span>Barcelona</span>
										</td>
										<td>22</td>
										<td>2</td>
										<td>5</td>
										<td>72</td>
									</tr>
									<tr>
										<td>2</td>
										<td class="team-name">
											<img src="img/schedule/mallorca.jpg" alt="">
											<span>Mallorca</span>
										</td>
										<td>20</td>
										<td>3</td>
										<td>4</td>
										<td>71</td>
									</tr>
									<tr>
										<td>3</td>
										<td class="team-name">
											<img src="img/schedule/napoli.jpg" alt="">
											<span>Napoli</span>
										</td>
										<td>18</td>
										<td>4</td>
										<td>4</td>
										<td>68</td>
									</tr>
									<tr>
										<td>4</td>
										<td class="team-name">
											<img src="img/schedule/leganes.jpg" alt="">
											<span>Leganes</span>
										</td>
										<td>17</td>
										<td>2</td>
										<td>7</td>
										<td>64</td>
									</tr>
									
									
									
									
								</tbody>
							</table>
							<a href="#" class="p-all">View All</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Latest Section End -->
		
		<!-- Video Section Begin -->
		<section class="video-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h3>Hot <span>Videos</span></h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="video-slider owl-carousel">
						<div class="col-lg-3">
							<div class="video-item set-bg" data-setbg="img/videos/video-1.jpg">
								<div class="vi-title">
									<h5>A World Of Infinite Opportunities</h5>
								</div>
								<a href="https://www.youtube.com/watch?v=dhYOPzcsbGM" class="play-btn video-popup"><img
								src="img/videos/play.png" alt=""></a>
								<div class="vi-time">11:13</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="video-item set-bg" data-setbg="img/videos/video-2.jpg">
								<div class="vi-title">
									<h5>Video Games Playing With Imagination</h5>
								</div>
								<a href="https://www.youtube.com/watch?v=dhYOPzcsbGM" class="play-btn video-popup"><img
								src="img/videos/play.png" alt=""></a>
								<div class="vi-time">11:13</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="video-item set-bg" data-setbg="img/videos/video-3.jpg">
								<div class="vi-title">
									<h5>Home Audio Recording For Everyone</h5>
								</div>
								<a href="https://www.youtube.com/watch?v=dhYOPzcsbGM" class="play-btn video-popup"><img
								src="img/videos/play.png" alt=""></a>
								<div class="vi-time">11:13</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="video-item set-bg" data-setbg="img/videos/video-4.jpg">
								<div class="vi-title">
									<h5>What If They Let You Run The Hubble</h5>
								</div>
								<a href="https://www.youtube.com/watch?v=dhYOPzcsbGM" class="play-btn video-popup"><img
								src="img/videos/play.png" alt=""></a>
								<div class="vi-time">11:13</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="video-item set-bg" data-setbg="img/videos/video-4.jpg">
								<div class="vi-title">
									<h5>What If They Let You Run The Hubble</h5>
								</div>
								<a href="https://www.youtube.com/watch?v=dhYOPzcsbGM" class="play-btn video-popup"><img
								src="img/videos/play.png" alt=""></a>
								<div class="vi-time">11:13</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Video Section End -->
		
		<!-- Popular News Section Begin -->
		<section class="popular-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="section-title">
							<h3>Popular <span>Post</span></h3>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="news-item popular-item set-bg" data-setbg="img/news/popular-b.jpg">
									<div class="ni-tag tenis">Tenis</div>
									<div class="ni-text">
										<h5><a href="#">England reach World Cup last 16 with hard-fought win over
										Argentina</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-1.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">There’s a great history of the winner Sandia</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-2.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">It’ll be a tough game and a physical game</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-3.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">If we don’t score we can’t get frustrated</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="news-item popular-item set-bg" data-setbg="img/news/popular-b.jpg">
									<div class="ni-tag football">Football</div>
									<div class="ni-text">
										<h5><a href="#">We are playing history and Argentina at the World Cup, says Phil
										Neville</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-5.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">Le Havre does have a growing fan club</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-6.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">It will be hard to break them down</a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
								<div class="news-item">
									<div class="ni-pic">
										<img src="img/news/ln-7.jpg" alt="">
									</div>
									<div class="ni-text">
										<h5><a href="#">We’ve never seen them as organised </a></h5>
										<ul>
											<li><i class="fa fa-calendar"></i> May 19, 2019</li>
											<li><i class="fa fa-edit"></i> 3 Comment</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="section-title">
							<h3>Follow <span>Us</span></h3>
						</div>
						<div class="follow-links">
							<ul>
								<li class="facebook">
									<i class="fa fa-facebook"></i>
									<div class="fl-name">Facebook</div>
									<span class="fl-fan">2.530 Fans</span>
								</li>
								<li class="twitter">
									<i class="fa fa-twitter"></i>
									<div class="fl-name">Twitter</div>
									<span class="fl-fan">2.046 Fans</span>
								</li>
								<li class="google">
									<i class="fa fa-google"></i>
									<div class="fl-name">Google</div>
									<span class="fl-fan">1.170 Fans</span>
								</li>
							</ul>
						</div>
						<div class="vote-option set-bg" data-setbg="img/news/vote-bg.jpg">
							<div class="vo-text">
								<h5>In your opinion, which team will win this year</h5>
								<div class="vt-item">
									<input type="radio" name="like-team" id="one">
									<label for="one">Barcelona</label>
								</div>
								<div class="vt-item">
									<input type="radio" name="like-team" id="two">
									<label for="two">Real Madrid</label>
								</div>
								<div class="vt-item">
									<input type="radio" name="like-team" id="three">
									<label for="three">Real Betis</label>
								</div>
								<div class="vt-item">
									<input type="radio" name="like-team" id="four">
									<label for="four">Mallorca</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Popular News Section End -->
		
		<!-- Footer Section Begin -->
		<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="fs-logo">
							<div class="logo">
								<a href="./index.html"><img src="img/logo.png" alt=""></a>
							</div>
							<ul>
								<li><i class="fa fa-envelope"></i> kplats620@gmail.com</li>
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
					<div class="col-lg-4 col-md-6 offset-lg-1">
						<div class="fs-widget">
							<h4>Top Club</h4>
							<ul class="fw-links">
								<li><a href="#">Brazil</a></li>
								<li><a href="#">Germany</a></li>
								<li><a href="#">Italy</a></li>
								<li><a href="#">Argentina</a></li>
								<li><a href="#">France</a></li>
							</ul>
							<ul class="fw-links">
								<li><a href="#">England</a></li>
								<li><a href="#">Netherlands</a></li>
								<li><a href="#">Hungary</a></li>
								<li><a href="#">Croatia</a></li>
								<li><a href="#">Poland</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="fs-widget">
							<h4>Recent News</h4>
							
							<div class="fw-item">
								<h5><a href="#">We are the champions</a></h5>
								<ul>
									<li><i class="fa fa-calendar"></i> May 19, 2019</li>
									<li><i class="fa fa-edit"></i> 3 Comment</li>
								</ul>
							</div>
							<div class="fw-item">
								<h5><a href="#">Sri Lanka v Australia: Cricket World Cup 2019 – live!</a></h5>
								<ul>
									<li><i class="fa fa-calendar"></i> May 19, 2019</li>
									<li><i class="fa fa-edit"></i> 3 Comment</li>
								</ul>
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
		<!-- Footer Section End -->
		
		<!-- Search model Begin -->
		<div class="search-model">
			<div class="h-100 d-flex align-items-center justify-content-center">
				<div class="search-close-switch"><i class="fa fa-close"></i></div>
				<form class="search-model-form">
					<input type="text" id="search-input" placeholder="Search here.....">
				</form>
			</div>
		</div>
		<!-- Search model end -->
		
		<!-- Js Plugins -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.slicknav.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	
</html>