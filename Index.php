<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
	<head>
		<title>..-Bienvenue-..</title>
		<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
		<meta http-equiv='content-style-type' content='text/css'>

		<?php
			//a mettre dans le debut de l'index:
			session_start();
			//apres session start
			/* if (ereg("MSIE", $_SERVER["HTTP_USER_AGENT"]))
			{
				$_SESSION['ie']=1;
			}
			//exemple d'utilisation
			if ($_SESSION['ie']==1)
			{
				echo "<link title='test' type='text/css' rel='stylesheet' href='Fichiers/IE.css'>";
			}
			else
			{ */
				echo "<link title='test' type='text/css' rel='stylesheet' href='Fichiers/FF.css'>";
			// }
		?>

		<?php
			$jour=date('d/m/Y');
			$heure=date('H:i');
		?>
	</head>
	<body>

		<center>
			<div id="container">
				<div id="Baniere" class="clear">
				</div>
				<div id="g_menu">
					<div style="padding-top: 38px;">
					<div class='menu'>Actualite</div>
						<ul>
							<li><a href='index.php' class='a_g'> Acceuil</a></li>
							<li><a href='index.php?page=mes_screen' class='a_g'> Mes screens</a></li>
						</ul>
					</div>
				</div>	
				<div id="marquee">
					<div style="padding-top: 25px;">
					<center>
					<marquee width='408' ><b>
					<font face="verdana" style="font-size:13px" COLOR="#333333">
					Nahelya : lvl 68 ; Bucheron 76; Mineur 85; Forgeur de Dagues 85; Sculpteur d'Arc 31; Forgeur de Bouclier 10
					</font>
					</b></marquee>
					</center>
					</div>
				</div>
				<div id="d_message">
				</div>
				<div id="d_menu">
				</div>
					
				<div id="contenance" class="clear">
					<div id="g_millieu">
					<?php include('cote_gauche.php');?>
					</div>
					<div id="millieu_page">
						<font style='font-size:10px' face='verdana' color='#ffffff'>
							<?php include('page/centre.php');?>
						</font>
					</div>
					<div id="d_millieu">
					</div>
					<div class="spacer">&nbsp;</div>
				</div><!-- contenance -->
				<div id="contenance" class="clear">
						<div id="g_millieu" style="padding-top: 20px;"><?php include('page_bisbis/centre_bisbis.php');?>
						</div>
						<div id="millieu_page_bis">		
							<font style='font-size:10px' face='verdana' color='#ffffff'>
								<?php include('page_bis/centre_bis.php');?>
							</font>
						</div>
						<div id="d_millieu"></div>
					<div class="spacer">&nbsp;</div>
				</div><!-- contenance Bis-->
				<div id="copiryght" class="clear">
					<div style="padding-top: 60px;">
						<u><b><font style='font-size:9px' face='verdana' color='#ffffff'>Copyright � 2005-2006 - Powered by Galcian - Webmaster GalciaN</font></b></u>
					</div>
				</div>
			</div><!-- container -->
		</center>
	</body>
</html>