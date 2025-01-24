<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/offcanvas.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="styles/common.css">
    <link rel="shortcut icon" href="images/icons/favicon.png" type="image/x-icon">
    <title>Computer Site</title>
</head>

<body class="relative flex flex-col lg:h-dvh"
    style="background: url(images/udarata-computers-bg-4k.png)no-repeat; background-size:cover;">
    <!--navigation bar-->
    <div class="relative z-10">
        <?php
        include_once "nav.php";
        ?>
    </div>
    <!--backdrop-->
    <div class="absolute left-0 h-full w-full bg-black/50"></div>
    <!--home content-->
    <div class="relative flex-grow flex justify-center flex-col items-center">
        <header class="py-6">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-white text-center">Udarata Computers</h1>
                <p class="text-2xl text-white text-center mt-6">Next generation tech solutions & support</p>
            </div>
        </header>

        <main class="container mx-auto px-4 py-12">
            <div class="flex justify-center">
                <div class="w-full max-w-md flex justify-center">
                    <div class="flex items-center w-[600px] h-12">
                        <div class="w-[70%]">
                            <input type="text" placeholder="Search here ..."
                                class="bg-gray-800 border-gray-600 text-white rounded-s-lg py-2 px-4 w-full focus:outline-none focus:ring-2 focus:ring-blue-500 h-12" />
                        </div>
                        <button
                            class="bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-e-lg w-[30%] h-full flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search scale-150" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#"
                    class="border-3 border-blue-400 hover:bg-blue-400 hover:text-white text-blue-400 font-bold py-2 px-4 rounded-lg">
                    Go to Store
                </a>
            </div>
        </main>
    </div>
    <!--footer-->
    <div class="relative">
        <?php
        include_once "footer.php";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>