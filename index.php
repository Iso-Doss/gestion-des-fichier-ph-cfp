<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de fichier en PHP</title>
</head>

<body>

    <form action="traitement-index.php" method="POST" enctype="multipart/form-data">

        <table>

            <tr>
                <td colspan="2">
                    Gestion de fichier en PHP
                </td>
            </tr>

            <tr>
                <td>
                    <label for="avatar">Avatar : </label>
                </td>
                <td>
                    <input type="file" name="avatar" id="avatar" class="avatar" />
                </td>
            </tr>

            <tr>
                <td>
                    <input type="reset" value="Annuler"/>
                </td>
                <td>
                    <input type="submit" value="Soumettre"/>
                </td>
            </tr>

        </table>

    </form>

</body>

</html>