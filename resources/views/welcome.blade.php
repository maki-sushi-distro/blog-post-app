<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Forum</title>
</head>

<body>
    <header class="bg-blue-900 p-5">
        <div class="grid grid-cols-3 items-center">
            <h1 class="justify-self-start text-white pl-5 text-4xl font-bold">Forum</h1>

            <nav class="justify-self-center flex gap-12 text-md font-bold">
                <a href="/" class="text-white hover:text-blue-100">Home</a>
                <a href="/feature" class="text-white hover:text-blue-100">Feature</a>
                <a href="/About" class="text-white hover:text-blue-100">About</a>
            </nav>

            <div class="justify-self-end flex gap-3 pr-5 font-bold">
                <a href="/login" class="px-4 py-2 text-white hover:text-blue-100">Log in</a>
                <a href="/signup" class="px-4 py-2 bg-white text-blue-500 rounded-lg font-bold hover:bg-blue-100">Sign up</a>
            </div>
        </div>
    </header>
</body>

</html>