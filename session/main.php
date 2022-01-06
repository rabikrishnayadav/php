<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>All About Session</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>
	<body>
		<h2 class="text-center font-weight-bold text-white bg-secondary">Learn About Session in PHP</h2>
		<div class="container">
			<h4>What is a Session?</h4>
			<p>
				A session is a way to store information(in variables) to be used across multiple pages.<br>Unlike a cookie, the information is not stored on the users computer.<br>
			</p>
			<hr>
			<h3 class="text-center">Uses of Session</h3>
			<h5>Session Management:</h5>
			<p>
				Cookies are stored on user's computer it is possible for an attacker to easily modify a cookie content to insert potentially harmful data in your application that might break your application.
			</p>
			<h5>User Identification:</h5>
			<p>
				When you work with an application, you open it, do some changes, and then you close it. This is much like a session.<br>The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem:<br> The web server does not know who you are or what you do, because the HTTP address doesn't maintain state.<br>
			</p>
			<h6>
			You can solve both of these issues by using the PHP session. A php session stores data on the server rather than user's computer.<br>In a session based environment, every user is identified through a unique number called session identifier or SID.<br>This unique session ID is used to link each user with their own information on the server like emails, post etc.<br>
			</h6>
			<hr>
			<h4 class="text-center">CRUD Operation of Session</h4>
			<h6>
			For Start the Session.
			</h6>
			We have to write each and every file in first line this syntax for start the session.<br>
			Syntax:
			<code>
			session_start();
			</code><br><br>
			<h6>
			For Create the Session.
			</h6>
			Syntax:
			<code>
			$_SESSION['variable_name'];
			</code><br>
			Example:<br>
			<code>
			$_SESSION['username'] = 'Rabi Kumar yadav'; <br>
			$_SESSION['age'] = 25;
			</code><br>
			<kbd>Result:</kbd>username|s:16:"Rabi Kumar yadav";age|i:25;<br>
			// this result will show on your host there a 'tmp' folder inside that folder for each user has SID file it's name start like a 'sess_' just open that and see.<br>
			<br>
			<h6>For Read the Session.</h6>
			Syntax & Example:
			<code>
			session_start();<br>
			echo $_SESSION['username'];<br>
			echo $_SESSION['age'];<br>
			</code><br>
			<kbd>Result:</kbd>Rabi kumar yadav 25<br>
			<br>
			<h6>For Update the Session.</h6>
			For update the session there is no seperate variable so we have to use same variable which is created and just change that value for Update.<br>
			Syntax & Example:
			<code>
			session_start();<br>
			$_SESSION['username'] = "Rabi Krishna Yadav;
			</code><br>
			<kbd>Result:</kbd>username|s:18:"Rabi Krishna yadav";age|i:25;<br>
			// this result will show on your host there a 'tmp' folder inside that folder for each user has SID file it's name start like a 'sess_' just open that and see.<br><br>
			<h6>For Delete the Session.</h6>
			Syntax:
			<code>
			session_start();<br>
			unset($_SESSION['vriable_name']); // this will delete only one variable<br>
			session_destroy(); // this will delete all the session which is created befor<br>
			</code>
			Example:
			<code>
			unset($_SESSION['age']);<br>
			session_destroy();<br>
			</code><br><hr>
			<h4 class="text-center">For see the practical of examples</h4>
			<ol>
				<li>For Create Session <a href="session_create.php">Click here</a></li>
				<li>For Read Session <a href="session_read.php">Click here</a></li>
				<li>For Update Session <a href="session_update.php">Click here</a></li>
				<li>For Read After Updated Session <a href="session_read.php">Click here</a></li>
				<li>For Delete Session <a href="session_delete.php">Click here</a></li>
			</ol>
		</div>
		<hr><br>
		<h2 class="text-center font-weight-bold bg-success">Thanks</h2>
	</body>
</html>