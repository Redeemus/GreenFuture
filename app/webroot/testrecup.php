<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$j=3;
$m='janvier';
$a=2016;

$doc = new DOMDocument;
$doc->loadHTMLFile('http://www.infoclimat.fr/observations-meteo/archives/'.$j.'/'.$m.'/'.$a.'/rennes-st-jacques/07130.html');
$tableElements = $doc->getElementsByTagName('td');
$nbElements = $tableElements->length;
for ($i = 0; $i <$nbElements-15; $i=$i+10)
{
    echo $tableElements->item($i)->nodeValue . '<br />';
}


for ($i = 7; $i <$nbElements-15; $i=$i+10)
{
    echo $tableElements->item($i)->nodeValue . '<br />';
}

for ($i = 4; $i <$nbElements-15; $i=$i+10)
{
    echo $tableElements->item($i)->nodeValue . '<br />';
}

echo $tableElements->item(247)->nodeValue . '<br />';