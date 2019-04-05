<?php
require_once 'City.php';
require_once 'GA.php';
require_once 'Tour.php';
require_once 'TourManager.php';
require_once 'Population.php';

use tsp\City;
use tsp\GA;
use tsp\Population;
use tsp\TourManager;
$lat1=$_POST['lat1txt'];
$long1=$_POST['long1txt'];
$lat2=$_POST['lat2txt'];
$long2=$_POST['long2txt'];
$lat3=$_POST['lat3txt'];
$long3=$_POST['long3txt'];
$lat4=$_POST['lat4txt'];
$long4=$_POST['long4txt'];
$lat5=$_POST['lat5txt'];
$long5=$_POST['long5txt'];
$lat6=$_POST['lat6txt'];
$long6=$_POST['long6txt'];
$lat7=$_POST['lat7txt'];
$long7=$_POST['long7txt'];
$lat8=$_POST['lat8txt'];
$long8=$_POST['long8txt'];
$lat9=$_POST['lat9txt'];
$long9=$_POST['long9txt'];
$lat10=$_POST['lat10txt'];
$long10=$_POST['long10txt'];


//Create and add our cities
$city1 = new City($lat1, $long1);
TourManager::addCity($city1);
$city2 = new City($lat2, $long2);
TourManager::addCity($city2);
$city3 = new City($lat3, $long3);
TourManager::addCity($city3);
$city4 = new City($lat4, $long4);
TourManager::addCity($city4);
$city5 = new City($lat5, $long5);
TourManager::addCity($city5);

$city6 = new City($lat6, $long6);
TourManager::addCity($city6);
$city7 = new City($lat7, $long7);
TourManager::addCity($city7);
$city8 = new City($lat8, $long8);
TourManager::addCity($city8);
$city9 = new City($lat9, $long9);
TourManager::addCity($city9);
$city10 = new City($lat10, $long10);
TourManager::addCity($city10);
/*
$city11 = new City(180, 100);
TourManager::addCity($city11);
$city12 = new City(60, 80);
TourManager::addCity($city12);
$city13 = new City(120, 80);
TourManager::addCity($city13);
$city14 = new City(180, 60);
TourManager::addCity($city14);
$city15 = new City(20, 40);
TourManager::addCity($city15);
$city16 = new City(100, 40);
TourManager::addCity($city16);
$city17 = new City(200, 40);
TourManager::addCity($city17);
$city18 = new City(20, 20);
TourManager::addCity($city18);
$city19 = new City(60, 20);
TourManager::addCity($city19);
$city20 = new City(160, 20);
TourManager::addCity($city20);
*/

$pop = new Population(50, true);
print("Initial distance: " . $pop->getFittest()->getDistance());

// Evolve population for 100 generations
$pop = GA::evolvePopulation($pop);
for ($i = 0; $i < 30; $i++) {
    $pop = GA::evolvePopulation($pop);
}

// Print final results
print("<br>Finished.");
print("<br>Final distance: " . $pop->getFittest()->getDistance());
print("<br>Solution:");
print($pop->getFittest());
//header("refresh:1; url=gui.php");
