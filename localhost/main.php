<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zKidzone</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | Zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
</head>

<body class="home-page">
	<div class="wrap-body">
		<header>
			<div id="cssmenu" >
				<ul>
				   <li class="active"><a href="/"><span>Песенный репертуар</span></a></li>
			</div>
			<div class="header-banner zerogrid" style="width: 100%;">
				<div class="row">
					<div class="col-2-3">
						<img src="https://rcmuzyka.com/wp-content/uploads/2016/07/solfedzhio14-2.jpg">
					</div>
					<div class="col-1-3">
						<div class="header-text">
							<h1>Подбор песенного репертуара для школьников</h1>
							<p>Репертуар, на котором происходит музыкальное воспитание детей - это именно та музыкальная среда, которая и формирует любовь к музыке, эстетическое восприятие, художественный вкус, эстетические и нравственные установки школьников. </p>
						</div>
					</div>
				</div
			</div>
		</header>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<!-----------------content-box-1-------------------->
				<section class="content-box boxstyle-1 box-1">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="col-1-2">
								<div class="wrap-col">
									<div class="row">
										<div class="header">
											<div class="wrapper">
												<div class="intro">Особенности подбора репертуара</div>
												<h2></h2>
											</div>
										</div>
										<p class="lead">Для музыкального воспитания детей следует отбирать только самую лучшую музыку, позволяющую решать задачи эстетического, духовно-нравственного, творческого развития школьников. Апробированный в многолетней практике музыльный репертуар для детей составляет "золотой фонд", который можно и нужно повторять в процессе работы с детьми разных поколений. В золотой фонд" детского музыкального репертуара входит не только классическая и народная музыка, но и авторские детские песни и пьесы, написанные для детей профессиональными композиторами, а также детский фольклор народов мира.</p>
										</p>
									</div>
								</div>
							</div>
							<div class="col-1-2">
								<div class="wrap-col">
									<img src="https://linguru-academy.com/files/uploads/zanyatiya-vokalom/uroki-vokala-dlya-detej.jpg">
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-2-------------------->
				<section class="content-box box-2">
					
				</section>
				<!-----------------content-box-3-------------------->
				<section class="content-box boxstyle-2 box-3">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="header">
								<div class="wrapper">
									<div class="intro"></div>
									<h2 class="color-yellow">Репертуарный список</h2>
								</div>
							</div>
							<div class="row">
								<?php
									$con = mysqli_connect("localhost", "root", "", "DB");
									mysqli_set_charset($con, "utf8");

									if ($con == false) {
										echo ("Ошибка подключения: " . mysqli_connect_error());
									}
									else {
										$sql = "SELECT id, name, image, description, link FROM data";
										$result = mysqli_query($con, $sql);
										$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

										foreach ($rows as $row) {
											echo (
													"<div class='col-1-4'>
													<div class='wrap-col'>
														<div class='box-item'>
															<div class='zoom-container'>
																<img src='{$row['image']}' />
															</div>
															<div class='box-item-content'>
																<h4>{$row['name']}</h4>
																<p></p>
																<a href='{$row['link']}'>Подробнее</a>
															</div>
														</div>
													</div>
												</div>"
											);
										}
									}
								?>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-4-------------------->
				<section class="content-box box-4">
					<div class="zerogrid" style="width: 100%;">
						<div class="row wrap-box"><!--Start Box-->
							<div class="zerogrid">
								<div class="header">
									<div class="wrapper">
										<div class="intro"></div>
										<h2 class="color-yellow">Выдающиеся композиторы-песенники</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://i1.mosconsv.ru/287/400/800/90/pahmutova.jpg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Александра Пахмутова</a>
												</div>
												<div class="project-des">
													<p></p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://www.belcanto.ru/media/images/publication/18022808.jpg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Александр Зацепин</a>
												</div>
												<div class="project-des">
													<p></p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://upload.wikimedia.org/wikipedia/commons/0/06/Vladimir_Shainsky_%28cropped%29.jpg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Владимир Шаинский</a>
												</div>
												<div class="project-des">
													<p></p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://im.kommersant.ru/Issues.photo/NEWS/2019/05/08/KOG_146745_00001_1_t222_130558.jpg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Евгений Крылатов</a>
												</div>
												<div class="project-des">
													<p></p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://i.discogs.com/awrOYHhq9psneVEAvO7JdsoLB-9uSwD29tJCZOpELy8/rs:fit/g:sm/q:90/h:900/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9BLTcwNDE1/Ny0xNDkzMzk5MTE1/LTY1NzcuanBlZw.jpeg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Юрий Антонов</a>
												</div>
												<div class="project-des">
													<p></p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://vmrucdn.servicecdn.ru/photo/vecherka/2017/07/doc6vvepvjcferptqzpjf4_800_480.jpg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Давид Тухманов</a>
												</div>
												<div class="project-des">
													<p></p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://cdn.culture.ru/images/9ecfd81d-ecbc-56e2-95c3-dea2e625bac3" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Михаил Таривердиев</a>
												</div>
												<div class="project-des">
													<p></p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-1-4">
									<div class="portfolio-box">
										<img src="https://upload.wikimedia.org/wikipedia/ru/0/02/Dmitry_Kabalevsky.jpg" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													<a href="single.html">Дмитрий Кабалевский</a>
												</div>
												<div class="project-des">
													<p>.</p>
												</div>
												<div class="project-social">
													<ul class="list-inline">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-----------------content-box-5-------------------->
				<section class="content-box boxstyle-3 box-5">
					<div class="zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<div class="row">
								<h3>Потенциал представленного репертуарного списка <span></span></h3>
								<img src="https://www.rektor.ru/upload/images/25-01-2023/1.jpg" />
								<p>Эти произведения: небольшие по объему, время их звучания не превышают 5 - 8 мин, что связано с особенностями детского внимания (отвлекаемость, плохое сосредоточение) и недостаточностью развития произвольных процессов; с ярко выраженными средствами музыкальной выразительности (темп, ритм, динамика, мелодия); разнообразные по стилям и жанрам; программные и непрограммные. </p>
							</div>
						</div>
					</div>
				</section>
				
				<!-----------------content-box-6-------------------->
<s></s>					<div class="copyright">
				<div class="zerogrid wrapper">
					Copyright @ zKidzone - Designed by <a href="https://www.zerotheme.com"> Вдохновение</a>
					<ul class="quick-link">
						<li><a href="#">Политика конфиденциальности</a></li>
						<li><a href="#">Условия эксплуатации</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>