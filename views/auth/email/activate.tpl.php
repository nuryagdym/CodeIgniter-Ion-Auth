<html>
<body>
	<h3><?php echo sprintf(lang('email_activate_heading'), $identity);?></h3>
	<p><?php echo sprintf(lang('email_activate_subheading'), anchor('auth/activate/'. $id .'/'. $activation, lang('email_activate_link')));?></p>
	<br>
	<p><?php echo sprintf(lang('email_activate_message'), base_url('auth/activate/'. $id .'/'. $activation));?></p>
</body>
</html>
