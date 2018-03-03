
<!doctype html>



<html lang="sr">
<head>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="style.css">

<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

<base target="_parent">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Štampa Knjiga u malim tirazima, brza i kvalitetna izrada po povoljnim cenama, sa dostavom na adresu">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Slobodan Juhas">
<title>Poruči štampu knjige, dostava štampanog materijala knjiga na vašu adresu</title>


</head>

<body>

<div id="wrapper">
	<header id="header">
   
   			<div class="naslov">
                 <img src="materijal/logo.png"  alt="logo štampa"/>
   				<img src="materijal/naslov.png"  alt="štampa knjiga"/>
   				</div>
                
   					<div class="slika">
   						 <img src="materijal/knjiga.png" width="800" height="365"  alt=""/>
  		 				</div>
    
    
    </header><!--kraj hedera-->
    
<nav id="nav">
<?php
include "php/nav.php";
?>
</nav><!--kraj navigacija-->
    
    <div id="sredina">
    		<main id="main">
            <div>
            <h1>Poruči</h1>
             <p>
             Poručivanje funkcioniše tako što ćete ukoliko imate gotovu pripremu za štampu,
             zajedno sa vašim kontakt podacima poslati na 
             <b>e-mail: dizajnistampa@gmail.com</b>  zatim
             materijal pregledamo i dalje sa vama dogovaramo ostale detalje oko izrade.
             <br />
             <br />
             Takodje za transfer većeg broja fajlova, kao i kod fajlova koji prelaze 20mb možete koristiti
             neki od sajtova za transfer fajlova kao što je 
             <a href="https://www.sendspace.com/" target="new">www.sendspace.com</a>
              ili 
             <a href="https://www.wetransfer.com/" target="new">www.wetransfer.com</a>
             <br />
             <br />
             Takođe na istu e-mail adresu možete poslati i sirov materijal odnosno tekstove slike i ostalo, ukoliko želite da pored štampe za vas uradimo i 	
             pripremu za štampu.
             <br />
             <br />
             Sav odštampan materijal možemo poslati poštom ili autobusom.
             <br />
             <br />
              <a href="priprema_za_stampu.php">Više o pripremi za štampu </a>
             
             </p>
            
            </div>
<?php
include "php/ispod_mein.php";
?>
            
            </main><!--kraj sredina-->
<aside id="sidebar">	
					
<?php
include "php/sidebar.php";
?>
</aside>


    </div> <!--kraj sredina-->
	
<footer id="footer">
<?php
include "php/footer.php";
?>
</footer><!--kraj footera-->
    
    
    
</div>  <!--kraj wrappera-->


</body>
</html>
