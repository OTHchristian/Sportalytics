<?php

function GetNextMatch(): array{

    $url = 'https://www.sportytrader.com/';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    curl_close($ch);

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $elements = $xpath->query("//div[@class='px-box']");

    $text = $elements[0]->nodeValue;

    $lignes = explode("\n", $text);
    
    $resultats = [];
    $titreActuel = null;
    $title = [];
    $links = [];

    foreach ($lignes as $ligne) {
        $ligne = trim($ligne);
        if ($ligne === '') continue;

        if (str_starts_with($ligne, "Pronostic")) {
            $titreActuel = $ligne;
            $title[] = $titreActuel; 
            $resultats[$titreActuel] = [];
        } elseif ($titreActuel) {
            $resultats[$titreActuel][] = $ligne;
        }
    }
    $imgs = $xpath->query("//div[contains(@class, 'px-box')]//img");
    foreach($imgs as $img){
        $links[] = $img->getAttribute('src');
    }
    $links = array_chunk($links, 2);
    // var_dump($links);
    // exit();

    return [$title, $links, $resultats];

}