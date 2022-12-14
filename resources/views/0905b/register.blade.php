<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Flat Sign Up Form Responsive Widget Template| Home :: W3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="assets/css/register_style.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header-->
	<div class="header-w3l">
		<h1> </h1>
	</div><br>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			<form action="{{route('register-process')}}" method="post">
				@if (Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>                            
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>                            
                        @endif
                        @csrf
						<div class="form-info">
				<input type="text" class="text" name="username" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" >
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
				<input type="text" class="text" name="fullname" value="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" >
					<span class="icon3"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input type="text" class="text" name="address" value="Adress" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Adress';}" >
					<span class="icon4"><i class="fa fa-user" aria-hidden="true"></i></span><br>
				<input type="text" class="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Adress';}" >
					<span class="icon5"><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
				<input type="text" class="text" name="phone" value="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" >
					<span class="icon6"><i class="fa fa-phone" aria-hidden="true"></i></span><br>				    						
					<input type="submit" value="REGISTER">
				</div>	
			</form>
		</div>
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">
	<p>&copy; 2016 Flat Sign Up Form . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->

</body>
</html>