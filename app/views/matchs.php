<?php
    require '../app/controllers/matchsController.php';
    [$title, $links, $resultats] = MatchsController();
    $i = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Welcome on Sportalytics</title>
</head>
<body>
    <?php require 'partials/navbar.php' ?>
    <div class="help" ></div>
    <div class="container">
        <h3 class="styleTitle">Pronostics Sportifs</h3>
        <div class="filtre"></div>
        <?php foreach($title as $t): ?>
            <div class="pronoChamp">
                <h4 class="styleTitle"><?= $t ?></h4>
                <div class="row">
                   <?php $matches = array_chunk($resultats[$t], 13);?>
                    <?php foreach($matches as $data): ?>
                        <?php if($data[0] != "18+ | Annonce publicitaire | Jouer comporte des risques") : ?>
                            <div class="col-xl-4">
                                <div class="card box hidden">
                                    <div>
                                        <p style="text-align: center;font-weight: bold;"><?= $data[0] ?></p>
                                    </div>
                                    <div>
                                        <p style="text-align: center;color: rgba(0,0,0,0.3);font-size:15px"><?= $data[1]."".$data[2] ?></p>
                                    </div>
                                    <div style="display:flex;justify-content:center;">
                                        <div style="display:flex;justify-content:center;margin-right:5px;";>
                                            <p style="margin-right:5px;"><?= $data[3] ?></p>
                                            <img src="<?= $links[$i][0] ?>" width="32px" height="32px">
                                        </div>
                                        <p><?= $data[4] ?></p>
                                        <div style="display:flex;justify-content:center;margin-left:5px;";>
                                            <img src="<?= $links[$i][1] ?>" width="32px" height="32px" style="margin-right:5px;">
                                            <p><?= $data[5] ?></p>
                                        </div>
                                        <?php $i++; ?>   
                                    </div>
                                    <div class="prono">
                                        <p style="font-weight: bold;color:#ff5500;"><?= $data[6] ?></p>
                                        <p><?= $data[7] ?></p>
                                    </div>
                                    <button class="betButton">Pariez maintenant</button>
                                </div>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <?php require 'partials/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>