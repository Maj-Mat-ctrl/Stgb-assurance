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
        <section class="page-section connexion">
            <div>
            <?php
            session_start();
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ok'])) {
                $login = $_POST['login'];
                $mdp = $_POST['mdp'];

                // Vérification simple (à remplacer par une vraie authentification)
                if ($login === 'admin' && $mdp === 'password') {
                    $_SESSION['loggedin'] = true;
                    header('Location: admin.php');
                    exit;
                } else {
                    echo '<p style="color:red;">Login ou mot de passe incorrect.</p>';
                }
            }
            ?>
            <form name="connexion" id="connexion" method="post" action="">
                <p>
                    <label>Login</label>
                    <input type="text" name="login" id="login" placeholder="Entrez votre login" />
                    <br />
                    <label>Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" placeholder="Entrez votre password"/>
                    <br />
                    <input type="submit" name="ok" id="ok" value="Validez votre identification"/>
                </p>
            </form>
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
