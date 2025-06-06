<?php
    require '../app/controllers/resultController.php';
    [$competitions, $teams, $times, $resultats] = GetResultats();
    $j = -1;
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
        <h3 class="styleTitle">Match en direct</h3>
        <div class="wrapper">
            <div class="row">
                <?php foreach($competitions as $competition ):?>
                    <?php if(strpos($competition, "Double") == false): ?>
                        <div class="field">
                            <p><?= $competition ?></p>
                        </div>
                        <?php
                            $links = array_chunk($resultats[$competition], 2);
                            $tmp = array_chunk($teams[$competition], 2);
                            $tms = array_chunk($times[$competition], 1);
                        ?>
                        <?php for( $i=0; $i<count($links); $i++): ?>
                            <div class="col-xl-6">
                                <div class="match">
                                    <div class="row">
                                        <div class="col-3" style="display:flex;align-items: center;"><p><?= $tms[$i][0] ?></p></div>
                                        <div class="col-5">
                                            <div style="display:flex">
                                                <img src=<?= $links[$i][0] ?> widht="30px" height="30px" style="margin-right: 10px">
                                                <p><?= $tmp[$i][0] ?></p>
                                            </div>
                                            <div style="display:flex">
                                                <img src=<?= $links[$i][1] ?> widht="30px" height="30px" style="margin-right: 10px">
                                                <p style="font-weight: bold;font-size: 17px"><?= $tmp[$i][1] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-4" style="display:flex;align-items:center;">
                                            <div>
                                                <p>1</p>
                                                <p style="font-weight: bold;font-size: 17px">2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</body>
</html>