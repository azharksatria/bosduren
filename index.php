<?php
session_start();
include'master/sweetalert/sweetalert.php';
include'master/config/koneksi.php';
$query= new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bossku Durian</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
 <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/JiSlider.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">
</head>
	
<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">
		   
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<h1><a class="navbar-brand" href="index.html"><i class="fa fa-diamond" aria-hidden="true"></i> Boss Duren</a></h1>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html" class="effect-3">Home</a></li>
							<li><a href="kupas" class="effect-3">Durian Kupas</a></li>
							<li><a href="portfolio.html" class="effect-3">Pancake Durian</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Durian Utuh <b class="caret"></b></a>
								<!-- <ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul> -->
							</li>
							<li><a href="mail.html" class="effect-3">Daging Durian</a></li>
						</ul>
					</nav>

				</div>
			</nav>	
<div class="clearfix"> </div> 
		</div>
</div>
<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Ciptakan Pesta Raya Durian  </h3>
									 <p>Menerima Pesanan Durian Dalam Partai Besar</p>
										<div class="more">
									<!-- <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
									</div>
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Durian Siap Saji</h3>
									 <p>Durian Dalam Kemasan Dengan Kualitas Terbaik</p>
										<div class="more">
									<!-- <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
									</div>
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								
									<h3>Pancake Untuk Perayan Hari Istimewa </h3>
									 <p>Pesan Pancake, Kami Antar ke Tempat Anda </p>
									<div class="more">
									<!-- <a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> -->
									</div>
								</div>	
								
							</div>
						</div>
					</li>

			</ul>
		</div>
      </div>

<!-- //banner -->

		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<div class="signin-form profile">
			<div class="login-form">
				<form action="#" method="post">
					<input type="text" name="name" placeholder="Username" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="text" name="subject" placeholder="Subject" required="">
					<textarea name="Comments" placeholder="Message" required=""></textarea>
					<input type="submit" value="SUBMIT">
					</form>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
													<!-- //Modal2 -->	
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<h5>Consultancy</h5>
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							e.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- about -->
<!-- 	<div class="inner_main_agile_section">
		<div class="container">
		<h6>What makes us different</h6>
				<h3 class="w3l_header w3_agileits_header">About <span>Us</span></h3>
		<p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>
			
			<div class="agile_inner_grids">
								
				<div class="col-md-6 w3_agileits_about_grid_left">
					<p>Duis turpis arcu, dictum eu tincidunt id, congue vel urna. Quisque posuere, 
						ipsum eu faucibus cursus, ex tortor elementum leo, eget varius lorem quam a nisl. 
						Mauris ut enim sed tortor auctor luctus at vitae est.<span>Duis dignissim auctor rhoncus. 
						Curabitur diam lorem, ultricies eu pellentesque sed, elementum sodales urna. 
						Pellentesque molestie maximus nisl at ultrices.</span> </p>
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Marketing</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Professional approach</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Production</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Effective Solutions</li>
					</ul>
				</div>
				<div class="col-md-6 w3_agileits_about_grid_right">
					
							  <div id="chart">
							  <ul id="numbers">
								<li><span>100%</span></li>
								<li><span>90%</span></li>
								<li><span>80%</span></li>
								<li><span>70%</span></li>
								<li><span>60%</span></li>
								<li><span>50%</span></li>
								<li><span>40%</span></li>
								<li><span>30%</span></li>
								<li><span>20%</span></li>
								<li><span>10%</span></li>
								<li><span>0%</span></li>
							  </ul>
							  <ul id="bars">
								<li><div data-percentage="56" class="bar"></div><span>Option 1</span></li>
								<li><div data-percentage="33" class="bar"></div><span>Option 2</span></li>
								<li><div data-percentage="54" class="bar"></div><span>Option 3</span></li>
								<li><div data-percentage="94" class="bar"></div><span>Option 4</span></li>
								<li><div data-percentage="44" class="bar"></div><span>Option 5</span></li>
								<li><div data-percentage="23" class="bar"></div><span>Option 6</span></li>
							  </ul>
							</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
<!-- //about -->
	
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<h6>Bos Duren Medan</h6>
			<h2> <span class="fixed_w3">Durian</span> Khas Dari Kota <span class="fixed_w3">Medan</span> </h2>
			<p class="sub_para_agile">Kami Tak Akan Kalah Dalam Hal Rasa dan Harga</p>
			<div class="agileits_banner_bottom_grids">
				<?php foreach ($query->tampil_gallery_kiri() as $row) {?>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="master/root/images/<?php echo $row['gambar'];?>" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4></h4>
						   <a href="<?php echo $row['link'];?>">
						   	<p><?php echo $row['caption'];?></p>
						   </a>						   
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_banner_bottom_grids two">
				<?php foreach ($query->tampil_gallery_kanan() as $row) {?>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="master/root/images/<?php echo $row['gambar'];?>" alt=" " class="img-responsive" />
						<div class="overlay">
							<h4></h4>
						   <a href="<?php echo $row['link'];?>">
						   	<p><?php echo $row['caption'];?></p>
						   </a>	
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /blog -->
	<!-- <div class="events">
		<ul id="flexiselDemo1">	
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="master/root/images/1.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>23 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Learn Basics</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="master/root/images/8.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>25 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">business law</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="master/root/images/7.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>28 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">PHP Programming</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="master/root/images/2.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>30 March 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Earn Profit</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts_event_grid">
					<div class="w3_agile_event_grid1">
						<img src="master/root/images/6.jpg" alt=" " class="img-responsive" />
						<div class="w3_agile_event_grid1_pos">
							<p>2 April 2017</p>
						</div>
						<div class="agile_event_grid1_pos">
							<ul>
								<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18</a></li>
								<li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>21</a></li>
								<li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>13</a></li>
							</ul>
						</div>
					</div>
					<div class="agileits_w3layouts_event_grid1">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Strategy</a></h5>
						<p>viverra ipsum ac, convallis mauris. Sed quis congue turpis, cursus rhoncus nibh.</p>
					</div>
				</div>
			</li>
		</ul>
	</div> -->
<!-- //blog -->
	</div>
<!-- //banner-bottom -->
<div class="medile_agile_its_section">
	     <div class="col-md-6 medile_agile_its_blue">
	           <h4>Pesan Durian Langsung <i class="fa fa-hand-o-right" aria-hidden="true"></i> </h4>
	     </div>
		 <div class="col-md-6 medile_agile_its_green">
	             <div class="more click">
					<h2><a href="#" class="hvr-shutter-in-vertical" >
						<?php foreach ($query->tampil_kontak() as $row){
						echo $row['hp'];	
						} ?>
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></h2>
				</div>
	     </div>
		 <div class="clearfix"> </div>
	</div>
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two">PRODUK <span>OLAHAN</span></h3>
		<p class="sub_para_agile two">ASLI DURIAN MEDAN, DIJAMIN!</p>
			
			<div class="agile_inner_grids">
								
								   <!-- choose icon -->
								   <?php foreach ($query->tampil_produk_kiri() as $row) { ?>
								   <div class="col-md-6 choose_icon">
										<div class="choose_left">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									<div class="choose_right">
										<h3><?php echo $row['title'];?></h3>
										<p><?php echo $row['konten'];?></p>
									</div>
										<div class="clearfix"></div>
									 </div>
								  <?php }?>
								
								  <?php foreach ($query->tampil_produk_kanan() as $row) { ?>
								   <div class="col-md-6 choose_icon">
										<div class="choose_left">
											<i class="fa fa-bar-chart" aria-hidden="true"></i>
										</div>
									<div class="choose_right">
										<h3><?php echo $row['title'];?></h3>
										<p><?php echo $row['konten'];?></p>
									</div>
										<div class="clearfix"></div>
									 </div>
								  <?php }?>
								
								 <div class="clearfix"></div>
							</div>
						</div>
					</div>
	<!-- //services -->
<!-- stats -->
	<div class="stats" id="stats">
	    <div class="container"> 
		<div class="inner_w3l_agile_grids">
				<div class="col-md-3  w3_counter_grid">
				</div>
				<div class="col-md-3  w3_counter_grid1">
				   <img src="images/best.png">
				</div>
				<div class="col-md-3  w3_counter_grid2">
				
								   <img src="images/top.png">
				</div>
				<div class="col-md-3 w3_counter_grid3">
				</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>
<!-- //stats -->
<!-- agile_testimonials -->
<div class="test">
	<div class="container">
	<h3 class="w3l_header w3_agileits_header">Kata <span>Mereka</span></h3>
		<p class="sub_para_agile two">Hubungi bang Ardi untuk pertanyaan dan pemesanan</p>
			
			<div class="agile_inner_grids">
					<div class="test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									  <i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Durian Medan memang beda. Sangat cocok untuk bahan lempok kami.</p>
										<h4>Mashudi </h4>
										<span>Mahasiswa</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t1.jpeg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Es teler durian kami menjadi minuman favorit di saat cuaca panas.</p>
										<h4>Cindy</h4>
										<span>Karyawan</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t2.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Pancake durian kami semakin digemari, tak perlu krim tambahan.</p>
										<h4>Rara</h4>
										<span>Penggiat Sosmed</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t3.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>
							<div class="agile">
							   	<div class="test-grid">
							   		<div class="col-md-8 test-grid1">
									<i class="fa fa-quote-left" aria-hidden="true"></i>
										<p class="para-w3-agile">Enak kali memang duren dari medan ni, beda x sama duren yang pernah kami makan tempat lain.</p>
										<h4>Sherly</h4>
										<span>Pelajar</span>
									</div>	
									<div class="col-md-4 test-grid2">
										<img src="images/t4.jpg" alt="" class="img-r">
									</div>
								</div>	
								<div class="clearfix"></div>
							</div>	
					</div>
				</div>	
		</div>
</div>	
</div>
<!-- //agile_testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<!-- <div class="w3_agile_footer_grids">
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Latest Tweets</h3>
					<ul class="agile_footer_grid_list">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Nam libero tempore, cum soluta nobis est eligendi optio 
							cumque nihil impedit. <span>1 day ago</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">info@mail.com</a>
							cumque nihil impedit. <span>2 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="services.html">Services</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="portfolio.html">Portfolio</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="mail.html">Mail Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Instagram Posts</h3>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/7.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/8.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/3.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/4.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
					<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div> -->
			<div class="w3_newsletter_footer_grids">
				<div class="w3_newsletter_footer_grid_left">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9241199764197!2d98.63740181487161!3d3.604846497376801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e68bbb3072f%3A0xcdb537b9797a1f99!2sJl.+Gaperta%2C+Medan+Helvetia%2C+Kota+Medan%2C+Sumatera+Utara!5e0!3m2!1sid!2sid!4v1523026013960" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<?php foreach ($query->tampil_kontak() as $row) {?>
			
			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p><?php echo $row['jalan'];?><span><?php echo $row['kota'];?></span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>Call <?php echo $row['hp'];?> <span>WhatsApp <?php echo $row['whatsapp'];?></span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com"><?php echo $row['email1'];?></a> 
						<span><a href="mailto:info@example.com"><?php echo $row['email2'];?></a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php }?>
			<div class="agileinfo_copyright">
				<p>© 2017-2022 Boss Duren Medan</a></p>

			</div>
		</div>
	</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<script type="text/javascript">
$(function(){
  $("#bars li .bar").each(function(key, bar){
    var percentage = $(this).data('percentage');

    $(this).animate({
      'height':percentage+'%'
    }, 1000);
  })
})
</script>
<!-- flexisel -->
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:667,
						visibleItems:2
					},
					tablet: { 
						changePoint:800,
						visibleItems: 3
					}
				}
			});
			
		});
	</script>
<!-- //flexisel -->
<!-- requried-jsfiles-for owl -->
 <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->


<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<!-- //here ends scrolling icon -->
</body>
</html>