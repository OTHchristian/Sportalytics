<?php
    require '../app/controllers/actuDetailsController.php';
    require '../app/controllers/actualitesController.php';
    if(isset($_GET['q'])){
        [$title,$source,$image,$resume,$subtitles,$text] = GetActuDetails($_GET['q']);
    }
    [$resultats, $details] = GetActualites();
    $i = -1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Welcome on Sportalytics</title>
</head>
<body>
    <?php require 'partials/navbar.php' ?>
    <div class="help" ></div>
    <div class="container actudetails">
        <div class="row">
            <div class="col-xl-7">
                <h5 class="styleTitle" style="font-weight: bold;"><?=$title?></h5>
                <p style="color: rgba(0,0,0,0.2)"><?=$source?></p>
                <img src="<?=$image?>" alt="" srcset="" width="100%" style="border-radius: 10px">
                <p style="margin-top: 20px"><?=$resume?></p>B Salzbourg, qui se jouera dans la nuit de jeudi à vendredi.</p>
                <p>La Juventus et Manchester City sont donc prévenus. Le grand perdant de ce choc aura de fortes chances de prendre rendez-vous avec les Madrilènes pour l'entame des rencontres à élimination directe. Une bien mauvaise nouvelle quand on sait que le Real Madrid de Xabi Alonso a fait de ce tournoi un véritable objectif et pourrait d'ailleurs voir le retour de Kylian Mbappé pour la suite de la compétition...</p>
                <h5 class="styleTitle" style="font-weight: bold;"><?=$subtitles[0]?></h5>
                <?php foreach($text as $t):?>
                    <p><?= $t?></p>
                <?php endforeach ?>
                <p style="display:flex; justify-content: center;"><button class="button">Voir nos pronostics</button></p>

            </div>
            <div class="col-xl-5">
                <h5 class="styleTitle" style="font-weight: bold;">Actualités</h5>
                <?php foreach($resultats as $r): ?>
                    <?php $i+=1; ?>
                    <div class="previewActu" onclick="window.location.href ='/actualite/details?q=<?=$details[$i]?>'">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?=$r[0]?>" width="100%" style="border-radius: 5px;margin-top:2px">
                            </div>
                            <div class="col-8">
                                <p style="font-size: 12px;"><?=$r[1]?></p>
                                <span style="color: rgba(0,0,0,0.2);font-size:12px"><?=$r[2]?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <?php require 'partials/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/js/app.js"></script>
</body>
</html>