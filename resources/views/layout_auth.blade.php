<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ 'Login ' }}</title>
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="navigation">
  <div class="nav-container" style="display: flex;justify-content: space-between;">
    <div class="brand">
      <a href="#!"><img src="assets/img/logo.png" style="width: 50%;min-width: 138px;" /></a>
    </div>
    <div>
    <nav style="font-size: 0.8rem;">
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#!">NEWS</a>
        </li>
        <li>
          <a href="#!">GUIDE</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">GAME INFO</a>
            </li>
            <li>
              <a href="#!">GAME WIKI</a>
            </li>
            <li>
              <a href="#!">VIETNAMESE GUIDE</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">COMMUNITY</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">FORUM</a>
            </li>
            <li>
              <a href="#!">FACEBOOK PAGE</a>
            </li>
            <li>
              <a href="#!">FACEBOOK GROUP</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">DOWNLOADS</a>
        </li>
        <li>
          <a href="#!">THE CONQUEROR</a>
        </li>
        <li>
          <a href="#!">SUPPORT</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">FAQS</a>
            </li>
            <li>
              <a href="#!">RULES</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
	</div>
    <div class="login-register">
      <a href="#!"><img src="assets/img/login.png" style="width: 30%;" /></a>
      <a href="#!"><img src="assets/img/register.png" style="width: 30%;" /></a>
    </div>
  </div>
</section>
@yield('content')
<section>
	<div class="container">
		<div class="row" style="min-height: 100px;width:100%;background-color: #1b0f08;">
			<div class="col" style="height:auto;padding: 20px;margin:0 auto;position: relative;text-decoration: none;text-align: center;">
				<a href="#"><i class="fa fa-facebook fa-1x" style="border: 2px solid white;border-radius: 360px;padding: 10px;margin: 5px;color: white;"></i></a>
				<a href="#"><i class="fa fa-facebook fa-1x" style="border: 2px solid white;border-radius: 360px;padding: 10px;margin: 5px;color: white;"></i></a>
				<a href="#"><i class="fa fa-facebook fa-1x" style="border: 2px solid white;border-radius: 360px;padding: 10px;margin: 5px;color: white;"></i></a>
				<a href="#"><i class="fa fa-facebook fa-1x" style="border: 2px solid white;border-radius: 360px;padding: 10px;margin: 5px;color: white;"></i></a>
				<a href="#"><i class="fa fa-facebook fa-1x" style="border: 2px solid white;border-radius: 360px;padding: 10px;margin: 5px;color: white;"></i></a>
			</div>
		</div>
		<div class="row" style="min-height: 100px;width:100%;background-color: black;">
			<div class="col" style="height:auto;padding: 20px;margin:0 auto;position: relative;color: white;text-align: center;">
				<img src="assets/img/footer.png" />
				<br>
				<a href="#" class="footer-link">TERM OF USE</a> | <a href="#" class="footer-link">ABOUT US</a> | <a href="#" class="footer-link">PRIVACY POLICY</a> | <a href="#" class="footer-link">SUPPORT</a>
				<div class="spacer" style="height: 20px;"></div>
				<span>Copyright © 2019 USERJOY.CO.LTD.WAVEGAME ALL RIGHTS RESERVED</span><br>
<span>All Copyrights and trademarks are the property of their respective owner</span>
			</div>
		</div>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>

@yield('js')
</body>
</html>