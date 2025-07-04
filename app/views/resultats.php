<?php
    require '../app/controllers/resultController.php';
    [$competitions, $teams, $times, $resultats,$scores] = GetResultats();
    $j = -1;
    $k = -1;
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
        <div class="filter">
            <div class="filterComp">
                <p class="activeFilter">Tous</p>
                <p>Football</p>
                <p>Basket</p>
                <p>Tenis</p>
                <p>rugby</p>
            </div>
            <div style="border-top: 1px solid rgba(0,0,0,0.1);margin-bottom: 10px"></div>
            <div class="mt">
                <div class="filterDate">
                    <p style="margin-top: 10px">Hier</p>
                    <p style="margin-top: 10px" class="activeFilter">Aujourd'hui</p>
                    <p style="margin-top: 10px">Demain</p>
                    <svg class="text-primary-blue dark:text-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.66666" y="4.33325" width="16.6667" height="14.6667" rx="2" stroke="currentColor" stroke-width="2"></rect>
                        <rect x="1.66666" y="4.33325" width="16.6667" height="4.66667" rx="2" fill="currentColor" stroke="currentColor" stroke-width="2"></rect>
                        <rect x="4.33333" y="1" width="4" height="6.66667" rx="2" fill="white" stroke="currentColor" stroke-width="2"></rect>
                        <rect x="11.6667" y="1" width="4" height="6.66667" rx="2" fill="white" stroke="currentColor" stroke-width="2"></rect>
                    </svg>
                </div>
                <div style="width: 100%; margin-top: 20px;">
                    <select name="competitions" id="" class="selectCompetitions">
                        <option value="Competitions">Competitions</option>
                    </select>
                </div>
            </div>
            <br>
        </div>
        <h3 class="styleTitle">Match en direct</h3>
        <div class="wrapper">
            <div class="row">
                <?php foreach($competitions as $competition ):?>
                    <?php if(strpos($competition, "Double") == false): ?>
                        <div class="field box hidden">
                            <p><?= $competition ?></p>
                        </div>
                        <?php
                            $links = array_chunk($resultats[$competition], 2);
                            $tmp = array_chunk($teams[$competition], 2);
                            $tms = array_chunk($times[$competition], 1);
                        ?>
                        <?php for( $i=0; $i<count($links); $i++): ?>
                            <div class="col-xl-6 box hidden">
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
                                        <div class="col-4" style="display:flex;align-items:center;justify-content:end;">
                                            <div>
                                                <?php $k+=1; ?>
                                                <?php
                                                    $tmp_score = $str = preg_replace('/\s+/', ' ', trim($scores[$k]));
                                                    $score = explode(" ",$tmp_score);
                                                ?>
                                                <?php if(count($score) != 1): ?>
                                                    <?php if(count($score) == 2): ?>
                                                        <p><?=$score[0]?></p>
                                                        <p style="font-weight: bold;font-size: 17px"><?=$score[1]?></p>
                                                    <?php else: ?>
                                                        <p>
                                                            <?php for ($i=0; $i < count($score)/2 -1 ; $i++):?>
                                                                <span><?= $score[$i] ?> </span>
                                                            <?php endfor ?>
                                                        </p>
                                                        <p>
                                                            <?php for ($i=count($score)/2 -1; $i < count($score)-1; $i++):?>
                                                                <span><?= $score[$i] ?> </span>
                                                            <?php endfor ?>
                                                        </p>
                                                    <?php endif ?>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                        <div class="pub box hidden">
                            <div>
                                <div class="insidePub">
                                    <span style="color: orange">Offre exclusive</span>
                                    <div class="bonus">
                                        <img src="assets/img/1xbet.webp" alt="" srcset="" style="border-radius:5px;">
                                        <p style="color: white;margin-left:10px;margin-top:15px">Bonus 169000XAF</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none" class="ml-2">
                                            <circle cx="15" cy="15" r="15" fill="#FFA900"></circle>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3228 5.26314C10.7133 4.87261 11.3465 4.87262 11.737 5.26314L20.7668 14.2929C21.1573 14.6834 21.1573 15.3166 20.7668 15.7071L11.737 24.7369C11.3465 25.1274 10.7133 25.1274 10.3228 24.7369C9.93227 24.3463 9.93227 23.7132 10.3228 23.3226L18.6454 15L10.3228 6.67735C9.93227 6.28683 9.93227 5.65366 10.3228 5.26314Z" fill="white"></path>
                                        </svg>
                                    </div>
                                </div>
                                <p style="font-size: 12px;text-align:center;">18+ | Annonce publicitaire | Jouer comporte des risques</p>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <?php require 'partials/footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>