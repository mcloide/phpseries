<?php
// example got from PHP.net - http://www.php.net/manual/en/domnode.removechild.php

$doc = new DOMDocument;
$doc->load('book.xml');

$book = $doc->documentElement;

// we retrieve the chapter and remove it from the book
$chapter = $book->getElementsByTagName('chapter')->item(0);
$oldchapter = $book->removeChild($chapter);

echo $doc->saveXML();