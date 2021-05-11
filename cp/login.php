
<?php
session_start();
if(isset($_POST['Login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == 'admin' && $password=='121307'){
		$_SESSION["login"] = "Freelancer Nishad";
		header('location:./');
	}
	
}

 ?>
<style>@import url("https://fonts.googleapis.com/css?family=Raleway:400,700");
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
padding:0;
}

body {
  min-height: 100vh;
  font-family: "Raleway", sans-serif;
}

.container {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
/* .container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after {
  margin-left: 200px;
  transform-origin: -200px 50%;
  transition-delay: 0s;
} */

.container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after {
  margin-left: 200px;
  transform-origin: -200px 50%;
  transition-delay: 0s;
}
.center, .container:active .center {
  opacity: 1;
  transition-delay: 0.2s;
}
.top:before, .top:after, .bottom:before, .bottom:after {
    margin-left: 200px !important;
    transform-origin: -250px 50% !important;
    content: "";
    display: block;
    position: absolute;
    width: 200vmax;
    height: 200vmax;
    top: 50%;
    left: 54%;
    margin-top: -100vmax;
    transform-origin: 0 50%;
    transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
    z-index: 10;
    opacity: 0.65;
    transition-delay: 0.2s;
}

.top:before {
  transform: rotate(45deg);
  background: #e46569;
}
.top:after {
  transform: rotate(135deg);
  background: #ecaf81;
}

.bottom:before {
  transform: rotate(-45deg);
  background: #60b8d4;
}
.bottom:after {
  transform: rotate(-135deg);
  background: #3745b5;
}

.center {
  position: absolute;
  width: 400px;
  height: 400px;
  top: 50%;
  left: 50%;
  margin-left: -200px;
  margin-top: -200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 30px;
  opacity: 1;
  transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
  transition-delay: 0s;
  color: #333;
}
.center input {
  width: 100%;
  padding: 15px;
  margin: 5px;
  border-radius: 1px;
  border: 1px solid #ccc;
  font-family: inherit;
}
.forgot.float-left {
    margin-top: 15px;
    width: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: flex-start;
    justify-content: space-evenly;
    align-items: flex-start;
}
.forgot.float-left a {
    text-decoration: none;
    font-size: 13px;
    line-height: 23px;
    color: blue;
    font-weight: 600;
    padding: 2px 14px;
}
.forgot.float-left a:hover {
    color: red;
}
input.btn.btn-info {
    background: linear-gradient(
121deg
, rgb(126 135 207) 3%, rgb(152 209 227) 31%, rgb(122 117 178) 49%, rgb(146 174 193) 68%, rgb(243 203 173) 85%, rgb(238 155 158) 100%);
transition:all 0.5s;
cursor: pointer;
    color: white;
}
input.btn.btn-info:hover {
    background: linear-gradient(
        -121deg
, rgb(126 135 207) 3%, rgb(152 209 227) 31%, rgb(122 117 178) 49%, rgb(146 174 193) 68%, rgb(243 203 173) 85%, rgb(238 155 158) 100%);
}
</style>
<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
      <img style='width: 80px;
    margin-bottom: 16px;' src="https://www.sunrise-escortprofiles.com/images/logo.png" alt="">
    <h2>Sign In</h2>
	
    <form action="" method='POST'>
    <input type="text" name='username' placeholder="email"/>
    <input type="password" name='password' placeholder="password"/>
    <input type="submit" name='Login' class='btn btn-info' value="LOGIN"/>
    </form>
<div class="forgot float-left">
    <a href="#"> I forgot my password!</a>
    <a href="#"> Sing Up</a>
    </div>
    <h2>&nbsp;</h2>
  </div>
</div>

