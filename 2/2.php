<?php
require '../vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler(file_get_contents('messages.xml'));
$crawler = $crawler->filter('heading');
foreach ($crawler as $domElement) {
    echo $domElement->nodeValue . PHP_EOL;
}