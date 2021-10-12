<?php

 //JOINDRE BICYCLE

require_once 'Bicycle.php';
$bike = new Bicycle("blue");
var_dump($bike);

$bike->setCurrentSpeed(0);
var_dump($bike);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


echo $bike->getColor();
echo $bike->getCurrentSpeed();




// JOINDRE CARS

require_once 'Cars.php';
$car = new Cars("pink" , 5 , "electric");
var_dump($car);


// Mouvement de la voiture 

echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();


$car2 = new Cars("Green" , 5 , "diesel");
var_dump($car2);

echo $car2->start();
echo $car2->forward();
echo $car2->brake();
echo $car2->getCurrentSpeed();

?>
