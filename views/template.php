<html>
	<head>
		<title>:: Gennex :: Portal ::</title>
		<link rel='stylesheet' href='<?php echo BASE_URL; ?>/assets/css/inicio.css'>
		<link rel='stylesheet' href='<?php echo BASE_URL; ?>/assets/css/estilo.css'>
		<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/images/favicon.ico"/>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
		<meta charset='utf8'>
		<meta name="viewport" content="width=device-width">


	</head>
	<body>
	<div id='top'>
			<div id='menu'>
				<a href=# title="MENU"><img src="<?php echo BASE_URL; ?>/assets/images/menu.png" class='imgmenu' ></a>
				<div id='menuprincipal'>
					<div class="itemmenu">
						<img src="<?php echo BASE_URL; ?>/assets/images/channel.png" class="imgitemmenu">
					</div>
					
					<div class="itemmenu">
						<img src="<?php echo BASE_URL; ?>/assets/images/campaign.png" class="imgitemmenu">
					</div>
					
					<div class="itemmenu">
						<img src="<?php echo BASE_URL; ?>/assets/images/dialed.png" class="imgitemmenu">
					</div>
					
					<div class="itemmenu">
						<img src="<?php echo BASE_URL; ?>/assets/images/stats.png" class="imgitemmenu">
					</div>
					
					<div class="itemmenu">
					</div>
					
					<div class="itemmenu">
					</div>
					
					<div class="itemmenu">
					</div>
					
					<div class="itemmenu">
						<img src="<?php echo BASE_URL; ?>/assets/images/vinyls.png" class="imgitemmenu">
					</div>
					
					<div class="itemmenu">
						<a href="<?php echo BASE_URL; ?>/setup"><img src="<?php echo BASE_URL; ?>/assets/images/settings2.png" class="imgitemmenu">
						</a><
					</div>
				</div>
			</div>

			<div id='divlogo'>
				<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>/assets/images/logo.png" class='logo' ></a>
			</div>

			<div id='divuser'>
				<a href=#>
					<img src="<?php echo BASE_URL; ?>/assets/images/user.png" class='imguser'>
				</a>
				<div class='menuuser'>
					<a href="<?php echo BASE_URL.'/login/logout'; ?>">
						<div class="button'">
							<img src="<?php echo BASE_URL; ?>/assets/images/logout.png" class='imglogout.png'>Exit
						</div>
					</a>
				</div>
			</div>

			<div class='divbemvido'>
				Bem Vindo <br>
				<?php echo $viewData['user_name']; ?>
			</div>
			<a href=# title="A UM NOVO ALERTA"><div id='divalert'>
				<img src="<?php echo BASE_URL; ?>/assets/images/alert.png" class='imgalert'>
			</div></a>

			<div class='dbord'>
				<?php echo $viewData['title']; ?>
			</div>

		</div>

        <div class="area"> 
            <?php $this->loadViewinTemplate($viewName,$viewData); ?>;
        </div>

	</body>
</html>