<html>
<body>
	<h2>Hello <?php echo $user_info['first_name'] . ' ' . $user_info['last_name'];  ?>,</h2>
	<h1><?php echo sprintf(lang('email_forgot_password_heading'), $identity);?></h1>
	<p><?php echo sprintf(lang('email_forgot_password_subheading'), anchor('auth/reset_password/'. $forgotten_password_code, lang('email_forgot_password_link')));?></p>
	<br>
	<p><?php echo sprintf(lang('email_forgot_password_message'), base_url('auth/reset_password/'. $forgotten_password_code));?></p>
</body>
</html>
