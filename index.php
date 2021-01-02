<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/img/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TEST MENU NAVIGATION PLEIN ECRAN</title>
</head>

<body>

    <header>
        <nav>
            <div class="backdrop"></div>
            <ul>
                <li><a class="navLink nav-link btn text-navbar" href="#presentation">À propos</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#galleryPict">Photos</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#galleryVid">Vidéos</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#equipments">Drones</a></li>
                <li><a class="navLink nav-link btn text-navbar" href="#contact">Contact</a></li>
            </ul>
        </nav>

        <button class="menu">Menu</button>

        <div class="homeVideo">
            <video autoplay muted loop>
                <source src="video/pic-du-midi_2.mp4" type="video/mp4">
            </video>
        </div>
    </header>

    <div class="container-fluid col-12 p-0 m-0">

        <div class="row" id="presentation">
            <div class="logoEnts col-lg-4 col-sm-12 d-flex align-content-center justify-content-center">
                <img class="d-flex align-content-center justify-content-center logoImg" src="image/logo-remove.png" alt="Logo Vision By Sky">
            </div>
            <div class="col-lg-8 col-sm-12 justify-content-center">
                <h1 class="text-center col-12">A propos</h1>
                <p class="text-center col-12">Pilote professionnel de drones depuis plusieurs années,
                    je propose de mettre à dispositon mon matériel et mes services pour réaliser vos projets.</p>
                <p class="text-center col-12">Je vous invite à parcourir les galeries photos et vidéos afin de pouvoir
                    découvrir mon univers de travail mais aussi les drones que j'utilise.</p>
                <!-- <p class="text-center col-12">Un formulaire de contact est à votre disposition via le "menu de navigation" 
                    ou en bas de page, n'hésitez pas pour une dem.</p> -->
                <p class="text-center col-12">Bonne visite !</p>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-12" id="galleryPict">
                <h1 class="text-center">Galerie Photos</h1>
            </div>
        </div> -->

        <!-- <div class="row">
            <div class="col-12" id="citations">
                <p>Ici doit se trouver un générateur de citations</p>
            </div>
        </div> -->
<!-- 
        <div id="galleryVid">
            <h1 class="text-center">Galerie Vidéos</h1>
        </div>

        <div id="equipments">
            <h1 class="text-center">Drones Professionnels</h1>
        </div>

        <div id="contact">
            <h1 class="text-center">Formulaire de contact</h1>
        </div>

        <footer>
            <div class="row" id="logoFooter">
                <div>
                    <p>Informations de contact</p>
                </div>
                <div>
                    <img src="image/logo-remove.png" alt="Logo Vision By Sky">
                </div>
            </div>
        </footer> --> -->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>

</body>

</html>