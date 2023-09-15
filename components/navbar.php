<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
</head>
    <body>
        <div class="flex">
            <div class="w-3/4">
                <nav class="bg-white text-xl p-4 fixed top-0 w-full z-50 navbar-fixed">
                    <ul class="flex items-center justify-between pt-3 pb-3 shadow-2xl">
                        <div class="w-1/2 inline-flex pl-20 mb-5">
                            <input type="text" class="w-full border border-gray-300 p-2 rounded-full focus:outline-none focus:ring focus:border-blue-300" placeholder="Search...">
                        </div>
                        <div class="inline-flex pr-20 text-2xl">
                            <li class="mx-5 hover:text-red-500 duration-300"><a href="index.php">Home</a></li>
                            <li class="mx-5 hover:text-red-500 duration-300"><a href="about.php">About</a></li>
                            <li class="mx-5 hover:text-red-500 duration-300"><a href="contact.php">Contact</a></li>
                            <div class="mx-5">
                                <button class="bg-black hover:bg-gray-200 hover:text-black duration-300 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="button">Log in</button>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </body>
</html>