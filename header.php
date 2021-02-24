<!DOCTYPE html>
<html lang="pl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/dist/main.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Szablon CodeHex.pl</title>
</head>
<body>
    <nav>
		<div class="mainContainer">
			<header>
			<div class="mobileNav d-lg-none">
					<div class="menu">
							<?php wp_nav_menu(array('theme_location' => 'top-menu')) ?>
						</div> 
				</div>
				<div class="col-12 d-lg-none navMobileContainer">
					<div class="row">
						<div class="col-9 logoContainerMobile">
							<a href="<?php bloginfo('url') ?>" class="logo">
								<img src="<?php bloginfo('template_url')?>/dist/img/logo.png " alt="<?php bloginfo('name') ?>">
							</a>
					</div>
						<div class="col-3">
							<button class="hamburger">
								<span class="hamburgerBox">
									<span class="hamburgerLine"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<div class="col-12 d-none d-lg-flex desktopMenu">
					<div class="col-2">
							<a href="<?php bloginfo('url') ?>" class="logo">
								<img src="<?php bloginfo('template_url')?>/dist/img/logo.png " alt="<?php bloginfo('name') ?>">
							</a>
					</div>
					<div class="col-10">
						<div class="menu">
							<?php wp_nav_menu(array('theme_location' => 'top-menu')) ?>
						</div>
					</div>
				</div>
				</nav>
			</header>
		</div>
    </nav>
<div class="mainContent">
