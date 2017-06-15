<!doctype html>
		<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
		<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
		<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
		<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
		<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
		<!-- the "no-js" class is for Modernizr. --> 
		
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Constructora La Cantera</title>
		<meta name="author" content="Constructora la Cantera - Diseño y Desarrollo: Juan Carlos A Cabas Arismendy" />
		<meta name="description" content="Constructora La Cantera. Empresa dedicada a la construcción de bienes inmuebles con Arquitectura Bioclimática y eco ambiental. Nacimos el 4 de Enero de 2011" />
		<meta name="google-site-verification" content="0bPe6qMd1LgxkqJV01sBWdPlZVeBBwTwp0fvtayWz9M" />
		<meta name="Copyright" content="Constructora la Cantera - Diseño y Desarrollo: Juan Carlos A Cabas Arismendy" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="theme-color" content="#FF8A00">
		<link rel="../../img/icon.png" sizes="104x103" href="icon.png">
		<link rel="stylesheet" href="../../site_layout/css_main_min.css">
		<link rel="stylesheet" href="../../site_layout/bootstrap.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" href="../../site_layout/slider/style1.css">
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<link rel="stylesheet" href="../../site_complement/css/transparent.css">
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" 
		  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  		crossorigin="anonymous"></script>
	</head>
		<body>
		<div class="wrapper">
			<div id="pre-header" class=""> 
				<p>
				Ya iniciamos obra. Te invitamos a conocer nuestro proyecto <span><a href="../../site_content/proyecto_santiago_compostela.html">Santiago de Compostela</a></span></p>
			</div>
				<header>
				<nav id="nav_principal" class="navbar">
		    		<div id="wrapper_nav" class="container">
		    			<div class="navbar-header">
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
						    </button>
						    <a href="../../index.html">
					      		<img src="../../img/logoc_sm.png" id="logo_h" alt="Logo La Cantera">
					      	</a>
				    	</div>
		    			<div id="navbar" class="navbar-collapse collapse navbar-right nav_center">
		    				<ul class="nav navbar-nav">
		    					<li><a href="../../index.html">INICIO</a></li>
								<li><a href="../../site_content/conocenos_cantera.html">CONTRUCTORA LA CANTERA</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">PROYECTOS<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li>
											<a href="../../site_content/proyecto_santiago_compostela.html">Santiago de Compostela</a>
											<a href="../../site_content/apartamentos_clubhouse.html">Club House Apartamentos</a>
											<a href="../../site_content/cantera_clubhouse.html">La Cantera Club House</a>
										</li>
									</ul>
								</li>
								<li><a href="">EL SOCORRO</a></li>
								<li><a href="../../site_content/contact_us.html">CONTACTENOS</a></li>
		    				</ul>
		    			</div>
		    		</div>
		    	</nav>
		    </header>
			
			<div id="" class="container-fluid">
				<div id="slider_h" class="conmtainer-fluid">
					<ul class="cb-slideshow">
			            <li><span>Image 01</span><div><h3>La Cantera Club House</h3></div></li>
			            <li><span>Image 02</span><div><h3>Ubicado en el Mejor Sector del Socorro</h3></div></li>
			            <li><span>Image 03</span><div><h3>A 5 Horas de Bogota</h3></div></li>
			            <li><span>Image 04</span><div><h3>No Puedes Perder Esta Oportunidad</h4></div></li>
			            <li><span>Image 05</span><div><h3> </h3></div></li>
			        </ul> 
				</div>
			</div>
			<div class="container-fluid">
				<div class="col-xs-12 text-center" style="color:rgb(80,80,80);font-size:18px;padding:100px 0;">
					<p>

<?php
if(isset($_POST['email_form'])) {
	$email_to = "ing_arismendy@hotmail.com, lacanterasaladenegocios@gmail.com, lacanterasaladenegocios@hotmail.com";
	$email_subject = "Contacto desde el sitio web";
	$email_from = "contacto@lacanterasaladenegocios.com";
	if(!isset($_POST['name_form']) ||
	!isset($_POST['email_form']) ||
	!isset($_POST['tel_form']) ||
	!isset($_POST['asunto_form']) ||
	!isset($_POST['coment_form'])) {
	
	
	echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
	echo "Por favor, vuelva atrás y verifique la información ingresada<br />";

	die();
	}else{
	
			if(isset($_POST['g-recaptcha-response'])){
		        $captcha=$_POST['g-recaptcha-response'];
		    }
		
			if(!$captcha){
				
			    echo '<h2>Regresa a la pagina anterior y Valida que no eres un bot</h2>';
			    //exit;
			    
			} else {
		
				$secretKey = "6LcVWwwUAAAAABSyQ7qJq6Ax82GTUAIhPKLY-U5V";
				$ip = $_SERVER['REMOTE_ADDR'];
				$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
				$responseKeys = json_decode($response,true);

				if(intval($responseKeys["success"]) !== 1) {
					
				    echo 'Pareces ser un SPAMMER, Regresa a la pagina anterior y Valida que no eres un bot';
				    
				}
				else
					{
			    	$email_message = "Detalles del formulario de contacto:\n\n";
					$email_message .= "Nombre: " . $_POST['name_form'] . "\n";
					$email_message .= "Correo: " . $_POST['email_form'] . "\n";
					$email_message .= "Telefono: " . $_POST['tel_form'] . "\n";
					$email_message .= "Asunto: " . $_POST['asunto_form'] . "\n";
					$email_message .= "Mensaje: " . $_POST['coment_form'] . "\n\n";
					$headers = 'From: '.$email_from."\r\n".
					'Reply-To: '.$email_from."\r\n" .
					'X-Mailer: PHP/' . phpversion();
					@mail($email_to, $email_subject, $email_message, $headers);
					echo '<h2>Graacias por comunicarte con nosotros.</h2>';
					}

		}		
	}
}
?>
		</p>
	</div>
</div>

				
			<footer id="footer" class="container-fluid container-fluid-full">
				<div id="wrapper_footer" class="col-xs-12">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 div_ft logo_ft">
							<img src="../../img/logoc_ft.png" alt="Logo La Cantera"><br><br>
							<p>Constructora La Cantera. Empresa dedicada a la construcción de bienes inmuebles con Arquitectura Bioclimática y eco ambiental.</p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 div_ft ">
							<p>
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp&nbspSocorro<br>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCalle 8 Sur #12-22<br>
								<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp&nbspTel. (7)7276101 - 3202473375 <br>&nbsp&nbsp&nbsp&nbsp&nbsp3204543571<br>
								<br>
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp&nbspBucaramanga<br>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEdificio Cámara de Comercio<br>
								&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCr 19 #36-20 Of. 612<br>
								<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>&nbsp&nbspTel. (7)6803437<br>
								<br>
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp&nbsp lacanterasaladenegocios@gmail.com
							</p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 div_ft wrapper_social">
							<h5>Siguenos en Nuestras Redes sociales</h5>
							<div class="col-xs-12">
								<a target="_blank" href="https://www.facebook.com/lacanterasaladenegocios" class="facebook_transp">
									"Faceboock"
									<span></span>
								</a>
								<div class="label_red_social">
									<span>lacanterasaladenegocios</span>
								</div>
							</div>
							<div class="col-xs-12 red_social">
							    <a target="_blank" href="https://twitter.com/lacanterasala" class="twitter_transp">
									"Twitter"
									<span></span>
								</a>
								<div class="label_red_social">
									<span>@lacanterasala</span>
								</div>
							</div>
							<div class="col-xs-12 red_social">
								<a target="_blank" href="https://www.youtube.com/channel/UCG6Wh15yi7_Em3LEMmJXl2A" class="youtube_transp">
									"Youtube"
									<span></span>
								</a>
								<div class="label_red_social">
									<span>la cantera sala de negocios</span>
								</div>
							</div>
							<div class="col-xs-12 red_social">
								
							</div>
							<div class="col-xs-12">
								<a href="site_content/contact_us.html">
									CONTACTANOS
								</a>
							</div>
						</div>
					</div>
					<div id="copy_r" class="col-xs-12">
						<p><small>&copy; Copyright Constructora La Cantera 2016. All Rights Reserved.</small></p>
					</div>
				</div>
			</footer>
	</div>
	<script src="../../site_jsconfig/main_js.js"></script>
	<script src="../../site_jsconfig/bootstrap.js"></script>
	</body>
	</html>	


