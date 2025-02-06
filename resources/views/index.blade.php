<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Mandajaya Rekayasa Konstruksi
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
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

        .carousel {
            position: relative;
            overflow: hidden;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item {
            min-width: 100%;
            box-sizing: border-box;
        }

        .card:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease-in-out;
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
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
                <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
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
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="contact">Contact Us</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="service">Services</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="project">Projects</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="team">Our Team</a></li>
            <li><a class="text-gray-300 hover:text-blue-400 transition duration-300" href="client">Clients</a></li>
            <!-- Company Profile Button for Mobile -->
            <li>
                <a href="https://drive.google.com/file/d/1_OuB8-CuDZPOWyo8zdetd3FRSMIm29gJ/view?usp=sharing" target="_blank" class="border border-blue-500 text-blue-500 px-5 py-2 rounded-lg hover:bg-blue-500 hover:text-white transition duration-300 text-center">
                    Company Profile
                </a>
            </li>
        </ul>
    </nav>



    <!-- Hero Section with Carousel -->
    <section class="relative fade-in carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img alt="A construction site with cranes and building materials" class="w-full h-96 object-cover" height="600" src="https://storage.googleapis.com/a1aa/image/2w6BKAWJxzyfcjYrrDjt1RYrVFjsM30VudM8t55dJos.jpg" width="1920" />
            </div>
            <div class="carousel-item">
                <img alt="A team of construction consultants in a meeting" class="w-full h-96 object-cover" height="600" src="https://storage.googleapis.com/a1aa/image/VkfnTaHx8Ms9h7goIZNN_bZAvjX4IVvynWI1esfv6pw.jpg" width="1920" />
            </div>
            <div class="carousel-item">
                <img alt="A construction site with workers and machinery" class="w-full h-96 object-cover" height="600" src="https://storage.googleapis.com/a1aa/image/XhHRNsT_PydtlbeP8FLp-aT0ykQ01SRkYd700FJXAbo.jpg" width="1920" />
            </div>
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl font-bold mb-4">
                    Building the Future, Restoring the Past
                </h1>
                <p class="text-lg mb-6">
                    Expert construction consulting services for your projects
                </p>
                <!-- <a class="bg-yellow-500 text-gray-800 px-6 py-3 rounded-full font-bold" href="#">
                    Get Started
                </a> -->
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                About Us
            </h2>
            <div class="flex flex-wrap justify-center">
                <a class="w-full md:w-1/3 p-4 card" href="team">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A team of construction consultants in a meeting" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/VkfnTaHx8Ms9h7goIZNN_bZAvjX4IVvynWI1esfv6pw.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Our Team
                        </h3>
                        <p class="text-gray-700">
                            Our team of experienced consultants is dedicated to providing the best service and solutions for your construction needs.
                        </p>
                    </div>
                </a>
                <a class="w-full md:w-1/3 p-4 card" href="project">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A construction site with workers and machinery" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/XhHRNsT_PydtlbeP8FLp-aT0ykQ01SRkYd700FJXAbo.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Our Projects
                        </h3>
                        <p class="text-gray-700">
                            We have successfully completed numerous projects across various sectors, including commercial, residential, and industrial.
                        </p>
                    </div>
                </a>
                <a class="w-full md:w-1/3 p-4 card" href="vision">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A blueprint and construction tools on a table" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/xhGlafHv9-UB_Qk6X0nW9YjoomS1u90eWqCJObEBk5k.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Our Vision
                        </h3>
                        <p class="text-gray-700">
                            Our vision is to be the most trusted and innovative construction consulting firm, delivering exceptional value to our clients.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="py-12 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Services
            </h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/4 p-4">
                    <a href="service" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                            <i class="fas fa-hard-hat text-4xl text-yellow-500 mb-4">
                            </i>
                            <h3 class="text-xl font-bold mb-2">
                                Project Management
                            </h3>
                            <p class="text-gray-700">
                                Comprehensive project management services to ensure your project is completed on time and within budget.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <a href="service" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                            <i class="fas fa-drafting-compass text-4xl text-yellow-500 mb-4">
                            </i>
                            <h3 class="text-xl font-bold mb-2">
                                Design Consultation
                            </h3>
                            <p class="text-gray-700">
                                Expert design consultation to help you create functional and aesthetically pleasing spaces.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <a href="service" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                            <i class="fas fa-tools text-4xl text-yellow-500 mb-4">
                            </i>
                            <h3 class="text-xl font-bold mb-2">
                                Construction Supervision
                            </h3>
                            <p class="text-gray-700">
                                Professional supervision to ensure that all construction activities are carried out to the highest standards.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <a href="service" class="block">
                        <div class="bg-white p-6 rounded-lg shadow-lg transform hover:scale-105 hover:shadow-xl transition-transform duration-300">
                            <i class="fas fa-building text-4xl text-yellow-500 mb-4">
                            </i>
                            <h3 class="text-xl font-bold mb-2">
                                Quality Assurance
                            </h3>
                            <p class="text-gray-700">
                                Rigorous quality assurance processes to ensure the durability and safety of your construction projects.
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Projects
            </h2>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 p-4">
                    <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg" width="300" />
                    <h3 class="text-xl font-bold mb-2">
                        Commercial Building
                    </h3>
                    <p class="text-gray-700">
                        A state-of-the-art commercial building designed and managed by our expert team.
                    </p>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <img alt="A luxury residential complex" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg" width="300" />
                    <h3 class="text-xl font-bold mb-2">
                        Residential Complex
                    </h3>
                    <p class="text-gray-700">
                        A luxury residential complex featuring modern amenities and sustainable design.
                    </p>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <img alt="An industrial facility with machinery" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg" width="300" />
                    <h3 class="text-xl font-bold mb-2">
                        Industrial Facility
                    </h3>
                    <p class="text-gray-700">
                        A high-tech industrial facility built to meet the needs of modern manufacturing.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Clients Section -->
    <section class="py-12 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                Our Clients
            </h2>
            <p class="text-gray-700 mb-6">
                We are proud to have worked with a diverse range of clients from various industries. Here are some of our esteemed clients:
            </p>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/4 p-4">
                    <img alt="Logo of Client 1" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/BNI.png') }}" width="200" />
                    <h3 class="text-xl font-bold mb-2">
                        Client 1
                    </h3>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <img alt="Logo of Client 2" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/KAI.jpg') }}" width="200" />
                    <h3 class="text-xl font-bold mb-2">
                        Client 2
                    </h3>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <img alt="Logo of Client 3" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/BI.png') }}" width="200" />
                    <h3 class="text-xl font-bold mb-2">
                        Client 3
                    </h3>
                </div>
                <div class="w-full md:w-1/4 p-4">
                    <img alt="Logo of Client 4" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/POS.png') }}" width="200" />
                    <h3 class="text-xl font-bold mb-2">
                        Client 4
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
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
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-item');
            if (index >= slides.length) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 1;
            } else {
                currentSlide = index;
            }
            const offset = -currentSlide * 100;
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        setInterval(nextSlide, 5000);

        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>