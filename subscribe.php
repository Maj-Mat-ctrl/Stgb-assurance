<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = htmlspecialchars($_POST['product']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Ici, vous pouvez ajouter la logique pour traiter la souscription
    // Par exemple, enregistrer dans une base de données, envoyer un email de confirmation, etc.
    // Pour l'instant, on affiche juste un message de confirmation

    echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <title>Souscription - Assurances Saint Gabriel</title>
    <link href='css/styles.css' rel='stylesheet' />
</head>
<body>
    <header>
        <?php include_once('architecture/header.php'); ?>
    </header>
    <nav class='navbar navbar-expand-lg navbar-dark py-lg-4' id='mainNav'>
        <?php include_once('architecture/nav.php'); ?>
    </nav>
    <section class='page-section'>
        <div class='container'>
            <h2>Souscription à un contrat</h2>
            <p>Merci <strong>$name</strong> pour votre intérêt pour le produit <strong>$product</strong>.</p>
            <p>Votre demande de souscription avec l'email <strong>$email</strong> et le téléphone <strong>$phone</strong> a été reçue.</p>
            <p>Nous vous contacterons bientôt pour finaliser votre contrat.</p>
            <a href='products.php' class='btn btn-primary'>Retour aux produits</a>
        </div>
    </section>
    <footer class='footer text-faded text-center py-5'>
        <?php include_once('architecture/footer.php'); ?>
    </footer>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js'></script>
    <script src='js/scripts.js'></script>
</body>
</html>";
} else {
    header('Location: products.php');
    exit;
}
?>
