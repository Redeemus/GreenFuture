<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$doc = new DOMDocument;
$doc->loadHTMLFile('http://www.infoclimat.fr/observations-meteo/archives/4/mars/2017/rennes-st-jacques/07130.html');
$tableHeaders = $doc->getElementsByTagName('td');
foreach ($tableHeaders as $th)
{
    echo $th->nodeValue . '<br />';
}

