<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/offcanvas.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="styles/common.css">
    <link rel="shortcut icon" href="images/icons/favicon.png" type="image/x-icon">
    <!-- AOS Library (for animations) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <title>Udarata Computers | Best Computers for you</title>
</head>

<body class="relative flex flex-col bg-gray-900 overflow-x-hidden">
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
        <main class="container mx-auto px-4 pb-6 h-dvh flex flex-col items-center justify-center gap-12">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-white text-center">Udarata Computers</h1>
                <p class="text-2xl text-white text-center mt-12">Next generation tech solutions & support</p>
            </div>
            <div class="flex justify-center">
                <div class="w-full max-w-md flex justify-center">
                    <div class="flex items-center w-[600px] h-12 max-sm:w-full">
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

            <div class="flex justify-center">
                <a href="#"
                    class="border-3 border-blue-400 hover:bg-blue-400 hover:text-white text-blue-400 font-bold py-2 px-4 rounded-lg">
                    Go to Store
                </a>
            </div>
        </main>
        <!--sample video-->
        <div class="h-[600px] w-full">
            <video autoplay loop muted playsinline class="h-full w-full object-cover">
                <source src="videos/msi_lap.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <!--best sellers-->
        <div class="text-white py-12 w-full flex justify-center">
            <div class="container">
                <div class=" mx-auto px-4">
                    <h2 class="text-3xl font-bold mb-8" data-aos="fade-right">Best Sellers</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                        <div class="bg-blue-400 rounded-lg p-4 transition-all" data-aos="fade-up">
                            <img src="images/cards/acer_lap.webp" alt="Laptop"
                                class="w-full h-48 object-contain bg-white rounded-lg mb-4">
                            <h3 class="text-lg font-bold">Laptops</h3>
                            <p class="text-justify">Acer Predator Helios NEO-16 i9-12900HX 16GB DDR5 1TB NVMe</p>
                            <p class="font-bold">Rs. 465,000.00</p>
                        </div>
                        <div class="bg-blue-400 rounded-lg p-4 transition-all delay-100" data-aos="fade-up">
                            <img src="images/cards/apple_mac.webp" alt="Mac Mini"
                                class="w-full h-48 object-contain bg-white rounded-lg mb-4">
                            <h3 class="text-lg font-bold">Apple</h3>
                            <p class="text-justify">Apple Mac Mini M4 16GB | 256GB SSD M1/M1P3</p>
                            <p class="font-bold">Rs. 238,000.00</p>
                        </div>
                        <div class="bg-blue-400 rounded-lg p-4 transition-all delay-200" data-aos="fade-up">
                            <img src="images/cards/iphone.jpg" alt="iPhone 13"
                                class="w-full h-48 object-contain bg-white rounded-lg mb-4">
                            <h3 class="text-lg font-bold">Mobiles</h3>
                            <p class="text-justify">Apple iPhone 13 Pro Max 256GB Desert Titanium (A/A)</p>
                            <p class="font-bold">Rs. 399,000.00</p>
                        </div>
                        <div class="bg-blue-400 rounded-lg p-4 transition-all delay-300" data-aos="fade-up">
                            <img src="images/cards/epson_printer.jpg" alt="Liquid Freezer"
                                class="w-full h-48 object-contain bg-white rounded-lg mb-4">
                            <h3 class="text-lg font-bold">Printers</h3>
                            <p class="text-justify">Printer Epson L3250 Ink Tank wireless</p>
                            <p class="font-bold">Rs. 69,000.00</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--pro categories-->
        <div class="bg-gray-900 text-white py-12 w-full flex justify-center">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8" data-aos="fade-right">Pro Categories</h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="flex flex-col justify-between" data-aos="fade-up">
                        <div>
                            <h3 class="text-xl font-bold mb-4">MONITORS</h3>
                            <p class="text-justify">Explore high quality gaming, 4K and professional monitors with stunning clarity, smooth
                                performance and vibrant colors.</p>
                            <a href="#" class="text-blue-500 hover:text-blue-400">Explore more</a>
                        </div>
                        <img src="images/cards/monitor.webp" alt="Monitors"
                            class="mt-4 rounded-lg object-cover h-[300px]">
                    </div>
                    <div class="flex flex-col justify-between delay-100" data-aos="fade-up">
                        <div>
                            <h3 class="text-xl font-bold mb-4">COOLERS</h3>
                            <p class="text-justify">Browse our coolers for superior airflow, efficient cooling and enhanced performance for
                                your
                                PC.</p>
                            <a href="#" class="text-blue-500 hover:text-blue-400">Explore more</a>
                        </div>
                        <img src="images/cards/coolers.jpg" alt="Coolers"
                            class="mt-4 rounded-lg object-cover h-[300px]">
                    </div>
                    <div class="flex flex-col justify-between delay-200" data-aos="fade-up">
                        <div>
                            <h3 class="text-xl font-bold mb-4">LAPTOPS</h3>
                            <p class="text-justify">Shop high performance gaming, business and creative laptops with advanced specs and
                                reliable
                                power.</p>
                            <a href="#" class="text-blue-500 hover:text-blue-400">Explore more</a>
                        </div>
                        <img src="images/cards/laptops.jpg" alt="Laptops"
                            class="mt-4 rounded-lg object-cover h-[300px]">
                    </div>
                </div>
            </div>
        </div>
        <!--services-->
        <section class="px-4 py-12 mx-auto container">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                <!-- Left images -->
                <div class="lg:col-span-1 lg:h-full" data-aos="fade-right">
                    <img src="images/udarata-computers-bg-4k.png" alt="Outdoor Space"
                        class="object-cover object-right w-full shadow-lg lg:h-[100%]">
                </div>

                <!-- Todo list -->
                <div class="lg:col-span-1 text-white">
                    <h2 class="text-5xl marcellus" data-aos="fade-left">
                        What we specialize in...
                    </h2>
                    <div class=" [column-fill:_balance] columns-1 sm:columns-2 gap-12 py-12">

                        <div class="flex items-start mb-12 space-x-4" data-aos="fade-right">
                            <div>
                                <span class="text-2xl text-yellow-500">💻</span>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h4 class="text-lg font-bold">Custom PC Builds</h4>
                                <div>

                                    <p class="text-sm text-justify">We offer custom PC builds tailored to your
                                        needs, whether you’re a gamer, designer, or just need a reliable workstation.
                                        Choose your components and we’ll handle the rest!</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start mb-12 space-x-4" data-aos="fade-left">
                            <div>
                                <span class="text-2xl text-yellow-500">🧑‍💻</span>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h4 class="text-lg font-bold">Expert Support</h4>
                                <div>
                                    <p class="text-sm text-justify">Our team of experts is here to help you every
                                        step of the way, from choosing the right parts to troubleshooting and support
                                        after your purchase.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start mb-12 space-x-4" data-aos="fade-right">
                            <div>
                                <span class="text-2xl text-yellow-500">⚙️</span>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h4 class="text-lg font-bold">High-Quality Components</h4>
                                <div>
                                    <p class="text-sm text-justify">We stock the latest and greatest in computer
                                        hardware, from CPUs and GPUs to SSDs and motherboards, ensuring your build has
                                        the best components available.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4" data-aos="fade-left">
                            <div>
                                <span class="text-2xl text-yellow-500">📜</span>
                            </div>
                            <div class="flex flex-col gap-3">
                                <h4 class="text-lg font-bold">Warranty Support</h4>
                                <div>
                                    <p class="text-sm text-justify">Experience Sri Lanka’s No.1 warranty support
                                        with our user-friendly ticket system, simply submit your warranty claim, receive
                                        an email confirmation, follow the status of your claim in real time for a
                                        hassle-free experience.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--feedback-->
        <div class="overflow-hidden container text-white">
            <div class="px-6 pb-8">
                <h2 class="text-2xl font-bold mb-4" data-aos="fade-left">What our clients say about us</h2>
                <p class="" data-aos="fade-left">Some inspirational feedback from our customers on social media</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6">
                <div data-aos="fade-up" class="bg-blue-400 p-6 rounded-lg">
                    <div class="flex items-center mb-2">
                        <h3 class="font-bold">Praneeth Randunu</h3>
                    </div>
                    <p class="text-justify">I recently purchased an IMac M3 worth 750,000 LKR from Udarata Computers,
                        and
                        it was hand-down the best experience I've ever had. From the moment I walked in, their customer
                        service was exceptional.</p>
                    <div class="flex items-center mt-2">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div data-aos="fade-up" class="bg-blue-400 p-6 rounded-lg">
                    <div class="flex items-center mb-2">
                        <h3 class="font-bold">Ariyadasa Kalindu</h3>
                    </div>
                    <p class="text-justify">I'm writing to express my extreme satisfaction with Udarata Computers! From
                        the moment I walked in, I was impressed by the knowledgeable service. The staff was incredibly
                        knowledgeable, patient, and helped me find the perfect solution for my needs.</p>
                    <div class="flex items-center mt-2">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div data-aos="fade-up" class="bg-blue-400 p-6 rounded-lg">
                    <div class="flex items-center mb-2">
                        <h3 class="font-bold">Ariyadasa Kalindu</h3>
                    </div>
                    <p class="text-justify">I'm writing to express my extreme satisfaction with Udarata Computers! From
                        the moment I walked in, I was impressed by the knowledgeable service. The staff was incredibly
                        knowledgeable, patient, and helped me find the perfect solution for my needs.</p>
                    <div class="flex items-center mt-2">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div data-aos="fade-up" class="bg-blue-400 p-6 rounded-lg">
                    <div class="flex items-center mb-2">
                        <h3 class="font-bold">Ariyadasa Kalindu</h3>
                    </div>
                    <p class="text-justify">I'm writing to express my extreme satisfaction with Udarata Computers! From
                        the moment I walked in, I was impressed by the knowledgeable service. The staff was incredibly
                        knowledgeable, patient, and helped me find the perfect solution for my needs.</p>
                    <div class="flex items-center mt-2">
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
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
    <script>
        AOS.init({
            duration: 1000, // Animation duration in milliseconds
            easing: 'ease-in-out', // Easing function for animation
        });
    </script>
</body>

</html>