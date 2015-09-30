<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

<title>CMS Login</title>

<meta name="description" content="Website Info" />
<meta name="keywords" content="Website Info" />

<link rel="stylesheet" href="<?php echo base_url(); ?>css/screen.css" type="text/css" media="screen, projection" /> 
<link rel="stylesheet" href="<?php echo base_url(); ?>css/admin_styles.css" type="text/css" media="screen, projection" /> 

</head>

<body>
<div class="container">

<div class="span-10">
<h1>Update your password</h1>	

<?php if(isset($failed)): echo '<p class="error">'.$failed.'</p>'; endif; ?></p>

<?php if(!isset($success)):?>
	<?php
	echo form_open('admin/login/set_new_password'). "\n";
	echo form_password('password', 'Password'). "\n";
	echo form_password('password2', 'Re-enter Password'). "\n";
	echo form_hidden('userid', $form);
	echo form_submit('submit', 'Submit'). "\n";
	echo form_close(). "\n\n";

	echo validation_errors('<p class="error" >');
	?>
<?php else: echo $success; endif;?>	
	
</div>

</div>
	</body>
</html>