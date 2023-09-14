<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <?php include 'components/navbar.php';?>
    <div class="mt-20 min-h-screen">
        <div class="pt-36">
            <?php
                echo '<h3 class="text-6xl flex justify-center">Welcome to</h3>'
            ?>
            <?php
                echo '<h1 class="text-9xl py-10 flex justify-center font-bold">CULINARY CANVAS</h1>'
            ?>
        </div>
        <div class="text-xl pl-28 pr-28 text-center">
            <?php
                echo '<p class="text-2xl pt-5">Culinary Canvas is a platform that celebrates the art of cooking. It features profiles of culinary creators from around the world, insights into their signature dishes, and step-by-step guides to help you bring their creations to life in your own kitchen.</p>'
            ?>
            <?php
                echo '<p class="text-2xl pb-5">Whether you\'re a seasoned cook or just starting out, Culinary Canvas has something to offer everyone. It\'s a place to learn about new cuisines, discover new flavors, and be inspired by the creativity of other cooks.</p>'
            ?>
            <?php
                echo '<p class="text-4xl py-3">So come explore the Culinary Canvas and discover the endless possibilities of food.</p>'
            ?>
        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>