<?php
$xml = new DOMDocument; 
$xml->load('docfile.xml'); 

$elements = $xml->getElementsByTagNameNS('http://www.google.com/', '*'); 
$i = $elements->length - 1; 
while ($i > -1) { 
    $element = $elements->item($i); 
    $ignore = false; 

    $newelement = $xml>createTextNode('Some new node!'); 
    $element->parentNode->replaceChild($newelement, $element); 
    $i--; 
}