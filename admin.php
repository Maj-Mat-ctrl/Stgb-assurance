<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: connexion.php');
    exit;
}

// Charger les actualités depuis le fichier JSON
$newsFile = 'news.json';
$news = [];
if (file_exists($newsFile)) {
    $news = json_decode(file_get_contents($newsFile), true);
}

// Traiter les actions (ajouter, modifier, supprimer)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action === 'add') {
            $newItem = [
                'id' => count($news) + 1,
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'date' => date('Y-m-d')
            ];
            $news[] = $newItem;
        } elseif ($action === 'edit') {
            $id = $_POST['id'];
            foreach ($news as &$item) {
                if ($item['id'] == $id) {
                    $item['title'] = $_POST['title'];
                    $item['content'] = $_POST['content'];
                    break;
                }
            }
        } elseif ($action === 'delete') {
            $id = $_POST['id'];
            $news = array_filter($news, function($item) use ($id) {
                return $item['id'] != $id;
            });
        }

        // Sauvegarder dans le fichier JSON
        file_put_contents($newsFile, json_encode(array_values($news), JSON_PRETTY_PRINT));
        header('Location: admin.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Administration - Assurances Saint Gabriel</title>
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

    <section class="page-section">
        <div class="container">
            <h2 class="section-heading mb-4">Administration des Actualités</h2>

            <!-- Formulaire pour ajouter une nouvelle actualité -->
            <div class="mb-4">
                <h3>Ajouter une Actualité</h3>
                <form method="post">
                    <input type="hidden" name="action" value="add">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>

            <!-- Liste des actualités existantes -->
            <div>
                <h3>Actualités Existantes</h3>
                <?php foreach ($news as $item): ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($item['content']); ?></p>
                            <small class="text-muted">Publié le <?php echo htmlspecialchars($item['date']); ?></small>
                            <div class="mt-2">
                                <!-- Bouton Modifier -->
                                <button class="btn btn-warning btn-sm" onclick="editNews(<?php echo $item['id']; ?>, '<?php echo addslashes($item['title']); ?>', '<?php echo addslashes($item['content']); ?>')">Modifier</button>
                                <!-- Formulaire Supprimer -->
                                <form method="post" style="display:inline;">
                                    <input type="hidden" name="action" value="delete">
                                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette actualité ?')">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Formulaire caché pour modifier -->
            <div id="editForm" style="display:none;">
                <h3>Modifier l'Actualité</h3>
                <form method="post">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" id="editId" name="id">
                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="editTitle" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="editContent" class="form-label">Contenu</label>
                        <textarea class="form-control" id="editContent" name="content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-secondary" onclick="cancelEdit()">Annuler</button>
                </form>
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
    <script>
        function editNews(id, title, content) {
            document.getElementById('editId').value = id;
            document.getElementById('editTitle').value = title;
            document.getElementById('editContent').value = content;
            document.getElementById('editForm').style.display = 'block';
        }

        function cancelEdit() {
            document.getElementById('editForm').style.display = 'none';
        }
    </script>
</body>
</html>
