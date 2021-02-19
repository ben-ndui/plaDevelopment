<?php

$app = App::getInstance();
?>

<form enctype="multipart/form-data" method="post">
    <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
    Envoyez ce fichier : <input name="userfile" type="file"/>
    <input type="submit" value="Envoyer le fichier"/>
</form>

<?php
if (isset($_FILES['userfile']) && strlen($_FILES['userfile']['name']) != 0) {
    //dossier
    $dossier = 'assets/background/';
    //fichier
    $fichier = basename($_FILES['userfile']['name']);
    //Taille max du fichier
    $taille_maxi = 30000;
    //taille du fichier
    $taille = filesize($_FILES['userfile']['tmp_name']);
    //type de fichier accepter
    $extensions = array('.png', '.jpg', '.jpeg', '.svg', '.wav');
    // récupère la partie de la chaine à partir du dernier . pour connaître l'extension.
    $extension = strrchr($_FILES['userfile']['name'], '.');
    //Ensuite on teste
    if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $erreur = 'Vous devez uploader un fichier de type png, jpg, jpeg, svg ou wav...';
    }
    if ($taille > $taille_maxi) {
        $erreur = 'Le fichier est trop gros...';
    }
    if (!isset($erreur)) {
        echo '<pre>';
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $dossier . $fichier)) {
            //insertion dans la table
            $app->getDb()->query("INSERT INTO image
                VALUES (null,'" . $dossier . $fichier . "','" . $_FILES['userfile']['name'] . "',3)");
            echo "Le fichier est valide, et a été téléchargé
             avec succès.";
        }
        echo '</pre>';
    } else {
        echo '<pre>' . $erreur . '</pre>';
    }
}

?>
