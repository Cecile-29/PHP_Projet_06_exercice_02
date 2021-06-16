<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet05 Exercice02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">Vous êtes redirigé sur une autre page !</h1>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
        <a class="mr-3" href="index.php">cliquez pour revenir au formulaire</a>
            <?php 
                // var_dump($_POST);
    
                if(isset($_POST['name'])) {
                $result = $_POST['name'];

                 if(empty($result)) {
                 echo "<script language='JavaScript'>alert('Input NOM requis !')</script>";
                    } elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result)) {
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                    } else {
                    echo '  '. 'NOM : '. $_POST['name'];
                    }
                }

                if(isset($_POST['firstName'])) {
                $result2 = $_POST['firstName'];

                 if(empty($result2))
                    echo "<script language='JavaScript'>alert('Input PRÉNOM requis !')</script>";
                 elseif(!preg_match("/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/", $result2))
                    echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                else
                    echo '  '. 'PRÉNOM : '. $_POST['firstName'];
                    
                }
            ?>


            <?php 
                // var_dump($_POST);
    
                // $verifName = "/^[a-zA-Z àâäéèêëïîôöùûüÿ-]*$/";
                // if (preg_match($verifName, $_POST['name']) && preg_match($verifName, $_POST['firstName'])){
                //     echo '  '. 'Bonjour : '. $_POST['firstName'].  '  '. $_POST['name'];
                // }else{
                //     echo "<script language='JavaScript'>alert('Seulement les lettres et les espaces sont autorisés !')</script>";
                // }
            ?>
        </div>
    </div>
</body>
</html>