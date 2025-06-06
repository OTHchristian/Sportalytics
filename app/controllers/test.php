<?php

class LiveSportsParser {
    private $html;
    
    public function __construct($html) {
        $this->html = $html;
    }
    
    public function parseLiveMatches() {
        $dom = new DOMDocument();
        @$dom->loadHTML($this->html);
        $xpath = new DOMXPath($dom);
        
        $matches = [];
        
        // Trouver toutes les sections de matchs
        $sections = $xpath->query("//section[contains(@class, 'pop')]");
        
        foreach ($sections as $section) {
            // Récupérer le nom de la compétition
            $competition = $xpath->query(".//header//a[contains(@class, 'text-primary-blue')]", $section);
            $competitionName = $competition->length > 0 ? trim($competition->item(0)->nodeValue) : 'Compétition inconnue';
            
            // Récupérer les matchs individuels
            $matchElements = $xpath->query(".//div[contains(@class, 'live') or contains(@class, 'no-live')]", $section);
            
            foreach ($matchElements as $match) {
                $matchData = [
                    'competition' => $competitionName,
                    'status' => '',
                    'time' => '',
                    'team1' => [
                        'name' => '',
                        'image' => '',
                        'score' => ''
                    ],
                    'team2' => [
                        'name' => '',
                        'image' => '',
                        'score' => ''
                    ],
                    'link' => ''
                ];
                
                // Statut du match (en direct, terminé, etc.)
                $status = $xpath->query(".//span[contains(@class, 'text-primary-red') or contains(@class, 'text-gray-600')]", $match);
                if ($status->length > 0) {
                    $matchData['status'] = trim($status->item(0)->nodeValue);
                    if (strpos($match->getAttribute('class'), 'live') !== false) {
                        $matchData['status'] = 'Live';
                    }
                }
                
                // Minute du match (si en cours)
                $time = $xpath->query(".//span[contains(@class, 'text-primary-red')]", $match);
                if ($time->length > 0) {
                    $matchData['time'] = trim($time->item(0)->nodeValue);
                }
                
                // Équipe 1
                $team1 = $xpath->query(".//div[contains(@class, 'grid-cols-12')][1]//div[contains(@class, 'flex items-center')]", $match);
                if ($team1->length > 0) {
                    $img = $xpath->query(".//span[contains(@style, 'background-image')]", $team1->item(0));
                    if ($img->length > 0) {
                        $style = $img->item(0)->getAttribute('style');
                        preg_match('/url\(\'(.*?)\'\)/', $style, $matches);
                        $matchData['team1']['image'] = $matches[1] ?? '';
                    }
                    
                    $name = $xpath->query(".//div[contains(@class, 'flex items-center')]/following-sibling::div", $team1->item(0));
                    if ($name->length > 0) {
                        $matchData['team1']['name'] = trim($name->item(0)->nodeValue);
                    }
                }
                
                // Équipe 2
                $team2 = $xpath->query(".//div[contains(@class, 'grid-cols-12')][2]//div[contains(@class, 'flex items-center')]", $match);
                if ($team2->length > 0) {
                    $img = $xpath->query(".//span[contains(@style, 'background-image')]", $team2->item(0));
                    if ($img->length > 0) {
                        $style = $img->item(0)->getAttribute('style');
                        preg_match('/url\(\'(.*?)\'\)/', $style, $matches);
                        $matchData['team2']['image'] = $matches[1] ?? '';
                    }
                    
                    $name = $xpath->query(".//div[contains(@class, 'flex items-center')]/following-sibling::div", $team2->item(0));
                    if ($name->length > 0) {
                        $matchData['team2']['name'] = trim($name->item(0)->nodeValue);
                    }
                }
                
                // Scores
                $scores = $xpath->query(".//div[contains(@class, 'flex flex-col')]//span", $match);
                if ($scores->length >= 2) {
                    $matchData['team1']['score'] = trim($scores->item(0)->nodeValue);
                    $matchData['team2']['score'] = trim($scores->item(1)->nodeValue);
                }
                
                // Lien vers le match
                $link = $xpath->query(".//a[contains(@class, 'clickandstop')]", $match);
                if ($link->length > 0) {
                    $matchData['link'] = $link->item(0)->getAttribute('href');
                }
                
                $matches[] = $matchData;
            }
        }
        
        return $matches;
    }
}