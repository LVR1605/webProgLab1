<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./tailwind.css">
    <style>
        /* Define your custom colors here */
        .custom-bg-blue {
            background-color: #3490dc;
        }
        .custom-bg-green {
            background-color: #38a169;
        }
        .custom-bg-yellow {
            background-color: #f6e05e;
        }
        .custom-bg-red {
            background-color: #e3342f;
        }
        .custom-bg-purple {
            background-color: #9561e2;
        }
    </style>
</head>
<body class="fade-in">
    <?php include 'components/navbar.php'; ?>
    
    <div class="container mx-auto">
        <div class="my-36">
            <h1 class="text-9xl">RECIPES</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-20 my-20 bg-gray-500">

            <div class="custom-bg-blue p-4">
                <img src="./components/photos/CajunSeafoodPasta.png" alt="">
            </div>

            <div class="custom-bg-green p-4">
                <img src="./components/photos/Vegetarian-Chili-in-The-World-NatashaForestBrown.png" alt="">
            </div>

            <div class="custom-bg-yellow p-4">
                <img src="./components/photos/Mint_Chicken_010-2000-4ca7a46e70264a799ae9862d78515098.png" alt="">
            </div>

            <div class="custom-bg-red p-4">
                <img src="./components/photos/green pasta.png" alt="">
            </div>

            <div class="custom-bg-purple p-4">
                <img src="./components/photos/ham and chees on crossaint breakfast bake.png" alt="">
            </div>
        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>
