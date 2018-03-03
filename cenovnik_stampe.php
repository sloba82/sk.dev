
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
<title>Štampa knjiga</title>


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
            <h1>Cenovnik</h1>
             <p>
             Zbog velikog broja mogućnosti i faktora koji utiču na cenu štampe 
             gotovo je nemoguće napraviti univerzalni cenovnik, u nastojanju da 
             damo tačnu cenu prema precizno definisanim parametrima. molimo vas da nam pošaljete 
             zahtev na e-mail: dizajnistampa@gmail.com ili popunite obrazac ispod teksta. 
             
             </p>
            
            </div>
            <div id="formaDiv">
         
         <h3>Zahtev za ponudu:</h3>
<form id="forma" name="forma" method="post" action="/cgi-sys/FormMail.cgi">
  <fieldset>
  
    <legend>Vaši podaci</legend>
   		 <p>
      		<label for="Ime">Ime:</label>
     			 <input type="text" name="Name" id="Ime" required />
    	</p>
        
         <p>
      		<label for="Prezime">Prezime:</label>
     			 <input type="text" name="Prezime" id="Prezime" required />
    	</p>
        
        <p>
        	<label for="grad">Mesto/grad:</label>
     			 <input type="text" name="grad" id="grad" required />
        </p>
        
        <p>
      		<label for="tel">tel/mob.:</label>
     			 <input type="tel" name="tel" id="tel" required />
    	</p>
        
   		 <p>
      		<label for="email">E-mail:</label>
     		 <input type="email" name="email" id="email" required />
   		 </p>
  </fieldset>
  
  
  <br/>
 
  <fieldset>
    <legend>Poruka</legend>
    	<p>Odaberi vrstu proizvoda: 
     		 <select id="vrsta">
     		   <option value="odaberi">vrsta proizvoda</option>
     		   <option value="knjiga">knjiga</option>
     		   <option value="skripta">skripta</option>
     		   <option value="var_stampa">varijabilna štampa</option>
     		   <option value="vizit karte">vizit karte</option>
     		   <option value="diplomski">diplomski </option>
     		   <option value="ostalo">ostalo</option>
             </select>
     		  
   		</p>
        
    	<p>
     		 <label for="textarea">Vaša poruka:<br /></label>
       			 <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
    	</p>
        
    	<p>
     	 <input type="checkbox" name="checkbox" id="checkbox" required />
     		 <label for="checkbox">Potvrdjujem </label>
    	</p>
        
  </fieldset>
    <input type="hidden" name="recipient" value="stampa@stampanjeknjiga.com" />
    <input type="submit" name="submit" id="submit" value="Pošalji" />
  	<p>obrada zahteva u roku 24h</p>
</form>
         
         
         </div><!--kraj div forme-->
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
