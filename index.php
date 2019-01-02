<?php

if($_POST['idioma']=='ES'){
header("Location:http://www.twente-gernika.com/es/?idioma=ES");
}

elseif($_POST['idioma']=='FR'){
header("Location:http://www.twente-gernika.com/fr/?idioma=FR");
}

elseif($_POST['idioma']=='EUS'){
header("Location:http://www.twente-gernika.com/eus/?idioma=EUS");
}

elseif($_POST['idioma']=='EN'){
header("Location:http://www.twente-gernika.com/en/?idioma=EN");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html ;
charset=UTF-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">		
<meta name="keywords" content="twente, holland, bokatak, hanburgesak, platerak, gernika"/>	
	<meta name="description" content="Bocadillos, sandwiches, hamburguesas y platos combinados"/>		
<meta name="Subject" content="on egin"/>	
	<meta name="Language" content="espa&ntilde;ol"/>	
			<link rel="stylesheet" type="text/css" href="/estilos/estiloGeneral.css"/> 
<!-- Enlace a nuestra página de estilos -->
		<link rel="stylesheet" type="text/css" href="/estilos/estiloMoviles.css"/>  
<!-- Enlace a nuestra página de estilos -->		

<link href="https://fonts.googleapis.com/css?family=Cabin|Dosis|EB+Garamond|Exo|Handlee|Inconsolata|Modern+Antiqua|Muli|Nanum+Gothic|Quicksand|Slabo+27px" rel="stylesheet">



<title>TWENTE Caf&eacute; Bar</title>	
</head>	

<body style="margin:0;background:url('img/bizi.jpg!d')no-repeat top center ;"> 

		<header id="izena1">				<img width="5em" id="mugikorra" height="5.8em" src="img/logo_peke.png"/>				<img class="logo1" title="Logo" alt="Logo" src="img/logo.png"/>				<img class="logo2" title="Logo" alt="Logo" src="img/logo.png"/>
						<h1 class="titulo_carta">TW<span id="en">en</span>T</span>E </h1>						<h3 class="txiki">- Caf&eacute; Bar Gernika -
</h3>	
	</header>
	


		<div id='principal' style='background:none !important;min-height:200px;'>
				<h2 style="margin-bottom:1em;text-decoration:none;text-align:center;padding:0 0.5em;">ONGi ETORRi !				

<h4 style='margin:-0.8em 0 0.5em;text-decoration:underline';>Selecciona tu idioma</h4></h2>

<form action="#" method="post">
<ul style='padding:0;' id="hizk">
<li style="background-color:none;opacity:1;margin:0.9em;" class="idioma"><img width='auto' height='20' style='margin-bottom:0.3em;vertical-align:bottom;' src="img/esFlag.png"/></br><input type="submit" style='background-color:#f9e2d2;padding:0.5em;' value='ES' name="idioma"/></li>

 <a href="/eus"><li style="opacity:1;margin:0.9em;" class="idioma"><img width=30 height='20' style='margin-bottom:0.3em;vertical-align:bottom;' src="img/bkFlag.png"/></br><input type="submit" style='background-color:#f9e2d2;padding:0.5em;' value='EUS' name="idioma"/></li></a>

<a href="/en"><li style="opacity:1;margin:0.9em;" class="idioma"><img width=30 height='20' style='margin-bottom:0.3em;vertical-align:middle;' src="img/ukFlag.png"/></br><input type="submit" style='background-color:#f9e2d2;padding:0.5em;' value='EN' name="idioma"/></li></a>
<a href="/fr"><li style="opacity:1;margin:0.9em;"class="idioma"><img width=30 height='20' style='margin-bottom:0.3em;vertical-align:middle;' src="img/frFlag.png"/></br><input type="submit" style='background-color:#f9e2d2;padding:0.5em;' value='FR' name="idioma"/></li></a></ul></form>
</div>	


<footer style="width:100%;position:absolute;bottom:0;">		
  
  <ul>	
   	<li style='text-decoration:none !important;'>&copy; <span class="zuri">2017/18</span> TWENTE    </li>		
   <li class="link_pie" href="#"><span class="zuri">944 65 31 85</span>
</li> ||		
   <li><span class="zuri">German, Dutch,</span> English spoken!</li>		
</br>
   <li id="fbmovil">
   <a href="https://www.facebook.com/Twente-Caf%C3%A8-Bar-160578170649945/" target="_blank">	
  <img id="fbook" alt="Facebook" src="img/facebook.png" title="Facebook"/>

  <span style="text-decoration:underline"; class="zuri">S&iacute;guenos
</span> </a>
 </li>

	</ul>				
	</footer>			
<!-- FIN DE PIE -->		

	</body>
</html>
