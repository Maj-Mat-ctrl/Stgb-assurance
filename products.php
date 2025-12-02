<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Assurances Saint Gabriel</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <?php include_once("architecture/header.php"); ?>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <?php include_once("architecture/nav.php"); ?>
        </nav>
       
        <!-- Section Accueil avec Actualités -->
        
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Assurances vie, santé, auto, habitation...</span>
                                <span class="section-heading-lower">Nous sommes là pour prévenir et assurer vos biens, votre famille, et vous-même</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-01.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded">
                            <p class="mb-0">Découvrez nos assurances vie, santé, auto et habitation pour protéger ce qui compte le plus pour vous.</p>
                            <form action="subscribe.php" method="post" class="mt-3">
                                <input type="hidden" name="product" value="Assurances vie, santé, auto, habitation">
                                <label for="name1">Nom :</label>
                                <input type="text" id="name1" name="name" placeholder="Votre nom" required maxlength="50">
                                <br />
                                <label for="email1">Email :</label>
                                <input type="email" id="email1" name="email" placeholder="Votre adresse email" required maxlength="50">
                                <br />
                                <label for="phone1">Téléphone :</label>
                                <input type="tel" id="phone1" name="phone" placeholder="Votre numéro de téléphone" required maxlength="20">
                                <br />
                                <button type="submit">Souscrire</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Assurance solidaire</span>
                                <span class="section-heading-lower">Nos tarifs sont des plus accessibles</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-02.jpg" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded">
                            <p class="mb-0">Assureur mutualiste de l’économie solidaire, Saint-Gabriel met à la disposition de ses sociétaires une expertise, une capacité d’écoute et une volonté d’innovation reconnues</p>
                            <form action="subscribe.php" method="post" class="mt-3">
                                <input type="hidden" name="product" value="Assurance solidaire">
                                <label for="name2">Nom :</label>
                                <input type="text" id="name2" name="name" placeholder="Votre nom" required maxlength="50">
                                <br />
                                <label for="email2">Email :</label>
                                <input type="email" id="email2" name="email" placeholder="Votre adresse email" required maxlength="50">
                                <br />
                                <label for="phone2">Téléphone :</label>
                                <input type="tel" id="phone2" name="phone" placeholder="Votre numéro de téléphone" required maxlength="20">
                                <br />
                                <button type="submit">Souscrire</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Plus de 75 ans d'expertise</span>
                                <span class="section-heading-lower">N°1 de l'économie solidaire</span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-03.jpg" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0">TForte d’une expertise reconnue découlant de plus de soixante quinze ans d’amélioration et d’enrichissement de ses savoir-faire, elle propose à ces institutions, à leurs salariés et à leurs bénévoles des garanties, des services d’assurances et un accompagnement adaptés à leur mission, au meilleur coût.</p></div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-faded text-center py-5"> 
            <?php include_once("architecture/footer.php"); ?>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
