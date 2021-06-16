<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet06 Exercice02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet06 Exercice02</h1>
            <h2 class="col-12 text-info text-center">Créez un formulaire avec les champs "nom" et "prénom". 
            À l'envoi du formulaire sur une autre page, Affichez les informations saisies. 
            Les champs doivent être renseignés. Vérifiez la saisie.</h2>
        </div>
        <!-- <div class="offset-1 row justify-content-center bg-secondary rounded m-4">
            <form method="post" action="index02.php">
                <p class="col-9 text-center text-light p-2 m-3">NOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="name" id="name"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3">PRÉNOM :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="firstName" id="firstName"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3"><button type="submit" class=" col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">ENVOI DES DONNÉES VERS UNE AUTRE PAGE !</button></p>
            </form>
        </div> -->
        <!-- Correction -->
        <div class="offset-1 row justify-content-center bg-secondary rounded m-4">
            <form method="post" action="index02.php">
                <label class="col-9 text-center text-light p-2 m-3">NOM :</label>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="name" id="name"/>
                <label class="col-9 text-center text-light p-2 m-3">PRÉNOM :</label>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="firstName" id="firstName"/>
                <label class="col-9 text-center text-light p-2 m-3"><button type="submit" class=" col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">ENVOI DES DONNÉES VERS UNE AUTRE PAGE !</button></label>
            </form>
        </div>
    </div>
</body>
</html>