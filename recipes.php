    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recipes</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="fade-in min-h-screen">

        <?php include 'components/navbar.php'; ?>

        <div class="container mx-auto my-20">
            <h1 class="text-6xl text-center">RECIPES</h1>
        </div>

        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8 my-10">
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/CajunSeafoodPasta.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Cajun Seafood Pasta</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description1" class="overflow-hidden max-h-20">
                        This Cajun-inspired seafood pasta recipe is a hot one, but delicious! If you don't like as much spice, divide the amounts of pepper in half. Better to add more later than spoil your creation. Bay scallops are preferred, but the larger sea scallops can be used if they are cut in half. This dish can also be placed in a casserole dish and placed under the broiler until the top turns golden brown.
                    </div>
                    <div>
                        <a href="#" class="read-more-button" id="read-more1">Read More</a>
                    </div>
                    <a href="#" class="showModal" id="view-recipe1">View Recipe</a>

                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/Vegetarian-Chili-in-The-World-NatashaForestBrown.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Vegetarian Chili</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description2" class="overflow-hidden max-h-20">
                    This spicy vegetarian chili is ready in no time and packed with vegetables, beans, and flavor! Break out your soup pot and fix up a batch of this delicious chili — it tastes even better the next day.
                    </div>
                    <div>
                    <a href="#" class="read-more-button" id="read-more2">Read More</a>
                    </div>

                    <a href="#" class="showModal" id="view-recipe2">View Recipe</a>
                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/Mint_Chicken_010-2000-4ca7a46e70264a799ae9862d78515098.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Mint Chicken</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description3" class="overflow-hidden max-h-20">
                    A favorite family recipe that my Mom has made for hundreds of guests. Fresh lemon juice and mint leaves are a must! Serve over hot cooked white rice.
                    </div>
                    <div>
                    <a href="#" class="read-more-button" id="read-more3">Read More</a>
                    </div>

                    <a href="#" class="showModal" id="view-recipe3">View Recipe</a>
                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/green pasta.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Cajun Seafood Pasta</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description4" class="overflow-hidden max-h-20">
                    Pasta primavera is quite a straightforward recipe; spaghetti or fettuccine tossed with an array of fresh spring vegetables. When done right, this is one of the year's great seasonal recipes. This looks, smells, and tastes like a cool, sunny spring day.
                    </div>
                    <div>
                    <a href="#" class="read-more-button" id="read-more4">Read More</a>
                    </div>
                    <a href="#" class="showModal" id="view-recipe4">View Recipe</a>
                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/ham and chees on crossaint breakfast bake.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Ham and Cheese on Crossaint breakfast bake</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description5" class="overflow-hidden max-h-20">
                    This overnight breakfast casserole is just the right size for smaller families. We love this with cherry tomatoes, but it is equally nice with fruit. You could also call this a savory bread pudding and serve it for lunch, with a salad. If you love mustard, double the Dijon amount in the recipe.
                    </div>
                    <div>
                    <a href="#" class="read-more-button" id="read-more5">Read More</a>
                    </div>

                    <a href="#" class="showModal" id="view-recipe5">View Recipe</a>
                </div>
            </div>
        </div>

        

        <?php include 'components/footer.php';?>
        
        <div class="modal1 h-screen w-full fixed left-0 top-0 flex justify-center items-center hidden">
            <div class="bg-white rounded shadow-md w-1/2">
                <div class="border-b px-4 py-2">
                    <h1>recipes</h1>
                </div>
                <div class="p-3">
                    content
                </div>
                <div class="flex justify-end items-center w-100 border-t p-3">
                    <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1">Close</button>
                </div>
            </div>
        </div>


        <script>
    // JavaScript to toggle the visibility of the description
    const descriptions = document.querySelectorAll(".overflow-hidden");
    const readMoreButtons = document.querySelectorAll(".read-more-button");
    const viewRecipeButtons = document.querySelectorAll(".view-recipe-button");
    const closeModalButton = document.getElementById("close-modal");
    const modal1 = document.querySelector('.modal1');
    const showModal =document.querySelector('.showModal');

    readMoreButtons.forEach((button, index) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            const description = descriptions[index];
            if (description.style.maxHeight === "none" || !description.style.maxHeight) {
                description.style.maxHeight = "20px"; // Adjust the height as needed
                button.textContent = "Read More";
            } else {
                description.style.maxHeight = "none"; // Reset the height
                button.textContent = "Read Less";
            }
        });
    });

    showModal.addEventListener('.click', function(){
        modal1.classList.remove('hidden')
    });

</script>

    </body>
    </html>
