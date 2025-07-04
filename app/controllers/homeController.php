<?php

function GetNextMatch(): array{

    $url = 'https://www.sportytrader.com/';
    $i = 0;

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

    $tmp = $xpath->query("//img[@class='bg-white p-1 border border-gray-300 rounded-full h-10 w-10 mr-1.5']");
    foreach ($tmp as $data) {
        $images[] = $data->getAttribute('src');
    }


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

    return [$title, $resultats, $images];

}