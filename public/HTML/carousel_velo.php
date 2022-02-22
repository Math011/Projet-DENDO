<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- -------- -->
    <title>Dendo Jitesha</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/image/Main.png">
    <link rel="stylesheet" href="../CSS/main.css" type="text/css" media="all">

</head>

<body class="dark-mode">
<header> <?php include('header_index.php'); ?>
</header>

<!-- CAROUSEL -->
<main>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators carousel_1">
             <button type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide-to="0" class="active carousel_velo"
              aria-current="true" aria-label="Slide 1">ROUTE</button>
            <button type="button" data-bs-target="#carouselExampleCaptions" class="carousel_velo" data-bs-slide-to="1"
              aria-label="Slide 2">URBAIN</button>
            <button type="button" data-bs-target="#carouselExampleCaptions" class="carousel_velo_fin" data-bs-slide-to="2"
              aria-label="Slide 3">VTT</button>
        </div>


        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="7000000">
                <img  src="../assets/image/vtt.png" class="d-block w-100 carousel_taille_image" alt="...">



            </div>

            <div class="carousel-item" data-bs-interval="5000000">
                <img  src="../assets/image/route.png" class="d-block w-100 carousel_taille_image" alt="...">
                <div class="carousel-caption aaaa d-none d-md-block">
                    <h5>Présentation de l’entreprise</h5>
                    <p>Jitensha est une entreprise qui fût crée en 1970 par deux personnes.
                        Elle travaille uniquement dans le domaine du vélo et essaye au quotidien de proposer ces meilleurs
                        produits.
                    </p>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="5000000">
                <img  src="../assets/image/background.jpg" class="d-block w-100 carousel_taille_image" alt="...">
                <div class="carousel-caption aaaa d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev carousel_control1" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel_control2" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
    </div>
</main>

<footer><?php include('footer.php'); ?></footer>




<script src="/DENDO/public/JS/toggle_dark.js"></script>
</body>
