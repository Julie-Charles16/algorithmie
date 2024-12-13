<?php 
// Démarrer la session au début de la page
session_start();
// Accéder à $_SESSION
if (isset($_SESSION['table'])) {
    $table = $_SESSION['table'];
// Affichage ou traitement des données de session
} 
?>
<!DOCTYPE html>
<html lang="en">

<?php include "./includes/head.inc.html"; ?>

<body>
<?php include "./includes/header.inc.html"; ?>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 mt-3">  
            <a class="btn btn-outline-secondary list-group-item" href="index.php" role="button">Home</a>
            <?php if (isset($table)) include "./includes/ul.inc.php"; ?>
        </nav>

        <section class="col-md-9">
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Identifier le type de formulaire soumis
            $form_type = $_POST['form_type'] ?? '';
             // Récupérer les données du formulaire avec des valeurs par défaut
            $first_name = htmlspecialchars($_POST['first_name'] ?? '');
            $name = htmlspecialchars($_POST['name'] ?? '');
            $age = isset($_POST['age']) ? (int)$_POST['age'] : 0;
            $size = isset($_POST['size']) ? (float)$_POST['size'] : 0.0;
            $civility = htmlspecialchars($_POST['civility'] ?? '');
            
            $table = [
                'first_name' => $first_name,
                'name' => $name,
                'age' => $age,
                'size' => $size,
                'civility' => $civility
            ];
            // Gérer les compétences
            $skills = [];
            if (isset($_POST['skills']) && is_array($_POST['skills'])) {
                $skills = $_POST['skills'];
            }
            // Gérer l'image téléchargée
            $img = [];
            if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                $uploaded = "uploaded/";
                $target = $uploaded . basename($_FILES['img']['name']);
                $maxSize = 2097152; // 2MB
                $typeAllow = ["image/png", "image/jpeg"];
                $extension = explode("/", $_FILES['img']["type"]);
            
                if ($_FILES['img']['size'] > $maxSize) {
                    echo "<div class='alert alert-success text-center' role='alert'>La taille de l'image doit être inférieure à 2Mo</div>";
                }
                elseif (empty($_FILES['img']['name'])) {
                    echo "<div class='alert alert-danger'>Aucun fichier n'a été téléchargé</div>";
                }
                elseif (!in_array($_FILES['img']['type'], $typeAllow)) {
                    echo "<div class='alert alert-danger'>Extension \"" . htmlspecialchars($extension[1] ?? 'inconnue') . "\" non prise en charge</div>";
                }
                elseif ($_FILES['img']['error'] != 0) {
                    echo "<div class='alert alert-danger'>Error: " . htmlspecialchars($_FILES['img']["error"]) . "</div>";
                }
                else {
                    if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
                        $img = [
                            'name' => $_FILES['img']['name'],
                            'type' => $_FILES['img']['type'],
                            'tmp_name' => $target,
                            'error' => $_FILES['img']['error'],
                            'size' => $_FILES['img']['size']
                        ];
                    } else {
                        echo "<div class='alert alert-danger'>Erreur lors du déplacement du fichier téléchargé.</div>";
                    }
                }
            }
            // Fusionner les tableaux de données
            $table = array_merge($table, $skills);
            // Ajouter l'img au tableau principal seulement s'il y a des données
            if (!empty($img)) {
                $table['img'] = $img;
            }
            // Si le formulaire soumis est 'addmore', ajouter 'color' et 'dob'
            if ($form_type === 'addmore') {
                $color = htmlspecialchars($_POST['color'] ?? '');
                $dob = htmlspecialchars($_POST['dob'] ?? '');
                // Ajouter au tableau
                $table['color'] = $color;
                $table['dob'] = $dob;
            }
            // Stocker le tableau dans la session
            $_SESSION['table'] = $table;
             // Ajouter un message de confirmation dans la session
            $_SESSION['message'] = "Données sauvegardées";
        }
        // Affichage du message de confirmation
        if (isset($_SESSION['message'])) {
            echo "<div class='alert alert-success text-center' role='alert'>" . htmlspecialchars($_SESSION['message']) . "</div>";
            unset($_SESSION['message']);
        }
        ?>

        <?php 
        
        if (isset($_GET['add'])){
            include_once "./includes/form.inc.html";
        }
        elseif (isset($_GET['debugging'])){
        ?>
            <h2 class="text-center">Débogage</h2>
            <br>
            <h3>===>Lecture du tableau à l'aide de la fonction print_r()</h3>
        <?php
            echo '<pre>';
            print_r($_SESSION['table']);// Affiche le tableau complet incluant l'image
            echo '</pre>';

        }
        elseif (isset($_GET['concatenation'])){
        ?>  
            <h2 class="text-center">Concaténation</h2>
            <br>
            <h3>===>Construction d'une phrase avec le contenu du tableau</h3>
            <p>Mme <?php echo htmlspecialchars($table['first_name']) . " " . htmlspecialchars($table['name']); ?></p>
            <p>J'ai <?php echo htmlspecialchars($table['age']); ?> ans et je mesure <?php echo htmlspecialchars($table['size']); ?>m.</p>

            
            <h3>===>Construction d'une phrase après MAJ du tableau</h3>
            <p>Mme <?php echo ucwords(htmlspecialchars($table['first_name'])) . " " . strtoupper(htmlspecialchars($table['name'])); ?></p>

            <p>J'ai <?php echo htmlspecialchars($table['age']); ?> ans et je mesure <?php echo htmlspecialchars($table['size']); ?>m.</p>

            <h3>====> Affichage d'une virgule à la place du point pour la taille</h3>
            <p>Mme <?php echo ucwords(htmlspecialchars($table['first_name'])) . " " . strtoupper(htmlspecialchars($table['name'])); ?></p>
            <p>J'ai <?php echo htmlspecialchars($table['age']); ?> ans et je mesure <?php echo str_replace('.', ',', htmlspecialchars($table['size'])); ?>m.</p>
        <?php

        }// Dans la section où vous lisez le tableau avec une boucle foreach
        elseif (isset($_GET['loop'])){
        ?>  
            <h2 class="text-center">Boucle</h2>
            <br>
            <h3>===>Lecture du tableau à l'aide d'une boucle foreach</h3>
        <?php
            $i = 1; // Initialisation de la variable $i
            // Exclure 'color' et 'dob' de la boucle si elles ne sont pas nécessaires
            foreach ($table as $key => $value) {
                // Vérifier si la clé est 'img'
                if ($key === 'img') {
                    echo 'À la ligne n°' . $i . ' correspond à la clé ' . htmlspecialchars($key) . ' et contient ';
                    echo '<img src="' . htmlspecialchars($value['tmp_name']) . '" alt="Uploaded Image" style="max-width: 100%; display: block; margin-top: 10px;">';
                } else {
                    echo 'À la ligne n°' . $i . ' correspond à la clé ' . htmlspecialchars($key) . ' et contient ' . htmlspecialchars($value) . '<br>';
                }
                $i++;
            }
        }
        
        elseif (isset($_GET['function'])){
        ?> 
            <h2 class="text-center">Fonction</h2>
            <br>
            <h3>===> J'utilise ma fonction readTable()</h3>
        <?php
            function readTable($table){
                $i = 1; 
                foreach ($table as $key => $value) {
                    // Vérifier si la clé est 'img'
                    if ($key === 'img') {
                        echo 'À la ligne n°' . $i . ' correspond à la clé ' . htmlspecialchars($key) . ' et contient ';
                        echo '<img src="' . htmlspecialchars($value['tmp_name']) . '" alt="Uploaded Image" style="max-width: 100%; display: block; margin-top: 10px;">';
                    } else {
                        echo 'À la ligne n°' . $i . ' correspond à la clé ' . htmlspecialchars($key) . ' et contient ' . htmlspecialchars($value) . '<br>';
                    }
                    $i++;
                }
            }
            // Exemple d'appel à la fonction readTable
            if (isset($_SESSION['table'])) {
                $table = $_SESSION['table'];
                readTable($table);// Appel de la fonction pour afficher les données 
            }
        }
        elseif (isset($_GET['del'])){
            unset($_SESSION['table']);
            $_SESSION['message'] = "Données supprimées";
            echo "<div class='alert alert-success' role='alert'>" . htmlspecialchars($_SESSION['message']) . "</div>";
            unset($_SESSION['message']);
        }
        if (empty($_GET)) {
            // Afficher les boutons si aucune action n'est sélectionnée
            echo '<a href="index.php?add" class="btn btn-primary active ms-3 mt-3">Ajouter des données</a>';
            echo '<a href="index.php?addmore" class="btn btn-secondary active ms-3 mt-3">Ajouter plus de données</a>';
        }
        if (isset($_GET['addmore'])){
            include_once "./includes/form2.inc.php";
        }
        ?>
    </div>    
</div>
</body>
<?php
include "./includes/footer.inc.html";
?>
</html>
