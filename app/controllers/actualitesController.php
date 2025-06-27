<?php

function GetActualites(): array{

    $url = 'https://www.sportytrader.com/actualite/';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    curl_close($ch);

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    $tmp = $xpath->query("//a[@class='inline-block font-semibold mb-2 text-xl leading-tight sm:leading-normal xl:min-h-[60px]']");
    foreach($tmp as $data){
        $titles[] = $data->nodeValue;
    }

    $tmp = $xpath->query("//div[@class='text-sm flex items-start']");
    foreach($tmp as $data){
        $dates[] = $data->nodeValue;
    }

    $tmp = $xpath->query("//div[@class='mt-2']");
    foreach($tmp as $data){
        $descriptions[] = $data->nodeValue;
    }

    $tmp = $xpath->query("//div[@class='bg-white overflow-hidden border border-gray-200 rounded-lg mb-4 lg:min-h-[500px] cursor-pointer hover:border-primary-yellow']");
    foreach($tmp as $data){
        $raw[] = $data->getAttribute('onclick');
    }
    foreach ($raw as $entry) {
        if (preg_match("/window\.location\.href='https:\/\/www\.sportytrader\.com\/actualite\/(.*?)'/", $entry, $matches)) {
            $details[] = $matches[1];
        }
    }


    $tmp = $xpath->query("//img[@class='w-full aspect-[16/9]']");
    foreach($tmp as $data){
        $links[] = $data->getAttribute('src');
    }

    for ($i=0; $i < count($links); $i++) { 
        $resultats[] = [
            $links[$i], $titles[$i], $dates[$i], $descriptions[$i],
        ];
    }

    return [$resultats, $details];
}