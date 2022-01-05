<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cookies</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>
	<body>
		<h2 class="text-center bg-info" style="height: 50px;">All About Cookies</h2>
		<div class="container">
			<h4>What is cookie?</h4>
			<p>
				Cookies are used to store the information of a web page in a remote browser, so that when the same user comes back to that page, that information can be retrieved from the browser itself.
			</p>
			<h3 class="text-center">Uses of cookie</h3><hr>
			<h5>Session Management:</h5>
			<p>
				Cookies are widely used to manage user sessions.<br>For example,<br>When you use an online shopping cart, you keep adding items in the cart and finally when you checkout.<br>All of those items are added to the list of items you have purchased.<br>This can be achieved using cookies.
			</p>
			<h5>User Identification:</h5>
			<p>
				Once a user visits a webpage, using cookies, that user can be remembered.<br>And later on, depending upon the search/visit pattern of the user, content which the user likely to be visited are served.<br>A good example of this is 'Retargetting'.<br>A concept used in online marketing, where depending upon the user's choice of content, advertisements of the relevant product, which the user may buy, are served.
			</p>
			<h5>Tracking / Analytics:</h5>
			<p>
				Cookies are used to track the user, Which in turn, is used to analyze and serve various kind of data of great value, like location, technologies<br>(e.g. browser, OS) from where the user visited, how long's they stayed on various pages etc.
			</p>
			<hr>
			<h6>For Create Cookie</h6>
			Syntax:
			<code>
			setcookie(name, value, expire, path, domain, secure, httponly);
			</code><br>
			Where parameters are,<br><br>
			1)Manodatory parameters<br>
			name:- set name of the cookie<br>
			value:- set value of the cookie<br><br>
			2) Optional Paramenters<br>
			expire:- set the expiration date of cookie in seconds<br>
			path:- full URL of the containing file<br>
			domain:- name of the URL<br>
			secure:- set 1 for cookie will show on only secure connection<br>
			httponly:- it will show on only http connection<br><br>
			Example 1:
			<code>
			setcookie('username', 'rabiadav');
			</code><br>
			Example 2:
			<code>
			setcookie('name', 'Rabi Kr Yadav', time()+86400);
			</code><br><br>
			<h6>For Read Cookie</h6>
			Syntax:
			<code>
			$_COOKIE['username'];
			</code><br>
			Example:
			<code>
			echo $_COOKIE['username'];
			</code><br><br>
			<h6>For Update Cookie</h6>
			for Update there is no any variable, for update again we have to use se setcookie and there we will use new value in that cookie and make sure cookie name is same as before created.<br>
			Example:
			<code>
			setcookie('username', 'Rabi Krishna Yadav', time()+600);
			</code><br><br>
			<h6>For Delete Cookie</h6>
			for delete the cookie set name of that cookie and leave other feilds blank or fill will 'null'.<br>
			Example 1:
			<code>setcookie('name', null,); // this is for delete all the cookie which is created or update with username.
			</code><br>
			Example 2:
			<code>setcookie('username', null, time()-600); // this is for delete all the cookie which is created or update with username. and it's time is in negative it mean before user visited time it's time is expire.
			</code><br><br><hr>
		</div>
		<h2 class="text-center bg-success">Thanks</h2>
	</body>
</html>