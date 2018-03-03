<!doctype html>


<html lang="sr">
<head>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Štampa knjiga</title>


</head>

<body>

<div id="wrapper">
    <header id="header">
        <div class="naslov">
            <img src="materijal/logo.png" alt="logo štampa"/>
            <img src="materijal/naslov.png" alt="štampa knjiga"/>
        </div>

        <div class="slika">
            <img src="materijal/knjiga.png" width="800" height="365" alt="knjiga"/>
        </div>

    </header>
    <!--kraj hedera-->

    <nav id="nav">
        <?php
        include "php/nav.php";
        ?>


    </nav>
    <!--kraj navigacija-->

    <div id="sredina">
        <main id="main">

            <p>Kontakt telefon: 064/ 24 65 848</p>

            <p>E-mail: dizajnistampa@gmail.com</p>

            <div id="formaDiv">

                <h3>Kontakt:</h3>

                <form id="forma" name="forma" method="post" action="submitForm.php">

                    <input type="hidden" name="urlprezent" id="urlprezent">
                    <fieldset>

                        <legend>Vaši podaci</legend>
                        <p>
                            <label for="Ime">Ime:</label>
                            <input type="text" name="name" id="Ime" required/>
                        </p>

                        <p>
                            <label for="Ime">Telefon:</label>
                            <input type="text" name="phone" id="Ime" required/>
                        </p>

                        <p>
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" required/>
                        </p>
                    </fieldset>


                    <br/>

                    <fieldset>
                        <legend>Poruka</legend>
                        <p>
                            <label for="textfield">Tema:</label>
                            <input type="text" name="textfield" id="textfield" required/>
                        </p>

                        <p>
                            <label for="textarea">Vaša poruka:<br/></label>
                            <textarea name="poruka" id="textarea" cols="45" rows="5"></textarea>
                        </p>

                        <p>
                            <input type="checkbox" name="checkbox" id="checkbox" required/>
                            <label for="checkbox">Podvrdi </label>
                        </p>

                    </fieldset>

                    <input type="submit" name="submit" id="submit" value="Pošalji"/>

                </form>


            </div>
            <!--kraj div forme-->
            <?php
            include "php/ispod_mein.php";
            ?>


        </main>
        <!--kraj sredina-->
        <aside id="sidebar">
            <?php
            include "php/sidebar.php";
            ?>
        </aside>
    </div>
    <!--kraj sredina-->

    <footer id="footer">
        <?php
        include "php/footer.php";
        ?>
    </footer>
    <!--kraj footera-->


</div>
<!--kraj wrappera-->


</body>


<script type="text/javascript">
    document.getElementById('urlprezent').value = window.location.href;

    function startform() {
        var name = document.getElementsByName("name");
        var email = document.getElementsByName("email");
        var phone = document.getElementsByName("phone");

        if (name == '' || email == '' || phone == '') {
            alert("Popunite polja u porudzbenici");
        }
    }

    var urlMessage = document.getElementById('urlprezent').value;
    var message = urlMessage.split('?')[1];

    if (message == 'message=no_susses') {
        alert("Nije poslata porudžbina probajte ponovo, popunite polja u porudzbenici");
    }

    if (message == 'message=susses') {
        alert("Poruka je poslata");
    }

</script>


</html>
