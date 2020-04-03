<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/styles/bootstrap4/bootstrap.min.css">
    <link href="<?= base_url()?>asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/sourcesanspro-font.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>asset/css/style.css"/>
</head>
<body>
<header class="header">
			
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li><div class="question">Have any questions?</div></li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div>001-1234-88888</div>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <div>shakillaaulia1@gmail.com</div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <div class="login_button"><a href="<?= base_url()?>loginn/login">Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>				
            </div>
    
            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="#">
                                        <div class="logo_text">Lowongan <span>Kerja</span></div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li ><a href="<?=base_url()?>TrainingCenter/cek">Home</a></li>
                                        <li><a href="<?=base_url()?>TrainingCenter/kategori">Job Information</a></li>
                                        <li><a href="<?=base_url()?>TrainingCenter/paket">Apply Job</a></li>
                                        <li><a href="c<?=base_url()?>TrainingCenter/contact">Contact Us</a></li>
                                    </ul>
                                    <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
    
                                    <!-- Hamburger -->
    
                                    <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>			
        </header>
</body>
</html>