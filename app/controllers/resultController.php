<?php

function GetResultats(){
    
    $url = 'https://www.sportytrader.com/resultat-direct/';
    $j = 0;
    $s = 0;
    $k = 0;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $html = curl_exec($ch);
    curl_close($ch);

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    $tmp = $xpath->query("//div[@class='cursor-pointer relative border border-primary-grayborder rounded-md flex my-4 justify-between items-center p-2']");
    foreach($tmp as $data){
        $competitions[] = $data->nodeValue;
    }

    $tmp = $xpath->query("
        //span[@class='inline-block w-8 h-8 dark:bg-white border-2 border-primary-grayborder rounded-full'] | 
        //span[@class='inline-block w-8 h-8 dark:bg-white border border-primary-green rounded-full'] |
        //img[@class='h-5 rounded-full'] |
        //img[@class='dark:bg-white rounded-full dark:bg-white'] |
        //img[@class='h-5 rounded-full -mt-1']
    ");
    foreach ($tmp as $el) {
        if ($el->tagName === 'img') {
            $links[] = $el->getAttribute('src');
        } elseif ($el->tagName === 'span') {
            $style = $el->getAttribute('style');
            if (preg_match('/background-image\s*:\s*url\(([^)]+)\)/i', $style, $matches)) {
                $links[] = $matches[1];
            }
        }
    }

    $tmp = $xpath->query("//img[@class='dark:bg-white rounded-full dark:bg-white']");
    foreach ($tmp as $el) {
        if ($el->tagName === 'img') {
            $linksCompetitions[] = $el->getAttribute('src');
        }
    }


    $tmp = $xpath->query("//div[@class='col-span-3 flex justify-end']");
    foreach($tmp as $data){
        $scores[] = $data->nodeValue;
    }

    $tmp = $xpath->query("
        //div[@class='flex flex-col justify-center items-center col-span-2 space-y-1'] |
        //div[@class='cursor-pointer relative border border-primary-grayborder rounded-md flex my-4 justify-between items-center p-2']
    ");
    foreach($tmp as $data){
        $states[] = $data->nodeValue;
    }

    $tmp = $xpath->query("
        //div[contains(@class, 'col-span-9 md:col-span-11 w-full')] |
        //div[@class='cursor-pointer relative border border-primary-grayborder rounded-md flex my-4 justify-between items-center p-2']
    ");
    foreach($tmp as $data){
        $ts[] = $data->nodeValue;
    }


    foreach($links as $link){
        if (in_array( $link , $linksCompetitions )) {
            $j ++;
        } else{
            $resultats[$competitions[$j-1]][] =  $link;
        }
    }

    foreach($ts as $t){
        if (in_array( $t , $competitions )) {
            $s ++;
        } else{
            $teams[$competitions[$s-1]][] =  $t;
        }
    }

    foreach($states as $state){
        if (in_array( $state , $competitions )) {
            $k ++;
        } else{
            $times[$competitions[$k-1]][] =  $state;
        }
    }

    // echo "<pre>".var_dump($times)."</pre>";
    // exit();
    return [$competitions, $teams , $times ,$resultats];
    

}