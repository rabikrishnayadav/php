<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Send Mail</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<h2 class="text-center font-weight-bold bg-info p-2">Send Mail from localhost XAMPP using PHP<br></h2>
	<div class="container">
		<h4>How to send mail from localhost XAMPP</h4>
		To send mail from localhost xampp using Gmail, configure XAMPP after installing it.<br>Follow the following steps.<br>
		<h5 class="font-weight-bold">Open XAMPP Installation Directory</h5><br>
		<h6 class="font-weight-bold">
			1) Goto C:\xampp\php and open the php.ini file.
		</h6>
		Find 'mail function' by pressing <kbd>ctrl+f</kbd>
		Search and pass the following values:<br>
		SMTP=smtp.gmail.com<br>
		smtp_port=587<br>
		sendmail_from = write_your_Gmail_id@gmail.com<br>
		sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\"-t"<br>
		<h6 class="font-weight-bold">
			2) Now, Goto C:\xampp\sendmail and open the sendmail.ini file.
		</h6>
		Find 'sendmail' by pressing <kbd>ctrl+f</kbd>
		Search and pass the following values:<br>
		smtp_server=smtp.gmail.com<br>
		smtp_port=587 (or 25 use any of them)<br>
		error_logfile=error.log<br>
		debug_logfile=debug.log<br>
		auth_username=write_your_Gmail_id@gmail.com<br>
		auth_password=Wrote_your_Gmail_password<br>
		force_sender=write_your_Gmail_id@gmail.com(it's optional)<br>
		<h6 class="font-weight-bold">
			3)Open your gmail account dashboard
		</h6>
		<p class="font-weight-bold">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:- Turning on "less sucure apps" settings as mailbox user
		</p>
		Go to your(Google Account).<br>
		On the left navigation panel,Click Security<br>
		On the bottom of the page, in the less secure app access panel, Click Turn ON access.<br>
		If you don't see this setting, your administrator might have turned off less secure app account access(check the instruction above).<br>
		Click the <kbd class="bg-success">Save</kbd>button.<br>
		** Now your email will be sent successfully.<br>
		For Saving the time just <a href="https://myaccount.google.com/u/3/security?pli=1&mlr=1">Click Here</a> it will directly redirect to google security setting.<br>
		<hr>
		<br>
		<h4>The Actual php Script To send Mail</h4>
		<code>
		$to_email = 'receipient_email@gmail.com';<br>
		$subject = "Simple Email test via php";<br>
		$body = "Hi, This is test email send by php script";<br>
		$headers = "From: sender_email@gmail.com";<br>
		if (mail($to_email, $subject, $body, $headers)) {<br>
			echo "Email successfully sent to".$to_email;<br>
		}else{<br>
			echo "Email sending failed...";<br>
		}<br>
		</code>
	</div><br><hr>
	<h2 class="text-center font-weight-bold bg-success">Thanks</h2>
</body>
</html>