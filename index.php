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
    <div class="cards flex justify-center">
                    <figure class="card">
                        <figcaption class="card_title">3D Hover</figcaption>
                    </figure>
                </div>
    <?php include 'components/footer.php';?>
</body>
<style>
        .cards {
  perspective: 500px;
}

.card {
  width: 300px;
  height: 350px;
  background: #16161d;
  border: 2px solid #555555;
  border-radius: 4px;
  position: relative;
  transform-style: preserve-3d;
  will-change: transform;
  transition: transform .5s;
}

.card:hover {
  transform: translateZ(10px) rotateX(20deg) rotateY(20deg);
}

.card_title {
  color: #fff;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  transition: transform .5s;
  font: 700 1.5rem monospace;
  text-shadow: -1px -1px 0 #000,  
    1px -1px 0 #000,
    -1px 1px 0 #000,
     1px 1px 0 #000;
}

.card:hover .card_title {
  transform: translateZ(50px);
}
    </style>
</html>