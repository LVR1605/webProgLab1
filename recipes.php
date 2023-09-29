    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recipes</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./tailwind.css">
    </head>
    <body class="fade-in min-h-screen">

        <?php include 'components/navbar.php'; ?>

        <div class="container mx-auto my-20">
            <h1 class="text-6xl text-center">RECIPES</h1>
        </div>

        <div class="container mx-auto min-h-screen">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8 mt-10">
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/CajunSeafoodPasta.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Cajun Seafood Pasta</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description1" class="overflow-hidden max-h-20 mb-20">
                        This Cajun-inspired seafood pasta recipe is a hot one, but delicious! If you don't like as much spice, divide the amounts of pepper in half. Better to add more later than spoil your creation. Bay scallops are preferred, but the larger sea scallops can be used if they are cut in half. This dish can also be placed in a casserole dish and placed under the broiler until the top turns golden brown.
                    </div>
                    <div class="m-4 flex justify-center ">
                        <a href="#" class="read-more-button flex justify-center" id="read-more1">Read More</a>
                    </div>
                    <a href="#" class="show-modal flex justify-center bg-black text-white hover:bg-white hover:text-black duration-300 shadow-md rounded-md p-4" data-modal="1">View Recipe</a>
                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/Vegetarian-Chili-in-The-World-NatashaForestBrown.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Vegetarian Chili</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description2" class="overflow-hidden max-h-20">
                    This spicy vegetarian chili is ready in no time and packed with vegetables, beans, and flavor! Break out your soup pot and fix up a batch of this delicious chili — it tastes even better the next day.
                    </div>
                    <div class="m-4 flex justify-center">
                    <a href="#" class="read-more-button flex justify-center" id="read-more2">Read More</a>
                    </div>

                    <a href="#" class="show-modal flex justify-center bg-black text-white hover:bg-white hover:text-black duration-300 shadow-md rounded-md p-4" data-modal="2">View Recipe</a>
                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/Mint_Chicken_010-2000-4ca7a46e70264a799ae9862d78515098.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Mint Chicken</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description3" class="overflow-hidden max-h-20">
                    A favorite family recipe that my Mom has made for hundreds of guests. Fresh lemon juice and mint leaves are a must! Serve over hot cooked white rice.
                    </div>
                    <div class="m-4 flex justify-center">
                    <a href="#" class="read-more-button flex justify-center" id="read-more3">Read More</a>
                    </div>

                    <a href="#" class="show-modal flex justify-center bg-black text-white hover:bg-white hover:text-black duration-300 shadow-md rounded-md p-4" data-modal="3">View Recipe</a>
                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/green pasta.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Green Pasta</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description4" class="overflow-hidden max-h-20">
                    Pasta primavera is quite a straightforward recipe; spaghetti or fettuccine tossed with an array of fresh spring vegetables. When done right, this is one of the year's great seasonal recipes. This looks, smells, and tastes like a cool, sunny spring day.
                    </div>
                    <div class="m-4 flex justify-center">
                    <a href="#" class="read-more-button flex justify-center" id="read-more4">Read More</a>
                    </div>
                    <a href="#" class="show-modal flex justify-center bg-black text-white hover:bg-white hover:text-black duration-300 shadow-md rounded-md p-4" data-modal="4">View Recipe</a>
                </div>
                <div class="p-4 shadow-md">
                    <img class="rounded-lg" src="./components/photos/ham and chees on crossaint breakfast bake.png" alt="food.png">
                    <h1 class="text-2xl font-semibold mt-2">Ham and Cheese on Crossaint breakfast bake</h1>
                    <p class="font-semibold">DESCRIPTION</p>
                    <div id="description5" class="overflow-hidden max-h-20">
                    This overnight breakfast casserole is just the right size for smaller families. We love this with cherry tomatoes, but it is equally nice with fruit. You could also call this a savory bread pudding and serve it for lunch, with a salad. If you love mustard, double the Dijon amount in the recipe.
                    </div>
                    <div class="m-4 flex justify-center">
                    <a href="#" class="read-more-button flex justify-center" id="read-more5">Read More</a>
                    </div>

                    <a href="#" class="show-modal flex justify-center bg-black text-white hover:bg-white hover:text-black duration-300 shadow-md rounded-md p-4" data-modal="5">View Recipe</a>
                </div>
            </div>
        </div>

        

        <?php include 'components/footer.php';?>
        
        <div class="modal h-screen w-full absolute left-0 top-20 flex justify-center items-center hidden" id="show-modal-1">
            <div class="bg-white rounded shadow-md w-1/2">
                <div class="border-b px-4 py-2">
                    <h1>Cajun Seafood Pasta</h1>
                </div>
                <div class="grid grid-cols-2 p-3">
                    <div>
                    <h2 class="text-5xl">INGREDIENTS</h2>
                            <ul>
                                <li>1 pound dry fettuccine pasta</li>
                                <li>2 cups heavy whipping cream</li>
                                <li>1 cup chopped green onions</li>
                                <li>1 cup chopped parsley</li>
                                <li>1 tablespoon chopped fresh basil</li>
                                <li>1 tablespoon chopped fresh thyme</li>
                                <li>2 teaspoons salt</li>
                                <li>2 teaspoons ground black pepper</li>
                                <li>1 ½ teaspoons crushed red pepper flakes</li>
                                <li>1 teaspoon ground white pepper</li>
                                <li>½ pound shrimp, peeled and deveined</li>
                                <li>½ pound scallops</li>
                                <li>½ cup shredded Swiss cheese</li>
                                <li>½ cup grated Parmesan cheese</li>
                            </ul>
                    </div>
                    <div>
                    <h1 class="text-5xl">DIRECTIONS</h1>
                <ul class="p-3">
                    <li>
                        <h1 class="text-2xl">Step 1</h1>
                        <p>Fill a large pot with lightly salted water and bring to a rolling boil. Cook fettuccine at a boil until tender yet firm to the bite, about 8 minutes. Drain once done cooking.</p>
                    </li>
                    <li>
                        <h1 class="text-2xl">Step 2</h1>
                        <p>Meanwhile, pour cream into a large skillet. Cook over medium heat, stirring constantly, until just about boiling. Reduce heat and add green onions, parsley, basil, thyme, salt, black pepper, red pepper flakes, and white pepper. Simmer until thickened, 7 to 8 minutes.</p>
                    </li>
                    <li>
                        <h1 class="text-2xl">Step 3</h1>
                        <p>Stir in shrimp and scallops. Cook until shrimp is no longer translucent.</p>
                    </li>
                    <li>
                        <h1 class="text-2xl">Step 4</h1>
                        <p>Stir in cheeses, blending well.</p>
                    </li>
                    <li>
                        <h1 class="text-2xl">Step 5</h1>
                        <p>Serve sauce over pasta</p>
                    </li>
                </ul>
                    </div>
                </div>
                <div class="flex justify-end items-center w-100 border-t p-3">
                    <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="1">Close</button>
                </div>
            </div>
        </div>














        <div class="modal h-screen w-full absolute left-0 top-32 flex justify-center items-center hidden" id="show-modal-2">
            <div class="bg-white rounded shadow-md w-1/2">
                <div class="border-b px-4 py-2">
                    <h1>Vegetarian Chili</h1>
                </div>
                <div class="grid grid-cols-2 p-3">
                    <div>
                    <h2 class="text-5xl">INGREDIENTS</h2>
                                    <ul>
                                        <li>1 tablespoon olive oil</li>
                                        <li>½ medium onion, chopped</li>
                                        <li>2 tablespoons dried oregano</li>
                                        <li>1 tablespoon salt</li>
                                        <li>1 teaspoon ground cumin</li>
                                        <li>2 bay leaves</li>
                                        <li>2 stalks celery, chopped</li>
                                        <li>2 green bell peppers, chopped</li>
                                        <li>2 jalapeno peppers, chopped</li>
                                        <li>3 cloves garlic, chopped</li>
                                        <li>2 (4 ounce) cans chopped green chile peppers, drained</li>
                                        <li>2 (12 ounce) packages vegetarian burger crumbles</li>
                                        <li>3 (28 ounce) cans whole peeled tomatoes, crushed</li>
                                        <li>¼ cup chili powder</li>
                                        <li>1 tablespoon ground black pepper</li>
                                        <li>1 (15 ounce) can kidney beans, drained</li>
                                        <li>1 (15 ounce) can garbanzo beans, drained</li>

                                        <li>1 (15 ounce) can black beans</li>
                                        <li>1 (15 ounce) can whole kernel corn</li>
                                    </ul>
                    </div>
                    <div>
                    <h1 class="text-5xl">DIRECTIONS</h1>
                            <ul class="p-3">
                                <li>
                                    <h1 class="text-2xl">Step 1</h1>
                                        <p>Spray an 8x8-inch baking pan with cooking spray.</p>
                                    </li>
                                    <li>
                                    <h1 class="text-2xl">Step 2</h1>
                                        <p>Heat olive oil in a large pot over medium heat. Stir in onion and season with oregano, salt, cumin, and bay leaves. Cook and stir until onion is tender; stir in celery, green bell peppers, jalapeños, and garlic. Add green chile peppers and cook until heated through. Stir in vegetarian burger crumbles; reduce heat to low, cover pot, and simmer for 5 minutes.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 3</h1>
                                        <p>Stir in tomatoes; season with chili powder and black pepper. Stir in kidney beans, garbanzo beans, and black beans. Bring to a boil, reduce heat to low, and simmer for 45 minutes.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 4</h1>
                                        <p>Stir in the corn, and continue cooking for 5 minutes before serving.</p>
                                    </li>
                                </ul>
                    </div>
                </div>
                <div class="flex justify-end items-center w-100 border-t p-3">
                    <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="2">Close</button>
                </div>
            </div>
        </div>












        <div class="modal h-screen w-full fixed left-0 top-0 flex justify-center items-center hidden" id="show-modal-3">
            <div class="bg-white rounded shadow-md w-1/2">
                <div class="border-b px-4 py-2">
                    <h1>Mint Chicken</h1>
                </div>
                <div class="grid grid-cols-2 p-3">
                    <div>
                    <h2 class="text-5xl">INGREDIENTS</h2>
                                    <ul>
                                        <li>2 skinless, boneless chicken breast halves - cut into bite-size pieces</li>
                                        <li>1 clove garlic, crushed</li>
                                        <li>½ cup all-purpose flour/li>
                                        <li>½ cup margarine</li>
                                        <li>¼ cup fresh lemon juice</li>
                                        <li>½ cup chopped fresh mint leaves</li>
                                    </ul>
                    </div>
                    <div>
                    <h1 class="text-5xl">DIRECTIONS</h1>
                            <ul class="p-3">
                                <li>
                                    <h1 class="text-2xl">Step 1</h1>
                                    <p>In a medium bowl, mix together the chicken pieces and garlic. Toss with the flour just to coat, and shake off excess.</p>
                                </li>
                                <li>
                                    <h1 class="text-2xl">Step 2</h1>
                                    <p>Heat the margarine in a large skillet over medium-high heat. Add the chicken pieces; cook and stir until browned. Add the mint leaves and lemon juice, cover and steam for about 5 minutes, just until the chicken is cooked through. Do not over cook the chicken or it will be tough.</p>
                                </ul>
                    </div>
                </div>
                <div class="flex justify-end items-center w-100 border-t p-3">
                    <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="3">Close</button>
                </div>
            </div>
            </div>










            <div class="modal h-min-screen w-full absolute left-0 top-40 flex justify-center items-center hidden" id="show-modal-4">
            <div class="bg-white rounded shadow-md w-1/2">
                <div class="border-b px-4 py-2">
                    <h1>Green Pasta</h1>
                </div>
                <div class="grid grid-cols-2 p-3">
                    <div>
                    <h2 class="text-5xl">INGREDIENTS</h2>
                                    <ul>
                                        <li>1 bunch fresh basil</li>
                                        <li>3 cups chicken broth, divided</li>
                                        <li>½ cup olive oil</li>
                                        <li>2 cloves garlic</li>
                                        <li>1 pound fettuccine pasta</li>
                                        <li>2 tablespoons olive oil</li>
                                        <li>1 large leek, white and light green parts only, chopped</li>
                                        <li>1 bunch green onions, chopped</li>
                                        <li>2 jalapeno peppers, seeded and diced</li>
                                        <li>2 pinches salt</li>
                                        <li>2 zucchinis, diced</li>
                                        <li>1 cup chopped sugar snap peas</li>
                                        <li>½ cup shelled English peas</li>
                                        <li>1 bunch asparagus, stalks diced, tips left whole</li>
                                        <li>½ cup grated Parmesan cheese, or as needed</li>
                                    </ul>
                    </div>
                    <div>
                    <h1 class="text-5xl">DIRECTIONS</h1>
                            <ul class="p-3">
                                <li>
                                    <h1 class="text-2xl">Step 1</h1>
                                        <p>Fill a large pot with lightly salted water and bring to a rolling boil. Hold basil bunch by the stems and dip basil leaves in boiling water until bright green, about 2 seconds. Immediately immerse basil in ice water for several minutes until cold to stop the cooking process. Once the basil is cold, drain well. Remove basil leaves from stems and discard stems.</p>
                                    </li>
                                    <li>
                                    <h1 class="text-2xl">Step 2</h1>
                                        <p>Blend basil leaves, 1 cup chicken broth, 1/2 cup olive oil, and garlic together in a blender until smooth.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 3</h1>
                                        <p>Stir fettuccine into the same pot of boiling water, bring back to a boil, and cook pasta over medium heat until cooked through but still firm to the bite, about 8 minutes. Drain.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 4</h1>
                                        <p>Heat remaining 2 tablespoons olive oil in a large saucepan over medium heat. Cook and stir leek and green onion in hot oil until softened, about 5 minutes. Add jalapeno and salt; cook and stir until jalapeno is soft, about 5 minutes.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 5</h1>
                                        <p>Increase heat to medium-high. Stir 2 cups chicken broth, zucchini, sugar snap peas, and English peas into jalapeno mixture; bring to a simmer and cook for 5 minutes. Add asparagus and continue cooking until asparagus is soft, about 3 minutes more.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 6</h1>
                                        <p>Pour 1/4 cup basil-garlic mixture into zucchini mixture and cook and stir until heated through, about 1 minute. Remove from heat.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 7</h1>
                                        <p>Place pasta in a large bowl; pour zucchini mixture over pasta and pour remaining basil-garlic mixture over the zucchini mixture. Spread Parmesan cheese over the top. Toss mixture briefly to combine and tightly wrap bowl with aluminum foil. Let stand until pasta and vegetables soak up most of the juices and oil, about 5 minutes. Toss again.

                                        </p>
                                    </li>
                    </div>
                </div>
                <div class="flex justify-end items-center w-100 border-t p-3">
                    <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="4">Close</button>
                </div>   
            </div>
        </div>










            <div class="modal h-screen w-full absolute left-0 top-40 flex justify-center items-center hidden" id="show-modal-5">
            <div class="bg-white rounded shadow-md w-1/2">
                <div class="border-b px-4 py-2">
                    <h1>Ham and Cheese on Crossaint breakfast bake</h1>
                </div>
                <div class="grid grid-cols-2 p-3">
                    <div>
                    <h2 class="text-5xl">INGREDIENTS</h2>
                                    <ul>
                                        <li>butter-flavored cooking spray</li>
                                        <li>2 large croissants</li>
                                        <li>½ cup shredded Gruyere cheese</li>
                                        <li>1 cup diced cooked ham</li>
                                        <li>6 large eggs</li>
                                        <li>¾ cup milk</li>
                                        <li>½ cup sour cream</li>
                                        <li>¼ teaspoon salt</li>
                                        <li>¼ teaspoon freshly ground black pepper</li>
                                        <li>1 tablespoon Dijon mustard</li>
                                        <li>2 tablespoons chopped green onions (Optional)</li>
                                    </ul>
                    </div>
                    <div>
                    <h1 class="text-5xl">DIRECTIONS</h1>
                            <ul class="p-3">
                                <li>
                                    <h1 class="text-2xl">Step 1</h1>
                                        <p>Spray an 8x8-inch baking pan with cooking spray.</p>
                                    </li>
                                    <li>
                                    <h1 class="text-2xl">Step 2</h1>
                                        <p>Cut croissants into 1 inch cubes (about 4 cups, loosely packed) and spread out on the bottom of the prepared pan. Sprinkle evenly with cheese and ham.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 3</h1>
                                        <p>Combine eggs, milk, sour cream, Dijon mustard, salt, and pepper in a bowl. Beat the mixture until well blended using a wire whisk or an egg beater.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 4</h1>
                                        <p>Pour egg mixture evenly over the top of the croissants, cheese, and ham.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 5</h1>
                                        <p>Cover tightly with aluminum foil and place in the refrigerator for 8 hours.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 6</h1>
                                        <p>When ready to bake, set the dish out of the refrigerator on the counter, Preheat the oven to 350 degrees F (175 degrees C).</p>
                                    </li>
                                    <h1 class="text-2xl">Step 7</h1>
                                        <p>Uncover casserole, place in the center of the preheated oven, and bake until the casserole is set, and a knife inserted into the middle of the casserole comes out clean, 45 to 55 minutes.</p>
                                    </li>
                                    <h1 class="text-2xl">Step 8</h1>
                                        <p>Cut into serving pieces and garnish with chopped green onions.</p>
                                    </li>
                                </ul>
                    </div>
                </div>
                <div class="flex justify-end items-center w-100 border-t p-3">
                    <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="5">Close</button>
                </div>
            </div>




        <script>
        // JavaScript to toggle the visibility of the description
        const descriptions = document.querySelectorAll(".overflow-hidden");
        const readMoreButtons = document.querySelectorAll(".read-more-button");
        const showModalButtons = document.querySelectorAll('.show-modal');
        const closeModalButtons = document.querySelectorAll('.close-modal');
        const modals = document.querySelectorAll('.modal');

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

        showModalButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                const modalNumber = button.getAttribute('data-modal');
                const modal = document.getElementById(`show-modal-${modalNumber}`);
                modal.classList.remove('hidden');
            });
        });

        closeModalButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                const modalNumber = button.getAttribute('data-modal');
                const modal = document.getElementById(`show-modal-${modalNumber}`);
                modal.classList.add('hidden');
            });
        });
    </script>



    </body>
    </html>
