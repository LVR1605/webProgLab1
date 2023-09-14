<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body class="bg-gray-100">
<?php include 'components/navbar.php';?>
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/2">
            <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your Name">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Your Email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                        Message
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Your Message"></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-black hover:bg-gray-200 hover:text-black duration-300 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="button">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php include 'components/footer.php';?>
</body>
</html>
