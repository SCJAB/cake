<?php

$cakeShapes = ["Heart", "Rectangle", "Square", "Round"];
$cakeFlavors = ["Chocolate", "Vanilla", "Lemon", "Cheesecake"];
$cakeToppings = ["Cookies & Cream", "Spun-sugar Flowers", "Mini Chocolate Candies", "Marshmallows"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Cake Home</title>
</head>
<body class="h-screen bg-orange-300 font-cursive text-2xl">
    <div class="mb-4">
        <img class="w-full h-52" src="./img/cakedrip.png">

        <h1 class="flex justify-center text-6xl">D-I-Y Cake</h1>
    </div>

    <div class="w-2/3 mx-auto">
        <form class="p-4 border-2 border-rose-600 rounded-2xl" method="post">
            <div class="flex mb-4">
                <div class="w-2/5 pr-4">
                    <label class="flex justify-center font-bold mb-2 p-3 border-2 border-rose-600 rounded-2xl">Cake Shape</label>
                    <div class="border-2 border-rose-600 p-2 rounded-2xl">
                        <?php foreach ($cakeShapes as $shape) : ?>
                            <label class="flex items-center mb-2">
                                <input type="radio" name="cake_shape" value="<?php echo $shape; ?>" id="<?php echo $shape; ?>" class="mr-2">
                                <?php echo $shape; ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="w-2/5 pr-4">
                    <label class="flex justify-center font-bold mb-2 p-3 border-2 border-rose-600 rounded-2xl">Cake Flavor</label>
                    <div class="border-2 border-rose-600 p-2 rounded-2xl">
                        <?php foreach ($cakeFlavors as $flavor) : ?>
                            <label class="flex items-center mb-2">
                                <input type="radio" name="cake_flavor" value="<?php echo $flavor; ?>" id="<?php echo $flavor; ?>" class="mr-2">
                                <?php echo $flavor; ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="w-2/5">
                    <label class="flex justify-center font-bold mb-2 p-3 border-2 border-rose-600 rounded-2xl">Cake Toppings</label>
                    <div class="border-2 border-rose-600 p-2 rounded-2xl">
                        <?php foreach ($cakeToppings as $topping) : ?>
                            <label class="flex items-center mb-2">
                                <input type="radio" name="cake_toppings" value="<?php echo $topping; ?>" id="<?php echo $topping; ?>" class="mr-2">
                                <?php echo $topping;?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

</body>
</html>