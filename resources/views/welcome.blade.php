<!DOCTYPE HTML>
<!--
	@author: groupe8
-->
<html>
	<head>
		<title>bde utt</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/main.css" />

		<link rel="stylesheet" href="{{asset('../winkel/css/open-iconic-bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('../winkel/css/animate.css')}}">
		
		<link rel="stylesheet" href="{{asset('../winkel/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('../winkel/css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('../winkel/css/magnific-popup.css')}}">
	
		<link rel="stylesheet" href="{{asset('../winkel/css/aos.css')}}">
	
		<link rel="stylesheet" href="{{asset('../winkel/css/ionicons.min.css')}}">
	
		<link rel="stylesheet" href="{{asset('../winkel/css/bootstrap-datepicker.css')}}">
		<link rel="stylesheet" href="{{asset('../winkel/css/jquery.timepicker.css')}}">
	
		
		<link rel="stylesheet" href="{{asset('../winkel/css/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('../winkel/css/icomoon.css')}}">
		<link rel="stylesheet" href="{{asset('../winkel/css/style.css')}}">

		<script>
			function show(id) {
				var div = document.getElementById(id);
				if (div.style.display === "none") {
					div.style.display = "block";
				} else {
					div.style.display = "none";
				}
			}
            function hide(id) {
				var div = document.getElementById(id);
				div.style.display = "none";
			}
			function toggle(idPlus,idRes) {
				var pPlus = document.getElementById(idPlus);
				var pRes = document.getElementById(idRes);
				
				if (pPlus.style.display === "none") {
					pPlus.style.display = "block";
					pRes.style.display = "none";
				} else {
					pPlus.style.display = "none";
					pRes.style.display = "block";
				}
			}
            function soit(id1,id2) {
				var divAff = document.getElementById(id1);
				var divSupp = document.getElementById(id2);
				
				divAff.style.display = "block";
				divSupp.style.display = "none";

			}		
		</script>

		<script>
	function setCookie(cname,cvalue,exdays) {
	  var d = new Date();
	  d.setTime(d.getTime() + (exdays*24*60*60*1000));
	  var expires = "expires=" + d.toGMTString();
	  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function getCookie(cname) {
	  var name = cname + "=";
	  var decodedCookie = decodeURIComponent(document.cookie);
	  var ca = decodedCookie.split(';');
	  for(var i = 0; i < ca.length; i++) {
	    var c = ca[i];
	    while (c.charAt(0) == ' ') {
	      c = c.substring(1);
	    }
	    if (c.indexOf(name) == 0) {
	      return c.substring(name.length, c.length);
	    }
	  }
	  return "";
	}

	function checkCookie() {
	  var user=getCookie("username");
	  if (user != "") {
	    alert("Welcome again " + user);
	  } else {
	     user = prompt("Please enter your name:","");
	     if (user != "" && user != null) {
	       setCookie("username", user, 30);
	     }
	  }
	}
	</script>
	</head>

	<body onload="checkCookie()">
		@include('header')

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>bde IUI</h1>
					<p>Le site officiel du BDE de l'ucac-icam.</p>
				</div>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<img src="../images/bde2.jpg" class="icon"/>
						<h2>Qu'est ce que BDE IUI ?</h2>
						<p>Qu'est ce que le BDE ? Qui sommes nous ? 
							Nous sommes l'association étudiante de l'IUI et 
							nous avons pour but de fédérer les étudiants de cette 
							belle école. Nous te proposerons donc de nombreux 
							événements et avantages que ca soit par des partenariats 
							ou encore des locations de matériel gratuits.
							Par ailleurs, nous avons la chance d'être dans une école où les associations sont actives et nous sommes là pour vous les faire découvrir afin que tu puisses trouver celle qui te convient le mieux.
						</p>
						<p style="text-align:center">
							Si vous n'avez pas encore visité n'attendez plus, rejoignez nous !
						</p>
						<ul class="actions">
							<li><a href="/home_winkel" class="button big">Bienvenue</a></li>
						</ul>
					</section>

				<!-- Items -->
					<section class="main items">
						<article id="connexion" class="item">
							<header>
								<a href="../images/connexion.jpg"><img src="../images/connexion.jpg" alt="" /></a>
								<h3>Espace connexion</h3>
							</header>
																
							<div id="formUser" style="display: none;">
									
								<form method="post" action="newUser.php">
											
									<table>    
										<tr>
											<th>Nom :</th> 
											<th><input type="number" name="numetu"/></th>
										<tr>
										<tr>
											<th>Prenom :</th> 
											<th><input type="password" name="mdp"/><th>
										</tr>
										<tr>
											<th>Email :</th>
											<th><input type="text" name="nom"/></th>
										</tr>
										<tr>
											<th>Mot de passe:</th> 
											<th><input type="text" name="prenom"/></th>
										</tr>
										<tr>
											<th>Confirmé mot de passe :</th> 
											<th><input type="text" name="email"/></th>
										</tr>
									</table>    
									<input type="submit" style="margin-bottom:40px; margin-top:20px;" value="creation"/>                  
								</form>
							</div>

							<div id="connect" style="display : none;">
								<form method="post" action="connexion.php">
											
									<table style="padding-bottom:40px;">    
										<tr>
											<th>Email :</th> 
											<th><input type="number" name="numetu"/></th>
										</tr>
										<tr>
											<th>Mot de passe :</th> 
											<th><input type="password" name="mdp"/><th>
										</tr>
									</table>
									<input type="submit" style="margin-bottom:40px; margin-top:20px;" value="Connect"/>
								</form>			
									
							</div>	
							<?php
										
								if(!empty($_SESSION["numetu"])){

									$user = new User($_SESSION["numetu"],$conn);
									$page->espaceCo($user);
										
								} else { // pas connecté

							?>
							<ul class="actions">
								<li><a class="button" onclick="soit('connect','formUser')">Sign up</a></li>
								<li><a class="button" onclick="soit('formUser','connect')">Sign in</a></li>
								<li><a class="button" onclick="hide('connect');hide('formUser')">-</a></li>
							</ul>
							<?php } ?>
						</article>
						<article id="equipe" class="item">
							<header>
								<a href="../images/shop.png"><img src="../images/shop.png" alt="" /></a>
								<h3>Notre boutique</h3>
							</header>
							<p id="resumeequipe">
								Découvrez les articles au sein de notre BDE.
							</p>
							<ul class="actions">
								<li><a class="button" href="/shop">Visitez</a></li>
							</ul>
						</article>



						<article id="echo" class="item">
							<header>
								<a href="../images/log.jpg"><img src="../images/log.jpg" alt="" /></a>
								<h3>Découvrez les évenements au sein de notre campus</h3>
							</header>
							<p id="resumeEcho">
								Apprenez-en plus sur nos club et nos partenaires.
							</p>
							
							<ul class="actions">
								<li><a class="button" href="/events">Découvrez</a></li>
							</ul>
						</article>

						<article id="recrutement" class="item">
							<header>
								<a href="../images/pic03.jpg"><img src="../images/pic03.jpg" alt="" /></a>
								<h3>Charte du BDE.</h3>
							</header>
							<p id="resumeRecrue">
								Informer vous d'abord.
							</p>
							<ul class="actions">
								<li><a class="button" href="/charte">Lire</a></li>
							</ul>
						</article>
						
					</section>
					<?php
					if(!empty($_SESSION["numetu"])){

					?>
					<section id="onlyCo" class="main">
						<center>
							<img src="../../imageslogo.png" class="icon"/>
							<h2>Espace logistique</h2>
						</center>
						<div id="logistique">
							<article id="dispo" class="item">
								<header>
									<a href="../../imageslog.jpg"><img src="../../imageslog.jpg" alt="" /></a>
									<h3>Emprunt.</h3>
								</header>
								<p id="resumeLog">
									Liste du matériel dispo à emprunter.
								</p>

								<div id="txtLog" style="display:none;">
									
									<?php
										$page->listeMateriel();
									?>

								</div>
								
								<ul class="actions">
									<li><a class="button" onclick="toggle('txtLog', 'resumeLog')">Plus</a></li>
								</ul>
							</article>

							<article id="emprunt" class="item">
								<header>
									<a href="../../imagescamping.jpg"><img src="../../imagescamping.jpg" alt="" /></a>
									<h3>Vos emprunts en cours.</h3>
								</header>
								<p id="resumeEmprunt">
									Trouvez vos emprunts en cours en cliquant sur plus.
								</p>
								<div id="txtEmprunt" style="display:none;">							
									
								<?php
									$page->emprunt($user);
								?>

								</div>
								<ul class="actions">
									<li><a class="button" onclick="toggle('txtEmprunt', 'resumeEmprunt')">Plus</a></li>
								</ul>
							</article>
						</div>
					</section>
					<?php } ?>

					<!-- PARTIE LOGISTIQUE -->


				<!-- Main -->
				<!--
					<section id="main" class="main">
						<header>
							<h2>Lorem ipsum dolor</h2>
						</header>
						<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</section>
				-->

				@include('footer')

		<!-- Scripts -->
			<script src="public/js/jquery.min.js"></script>
			<script src="public/js/skel.min.js"></script>
			<script src="public/js/util.js"></script>
			<script src="public/js/main.js"></script>

	</body>
</html>
