<html>
<body>
	<h2>Hello <?php echo $user_info['first_name'] . ' ' . $user_info['last_name'];  ?>,</h2>
	<h3><?php echo sprintf(lang('email_password_changed_heading'), $identity);?></h3>
	<br>
	<p><?php echo sprintf(lang('email_password_changed_message'));?></p>
</body>
</html>
