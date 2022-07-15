<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Recette By Sandrine Coupart</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="./index.html"><img src="assets/img/logos/Capture d’écran 2022-07-08 165953.png" alt="Logo"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="./vues/recette.php">Nos recettes</a></li>
                        <li class="nav-item"><a class="nav-link" href="./vues/contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"></a></li>
                        <li class="nav-item"><a class="nav-link" id="btn-connec" href="./vues/connexion.php">Se Connecter</a></li>
                        <li class="nav-item"><a class="nav-link" href="./vues/creer_compte.php">Créer un compte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Découvrez des nouvelles recette adapté à votre régime !</div>
                <div class="masthead-heading text-uppercase">Commencer dès maintenant</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#recette">En savoir plus </a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nos Services</h2>
                    <h3 class="section-subheading text-muted">Nous nous adaptons à vous.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Compte client</h4>
                        <p class="text-muted">Découvrez davantage de recette ! Créer un compte pour pouvoir obtenir des recettes spécifique à votre propre régime !</p>
                    </div>
                    
                    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-cutlery fa-stack-1x fa-inverse " ></i>

                        </span>

                        <h4 class="my-3">Nouveauté chaque semaine</h4>
                        <p class="text-muted">Chaque Lundi nous vous proposons de nouvelles recettes afin de diversifier nos régimes !</p>
                    </div>
                   
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Sécurisé</h4>
                        <p class="text-muted">Nous tenons à votre Confidentialité, nous vous garentisons qu'aucune données personnel ne sera enregistré !</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- recette Grid-->
        <section class="page-section bg-light" id="recette">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nos recettes faciles</h2>
                    <h3 class="section-subheading text-muted">Découvrez les dernières recette by Sandrine Coupart</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- recette item 1-->
                        <div class="recette-item">
                            <a class="recette-link" data-bs-toggle="modal" href="#recetteModal1">
                                <div class="recette-hover">
                                    <div class="recette-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/poissonj.jpg" alt="plat facile" />
                            </a>
                            <div class="recette-caption">
                                <div class="recette-caption-heading">Avocat et œuf poché</div>
                                <div class="recette-caption-subheading text-muted">Préparation : 5min</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- recette item 2-->
                        <div class="recette-item">
                            <a class="recette-link" data-bs-toggle="modal" href="#recetteModal2">
                                <div class="recette-hover">
                                    <div class="recette-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/pizza.jpg" alt="..." />
                            </a>
                            <div class="recette-caption">
                                <div class="recette-caption-heading">Pizza Végétarienne</div>
                                <div class="recette-caption-subheading text-muted">Préparation : 15min</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- recette item 3-->
                        <div class="recette-item">
                            <a class="recette-link" data-bs-toggle="modal" href="#recetteModal3">
                                <div class="recette-hover">
                                    <div class="recette-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/pexels-nerfee-mirandilla-3186649.jpg" alt="..." />
                            </a>
                            <div class="recette-caption">
                                <div class="recette-caption-heading">Boeuf mijoté aux légumes</div>
                                <div class="recette-caption-subheading text-muted">Préparation : 30min</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- recette item 4-->
                        <div class="recette-item">
                            <a href="./vues/recette.php">
                            
                                <img class="img-fluid" src="assets/img/pexels-lisa-1279330.jpg" alt="..." />
                            </a>
                            <div class="recette-caption">
                                <div class="recette-caption-heading">Pâtes à l'italienne</div>
                                <br>
                                <a href="./vues/recette.php" type="button" style="color:black;" class="btn btn-outline-warning">Voir plus...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- recette item 5-->
                        <div class="recette-item">
                            <a href="./vues/recette.php">
                             
                                <img class="img-fluid" src="assets/img/tomate.jpg" alt="..." />
                            </a>
                            <div class="recette-caption">
                                <div class="recette-caption-heading">Plats de saisson</div>
                                <br>
                                <a href="./vues/recette.php" type="button" style="color:black;" class="btn btn-outline-warning">Voir plus...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- recette item 6-->
                        <div class="recette-item">
                        <a href="./vues/recette.php">
                               
                                <img class="img-fluid" src="assets/img/poisson.jpg" alt="..." />
                            </a>
                            <div class="recette-caption">
                                <div class="recette-caption-heading">Plats Tout en vert</div>
                                <br>
                                <a href="./vues/recette.php" type="button" style="color:black;" class="btn btn-outline-warning">Voir plus...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Team-->
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">A Propos</h2>
                    <h3 class="section-subheading text-muted">Qui Suis-je ?</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Sandrine Coupart</h4>
                            <p class="text-muted">Diététicienne-nutritionniste</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Situé à Caen, professionnelle de santé, je prends en charge des patients dans le cadre de consultations diététiques.J'anime également des ateliers de prévention et d’information sur la nutrition.</p></div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Recette By Sandrine Coupart, 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Mentions Légales</a>
                        <a class="link-dark text-decoration-none" href="#!">Politique de Confidentialité</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- recette Modals-->
        <!-- recette item 1 modal popup-->
        <div class="recette-modal modal fade" id="recetteModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Tartine à l'avocat et œuf poché</h2>
                                    <p class="item-intro text-muted">Temps de Préparation : 25min</p>
                                    <h4>Recette :</h4>

                                    <div class="parent">
                                    <div class="div1"> <h5 style="text-align: left ;">Ingrédients :</h5>
                                    <ul class="list-group" style="text-align:left ;">
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            3 avocat(s) mûrs
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            4 oeuf(s) bio extra frais
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            1 citron(s)
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            mélange d'épices
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            4 tranches de pain au levain
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            fleur de sel
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            1 c. à soupe d' huile d'olive
                                        </li>                                   
                                </ul>   
                                <h5 style="text-align:center; margin-top:30px; ">Instructions :</h5> 
                                    <h6 style="text-align:left ;"> Préparer les oeufs pochés :</h6>
                                    <ul class="list-group" style="text-align:left ;">
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Dans une casserole, verser un grand volume d'eau et ajouter 1 c. à soupe de vinaigre blanc. Portez à ébullition.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Pendant ce temps, casser un œuf dans un ramequin.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Lorsque l'eau est frémissante, tourner avec une cuillère en bois de manière à ce que cela forme un courant. Attention, le courant ne doit pas être trop fort au risque de malmené l’œuf. De même manière, l'eau doit frémir mais pas bouillir.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            Verser délicatement l’œuf et compter 3 à 4 mn de temps de cuisson avant de sortir l’œuf cuit à l'aide d'une écumoire. L'oeuf est cuit lorsqu'il remonte à la surface. Le plonger dans un saladier d'eau glacée pour stopper la cuisson puis le déposer ensuite sur du papier absorbant.
                                        </li>
                                        <h6 style="text-align:left; margin-top:30px;"> Préparer les oeufs pochés :</h6>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Couper un avocat en 2. Ôter le noyau central et prélever la chair avec une cuillère à soupe en suivant la courbure de l'avocat afin d'en récupérer le maximum.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Verser la chair dans un récipient. Ajouter le jus de citron. Mélanger pour que l'avocat ne s'oxyde pas. Ajouter la chair des 2 autres avocats. Saler légèrement et ajouter une pincée d'épices (paprika) ainsi que l'huile d'olive. 
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            A l'aide d'une fourchette, écraser l'avocat sans pour autant avoir une texture lisse. Il doit rester encore des morceaux.
                                        </li>          
                                        <h6 style="text-align:left; margin-top:30px;"> Dresser vos tartines à l'avocat :</h6>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Faire griller vos tartines de pain. Répartir de l'avocat sur chacune des tartines, à l'aide d'une fourchette. Écraser légèrement l'avocat pour qu'il tienne.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Ajouter un œuf poché par tartine. Saupoudrer d'épices et servir aussitôt.
                                        </li>                         
                                </ul>  
                              </div>
                            </div>
               
                            </div>
                                    <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- recette item 2 modal popup-->
        <div class="recette-modal modal fade" id="recetteModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                            <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Pizza Végétarienne</h2>
                                    <p class="item-intro text-muted">Temps de Préparation : 15min</p>
                                    <h4>Recette :</h4>

                                    <div class="parent">
                                    <div class="div1"> <h5 style="text-align: left ;">Ingrédients :</h5>
                                    <ul class="list-group" style="text-align:left ;">
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            1 Pâte à pizza
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            2 Boules de mozzarella
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            1 Dizaine de tomates cerise
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            1 poignée Pousses d'épinards(et de roquette mélangées) 
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Olives vertes(un peu) 
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            4 cuil. à soupe Coulis de tomates
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            3 cuil. à soupe Huile d'olive
                                        </li> 
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            Sel 
                                        </li>    
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            Poivre 
                                        </li>                                       
                                </ul>   


                                <h5 style="text-align:center; margin-top:30px; ">Instructions :</h5> 
                                    <h6 style="text-align:left ;">Préchauffez le four à 220 °C. :</h6>
                                    <ul class="list-group" style="text-align:left ;">
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Étalez la pâte à pizza et déposez-la sur une plaque allant au four recouverte de papier sulfurisé.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Étalez le coulis de tomates sur le dessus.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Égouttez la mozzarella, coupez-la en tranches et ajoutez-les sur la pizza.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            Disposez les olives vertes, salez, poivrez et enfournez durant 15 min.
                                        </li>
                                        <h6 style="text-align:left; margin-top:30px;">  Pendant ce temps :</h6>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Rincez les tomates cerise ainsi que les pousses d'épinards et de roquette. Égouttez-les bien.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Coupez les tomates cerises en 2
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            Dans un saladier, mélangez les tomates cerise avec les pousses d'épinards et de roquette. Ajoutez l'huile d'olive, du sel et du poivre. Mélangez.
                                        </li>          
                                        <h6 style="text-align:left; margin-top:30px;"> Dresser :</h6>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Une fois que la pizza est cuite, disposez la salade mêlée sur le dessus.
                                        </li>                        
                                </ul>  
                              </div>
                            </div>
                            <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fermer
                                    </button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- recette item 3 modal popup-->
        <div class="recette-modal modal fade" id="recetteModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                            <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Boeuf mijoté aux légumes</h2>
                                    <p class="item-intro text-muted">Temps de Préparation : 30min</p>
                                    <h4>Recette :</h4>

                                    <div class="parent">
                                    <div class="div1"> <h5 style="text-align: left ;">Ingrédients :</h5>
                                    <ul class="list-group" style="text-align:left ;">
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            1 kg (2,2 lb) de cubes de boeuf à ragoût
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            30 ml (2 c. à soupe) d’ huile de canola
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            2 oignons hachés
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            15 ml (1 c. à soupe) d’ ail haché
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            2 branches de céleri coupées en dés 
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            2 tiges de thym
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            1 feuille de laurier
                                        </li> 
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            45 ml (3 c. à soupe) de farine
                                        </li>    
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            1,25 litre (5 tasses) de bouillon de boeuf
                                        </li>    
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            60 ml (1/4 de tasse) de pâte de tomates
                                        </li>    
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            sel et poivre au goût
                                        </li>    
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            6 carottes coupées en morceaux
                                        </li>  
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            6 pommes de terre, pelées et coupées en cubes
                                        </li>                                       
                                </ul>   


                                <h5 style="text-align:center; margin-top:30px; ">Instructions :</h5> 
                                    <h6 style="text-align:left ;">Préchauffer le four à 190 °C (375 °F) :</h6>
                                    <ul class="list-group" style="text-align:left ;">
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Assécher la viande à l’aide de papier absorbant. Dans une casserole allant au four ou une cocotte, chauffer l’huile à feu moyen-vif. 
                                            Saisir quelques cubes de viande à la fois, de 2 à 3 minutes, jusqu’à ce que chacune de leurs faces soit dorée. Déposer les cubes dans une assiette.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Retirer l’excédent de gras de la casserole. À feu moyen, faire revenir les oignons de 1 à 2 minute(s).
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Remettre la viande dans la casserole. Ajouter l’ail, le céleri et les fines herbes.
                                        </li>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox"  aria-label="...">
                                            Saupoudrer de farine et remuer. Verser le bouillon et la pâte de tomates. Assaisonner. Chauffer jusqu’aux premiers frémissements en 
                                            raclant les parois de la casserole à l’aide d’une cuillère de bois afin de détacher les sucs de cuisson.
                                        </li>
                                        <h6 style="text-align:left; margin-top:30px;"> Couvrir et cuire au four 1 heure :</h6>
                                        <li class="list-item">
                                            <input class="form-check-input me-1" type="checkbox" aria-label="...">
                                            Ajouter les carottes et les pommes de terre dans la casserole. Couvrir et cuire 1 heure supplémentaire, jusqu’à ce que la viande se défasse à la fourchette.
                                        </li>                
                                </ul>  
                              </div>
                            </div>
                            <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fermer
                                    </button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
