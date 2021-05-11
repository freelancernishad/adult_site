<?php
session_start();

if(isset($_SESSION["login"])){
	header('location:cp');
}

 ?>
 <!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home - DotOrbit</title>
        <link rel="icon" href="assets/img/icon.png" type="image/png" sizes="16x16" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" id="camera-css" href="assets/css/camera.css" type="text/css" media="all" />
        <link rel="stylesheet" href="assets/css/w3.css" />
        <link rel="stylesheet" href="assets/css/square1.css" />
        <link rel="stylesheet" href="assets/css/util.css" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
		<style type="text/css">
		li.mainMenuFlexItem.HoverMenu {
    position: relative;
}

ul.subMenu {
    position: absolute;
    top: 30px;
    left: 0px;
    background: #292828;
    z-index: 999;
    list-style: none;
    padding: 0;
    width: 200px;
    border-radius: 3px;
}

		ul.subMenu {
    display: none;
}

li.mainMenuFlexItem.HoverMenu:hover .subMenu {
    display: block;
}

ul.subMenu li a {
    display: block;
    /* background: red; */
    padding: 6px 13px;
    color: white;
    font-weight: 500;
    border-bottom: 1px solid #8e8e8e;
    text-decoration: none;
    font-size: 14px;
}
ul.subMenu li a:hover {
    background: #4a4848;
}
li.mainMenuFlexItem.HoverMenu:hover a {
    background: #292828;
    border-radius: 6px;
    color: white;
}
.teamFlexItem{
text-align:left !important;
}
.singupSection {
    background-color: #eec1abbd;
    padding-bottom: 50px;
}
div#singup {
    text-align: center;
    margin: 42px 0;
}

button.btn.btn-info.singupBtn {
    font-size: 27px;
}
.mainHeaderFlexItem.mobileMenu img {
    width: 55px;
    height: 33px;
}.searchBtn {
    width: 152px;
}
.d-flex.justify-content-center.align-items-center {
    width: 100%;
    margin-top: 50px;
    margin-bottom: 50px;
}h3.wow.bounceIn {
    color: black;
    font-size: 20px;
    border-bottom: 3px solid #212529;
    display: table;
    line-height: 42px;
    margin-bottom: 16px;
}.media-body ul li {
    color: #3f89af;
}
		</style>
		
    </head>
    <body>
        <header id="header">
            <div class="topHeaderWrapper">
                <div class="container">
                    <div class="topHeaderFlexContainer">
                        <div class="topHeaderFlexItem">
                            <p class="phoneNumber">+8801909756552</p>
                        </div>
                        <div class="topHeaderFlexItem">
                            <ul class="socialFlexContainer">
                                <li class="socialFlexItem">
                                    <a class="socialIcon" href="#"><i class="fab fa-facebook-f"></i></a><span class="socialToolTip">Facebook</span>
                                </li>
                                <li class="socialFlexItem">
                                    <a class="socialIcon" href="#"><i class="fab fa-twitter"></i></a><span class="socialToolTip">Twitter</span>
                                </li>
                                <li class="socialFlexItem">
                                    <a class="socialIcon" href="#"><i class="fab fa-linkedin-in"></i></a><span class="socialToolTip">Linkedin</span>
                                </li>
                                <li class="socialFlexItem">
                                    <a class="socialIcon" href="#"><i class="fab fa-pinterest-p"></i></a><span class="socialToolTip">Pinterest</span>
                                </li>
                                <li class="socialFlexItem">
                                    <a class="socialIcon" href="#"><i class="fab fa-google-plus-g"></i></a><span class="socialToolTip">Google+</span>
                                </li>
                                <li class="socialFlexItem">
                                    <a class="socialIcon" href="#"><i class="fab fa-dribbble"></i></a><span class="socialToolTip">Dribbble</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mainHeaderWrapper">
                <div class="container ownContainer">
                    <div class="mainHeaderFlexContainer">
                        <div class="mainHeaderFlexItem mobileMenu">
                            <img src="https://www.sunrise-escortprofiles.com/images/logo.png" alt="" />
                            <label class="navBar" for="navBar"><i class="fas fa-bars" aria-hidden="true"></i></label>
                        </div>
                        <div class="mainHeaderFlexItem">
                            <input type="checkbox" id="navBar" />
                            <ul class="mainMenuFlexContainer">
                                <li class="mainMenuFlexItem">
                                    <a class="mainMenuLink" href="index.php"><i class="fas fa-home"></i>&nbsp; Home</a>
                                </li>
                                <li class="mainMenuFlexItem"><a class="mainMenuLink" href="search_models.php">SEARCH MODELS</a></li>
                                <li class="mainMenuFlexItem HoverMenu"><a class="mainMenuLink" href="#">ABOUT US</a>
								<ul class='subMenu'>
								<li><a href="privacy.php">Privacy</a></li>
								<li><a href="terms.php">Terms & Conditions</a></li>
								</ul>
								
								</li>
                                <li class="mainMenuFlexItem"><a class="mainMenuLink" href="contact-us.php">CONTACT US</a></li>
                                <li class="mainMenuFlexItem HoverMenu"><a class="mainMenuLink" href="#">ACCOUNT</a>
								<ul class='subMenu'>
								<li><a href="login.php">Advertise Login</a></li>
								<li><a href="login.php">User Login</a></li>
								</ul>
								
								</li>
								</li>
                                <li class="mainMenuFlexItem"><a class="mainMenuLink" href="singup.php">SIGN UP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

 

 

        </header>
