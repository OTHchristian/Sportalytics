<?php

function GetActuDetails($link){
    $url = 'https://www.sportytrader.com/actualite/'.$link;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    curl_close($ch);

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    $tmp = $xpath->query("//h1[@class='design-title break-words px-box design-title-primary mb-4 ']");
    foreach($tmp as $data){
        $title = $data->nodeValue;
    }

    $tmp = $xpath->query("//p[@class='text-xs text-gray-400 mb-2']");
    foreach($tmp as $data){
        $source = $data->nodeValue;
    }

    $tmp = $xpath->query("//img[@class='w-full rounded-lg mb-2']");
    foreach($tmp as $data){
        $image = $data->getAttribute('src');
    }

    $tmp = $xpath->query("//em[@itemprop='description']");
    foreach($tmp as $data){
        $resume = $data->nodeValue;
    }

    $tmp = $xpath->query("//div[@class='prose max-w-none break-words']//h2");
    foreach($tmp as $data){
        $subtitles[] = $data->nodeValue;
    }
    
    $tmp = $xpath->query("//div[@class='prose max-w-none break-words']//p");
    foreach($tmp as $data){
        $text[] = $data->nodeValue;
    }

    // var_dump($subtitles);
    // exit();
}