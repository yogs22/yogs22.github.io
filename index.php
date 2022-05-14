<!DOCTYPE html>
<html>
<head>
	<title>Yogi Prasetyawan - Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/portofolio.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/aos.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
</head>
<body>

<!-- ========== Header ========== -->

<header>
	<nav class="head-nav" data-aos="fade-down" data-aos-offset="300">
		<div class="nav-left">
			<a href="https://yogi.web.id" class="navbar-title">yogi</a>
		</div>
		<div class="navbar-bars">
			<a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="fa fa-bars"></i></a>
        	<a href="index.html" class="navbar-title">yogi</a>
		</div>
		<div class="nav-center">
			<ul>
				<center>
				<li><a href="" data-slide="slide" data-slide-target="#about">About</a></li>
				<li><a href="" data-slide="slide" data-slide-target="#work">Portofolio</a></li>
				<li><a href="" data-slide="slide" data-slide-target="#skills">Skills</a></li>
				<li><a href="" data-slide="slide" data-slide-target="#contact">Contact</a></li>
				</center>
			</ul>
		</div>
		<div class="nav-right">
			<a target="_blank" href="https://vexagame.com">Website</a>
		</div>
	</nav>

	<div class="sidebar">
		<div class="sidebar-list">
			<li><a href="" data-slide="slide" data-slide-target="#about">About</a></li>
			<li><a href="" data-slide="slide" data-slide-target="#work">Portofolio</a></li>
			<li><a href="" data-slide="slide" data-slide-target="#skills">Skills</a></li>
			<li><a href="" data-slide="slide" data-slide-target="#contact">Contact</a></li>
		</div>
	</div>

	<div class="sidebar-overlay"></div>

	<div class="row rows">
		<div class="head-1 col-lg-6 col-md-6 col-xs-12">
			<div data-aos="zoom-in">
				<h3>MY NAME IS <br> YOGI PRASETYAWAN HADI</h3>
			</div>
			<div data-aos="zoom-in-up" data-aos-delay="900">
				<span>Welcome to my Portofolio page, find out more about me and my project. <br>
				I like to see the sky and are interested in programming</span>
				<a href="" data-slide="slide" data-slide-target="#contact"><button class="head-button"> Contact Me Now </button></a> &nbsp;
				<a href="" data-slide="slide" data-slide-target="#work"><button class="head-button-2"> Check My Work </button></a>
			</div>
		</div>
		<div class="head-2 col-lg-5 col-md-5 col-xs-12 d-xs-none" data-aos="fade-right" data-aos-delay="600">
			<img src="assets/img/yogs-laptop.png">
		</div>
	</div>
</header>

<!-- ========== About ========= -->

<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12">
				<div class="about-yogs">
				  <div class="row">
				    <div class="column left">
				      <span class="dot" style="background:#ED594A;"></span>
				      <span class="dot" style="background:#FDD800;"></span>
				      <span class="dot" style="background:#5AC05A;"></span>
				    </div>
				    <div class="column middle">
				      <input type="text" value="http://www.yogs22.github.io">
				    </div>
				    <div class="column right">
				      <div style="float:right">
				        <span class="bar"></span>
				        <span class="bar"></span>
				        <span class="bar"></span>
				      </div>
				    </div>
				  </div>

				  <div class="content">
				    <h3>About Me</h3>
				    <p>Hy there my name is Yogi and i'm currently living in Yogyakarta, Indonesia. Always learn and upgrading my soft and hard skill in Software Development Industry. I like coding, traveling and sports. Feel free to create some awesome with me</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12 right-about">
				<br>
				<h3 class="title">Experience</h3>
				<?php
				    require 'admin/function.php';
				    $pengalaman = query("SELECT * FROM pengalaman")
				 ?>
				<ul>
		            <?php foreach( $pengalaman as $row) : ?>
						<li>
							<h4><?= $row['perusahaan'] ?></h4>
							<p><?= $row['jabatan'] ?> - <?= $row['durasi'] ?></p>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="text-center w-100">
				<a href="" class="btn-about" data-slide="slide" data-slide-target="#skills">See The Skills</a>
			</div>
		</div>
	</div>
</div>

<!-- ========= Download ======== -->

<div id="download">
	<div class="container" style="z-index: 2">
		<a href="https://drive.google.com/drive/folders/1XDFbVqG1xffPjfE5DIFVDMJduWY84MLI?usp=sharing" target="_blank" class="btn-download">Download Ceritification</a>
	</div>
</div>

<!-- ========== Work ========== -->

<section id="work" style="position: relative;">
	<div data-aos="fade-up">
		<h3 class="title">Some Of My Work</h3>
	</div>
	<div data-aos="fade-up" data-aos-delay="300">
		<h4 class="subtitle">Here's what I've been working on all this time , this is just some work I can publish</h4>
	</div>

	 <!-- Tab links -->
	<div class="tab" data-aos="fade-up" data-aos-delay="500">
	  <button class="tablinks text-left active" id="defaultOpen" onclick="openTabs(event, 'Project')">Project</button>
	  <button class="tablinks" onclick="openTabs(event, 'Education')">Education</button>
	  <button class="tablinks text-right" onclick="openTabs(event, 'Activities')">MY ACTIVITES</button>
	</div>

	<div class="tab-div" >
		<div class="line-div"></div>
	</div>

	<!-- Tab content -->
	<div id="Project" class="tabcontent">
	  <div class="row">
	  	<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_dparagon.png">
			<a href="https://dparagon.com" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">D'Paragon</span>
				</div>
			</a>
	  	</div>
		<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_djurkam.png">
			<a href="https://djuragankamar.com" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">Djuragan Kamar</span>
				</div>
			</a>
	  	</div>
		<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_djurvoc.png">
			<a href="https://djuraganvoucher.com" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">Djuragan Voucher</span>
				</div>
			</a>
	  	</div>
		<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_vexagame.png">
			<a href="https://store.vexagame.com" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">VexaGame</span>
				</div>
			</a>
	  	</div>
		<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_pantaicahaya.png">
			<a href="https://pantaicahaya.co.id" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">Pantai Cahaya</span>
				</div>
			</a>
	  	</div>
		<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_seucapkopi.png">
			<a href="https://seucapkopi.id" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">Seucapkopi</span>
				</div>
			</a>
	  	</div>
		<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_nurhamka.png">
			<a href="https://nurhamka.com" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">Nurhamka</span>
				</div>
			</a>
	  	</div>
		<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/p_newsbmb.png">
			<a href="https://newsbmb.com" target="_blank">
				<div class="tab-ov">
					<span class="tab-ov-text">NewsBMB</span>
				</div>
			</a>
	  	</div>
	  </div>
	</div>

	<!-- Tab Education -->

	<div id="Education" class="tabcontent">
	<div class="row">
	  <div class="tab-row-img col-lg-3 col-md-3 col-xs-12" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/smk1mejayan.png">
	  		<div class="tab-ov">
	  			<span class="tab-ov-text">SMKN 1 Mejayan</span>
	  		</div>
	  	</div>
	  	<div class="tab-row-img col-lg-3 col-md-3 col-xs-12" data-aos="fade-up" data-aos-delay="900">
	  		<img class="tab-img" src="assets/img/project/univmercubuana.png">
	  		<div class="tab-ov">
	  			<span class="tab-ov-text">Universitas Mercu Buana Yogyakarta</span>
	  		</div>
	  	</div>
	  </div>
	</div>

	<div id="Activities" class="tabcontent">
	<div class="row">
		 <div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="700">
	  		<img class="tab-img" src="assets/img/project/juara.jpg">
	  		<div class="tab-ov">
	  			<span class="tab-ov-text">Juara 1 Web Design Competition</span>
	  		</div>
	  	</div>
	  	<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="900">
	  		<img class="tab-img" src="assets/img/project/iak.jpg">
	  		<div class="tab-ov">
	  			<span class="tab-ov-text">Best Project IAK</span>
	  		</div>
	  	</div>
	  	<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="1100">
	  		<img class="tab-img" src="assets/img/project/meetup.jpg">
	  		<div class="tab-ov">
	  			<span class="tab-ov-text">Meetup PHP Indonesia</span>
	  		</div>
	  	</div>
	  	<div class="tab-row-img col-lg-3 col-md-3 col-xs-6" data-aos="fade-up" data-aos-delay="1300">
	  		<img class="tab-img" src="assets/img/project/lks.jpg">
	  		<div class="tab-ov">
	  			<span class="tab-ov-text">LKS Provinsi</span>
	  		</div>
	  	</div>
	</div>
</div>
</section>

<!-- ========== Skills ========== -->

<section id="skills">
	<h3 class="title">TECHNOLOGY I’VE LEARNED</h3>
	<h4 class="subtitle">The technology I learned may not be maximized but I am still learning until now</h4>
	<div class="title-line"></div>

	<div class="row skills-container">
		<div class="tech-icon">
			<i class="devicon-html5-plain"></i>
			<div class="tech-text">
				<b>HTML5</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-css3-plain"></i>
			<div class="tech-text">
				<b>CSS3</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-javascript-plain"></i>
			<div class="tech-text">
				<b>JAVASCRIPT</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-php-plain"></i>
			<div class="tech-text">
				<b>PHP</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-mysql-plain"></i>
			<div class="tech-text">
				<b>MYSQL</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-bootstrap-plain"></i>
			<div class="tech-text">
				<b>BOOTSTRAP</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-laravel-plain"></i>
			<div class="tech-text">
				<b>LARAVEL</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-codeigniter-plain"></i>
			<div class="tech-text">
				<b>CODEIGNIER</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-angularjs-plain"></i>
			<div class="tech-text">
				<b>ANGULAR JS</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-vuejs-plain"></i>
			<div class="tech-text">
				<b>VUE JS</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-java-plain"></i>
			<div class="tech-text">
				<b>JAVA</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-jquery-plain"></i>
			<div class="tech-text">
				<b>JQUERY</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-nodejs-plain"></i>
			<div class="tech-text">
				<b>NODE JS</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-python-plain"></i>
			<div class="tech-text">
				<b>PYTHON</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-sass-plain"></i>
			<div class="tech-text">
				<b>SASS</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-wordpress-plain"></i>
			<div class="tech-text">
				<b>WORDPRESS</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-linux-plain"></i>
			<div class="tech-text">
				<b>LINUX</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-android-plain"></i>
			<div class="tech-text">
				<b>ANDROID</b><br>
			</div>
		</div>
		<div class="tech-icon">
			<i class="devicon-git-plain"></i>
			<div class="tech-text">
				<b>GIT</b><br>
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<h3 class="title">YOU <b style="color: #fffc00">CAN</b> FIND <b style="color: #fffc00">ME</b></h3>
	<h4 class="subtitle">Feel free to contact me if you need me to create some awesome <br>
		Leave me a massage on <a href="https://telegram.me/yogs22">Telegram</a> or <a href="https://mailto:yogiprasetyawan12@gmail.com">Email</a></h4>
	<div class="title-line" style="background: #fffc00 !important"></div>

	<div class="row">
		<div class="col-md-12 row-social">
			<center>
				<a href="https://fb.com/yogiyogs22" target="_blank"><img src="assets/img/social/fb.png"></a>
				<a href="https://instagram.com/yogiprasetyawan_" target="_blank"><img src="assets/img/social/instagram.png"></a>
				<a href="https://www.linkedin.com/in/yogi-prasetyawan-b81950156/" target="_blank"><img src="assets/img/social/linkedin.png"></a>
				<a href="https://github.com/yogs22" target="_blank"><img src="assets/img/social/github.png"></a>
			</center>
		</div>
	</div>

</section>

<footer>
	<span>Created with <i class="fa fa-heart-o"></i> - By Yogi Prasetyawan </span>
</footer>

<div class="backtotop"><span></span> <span class="fa fa-chevron-up"></span> </div>

<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/aos.js"></script>
</body>
</html>
