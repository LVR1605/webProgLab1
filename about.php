
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./tailwind.css">
    <title>About Us</title>
</head>
<body>
    <?php include 'components/navbar.php';?>
    <div class="mt-28 min-h-screen fade-in">
        <div class="flex justify-center">
            <?php
                echo '<h1 class="px-5 py-20 text-8xl fade-in">CULINARY CANVAS</h1>'
            ?>
        </div>
        <div class="mx-28 text-justify text-3xl my-28 fade-in">
            <?php
                echo '<p>Welcome to Culinary Canvas, a vibrant platform dedicated to the exquisite art of cooking. We take you on a global journey, introducing you to culinary creators from all corners of the world, sharing the secrets behind their signature dishes, and providing step-by-step guides to help you recreate their masterpieces in your own kitchen. Whether you\'re a seasoned chef looking for fresh inspiration or a culinary novice eager to embark on your cooking adventure, Culinary Canvas welcomes you with open arms. Here, you\'ll unlock the door to new cuisines, uncover exciting flavors, and ignite your own creativity through the culinary wonders of our passionate community. Join us in exploring the boundless possibilities of food, and let your culinary journey begin.</p>'
            ?>
        </div>
        <div class="max-h-screen bg-gray-200 text-2xl fade-in">
            <div class="flex flex-row">
                <div class="flex-grow-3 mx-28 my-12">
                    <img class="h-200 w-200 rounded-full object-cover" src="./components/photos/image1.jpg" alt="img.jpeg">
                </div>
                <div class="-grow mr-28 my-40 text-4xl font-semibold">
                    <p class="line-clamp-96">
                    Our recipe website is your gateway to 
                    <br> a world of gastronomic wonders, 
                    <br> and this captivating image says it all. 
                    <br> Picture a pristine white plate adorned with an array of 
                    <br> delectable creations that are sure to tantalize your taste buds.
                    </p>
                    <p class="line-clamp-96 text-2xl font-thin fade-in">
                    Join us on this culinary journey and discover a world of flavors that will make every meal a memorable experience. Explore recipes that range from sweet desserts to refreshing fruits and beyond, all designed to elevate your dining adventures. Get ready to embark on a delightful culinary adventure today!
                    </p>
                </div>
            </div>
        </div>
        <div class="max-h-screen text-2xl">
            <div class="flex flex-row">
                <div class="-grow items-center ml-28 my-40 text-2xl">
                    <p class="line-clamp-96 text-4xl font-semibold">
                    Discover chefs who are culinary maestros whose skillful artistry
                    <br> and unbridled creativity have elevated the world of 
                    <br> gastronomy to new heights. With their mastery of flavors, techniques, 
                    <br> and ingredients, these culinary virtuosos have 
                    <br> not only tantalized our taste buds but also 
                    <br> reshaped the way we perceive food. 
                    <!--  -->
                    </p>
                    <p class="line-clamp-96 text-2xl font-thin">
                    Through a symphony of flavors and textures, they have crafted delectable recipes that transcend the ordinary, taking us on unforgettable culinary journeys that celebrate the rich tapestry of global cuisines. In this exploration of their culinary prowess, we delve into the world of professional chefs who have left an indelible mark with their mouthwatering creations, inviting us to savor their extraordinary talents one delectable dish at a time.
                    </p>
                </div>
                <div class="flex-grow-3 mx-28 my-12">
                    <img class="h-200 w-200 rounded-full object-cover" src="./components/photos/Professional-Chef-cooking.png" alt="img.jpeg">
                </div>
            </div>
        </div>
        <div class="max-h-screen py-40 px-40">
            <p class="grid grid-cols-1 place-items-center font-bold text-5xl" >
                Discover various recipes here!
            </p>
        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>
