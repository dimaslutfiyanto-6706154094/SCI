<html>
  <head>
    <title>SCI | Budaya Nusantara</title>
	<link href="<?php echo base_url('files/css/styleLogin.css') ?>" rel="stylesheet" type="text/css">
  </head>	
  <body>
	<div class="container">
		<div class="main">
	      <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
			<h2>Selamat Datang di <br><i>Storage Of Culture Information</i></h2><hr/>		
			
			<label>Username :</label>
			<input id="name" name="username" placeholder="Username" type="text" />
			
			<label>Password :</label>
			<input id="password" name="password" placeholder="Password" type="password" />
			
			<input type="submit" name="submit" id="submit" value="Login" />
		  </form>
		</div>
   </div>
  </body>
</html>