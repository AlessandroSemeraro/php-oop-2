<?php 
include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Kennel.php';



$croccantiniSuper = new Food ("Farmina N&D Grain Free Pumpkin ","Farmina N&D Grain Free Pumpkin Puppy Medium/Maxi Agnello e Mirtillo è l'alimento secco completo per cani cuccioli di taglia media e grande e per cagne in gestazione o in allattamento.",59.79 ,
new Category("dog"), "Vitamina C 160mg,Niacina 40mg","proteine di agnello disidratate (24%)","Additivi organolettici: estratto di tè verde 100mg" );

$bilboToy = new Toy ("Interactive Soft Cat Balls","Cat toys ball with a nice high frequency jingle that gets your cats' attention and keeps them occupied", 24.99 ,
new Category("cats"), " L Size Bell Toys Ball (Size Diameter: 2.75 inch / 7 cm)","blue","plastic");

$bigKennel = new Kennel ("Sussex Dog Kennel And Run","This range is our most popular and would make a great addition to your garden. It has the benefit of a covered roof, ensuring protection from the weather.  The heavy duty structure ensures a long lasting home for your dog.", 450.00 , new Category("dog"),"180cm x 180cm x 120cm high","dark-gray","iron");

$listProducts = [$croccantiniSuper, $bilboToy,$bigKennel];

var_dump($croccantiniSuper, $bilboToy,$bigKennel);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2 </title>
</head>
<body>
    
<?php


?>


</body>
</html>