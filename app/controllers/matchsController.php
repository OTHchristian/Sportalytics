<?php

function MatchsController(){
    $links = [];
    $url = 'https://www.sportytrader.com/pronostics/';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    curl_close($ch);

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $elements = $xpath->query("//section[@id='cal-section']");

    $text = $elements[0]->nodeValue;

    $lignes = explode("\n", $text);
    
    $resultats = [];
    $titreActuel = null;
    $title = [];

    foreach ($lignes as $ligne) {
        $ligne = trim($ligne);
        if ($ligne === '') continue;

        if (str_starts_with($ligne, "Pronostic - ")) {
            $titreActuel = $ligne;
            $title[] = $titreActuel; 
            $resultats[$titreActuel] = [];
        } elseif ($titreActuel) {
            $resultats[$titreActuel][] = $ligne;
        }
    }

    $imgs = $xpath->query("//div[contains(@class, 'card')]//img");
    foreach($imgs as $img){
        $links[] = $img->getAttribute('src');
    }
    $links = array_chunk($links, 2);

    $tmp = $xpath->query("//div[@class='card h-full border border-gray-200 border-2  transition-all cursor-pointer hover:shadow-xl  rounded-lg relative']");
    foreach($tmp as $data){
        $raw[] = $data->getAttribute('onclick');
    }
    foreach ($raw as $entry) {
        if (preg_match("/window\.open\('\/pronostics\/([^']+)'/", $entry, $matches)) {
            $details[] = $matches[1];
        }
    }


    return [$title, $links, $resultats, $details];
}
