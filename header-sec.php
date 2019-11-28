<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSForensics</title>
    <link media="all" rel="stylesheet" href="fonts/fonts.css">
    <link media="all" rel="stylesheet" href="styles/css/bootstrap-grid.css">
    <link media="all" rel="stylesheet" href="styles/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="styles/scss/slick/slick.css">
    <link rel="stylesheet" href="styles/scss/slick/slick-theme.css">
    <link media="all" rel="stylesheet" href="styles/scss/main.css">
</head>
<body class="body-main">
    <header class="header header-sec" id="header">
        <div class="container-fluid fixed_main" id="main_menu">
            <nav class="nav navbar navbar-expand-md navbar-light bg-light">
                <a class="navbar-brand" href="/"><img class="header_logo" src="img/Logo-sec.png" alt=""></a>
                <div class="navbar-toggler navbar-toggler_block" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="navbar-toggler_line"></div>
                    <div class="navbar-toggler_line"></div>
                    <div class="navbar-toggler_line"></div>
                </div>
                <div class="collapse navbar-collapse  justify-content-start" id="navbarSupportedContent">
                <ul class="navbar-nav header_nav">
                    <li class="nav-item dropdown">
                        <a data-activemenu="software" class="nav-link dropdown-toggle" href="#" id="softwareDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-activemenu="hardware" class="nav-link dropdown-toggle" href="#" id="hardwareDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="benchmarksDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Training
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Support</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="sales_link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About Us
                        </a>
                    </li>
                </ul>
                </div>
                <ul id="search_form" class="nav navbar-nav left-nav-bar">
                    <li class="search_form--center active">
                        <!-- <form action="/search/zoomsearch.php" class="form-inline my-lg-0"> -->
                            <input name="zoom_query" id="search_input" class="form-control mr-sm-2 search_input search_input--color" type="search" placeholder="Search entire site..." aria-label="Search">
                            <button id="search_submit" class="icon_search icon_search-sec icons " type=""></button>
                        <!-- </form>  -->
                    </li>
                    <li>
                        <a href="/about/contact_us.php">
                            <span class="icons icon_phone icon_phone-sec"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/sales/shop.php">
                            <span class="white icons icon_cart icon_cart-sec" id="count_cart">
                                                        </span>
                        </a>
                    </li>
                    <li>
                        <a class="signbutton white" href="/login.php">Sign In</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>