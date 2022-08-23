<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login to Everdwell</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="assets/css/login_style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="{{route('login-process')}}" id="login-form" method="POST">
  @if(Session::has('success'))
						<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif
					@if (Session::has('fail'))
						<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif
					@csrf
  <div class="heading">Fashion Shop</div>
  <div class="left">
    <label for="email">Email/UserName</label> <br />
    <input type="text" name="username" id="email" > <br />
    <label for="password">Password</label> <br />
    <input type="password" name="password" id="pass"> <br />
    <button type="submit" value="Login"></button>
    <a class="btn btn-primary" href="{{url('/')}}">Back</a>
  </div>
  <div class="right">
    <div class="connect">Connect with</div>
    <a href="" class="facebook">
<!--       <span class="fontawesome-facebook"></span> -->
      <i class="fa fa-facebook" aria-hidden="true"></i>
    </a> <br />
    <a href="" class="twitter">
<!--       <span class="fontawesome-twitter"></span> -->
      <i class="fa fa-twitter" aria-hidden="true"></i>
    </a> <br />
    <a href="" class="google-plus">
<!--       <span class="fontawesome-google-plus"></span> -->
      <i class="fa fa-google-plus" aria-hidden="true"></i>
    </a>
  </div>
</form>
<!-- partial -->
  <script  src="assets/css/login_script.js"></script>

</body>
</html>
