<?php
include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Toy.php';
include_once __DIR__ . '/classes/Kennel.php';

$catCategory = new Category('cat','https://static.thenounproject.com/png/6725-200.png');
$dogCategory = new Category('dog','https://static.thenounproject.com/png/61386-200.png');

$croccantiniSuper = new Food(
    "https://shop-cdn-m.mediazs.com/bilder/mera/puppy/mix/di/ossi/9/800/26635_pla_meradog_puppyknochen_10kg_9.jpg",
    "Farmina N&D Grain Free Pumpkin ",
    "Farmina N&D Grain Free Pumpkin Puppy Medium/Maxi Agnello e Mirtillo è l'alimento secco completo per cani cuccioli di taglia media e grande e per cagne in gestazione o in allattamento.",
    59.79,
    $dogCategory,
    "Vitamina C 160mg,Niacina 40mg",
    "proteine di agnello disidratate (24%)",
    "Additivi organolettici: estratto di tè verde 100mg"
);

$bilboToy = new Toy(
    "https://i.ebayimg.com/images/g/DdgAAOSwSa9kIQbo/s-l1600.jpg",
    "Interactive Soft Cat Balls",
    "Cat toys ball with a nice high frequency jingle that gets your cats' attention and keeps them occupied",
    24.99,
    $catCategory,
    " L Size Bell Toys Ball (Size Diameter: 2.75 inch / 7 cm)",
    "blue",
    "plastic"
);

$bigKennel = new Kennel(
    "https://cdn.manomano.com/images/images_products/34518009/L/122631781_1.jpg",
    "Sussex Dog Kennel And Run",
    "This range is our most popular and would make a great addition to your garden. It has the benefit of a covered roof, ensuring protection from the weather.  The heavy duty structure ensures a long lasting home for your dog.",
    450.00,
    $dogCategory,
    "180cm x 180cm x 120cm high",
    "dark-gray",
    "iron"
);

$goodBoyBone = new Toy(
    "https://m.media-amazon.com/images/I/61rQigh3aoL._AC_SL1500_.jpg",
    "KONG Goodie Bone",
    "Dog Bone Toy for Medium-Sized Breeds",
    21.00,
    $dogCategory,
    " 7.25 inches long / 20cm lungo",
    "red",
    "leather"
);

$listProducts = [$croccantiniSuper, $bilboToy, $bigKennel,$goodBoyBone];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CDN  BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP 2 </title>
</head>

<body>


    <body>
        <header class="container">
            <div class="row text-center mb-3 p-3">
                <div class="col-12">
                    <h1>
                        Porodotti per animali
                    </h1>
                </div>
            </div>
        </header>
        <main class="container">
            <section class="row">
                <?php foreach ($listProducts as $product) { ?>
                    <div class="col-4 mb-5 ">
                        <div class="card h-100">
                            <img src="<?php echo $product->image; ?>" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <ul>
                                    <h2 class="card-title text-center">
                                        <strong><?php echo $product->name; ?></strong>
                                    </h2>
                                    <p class="card-text">
                                        <strong> Description </strong>: <?php echo $product->description; ?>
                                    </p>
                                    <p class="card-subtitle">
                                        <strong>Product for </strong>: <?php echo $product->category->name; ?>
                                    </p>
                                    <p>  <strong>Characteristics:</strong> </p>
                                        <ul class="list-group">
                                                <?php if (is_a($product,'Food')){?>
                                                    <li>
                                                        <strong>Vitamins </strong> : <?php echo $product->vitamins; ?>
                                                    </li>
                                                    <li>
                                                        <strong>Proteins </strong> : <?php echo $product->proteins; ?>
                                                    </li>
                                                    <li>
                                                        <strong>Additives </strong> : <?php echo $product->additives; ?>
                                                    </li>
                                                <?php } ?>
                                                <?php if (is_a($product,'Toy')){?>
                                                    <li>
                                                        <strong>Size </strong> : <?php echo $product->size; ?>
                                                    </li>
                                                    <li>
                                                        <strong>Color </strong> : <?php echo $product->color; ?>
                                                    </li>
                                                    <li>
                                                        <strong>Material </strong> : <?php echo $product->material; ?>
                                                    </li>
                                                <?php } ?>
                                                <?php if (is_a($product,'Kennel')){?>
                                                    <li>
                                                        <strong>Size </strong> : <?php echo $product->size; ?>
                                                    </li>
                                                    <li>
                                                        <strong>Color </strong> : <?php echo $product->color; ?>
                                                    </li>
                                                    <li>
                                                        <strong>Material </strong> : <?php echo $product->material; ?>
                                                    </li>
                                                <?php } ?>
                                        </ul>
                                <a href="#" class="btn btn-primary">
                                    <?php echo $product->getPrice(); ?>&euro;
                                </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </section>
        </main>
    </body>

</html>