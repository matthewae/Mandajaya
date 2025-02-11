<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .info-box:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
        }

        .accordion-content.open {
            max-height: 1000px;
            /* Arbitrary large value to ensure it opens fully */
            padding-top: 1rem;
        }
    </style>
</head>

<body class="font-roboto">
    <nav class="bg-gray-900 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img alt="Company logo" class="h-10 w-10" src="{{ asset('storage/Logo FI.png') }}" />
                <a class="text-white text-2xl font-bold tracking-wide hover:text-blue-400 transition duration-300" href="/">
                    Mandajaya Rekayasa Konstruksi
                </a>
            </div>
            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6 items-center">
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
                <!-- Company Profile Button -->
                <li>
                    <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank" class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 flex items-center">
                        Company Profile
                    </a>
                </li>
            </ul>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-300 focus:outline-none text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <ul id="mobile-menu" class="hidden md:hidden flex flex-col space-y-3 mt-4 bg-gray-800 p-4 rounded-lg shadow-lg">
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="/">Home</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
            <!-- Company Profile Button for Mobile -->
            <li>
                <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank" class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 text-center">
                    Company Profile
                </a>
            </li>
        </ul>
    </nav>

    <!-- vision section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4">
                <img alt="A blueprint and construction tools on a table" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/P9kjMmH9qJ-culHOdUhmqxc908kaLaxjgl1yS0OqKAs.jpg" width="600" />
            </div>
            <div class="w-full md:w-1/2 p-4">
                <h3 class="text-2xl font-bold mb-4">
                    Our Vision
                </h3>
                <p class="text-gray-700 text-justify">
                    Our vision is to be the most trusted and innovative construction consulting firm, delivering exceptional value to our clients. We aim to set the standard for excellence in the industry by consistently exceeding our clients' expectations and fostering long-term relationships built on trust and mutual respect.
                </p>
            </div>
        </div>
    </section>
    <!-- Mission Section -->
    <section class="py-12 fade-in">
        <div class="container mx-auto flex flex-wrap items-center px-4">
            <div class="w-full md:w-1/2 p-4 order-2 md:order-1">
                <h3 class="text-2xl font-bold mb-4">
                    Our Mission
                </h3>
                <p class="text-gray-700 text-justify">
                    Our mission is to provide top-notch construction consulting services that exceed our clients' expectations. We aim to achieve this through:
                </p>
                <ul class="list-disc list-inside text-left text-gray-700 mt-4">
                    <li>Delivering high-quality and cost-effective projects on schedule.</li>
                    <li>Maintaining the highest levels of professionalism, integrity, and fairness in our relationships with our suppliers, subcontractors, and clients.</li>
                    <li>Ensuring the longevity of our company through repeat and referral business achieved by customer satisfaction in all areas including timeliness, attention to detail, and service-minded attitudes.</li>
                    <li>Providing a safe, productive, and rewarding work environment for our employees.</li>
                </ul>
            </div>
            <div class="w-full md:w-1/2 p-4 order-1 md:order-2">
                <img alt="A team of construction consultants in a meeting" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/yKPd55IbXbVNc7FUUXwfVK4upPmoM9vmwTCfuBGMdRg.jpg" width="600" />
            </div>
        </div>
    </section>

    <!-- Goals Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">Our Goals</h2>
            <div class="flex flex-wrap justify-center">
                <!-- Card 1 -->
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img alt="A construction site with cranes and building materials" class="w-full h-48 object-cover mb-4 rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/EAWT9lUVLNKce2OGyOHHsrRGiEiejxOjuwgG_JyTQ5c.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Excellence in Quality</h3>
                        <p class="text-gray-700">
                            To be recognized as a leader in the construction consulting industry by consistently delivering projects that meet the highest standards of quality and safety.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4 rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/uekJHMxMi-fvYgdPHcXIDS0yZsiR0-xsgMt4yQ9clcE.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Client Relationships</h3>
                        <p class="text-gray-700">
                            To foster long-term relationships with our clients by providing exceptional service and value, ensuring their satisfaction and loyalty.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                        <img alt="A team of construction consultants in a meeting" class="w-full h-48 object-cover mb-4 rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/yKPd55IbXbVNc7FUUXwfVK4upPmoM9vmwTCfuBGMdRg.jpg" width="600" />
                        <h3 class="text-xl font-bold mb-2">Innovation and Improvement</h3>
                        <p class="text-gray-700">
                            To continuously improve our processes and services through innovation, training, and the adoption of new technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300 px-4">
            <p>
                © 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.
            </p>
            <p class="mt-2">
                Jl.Kota Mas 1 no.18 - Kota Cimahi - Jawa Barat - 40511
            </p>
            <div class="flex justify-center space-x-4 mt-4">
                <a class="text-gray-300 hover:text-white" href="https://www.facebook.com/profile.php?id=61569553317515">
                    <i class="fab fa-facebook-f">
                    </i>
                </a>
                <a class="text-gray-300 hover:text-white" href="#">
                    <i class="fab fa-twitter">
                    </i>
                </a>
                <a class="text-gray-300 hover:text-white" href="#">
                    <i class="fab fa-linkedin-in">
                    </i>
                </a>
                <a class="text-gray-300 hover:text-white" href="https://www.instagram.com/mandajaya_rekayasa_konstruksi?igsh=MW1kdTFxb2kycWNheg==">
                    <i class="fab fa-instagram">
                    </i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });

        function toggleAccordion(id) {
            const element = document.getElementById(id);
            if (element.classList.contains('open')) {
                element.classList.remove('open');
            } else {
                element.classList.add('open');
            }
        }
    </script>
</body>

</html>