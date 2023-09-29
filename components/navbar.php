<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
</head>
<body class="">
    <div class="lg:flex lg:justify-between lg:items-center lg:py-3 lg:bg-white lg:fixed lg:top-0 lg:w-full lg:z-50">
        <nav class="bg-white text-xl p-4 w-full shadow-2xl">
            <ul class="flex items-center justify-between pt-3 pb-3">
                <div class="lg:w-1/4">
                    <a href="index.php">
                        <img class="w-24 h-20" src="./components/logo.png" alt="logo.img">
                    </a>
                </div>
                <div class="lg:w-1/2 lg:pl-20 lg:inline-flex lg:justify-center">
                    <input type="text" class="w-full border border-gray-300 p-2 rounded-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Search...">
                </div>
                <div class="lg:inline-flex lg:pr-20 lg:text-2xl">
                <li class="mx-5 duration-300">
                <a href="index.php" class="nav-item">Home</a>
                </li>
                <li class="mx-5 duration-300">
                    <a href="about.php" class="nav-item">About</a>
                </li>
                <li class="mx-5 duration-300">
                    <a href="recipes.php" class="nav-item">Recipes</a>
                </li>
                <li class="mx-5 duration-300">
                    <a href="contact.php" class="nav-item">Contact</a>
                </li>
                </div>
            </ul>
        </nav>
    </div>

    <style>
        /* Add this CSS for the animated underline effect */
        .nav-item {
            position: relative;
            text-decoration: none;
        }

        .nav-item::before {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -3px;
            left: 0;
            background-color: #EF4444; /* Change this color to your desired underline color */
            transition: width 0.3s ease-in-out;
        }

        .nav-item:hover::before {
            width: 100%;
        }

    </style>
</body>
</html>
