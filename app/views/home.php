<?php
    require '../app/controllers/homeController.php';
    require '../app/controllers/actualitesController.php';
    [$actu, $details] = GetActualites();
    [$title, $resultats, $images] = GetNextMatch();
    $i=0;
    $j=1;
;?>

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
        <div class="row">
            <div class="col-xl-6 box hidden">
                <div class="topCenter">
                    <div>
                        <h2 class = "masked-text">Découvrez chaque jour des pronostics fiables et argumentés sur le football,</h2>
                        <h4 style="color: orange"> le basketball et le tennis pour maximiser </h4>
                        <h4>vos chances de réussite dans les paris sportifs</h4>
                        <table border="1">
                            <thead>
                                <tr>
                                <th>Équipe</th>
                                <th>Matchs joués</th>
                                <th>Victoires</th>
                                <th>Défaites</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Paris FC</td>
                                <td>10</td>
                                <td>7</td>
                                <td>3</td>
                                </tr>
                                <tr>
                                <td>Basket Lyon</td>
                                <td>12</td>
                                <td>8</td>
                                <td>4</td>
                                </tr>
                                <tr>
                                <td>Tennis Club Nice</td>
                                <td>8</td>
                                <td>5</td>
                                <td>3</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="seeMore">Voir plus de stat &gt;</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box hidden ertec">
                <div class="topCenter">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100 imgCarroussel" src="assets/img/1.webp" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 imgCarroussel" src="assets/img/2.webp" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100 imgCarroussel" src="assets/img/3.webp" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 center">
                <div class="offer">
                    <h3 class="styleTitle">Profitez des Meilleures Offres & Pronostics gratuits 7j/7 !</h3>
                    <div class="align">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                        </svg>
                        <p style="margin-top:15px; margin-left:10px;">Sélection des Meilleurs Sites de Paris + Bonus Exclusifs</p>
                    </div>
                    <div class="align">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-check-lg" viewBox="0 0 16 16">
                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                        </svg>
                        <p style="margin-top:15px; margin-left:10px;">Pronostics d'Experts Gratuits. N°1 depuis 2005.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="offerItem" onclick="window.location.href='https://refpa3267686.top/L?tag=d_2935565m_1573c_&site=2935565&ad=1573'">
                                <div>
                                    <div class="center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                                        </svg>
                                    </div>
                                    <span>Bonus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="offerItem" onclick="window.location.href='https://refpa3267686.top/L?tag=d_2935565m_1573c_&site=2935565&ad=1573'">
                                <div>
                                    <div class="center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-gift" viewBox="0 0 16 16">
                                        <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zM1 4v2h6V4zm8 0v2h6V4zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5z"/>
                                        </svg>
                                    </div>
                                    <span>Code Promo</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="offerItem" onclick="window.location.href='https://refpa3267686.top/L?tag=d_2935565m_1573c_&site=2935565&ad=1573'">
                                <div>
                                    <div class="center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-stars" viewBox="0 0 16 16">
                                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                                        </svg>
                                    </div>
                                    <span>Bookmarkers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="offerItem" onclick="window.location.href='https://refpa3267686.top/L?tag=d_2935565m_1573c_&site=2935565&ad=1573'">
                                <div>
                                    <div class="center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                                        </svg>
                                    </div>
                                    <span>Bonus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="offerItem" onclick="window.location.href='https://refpa3267686.top/L?tag=d_2935565m_1573c_&site=2935565&ad=1573'">
                                <div>
                                    <div class="center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                                        </svg>
                                    </div>
                                    <span>Bonus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="offerItem" onclick="window.location.href='https://refpa3267686.top/L?tag=d_2935565m_1573c_&site=2935565&ad=1573'">
                                <div>
                                    <div class="center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="orange" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                                        </svg>
                                    </div>
                                    <span>Bonus</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="pronoSport">
                    <h3 class="styleTitle">Pronostics paris sportifs</h3>
                    <div class="row">
                        <?php foreach($title as $t ) :?>
                            <div class="col-xl-12 pronoChamp">
                                <h4><?= $t ?></h4>
                                <div class="row">
                                    <?php $matches = array_chunk($resultats[$t], 3);?>
                                    <?php foreach($matches as $data): ?>
                                        <div class="col-xl-6">
                                            <div class="pronoItem box hidden" onclick="window.location.href='/matchs'">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <p><?= $data[0] ?></p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="person">
                                                            <div style="margin-right:10px;display:flex;justify-content:center;">
                                                                <img src="<?=$images[$i]?>" alt="" srcset="" style="margin-top:10px">
                                                            </div>
                                                            <div style="text-align: center;">
                                                                <span class="nx"><?= $data[1] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 center">
                                                        <h1 style="color: orange">Vs</h1>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="person">
                                                            <div style="margin-right:10px;display:flex;justify-content:center;">
                                                                <img src="<?=$images[$j]?>" alt="" srcset="" style="margin-top:10px">
                                                                <?php
                                                                    $i += 2;
                                                                    $j +=2;
                                                                ?>
                                                            </div>
                                                            <div style="text-align: center;">
                                                                <span class="nx"><?= $data[2] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="pronoActu">
                    <h3 class="styleTitle">Actualités Paris sportifs</h3>
                    <div class="row">
                        <?php for ($i=0; $i < 3 ; $i++) : ?>
                            <div class="col-xl-4 box hidden">
                                <div class="article">
                                    <div style="background-color: rgba(0,0,0,0.3);with:100%;height:250px;">
                                        <div class="imgArticle" style="background-image: url(<?= $actu[$i][0] ?>);"></div>
                                    </div>
                                    <div class="smallDescrip">
                                        <h5 style="font-weight: bold;"><?= $actu[$i][1] ?></h5>
                                        <div class="align">
                                            
                                            <svg class="opacity-75 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="12" height="12" viewBox="0 0 97.16 97.16" style="enable-background:new 0 0 97.16 97.16;margin-top:5px;" xml:space="preserve">
                                                <path d="M48.58,0C21.793,0,0,21.793,0,48.58s21.793,48.58,48.58,48.58s48.58-21.793,48.58-48.58S75.367,0,48.58,0z M48.58,86.823    c-21.087,0-38.244-17.155-38.244-38.243S27.493,10.337,48.58,10.337S86.824,27.492,86.824,48.58S69.667,86.823,48.58,86.823z"></path>
                                                <path d="M73.898,47.08H52.066V20.83c0-2.209-1.791-4-4-4c-2.209,0-4,1.791-4,4v30.25c0,2.209,1.791,4,4,4h25.832    c2.209,0,4-1.791,4-4S76.107,47.08,73.898,47.08z"></path>
                                            </svg>
                                            <p style="font-size: 14px; color: rgba(0,0,0,0.3)"><?= $actu[$i][2] ?></p>
                                        </div>
                                        <p><?= $actu[$i][3] ?></p>
                                        <a href="#" style="color: orange">lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        <?php endfor ?>
                        <div class="col-12">
                            <div class="center">
                                <button class="betButton" onclick="window.location.href='/actualites'" style="width: 60%">Voir tout</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-12">
                <section id="a-propos" class="about-section box hidden">
                <div class="container">
                    <h2>À propos de <span class="highlight">Sportalytics</span></h2>
                    <p>Sportalytics est bien plus qu’un simple site de pronostics sportifs : c’est une plateforme intelligente qui alliestatistiques avancées, intuition humaine et algorithmes de prédiction pour vous aider à parier plus intelligemment.Que vous soyez passionné de football, de tennis ou de basketball, nous analysons en continu les performances,les dynamiques de forme et les données clés pour vous proposer des <strong>pronostics fiables, précis et documentés</strong>.Rejoignez une communauté de passionnés, accédez à nos analyses exclusives, et maximisez vos chances de réussitegrâce à une approche basée sur la donnée et la stratégie.</p>
                </div>
                </section>
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