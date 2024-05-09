<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Connect to your database (assuming MySQL here)
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testing";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert data into the database
    $sql = "INSERT INTO information (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE TITLE -->
    <title>SOCIAL CUTLS&#8211; SEO Agency, Social Media Agency, Digital Marketing Agency Template</title>
    <!-- FAVI ICON -->
    <link rel="icon" type="image/png" href="assets/images/favi.png" sizes="32x32">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="assets/fonts/linear-fonts.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
    <!-- LIGHTBOX CSS -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <script src="C:\Users\HP\Downloads\demo.dueza.com\demo.dueza.com\seofriendly-html\seo-friendly\black-color\assets\js\repeat.js"></script>
    <![endif]-->

    <script src="C:\Users\HP\Downloads\demo.dueza.com\demo.dueza.com\seofriendly-html\seo-friendly\black-color\assets\js\repeat.js"></script>
</head>

<body>
    <!-- START PRELOADER -->
    <div class="preloader">
        <div class="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- / END PRELOADER -->

    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href='/'>
                                <p>Social Cults</p>
                            </a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-9">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">About</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#service">service</a>
                                        </li>
                                        <!--<li><a class="smoth-scroll" href="#team">team</a>
                                        </li> -->
                                        <li><a class="smoth-scroll" href="#portfolio">Portfolio</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#careers">Careers</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#blog">blog</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-image-area" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <h2>WE ARE SEO AGENCY!</h2>
                                    <p>We are making your dream true on the basis of Creativity is simply dummy the printing and typesetting industry.</p>
                                    <a class="slide-btn smoth-scroll" href="#contact">
 Contact us <i class="fa fa-hand-pointer-o btn-contact-us" aria-hidden="true"></i></a>
                                    <a class="smoth-scroll hire-us-slide-btn" href="#contact">Hire us <i class="fa fa-hand-pointer-o btn-hire-us" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->

    <!-- START ABOUT US DESIGN AREA -->
    <section id="about" class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>About us</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START ABOUT US TEXT DESIGN AREA -->
                <div class="col-md-12">
                    <div class="about-text wow fadeInUp" data-wow-delay=".2s">
                        <h2 class="text-center">Welcome to Social Cults</h2>
                        <p class="text-center">Social Cults emerged as an award-winning social media management company with a maximum experience of 15 years in the industry. With over 500+ Happy Clients and a 100% certification rate, we have solidified our reputation as a
                            trusted partner in digital marketing. We excel in providing comprehensive email marketing services, social media advertising solutions, and a range of other offerings tailored to meet our clients' needs. Our expertise lies
                            in designing and executing highly impactful social media campaigns for businesses of all sizes. By harnessing the power of platforms such as Facebook, Instagram, Twitter, LinkedIn, and Pinterest, we ensure optimal visibility
                            and engagement for your brand. As a full-service agency, we seamlessly integrate our digital marketing services to amplify the impact of your social media initiatives and vice versa, thereby maximising results. In essence,
                            our focus is on leveraging relevant social media marketing strategies to fuel business growth and help our clients achieve their objectives!
                        </p>

                        <!-- START KEY SKILL DESIGN AREA -->
                        <div class="col-md-6">
                            <div class="our-skill">
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Keyword Research
                                        <span>92%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="95" style="transition: width 3s ease 0s; width: 95%;"></span>
                                    </div>
                                </div>
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Onpage Optimization
                                        <span>98%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="95" style="transition: width 3s ease 0s; width: 95%;"></span>
                                    </div>
                                </div>
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Offpage Optimization
                                        <span>90%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="90" style="transition: width 3s ease 0s; width: 90%;"></span>
                                    </div>
                                </div>
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Competition Analysis
                                        <span>70%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="90" style="transition: width 3s ease 0s; width: 90%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="our-skill">
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Digital marketing
                                        <span>87%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="87" style="transition: width 3s ease 0s; width: 87%;"></span>
                                    </div>
                                </div>
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Social Media Marketing
                                        <span>81%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="81" style="transition: width 3s ease 0s; width: 81%;"></span>
                                    </div>
                                </div>
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Search Engine Marketing
                                        <span>85%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="85" style="transition: width 3s ease 0s; width: 85%;"></span>
                                    </div>
                                </div>
                                <div class="progress-bar-linear">
                                    <p class="progress-bar-text">Search Engine Optimization
                                        <span>82%</span>
                                    </p>
                                    <div class="progress-bar">
                                        <span data-percent="82" style="transition: width 3s ease 0s; width: 82%;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / END KEY SKILL DESIGN AREA -->
                    </div>
                </div>
                <div  class="col-md-12 text-center">
                    <a href="#contact" class="smoth-scroll">Download Price List</a>
                </div>
                <!-- / END ABOUT US TEXT DESIGN AREA -->
            </div>
            <!-- START FUN FACTS DESIGN AREA -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <span class="fa fa-thumbs-o-up"></span>
                        <h2 class="counter-num">1200</h2>
                        <h6 class="text-muted">Project completed</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <span class="fa fa-smile-o"></span>
                        <h2 class="counter-num">1000</h2>
                        <h6 class="text-muted">Happy Clients</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <span class="fa fa-signal"></span>
                        <h2 class="counter-num">56090</h2>
                        <h6 class="text-muted">Rank Position</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-project-complete">
                        <span class="fa fa-trophy"></span>
                        <h2 class="counter-num">31</h2>
                        <h6 class="text-muted">Awards Won</h6>
                    </div>
                </div>
            </div>
            <!-- /END FUN FACTS DESIGN AREA -->
        </div>
    </section>
    <!-- / END ABOUT US DESIGN AREA -->

    <!-- START SERVICES DESIGN AREA -->
    <section id="service" class="service-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our services</h2>
                        <p class="text-center">We provide a full range of traditional and cutting edge digital marketing services in Noida and across the world</p>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service text-center">
                        <span class="fa fa-search"></span>
                        <h3 class="your-new-class-name"><strong>CRM/LMS/ERP DEV.</strong></h3>
                        <p>Our Technologies helps to streamline the sales, marketing, and customer.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-service text-center">
                        <span class="fa fa-refresh"></span>
                        <h3><strong>SEO</strong></h3>
                        <p>Improve your website ranking on Google.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-service text-center">
                        <span class="fa fa-signal"></span>
                        <h3><strong>PPC ads</strong></h3>
                        <p>Advertising on Google, Facebook, Instagram.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-service text-center">
                        <span class="fa fa-sliders"></span>
                        <h3><strong>ORM & PR</strong></h3>
                        <p>Online reputation management and media coverage</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="single-service text-center">
                        <span class="fa fa-diamond"></span>
                        <h3><strong>Branding</strong></h3>
                        <p>Brand strategy, brand book, brand style guides</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="single-service text-center">
                        <span class="fa fa-dribbble"></span>
                        <h3><strong>Web dev</strong></h3>
                        <p>Custom front-end and back-end web development</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.4s">
                    <div class="single-service text-center">
                        <span class="fa fa-star"></span>
                        <h3><strong>CRO</strong></h3>
                        <p>Conversion rate Optimization of any website.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
                    <div class="single-service text-center">
                        <span class="fa fa-search"></span>
                        <h3><strong>SMM</strong></h3>
                        <p>Achieve instant visibility across various social channels.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
                <!-- START SINGLE SERVICES DESIGN AREA -->
                <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.8s">
                    <div class="single-service text-center">
                        <span class="fa fa-hand-pointer-o"></span>
                        <h3><strong>App development</strong></h3>
                        <p>Build cloud-based apps with scalable architecture for high quality.</p>
                    </div>
                </div>
                <!-- / END SINGLE SERVICES DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END SERVICES DESIGN AREA -->

    <!-- START TEAM DESIGN AREA 
    <section id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our expert team</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                 START SINGLE TEAM DESIGN AREA 
    <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay=".2s">
        <div class="single-team">
            <img src="assets/images/team/team1.jpg" alt="">
            <div class="team-description text-center">
                <h4>Prashant Singh</h4>
                <h6 class="text-muted">CEO/Founder</h6>
                <div class="team-social">
                    <ul>
                        <li><a href="https://www.facebook.com/socialcults"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-youtube"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/yesimprashant/"><i class="fa fa-instagram"></i></a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    END SINGLE TEAM DESIGN AREA -->
    <!-- START SINGLE TEAM DESIGN AREA
    <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay=".4s">
        <div class="single-team">
            <img src="assets/images/team/team2.jpg" alt="">
            <div class="team-description text-center">
                <h4>William Jackson</h4>
                <h6 class="text-muted">SEO Expert</h6>
                <div class="team-social">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    END SINGLE TEAM DESIGN AREA -->
    <!-- START SINGLE TEAM DESIGN AREA 
    <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-delay=".6s">
        <div class="single-team">
            <img src="assets/images/team/team3.jpg" alt="">
            <div class="team-description text-center">
                <h4>Steve Anderson</h4>
                <h6 class="text-muted">SMM Expert</h6>
                <div class="team-social">
                    <ul>
                        <li><a href=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li><a href=""><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    END SINGLE TEAM DESIGN AREA -->
    </div>
    </div>
    </section>
    <!-- / END TEAM DESIGN AREA -->

    <!-- START CALL TO ACTION AREA 
    <section class="call-to-action-area" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Do you want to purchase our template?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                    <a href="#" class="read-more white-read-more">Purchase now</a>
                </div>
            </div>
        </div>
    </section>
     / END CALL TO ACTION AREA -->

    <!-- START WHY CHOOSE US DESIGN AREA -->
    <div class="why-chhose-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 why-choose-us-title">
                    <div class="section-title">
                        <h2>Why choose us?</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="why-image">
                        <img src="assets/images/why.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <!-- START SINGLE WHY CHOOSE DESIGN AREA -->
                        <div class="col-md-12">
                            <div class="content-grid clearfix">
                                <div class="icon-holder">
                                    <div class="chid-pernt">
                                        <div class="child">
                                            <div class="about-icon"><span class="lnr lnr-sun"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>Innovative Idea</h3>
                                    <p>AI-driven ads evoke emotions, delivering personalized experiences for heightened engagement and conversions in digital marketing.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE WHY CHOOSE DESIGN AREA -->

                        <!-- START SINGLE WHY CHOOSE DESIGN AREA -->
                        <div class="col-md-12">
                            <div class="content-grid clearfix">
                                <div class="icon-holder">
                                    <div class="chid-pernt">
                                        <div class="child">
                                            <div class="about-icon"><span class="lnr lnr-crop"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>Customize Pricing</h3>
                                    <p>Dynamic pricing algorithms that adjust based on customer behavior, market trends, and individual preferences, optimizing ROI in digital marketing.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE WHY CHOOSE DESIGN AREA -->

                        <!-- START SINGLE WHY CHOOSE DESIGN AREA
                        <div class="col-md-12">
                            <div class="content-grid clearfix">
                                <div class="icon-holder">
                                    <div class="chid-pernt">
                                        <div class="child">
                                            <div class="about-icon"><span class="lnr lnr-pencil"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>Unique Content</h3>
                                    <p>Crafting original, captivating content tailored to target audiences, fostering brand differentiation and engagement, maximizing impact in digital marketing.</p>
                                </div>
                            </div>
                        </div>
                        END SINGLE WHY CHOOSE DESIGN AREA -->

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <!-- START SINGLE WHY CHOOSE DESIGN AREA -->
                        <div class="col-md-12">
                            <div class="content-grid clearfix">
                                <div class="icon-holder">
                                    <div class="chid-pernt">
                                        <div class="child">
                                            <div class="about-icon"><span class="lnr lnr-pie-chart"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>Timely Updates</h3>
                                    <p>Regularly scheduled updates on products or services, industry news, and trends to keep audiences informed and engaged in digital marketing.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE WHY CHOOSE DESIGN AREA -->

                        <!-- START SINGLE WHY CHOOSE DESIGN AREA -->
                        <div class="col-md-12">
                            <div class="content-grid clearfix">
                                <div class="icon-holder">
                                    <div class="chid-pernt">
                                        <div class="child">
                                            <div class="about-icon"><span class="lnr lnr-text-align-justify"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>Unique Content</h3>
                                    <p>Tailored, captivating content fosters brand differentiation, engagement, maximizing impact in digital marketing for target audiences.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / END SINGLE WHY CHOOSE DESIGN AREA -->

                        <!-- START SINGLE WHY CHOOSE DESIGN AREA
                        <div class="col-md-12">
                            <div class="content-grid clearfix">
                                <div class="icon-holder">
                                    <div class="chid-pernt">
                                        <div class="child">
                                            <div class="about-icon"><span class="lnr lnr-clock"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <h3>Timely Updates</h3>
                                    <p>Regularly scheduled updates on products or services, industry news, and trends to keep audiences informed and engaged in digital marketing.</p>
                                </div>
                            </div>
                        </div>
                        END SINGLE WHY CHOOSE DESIGN AREA -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / END WHY CHOOSE US DESIGN AREA -->

    <!-- START PORTFOLIO DESIGN AREA -->
    <section id="portfolio" class="work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our portfolio</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="work">
                    <li class="filter" data-filter="all">all</li>
                    <li class="filter" data-filter=".seo">SEO</li>
                    <li class="filter" data-filter=".socialmedia">Social Media</li>
                    <li class="filter" data-filter=".digitalmarketing">Digital Marketing</li>
                </ul>
            </div>
            <div class="work-inner">
                <div class="row work-posts">
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 mix seo">
                        <div class="item">
                            <img src="assets/images/portfolio/project1.jpg" alt="About te image">
                            <div class="tooltip">
                                <div class="align">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="assets/images/portfolio/project1.jpg" class="work-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->

                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 mix socialmedia">
                        <div class="item wow fadeInUp" data-wow-delay="0.4s">
                            <img src="assets/images/portfolio/project2.jpg" alt="About te image">
                            <div class="tooltip">
                                <div class="align">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="assets/images/portfolio/project2.jpg" class="work-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 mix web">
                        <div class="item wow fadeInUp" data-wow-delay="0.6s">
                            <img src="assets/images/portfolio/project3.jpg" alt="About te image">
                            <div class="tooltip">
                                <div class="align">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="assets/images/portfolio/project3.jpg" class="work-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 mix socialmedia digitalmarketing">
                        <div class="item wow fadeInUp" data-wow-delay="0.8s">
                            <img src="assets/images/portfolio/project4.jpg" alt="About te image">
                            <div class="tooltip">
                                <div class="align">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="assets/images/portfolio/project4.jpg" class="work-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 mix typography web">
                        <div class="item wow fadeInUp" data-wow-delay="1s">
                            <img src="assets/images/portfolio/project5.jpg" alt="About te image">
                            <div class="tooltip">
                                <div class="align">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="assets/images/portfolio/project5.jpg" class="work-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                    <!-- START SINGLE WORK DESIGN AREA -->
                    <div class="col-md-4 col-sm-6 mix seo socialmedia digitalmarketing">
                        <div class="item wow fadeInUp" data-wow-delay="1.2s">
                            <img src="assets/images/portfolio/project6.jpg" alt="About te image">
                            <div class="tooltip">
                                <div class="align">
                                    <a href="#"><i class="fa fa-link"></i></a>
                                    <a href="assets/images/portfolio/project6.jpg" class="work-popup"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END START PORTFOLIO DESIGN AREA -->



    <!-- START TESTIMONIAL DESIGN AREA -->
    <section id="testimonial" class="testimonial-area section-padding" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title white-title">
                        <h2>our clients</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-list wow fadeInUp">
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="33.jpg" class="img-circle" alt="">
                        <h6 class="text-muted" style="color: white;">Abhinav Ekansh</h6>
                        <p>Social Cults is a powerhouse in the world of digital marketing. Their team is skilled, dedicated, and always up-to-date on the latest trends and best practices. I'm grateful for their expertise and support!.</p>
                        <div class="buyer-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="22.jpg" class="img-circle" alt="">
                        <h6 class="text-muted" style="color: white;">Ankita Singh</h6>
                        <p>
                            I've recommended Social Cults to several friends and colleagues, and they've all had great experiences. This company knows how to deliver results, and they do it with integrity and professionalism.</p>
                        <div class="buyer-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                    <!-- START SINGLE TESTIMONIAL DESIGN AREA -->
                    <div class="single-testimonial text-center">
                        <img src="11.jpg" class="img-circle" alt="">
                        <h6 class="text-muted" style="color: white;">Prachi Purohit</h6>
                        <p>Choosing Social cults was one of the best decision we made for our business. Their data-driven approach and continuous optimization have resulted in remarkable ROI. Really the best digital marketing agency!.</p>
                        <div class="buyer-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- / END SINGLE TESTIMONIAL DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END TESTIMONIAL DESIGN AREA -->

    <!-- START PRICING DESIGN AREA 
    <section id="pricing" class="pricing-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Careers</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                 START SINGLE PRICING DESIGN AREA 
                <div class="col-md-4 col-sm-12">
                    <div class="pricing-table text-center wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                        <h3 class="price-title">Basic</h3>
                        <div class="price">
                            <p><span class="dollor">$</span>29<span class="month">/monthly</span></p>
                        </div>
                        <p>1 Keyword Rank</p>
                        <p>1 Copetitor Analysis</p>
                        <p>1 Social Media</p>
                        <p>1 Bookmarking</p>
                        <a href="#" class="read-more">BUY NOW</a>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <div class="pricing-table active text-center wow fadeIn animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeIn;">
                        <h3 class="price-title">Standard</h3>
                        <div class="price">
                            <p><span class="dollor">$</span>49<span class="month">/monthly</span></p>
                        </div>
                        <p>2 Keyword Rank</p>
                        <p>5 Copetitor Analysis</p>
                        <p>2 Social Media</p>
                        <p>20 Bookmarking</p>
                        <a href="#" class="read-more active">BUY NOW</a>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-12">
                    <div class="pricing-table text-center wow fadeIn animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeIn;">
                        <h3 class="price-title">Premium</h3>
                        <div class="price">
                            <p><span class="dollor">$</span>99<span class="month">/monthly</span></p>
                        </div>
                        <p>3 Keyword Rank</p>
                        <p>10 Copetitor Analysis</p>
                        <p>3 Social Media</p>
                        <p>30 Bookmarking</p>
                        <a href="#" class="read-more">BUY NOW</a>
                    </div>
                </div>
                END SINGLE PRICING DESIGN AREA -->
    </div>
    </div>
    </section>
    <!-- / END PRICING DESIGN AREA -->

    <!-- START OUR NEWSLETTER DESIGN AREA 
    <section class="our-news-letter" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>suscribe our news letter to get latest news</h2>
                    <input type="text" placeholder="Enter Your Email">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </div>
    </section>
   / END OUR NEWSLETTER DESIGN AREA -->

    <!-- START BLOG DESIGN AREA -->
    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>our Latest News</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- START SINGLE BLOG DESIGN AREA -->
                <!-- START SINGLE BLOG DESIGN AREA -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-blog">
                        <div class="meta-block-container">
                            <a title="Blog" href="single-blog.html">
                                <img alt="blog" src="assets/images/blog/blog1.jpg">
                            </a>
                            <div class="post-meta-block">
                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> 22 April 2024</a></div>
                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                            </div>
                        </div>
                        <div class="blog-description text-center">
                            <a href="single-blog.html">
                                <h3>Digital Marketing</h3>
                            </a>
                            <div class="blog-content">
                                <p>
                                    Here at Social Cults, we think that using digital marketing to its full potential may help you take your company to new heights. Being successful in the fast-paced world of today requires having a strong internet presence—it is not an option. Here's why
                                    embracing digital marketing through Social Cults can be your gateway to unparalleled growth.
                                </p>
                                <div class="more-text" style="display: none;">
                                    <p>1. Strategic Engagement: At Social Cults, we understand that every brand is unique, with its own story to tell. For this reason, we customize our digital marketing tactics to meet the unique requirements and goals of
                                        your company. Whether it's through captivating social media content, targeted email campaigns, or search engine optimization techniques, we'll help you forge meaningful connections with your audience and foster
                                        brand loyalty.</p>
                                    <p>2. Data-Driven Insights: In the digital realm, knowledge is power. For this reason, we use state-of-the-art analytics systems to collect important information on the habits, tastes, and brand engagements of your target
                                        audience. We can optimize your marketing efforts to achieve optimum impact by utilizing these data, guaranteeing that every dollar you invest produces quantifiable outcomes.</p>
                                    <p>3. Creative Storytelling: In a world inundated with content, standing out from the crowd is more important than ever. Here at Social Cults, we think that stories have the ability to enthrall audiences.</p>
                                    <p>4. Continuous Optimization: In the digital landscape, change is the only constant. To stay ahead of the curve, we therefore use a dynamic approach to digital marketing, continuously observing trends, evaluating performance
                                        indicators, and fine-tuning our tactics. We're dedicated to keeping your brand at the forefront of innovation, whether that means experimenting with new strategies, researching upcoming platforms, or responding
                                        to algorithm changes.</p>
                                    <p>5. Community Building: At the heart of every successful brand lies a thriving community of loyal supporters. We'll assist you in building a fervent fan base through Social Cults that not only interacts with your material
                                        but also promotes your business on social media.</p>
                                </div>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE BLOG DESIGN AREA -->

                <!-- START SINGLE BLOG DESIGN AREA -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-blog">
                        <div class="meta-block-container">
                            <a title="Blog" href="single-blog.html">
                                <img alt="blog" src="assets/images/blog/blog2.jpg">
                            </a>
                            <div class="post-meta-block">
                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> 13 Feb 2024</a></div>
                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                            </div>
                        </div>
                        <div class="blog-description text-center">
                            <a href="single-blog.html">
                                <h3>Social Media Marketing</h3>
                            </a>
                            <div class="blog-content">
                                <p>
                                    Welcome to Social Cults, where we redefine the possibilities of social media marketing to elevate your brand's online presence like never before. In today's digital landscape, social media has become the cornerstone of successful marketing strategies.
                                    Here's why partnering with Social Cults for your social media marketing needs can be the game-changer your brand deserves.
                                </p>
                                <div class="more-text" style="display: none;">
                                    <p>1. Strategic Planning: At Social Cults, we don't believe in a one-size-fits-all approach. We recognize that every brand is distinct, having its own objectives, target market, and voice. Because of this, we develop specialized
                                        social media plans based on the unique goals of your company, making sure that each post, tweet, and story contributes to increasing engagement, raising brand awareness, and eventually increasing revenue.</p>
                                    <p>2. Creative Content: In the crowded world of social media, creativity is king. Our team of talented content creators, designers, and copywriters specializes in crafting visually stunning and compelling content that
                                        stops scrollers in their tracks.</p>
                                    <p>3. Audience Engagement: Social media is not just about broadcasting your message; it's about starting conversations and building relationships with your audience.</p>
                                    <p>4. Data-Driven Optimization: In the world of social media marketing, data is your best friend. Our team measures important metrics like reach, engagement, and conversion rates while monitoring the effectiveness of your
                                        social media campaigns in real-time using sophisticated analytics tools. Through the examination of this data, we can determine what is effective and ineffective and implement data-driven adjustments to guarantee
                                        that your social media endeavors consistently yield the best possible outcomes.</p>
                                    <p>5. Continuous Innovation: The social media landscape is constantly evolving, with new trends, features, and platforms emerging all the time. Whether it's experimenting with new ad formats, harnessing the power of influencer
                                        partnerships, or tapping into emerging platforms, we'll help you stay one step ahead of the competition.</p>
                                </div>
                                <a href="#" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE BLOG DESIGN AREA -->

                <!-- START SINGLE BLOG DESIGN AREA -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-blog">
                        <div class="meta-block-container">
                            <a title="Blog" href="single-blog.html">
                                <img alt="blog" src="assets/images/blog/blog3.jpg">
                            </a>
                            <div class="post-meta-block">
                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> 04 Dec 2023</a></div>
                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                            </div>
                        </div>
                        <div class="blog-description text-center">
                            <a href="single-blog.html">
                                <h3>PPC</h3>
                            </a>
                            <p>
                                Welcome to Social Cults, your gateway to unparalleled success in the world of pay-per-click (PPC) advertising. In today's digital age, PPC has emerged as a powerful tool for businesses to drive targeted traffic, generate leads, and maximize their return
                                on investment (ROI). Here's why partnering with Social Cults for your PPC needs can take your brand to the next level.
                            </p>
                            <div class="more-text" style="display: none;">
                                <p>1. Strategic Campaign Management: At Social Cults, we understand that successful PPC campaigns require more than just throwing money at keywords. That 's why we take a strategic approach to campaign management, starting
                                    with in-depth research and analysis to identify the most relevant keywords, audience segments, and ad placements for your brand. Whether it's Google Ads, Bing Ads, or social media advertising platforms like Facebook
                                    and Instagram, we 'll develop customized PPC strategies that align with your business goals and drive tangible results.</p>
                                <p>2. Compelling Ad Creatives: In the competitive world of PPC advertising, standing out from the crowd is essential. Our team of skilled copywriters and designers specializes in creating compelling ad creatives that grab
                                    attention, pique interest, and compel users to take action. Whether it 's crafting compelling ad copy, designing eye-catching display ads, or creating engaging video content, we 'll help you make a lasting impression
                                    on your target audience and drive clicks that convert.</p>
                                <p>3. Continuous Optimization: The key to PPC success lies in continuous optimization. That 's why we closely monitor the performance of your PPC campaigns in real-time, analyzing key metrics such as click-through rates, conversion
                                    rates, and cost per acquisition. By leveraging advanced analytics tools and A/B testing methodologies, we can identify what 's working, what 's not, and make data-driven optimizations to ensure that your PPC campaigns
                                    are always delivering maximum ROI.</p>
                                <p>4. Budget Management: We understand that every dollar counts when it comes to PPC advertising. That 's why we take a proactive approach to budget management, optimizing your ad spend to maximize your return on investment.
                                    Whether you 're working with a modest budget or have resources to spare, we 'll help you allocate your budget strategically to ensure that you 're getting the most bang for your buck.</p>
                                <p>5. Transparent Reporting: At Social Cults, we believe in transparency and accountability. That 's why we provide regular, detailed reports on the performance of your PPC campaigns, including key metrics, insights, and recommendations
                                    for improvement. We 'll keep you informed every step of the way, so you can see exactly how your advertising dollars are being spent and the impact they 're having on your bottom line.</p>
                            </div>
                            <a href="single-blog.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- / END SINGLE BLOG DESIGN AREA -->

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.querySelectorAll('.read-more').forEach(function(button) {
                            button.addEventListener('click', function(e) {
                                e.preventDefault();
                                var moreText = this.previousElementSibling;
                                if (moreText.style.display === "none") {
                                    moreText.style.display = "block";
                                    this.textContent = "Read less";
                                } else {
                                    moreText.style.display = "none";
                                    this.textContent = "Read more";
                                }
                            });
                        });
                    });
                </script>

                <!-- / END SINGLE BLOG DESIGN AREA -->
            </div>
        </div>
    </section>
    <!-- / END BLOG DESIGN AREA -->

    <!-- START CONTACT DESIGN AREA -->
    <section id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>contact us</h2>
                        <span class="title-divider">
                            <i class="fa fa-diamond" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row contact-form-design-area wow fadeInUp">
                <!-- START CONTACT FORM DESIGN AREA -->
                <div class="col-md-8">
                    <div class="contact-form">
                        <div class="row">
                            <form action="#" method="post">
                                <div class="form-group col-md-6">
                                    <p>Name</p>
                                    <input type="text" name="name" class="form-control" id="first-name" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Email</p>
                                    <input type="email" name="email" class="form-control" id="email" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Subject</p>
                                    <input type="text" name="subject" class="form-control" id="subject" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>number</p>
                                    <input type="text" name="number" class="form-control" id="number" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <p>Message</p>
                                    <textarea rows="6" name="message" class="form-control" id="description" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /END  CONTACT DETAILS DESIGN AREA -->
                <div class="col-md-4 ">
                    <!-- START CONTACT DETAILS DESIGN AREA -->
                    <div class="contact-details-area wow fadeInUp " data-wow-delay=".2s ">
                        <div class="col-md-12 contact-no ">
                            <div class="single-contact-details text-center ">
                                <span class="lnr lnr-phone-handset "></span>
                                <h4>phone</h4>
                                <p class="text-muted ">+91 96677 28901</p>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="single-contact-details text-center ">
                                <span class="lnr lnr-envelope "></span>
                                <h4>E-mail</h4>
                                <p class="text-muted "><a href="/cdn-cgi/l/email-protection " class="__cf_email__ " data-cfemail="02717772726d70764266776778632c616d6f ">socialcults@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <div class="single-contact-details text-center ">
                                <span class="lnr lnr-map-marker "></span>
                                <h4>Address</h4>
                                <p class="text-muted ">G69, Sec-63 Noida,India</p>
                            </div>
                        </div>
                    </div>
                    <!-- / END CONTACT DETAILS DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END CONTACT DESIGN AREA -->


    <!-- START FOOTER DESIGN AREA -->
    <footer class="footer-area wow fadeInUp " data-wow-delay="1s ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 text-center ">
                    <div class="footer-social-link text-center ">
                        <ul>
                            <li><a href="https://www.facebook.com/socialcults " target="_blank "><i class="fa fa-facebook "></i></a></li>
                            <li><a href="https://www.youtube.com/@socialcults " target="_blank "><i class="fa fa-youtube "></i></a></li>
                            <li><a href="https://www.linkedin.com/company/social-cults " target="_blank "><i class="fa fa-linkedin "></i></a></li>
                            <li><a href="https://www.instagram.com/socialcults/ " target="_blank "><i class="fa fa-instagram "></i></a></li>
                        </ul>
                    </div>
                    <span class="title-divider ">
                        <i class="fa fa-diamond " aria-hidden="true "></i>
                    </span>
                    <div class="footer-text ">
                        <h6> | Social cults 2016.Developed by 🤍 |</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END CONTACT DETAILS DESIGN AREA -->

    <!-- START SCROOL UP DESIGN AREA -->
    <div class="scroll-to-up ">
        <div class="scrollup ">
            <span class="lnr lnr-chevron-up "></span>
        </div>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->

    <!-- LATEST JQUERY -->
    <script data-cfasync="false " src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js "></script>
    <script src="assets/js/jquery.min.js "></script>
    <!-- BOOTSTRAP JS -->
    <script src="assets/bootstrap/js/bootstrap.min.js "></script>
    <!-- PROGRESS JS  -->
    <script src="assets/js/jquery.appear.js "></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js "></script>
    <!-- MIXITUP JS -->
    <script src="assets/js/jquery.mixitup.js "></script>
    <!-- MAGNIFICANT JS -->
    <script src="assets/js/jquery.magnific-popup.min.js "></script>
    <!-- STEALLER JS -->
    <script src="assets/js/jquery.stellar.min.js "></script>
    <!-- YOUTUBE JS -->
    <script src="assets/js/jquery.mb.YTPlayer.min.js "></script>
    <script type="text/javascript ">
        $('.player').mb_YTPlayer();
    </script>
    <!-- COUNTER UP JS -->
    <script src="assets/js/jquery.waypoints.min.js "></script>
    <script src="assets/js/jquery.counterup.min.js "></script>
    <!-- LIGHTBOX JS -->
    <script src="assets/js/lightbox.min.js "></script>
    <!-- WOW JS -->
    <script src="assets/js/wow.min.js "></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js "></script>
</body>

</html>




<!-- 
<div class="col-md-8">
                    <div class="contact-form">
                        <div class="row">
                            <form action="#" method="post">
                                <div class="form-group col-md-6">
                                    <p>Name</p>
                                    <input type="text" name="name" class="form-control" id="first-name" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Email</p>
                                    <input type="email" name="email" class="form-control" id="email" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>Subject</p>
                                    <input type="text" name="subject" class="form-control" id="subject" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <p>number</p>
                                    <input type="text" name="number" class="form-control" id="number" required="required">
                                </div>
                                <div class="form-group col-md-12">
                                    <p>Message</p>
                                    <textarea rows="6" name="message" class="form-control" id="description" required="required"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                 -->