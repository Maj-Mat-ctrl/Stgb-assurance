<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contract_id = htmlspecialchars($_POST['contract_id']);
    $email = htmlspecialchars($_POST['email_unsub']);

    // Ici, vous pouvez ajouter la logique pour traiter la désinscription
    // Par exemple, enregistrer dans une base de données, envoyer un email de confirmation, etc.
    // Pour l'instant, on affiche juste un message de confirmation

    echo "<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <title>Désinscription - Assurances Saint Gabriel</title>
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
            <h2>Désinscription de contrat</h2>
            <p>Votre demande de désinscription pour le contrat numéro <strong>$contract_id</strong> avec l'email <strong>$email</strong> a été reçue.</p>
            <p>Nous traiterons votre demande dans les plus brefs délais.</p>
            <a href='index.php' class='btn btn-primary'>Retour à l'accueil</a>
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
    header('Location: contact.php');
    exit;
}
?>
