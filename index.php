<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquette G11</title>
    <link href="style/bootstrap.min.css" rel="stylesheet">
    <link href="style/main.css" rel="stylesheet">
</head>
<body>
    <div class="global">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #F2C476;">
            <a class="navbar-brand mb-0 h1 ml-lg-5 pl-lg-5" href="#" id="chocolat"><img src="image/logo.png" alt="logo" class="avatar-xs"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto" id="barnav">
                <li class="nav-item active">
                    <a class="nav-link bord" href="#menu1">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bord" href="#menu2">Produit</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link bord" href="#menu5">Nouveau</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu6" id="pasBord">Contactes</a>
                </li>
                </ul>
            </div>       
        </nav>
<!-- ************************ MENU 1 ********************** -->
        <div class="menu1" id="menu1">
            <div class="container-fluid">

            </div>
        </div>
<!-- ***************************************** MENU 2 ******** -->
        <div class="menu2" id="menu2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6  pt-lg-5 pt-md-5 mt-lg-5 mt-md-5">
                        <h2 class="text-center mt-md-4">FROM THE <br> Sachet</h2>
                        <p>Show friends, family or that special <br>
                            someone you think they're pretty sweet <br>
                            with a Valentine's Day gift card or e-gift <br>
                            <button class="btn btnCustomer">Cliquez ici</button>
                        </p>

                    </div>
                    <div class="col-md-5 pt-lg-5 pt-md-5 mt-lg-5 mt-md-5">
                        <img src="image/sachet.png" alt="" width="90%" height="90%">
                    </div>
                </div>
            </div>
        </div>
<!-- ***************************** MENU 3 ******************************* -->
        <div class="menu3" id="menu3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pt-lg-3 pt-md-3 mt-lg-3 mt-md-3">
                        <img src="image/choco.png" alt="" width="75%">
                    </div>
                    <div class="col-md-6 pt-lg-5 pt-md-5 mt-lg-5 mt-md-5">
                        <h2 class="text-center mt-md-4">FROM THE <br> Tea Cup</h2>
                        <p>Show friends, family or that special <br>
                            someone you think they're pretty sweet <br>
                            with a Valentine's Day gift card or e-gift <br>
                            <button class="btn btnCustomer">Cliquez ici</button>
                        </p>

                    </div>
                    
                </div>
            </div>
        </div>

<!-- ****************************** MENU 4 ************************** -->

        <div class="menu4" id="menu4">
            <div class="container">
                <div class="row pt-lg-5 pt-md-5">
                    <div class="col-md-6  pt-lg-5 pt-md-5 mt-lg-5 mt-md-5">
                        <h2 class="text-center mt-md-4">FROM THE <br> Beanut</h2>
                        <p>Show friends, family or that special <br>
                            someone you think they're pretty sweet <br>
                            with a Valentine's Day gift card or e-gift <br>
                            <button class="btn btnCustomer">Cliquez ici</button>
                        </p>

                    </div>
                    <div class="col-md-5 pt-lg-5 pt-md-5 mt-lg-5 mt-md-5 pb-lg-5 pb-md-5 mb-lg-5 mb-md-5">
                        <img src="image/colze.png" alt="" width="90%" height="90%">
                    </div>
                </div>
            </div>
        </div>

<!-- ****************************** MENU 5 ************************** -->
        <div class="menu5" id="menu5">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/sac.png" class="d-block w-100" alt="..." height="500" data-interval="50">
                        </div>
                        <div class="carousel-item">
                            <img src="image/chou.png" class="d-block w-100" alt="..." height="500" data-interval="50">
                        </div>
                        <div class="carousel-item">
                            <img src="image/vani.png" class="d-block w-100" alt="..." height="500" data-interval="50">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon sr-only" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon sr-only" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>

<!-- ****************************** MENU 6 ************************** -->
        <div class="menu6" id="menu6">
            <div class="container">
                <div class="row pt-lg-5 pt-md-5">
                    <div class="col-md-3">
                        <h6>A PROPOS</h6>
                        <h6>Notre historique</h6>
                        <h6>Notre entreprise</h6>
                        <h6>Notre reponsabilite</h6>
                        <h6>Offre speciale</h6>
                        <h6>Notre politique</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>SERVICE DU CLIENT</h6>
                        <h6>Email du client</h6>
                        <h6>Recommandation</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>POUR LES ENTREPRISES</h6>
                        <h6>Licence</h6>
                        <h6>Service Alimentaire</h6>
                        <h6>Libre Service</h6>
                    </div>
                    <div class="col-md-3">
                        <h6>POUR LES ENTREPRISES</h6>
                        <h6>Licence</h6>
                        <h6>Service Alimentaire</h6>
                        <h6>Libre Service</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5  mt-md-5 mt-lg-5">
                        <div class="row  mt-md-4 mt-lg-4">
                            <div class="col-md-2"> <a href="http://instagram.com" target="_blank"><img src="image/ista.png" alt="" width="60"></a></div>
                            <div class="col-md-2"><a href="http://facebook.com" target="_blank"><img src="image/face.png" alt="" width="60"></a></div>
                            <div class="col-md-2"><a href="http://whatsapp.com" target="_blank"><img src="image/Sanwt.png" alt="" width="60"></a></div>
                            <div class="col-md-2"><a href="http://snapchat.com" target="_blank"><img src="image/snapch.png" alt="" width="60"></a></div>
                        </div>
                    </div>
                    <div class="col-md-5 offset-2 mt-md-5 mt-lg-5">
                        <h6 class="pl-lg-2 pl-md-2 mt-md-4 mt-lg-4">Acceder a notre Newletter</h6>
                        <form action="" method="post">
                            <input type="text" placeholder="  Email">
                        </form>
                    </div>
                </div>
                <div class="row pt-md-5 pt-lg-5">
                    <h6 class="mt-md-4 mt-lg-4">Conditions d'utilisation et Mentions |  Légales | Politique de Confidentialité  | Plan du site</h6>
                </div>
            </div>
        </div>

    </div>

    <script src="style/jquery.min.js"></script>
    <script src="style/bootstrap.min.js"></script>
    <script src="style/popper.min.js"></script>
    <script type="text/javascript" src="style/smooth-scroll.js"></script>


    <!-- --- SMOOTH SCROLL -->
	<script>
		var scroll = new SmoothScroll('a[href*="#"]');
	</script>

<script type="text/javascript">
		$(document).on('click', 'ul li',function() {
			$(this).addClass('active').siblings().removeClass('active');
		});
	</script>
</body>
</html>