<?php

//var_dump($_POST);

//var_dump($_FILES);

if (isset($_FILES["avatar"])) {

    if (isset($_FILES["avatar"]["error"]) && 0 == $_FILES["avatar"]["error"]) {

        if (isset($_FILES["avatar"]["size"]) &  $_FILES["avatar"]["size"] <= 1000000) {

            $type_extension  = explode("/", $_FILES["avatar"]["type"]);

            if (isset($type_extension[1]) && !empty($type_extension[1])) {

                $extensions_autorisees = ["png", "jpg", "jpeg" . "gif"];

                if (in_array($type_extension[1], $extensions_autorisees)) {

                    if(!is_dir("uploads")){

                        mkdir("uploads");

                    }

                    move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/' . basename($_FILES['avatar']['name']));

                    echo "Youppiii. L'upload a été efectué avec succès.";

                    
                } else {

                    echo "L'extension du fichier soumit n'est pas autorisée. Veuillez soumettre un fichier dont l'extension est png, jpg, jpeg ou gif";
                }
            }
        } else {

            echo "La taille du fichier est supérieur a 1 Mo.";
        }
    } else {
        echo "Une erreur s'est produite";
    }
} else {
    echo "NOT OK";
}
