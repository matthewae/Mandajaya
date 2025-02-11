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
        /* Animations */
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        .slide-in {
            animation: slideIn 0.5s ease-out;
        }

        .fade-up {
            animation: fadeUp 0.5s ease-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Carousel Styles */
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

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        /* Interactive Elements */
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .service-icon:hover {
            transform: scale(1.1);
            color: #f59e0b;
        }

        /* Navigation Dots */
        .carousel-dots {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 8px;
            z-index: 10;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: none;
            padding: 0;
        }

        .dot.active {
            background: white;
            transform: scale(1.2);
        }

        .dot:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        /* Navigation Arrows */
        .carousel-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: rgba(0, 0, 0, 0.5);
            border: none;
            border-radius: 50%;
            color: white;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            z-index: 10;
        }

        .carousel-arrow:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .carousel-arrow.prev {
            left: 20px;
        }

        .carousel-arrow.next {
            right: 20px;
        }
        .loading {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .loaded {
            opacity: 1;
        }

        .carousel .carousel-dots .client-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            padding: 0;
        }

        .carousel .carousel-dots .client-dot.active {
            background: rgba(0, 0, 0, 0.8);
            transform: scale(1.2);
        }

        .carousel .carousel-dots .client-dot:hover {
            background: rgba(0, 0, 0, 0.6);
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



    <!-- Hero Section with Carousel -->
    <section class="relative fade-in carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img alt="A construction site with cranes and building materials" class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/2w6BKAWJxzyfcjYrrDjt1RYrVFjsM30VudM8t55dJos.jpg" />
            </div>
            <div class="carousel-item">
                <img alt="A team of construction consultants in a meeting" class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/VkfnTaHx8Ms9h7goIZNN_bZAvjX4IVvynWI1esfv6pw.jpg" />
            </div>
            <div class="carousel-item">
                <img alt="A construction site with workers and machinery" class="w-full h-screen object-cover"
                    src="https://storage.googleapis.com/a1aa/image/XhHRNsT_PydtlbeP8FLp-aT0ykQ01SRkYd700FJXAbo.jpg" />
            </div>
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Building the Future, Restoring the Past</h1>
                <p class="text-lg md:text-2xl mb-6">Expert construction consulting services for your projects</p>
            </div>
        </div>
        <!-- Add Hero Carousel Navigation -->
        <div class="carousel-dots">
            <button class="dot active" onclick="showHeroSlide(0)" aria-label="Slide 1"></button>
            <button class="dot" onclick="showHeroSlide(1)" aria-label="Slide 2"></button>
            <button class="dot" onclick="showHeroSlide(2)" aria-label="Slide 3"></button>
        </div>
        <button class="carousel-arrow prev" onclick="prevHeroSlide()" aria-label="Previous slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-arrow next" onclick="nextHeroSlide()" aria-label="Next slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </section>
    <!-- About Section -->
    <section class="py-12 bg-gray-100 fade-in">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-bold mb-6">
                About Us
            </h2>
            <p class="text-gray-700 mb-6 text-justify">
                PT. Mandajaya Rekayasa Konstruksi (MRK) was founded in 2022 with a vision of providing top-notch construction
                consulting services. Over the years, we have grown into a leading firm in the industry, known for our commitment
                to quality, innovation, and client satisfaction. Our expertise spans various sectors, including infrastructure,
                commercial, and residential projects, allowing us to offer comprehensive solutions tailored to each client’s unique needs.
            </p>
            <p class="text-gray-700 mb-6 text-justify">
                Our team of experienced professionals brings together technical excellence, industry insights, and a client-focused
                approach to ensure that every project is executed with precision and efficiency. We leverage the latest technologies and
                best practices in construction management, ensuring sustainable and cost-effective outcomes. At MRK, we believe in building
                long-term relationships with our clients, partners, and stakeholders by consistently delivering projects that exceed expectations.
                Through continuous improvement and dedication to excellence, we strive to shape the future of the construction industry
                and contribute to the development of a better-built environment.
            </p>
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
                <div class="w-full md:w-1/4 lg:w-1/7 p-4">
                    <a href="service" class="block service-icon">
                        <div class="p-6 rounded-lg">
                            <i class="fas fa-hard-hat text-6xl text-gray-700 mb-4"></i>
                            <h3 class="text-xl font-bold">
                                Project Management
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 lg:w-1/7 p-4">
                    <a href="service" class="block service-icon">
                        <div class="p-6 rounded-lg">
                            <i class="fas fa-drafting-compass text-6xl text-gray-700 mb-4"></i>
                            <h3 class="text-xl font-bold">
                                Design Consultation
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 lg:w-1/7 p-4">
                    <a href="service" class="block service-icon">
                        <div class="p-6 rounded-lg">
                            <i class="fas fa-tools text-6xl text-gray-700 mb-4"></i>
                            <h3 class="text-xl font-bold">
                                Construction Supervision
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 lg:w-1/7 p-4">
                    <a href="service" class="block service-icon">
                        <div class="p-6 rounded-lg">
                            <i class="fas fa-building text-6xl text-gray-700 mb-4"></i>
                            <h3 class="text-xl font-bold">
                                Quality Assurance
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 lg:w-1/7 p-4">
                    <a href="service" class="block service-icon">
                        <div class="p-6 rounded-lg">
                            <i class="fas fa-chart-line text-6xl text-gray-700 mb-4"></i>
                            <h3 class="text-xl font-bold">
                                Cost Estimation
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 lg:w-1/7 p-4">
                    <a href="service" class="block service-icon">
                        <div class="p-6 rounded-lg">
                            <i class="fas fa-file-contract text-6xl text-gray-700 mb-4"></i>
                            <h3 class="text-xl font-bold">
                                Contract Administration
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/4 lg:w-1/7 p-4">
                    <a href="service" class="block service-icon">
                        <div class="p-6 rounded-lg">
                            <i class="fas fa-recycle text-6xl text-gray-700 mb-4"></i>
                            <h3 class="text-xl font-bold">
                                Sustainability Consulting
                            </h3>
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
                <a class="w-full md:w-1/3 p-4 card" href="project">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A modern commercial building" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/seYcKjF8wP_Wk6O1puBWMiqbQI2rmvp166DUnlAtO8g.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Commercial Building
                        </h3>
                        <p class="text-gray-700">
                            A state-of-the-art commercial building designed and managed by our expert team.
                        </p>
                    </div>
                </a>
                <a class="w-full md:w-1/3 p-4 card" href="project">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="A luxury residential complex" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/fV8LLHNOLa443yshurbQ0Zy-uUJeUW_YsVfNbFbJ5zY.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Residential Complex
                        </h3>
                        <p class="text-gray-700">
                            A luxury residential complex featuring modern amenities and sustainable design.
                        </p>
                    </div>
                </a>
                <a class="w-full md:w-1/3 p-4 card" href="project">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img alt="An industrial facility with machinery" class="w-full h-48 object-cover mb-4" height="200" src="https://storage.googleapis.com/a1aa/image/BRMUZitZ8CbAo1ZZYxgEj4kBzBMkBLsMyNtW5sEl5Z8.jpg" width="300" />
                        <h3 class="text-xl font-bold mb-2">
                            Industrial Facility
                        </h3>
                        <p class="text-gray-700">
                            A high-tech industrial facility built to meet the needs of modern manufacturing.
                        </p>
                    </div>
                </a>
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
                We are proud to have worked with a diverse range of clients from various industries.
            </p>
            <div class="carousel">
                <div class="carousel-track">
                    <!-- Slide 1 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 1 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 1" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/bandung.png') }}" />
                            </div>
                        </div>
                        <!-- Client 2 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 2" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/Logo-cimahi.png') }}" />
                            </div>
                        </div>
                        <!-- Client 3 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 3" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/bogor.png') }}" />
                            </div>
                        </div>
                        <!-- Client 4 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 4" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/takalar.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 5 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 5" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/jakarta.png') }}" />
                            </div>
                        </div>
                        <!-- Client 6 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 6" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/esdm.png') }}" />
                            </div>
                        </div>
                        <!-- Client 7 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 7" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/BAP.png') }}" />
                            </div>
                        </div>
                        <!-- Client 8 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 8" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/pupr 2.png') }}" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 9 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 9" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/Bi.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 10 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 10" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/BNI.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 11 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 11" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/KAI.jpg') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 12 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 12" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/POS.png') }}" width="200" />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 13 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 13" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/bukit.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 14 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 14" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/rskgm.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 15 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 15" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/KimiaFarma.png') }}" width="200" />
                            </div>
                        </div>
                        <!-- Client 16 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 16" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/dpkp 3.png') }}" width="200" />
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 17 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 17" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Tlbt6CyVRvFAPc-2LGPMmIQaWnM8T4oCmxj1zpc9YAs.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 18 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 18" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/S20oaOWT8s2eaTGzdgQmcHZGK8Pq-rJZ39N6lGDbPns.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 19 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 19" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/lg4LKe0I2G2i4tnO0TNoiiOOFPeMm8cGm-Rx6RIICVg.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 20 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 20" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/Trr55l8kxtQh_CxjmdKKSKfbvtjaKxIUyA7k9R6TkZE.jpg" width="200" />
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide flex flex-wrap justify-center">
                        <!-- Client 21 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 21" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/o1HKmHV7sOv-DjDiJ1vseTQWAs9_TUr68TujvftgpDk.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 22 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 22" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/4aFC0Z4SbYNOTcKproTPHUe6fBMnoFLowsU2Xe6eEVM.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 23 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 23" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/f0TneKS1zb9hKsdu27_MMnXvtzcmePNZb6TnLxuiWls.jpg" width="200" />
                            </div>
                        </div>
                        <!-- Client 24 -->
                        <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                            <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                <img alt="Logo of Client 24" class="w-full h-24 object-contain mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/WeSuQ5WdirZgN4mu1COHfQh9KSnIDRqPUjzg3kSfFRQ.jpg" width="200" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-dots" style="position: relative; margin-top: 2rem;">
                    <button class="dot client-dot active" onclick="showClientSlide(0)" aria-label="Client slide 1"></button>
                    <button class="dot client-dot" onclick="showClientSlide(1)" aria-label="Client slide 2"></button>
                    <button class="dot client-dot" onclick="showClientSlide(2)" aria-label="Client slide 3"></button>
                    <button class="dot client-dot" onclick="showClientSlide(3)" aria-label="Client slide 4"></button>
                    <button class="dot client-dot" onclick="showClientSlide(4)" aria-label="Client slide 5"></button>
                    <button class="dot client-dot" onclick="showClientSlide(5)" aria-label="Client slide 6"></button>
                </div>
                <!-- <button class="carousel-arrow prev" onclick="prevClientSlide()" aria-label="Previous clients">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-arrow next" onclick="nextClientSlide()" aria-label="Next clients">
                    <i class="fas fa-chevron-right"></i>
                </button> -->
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-6">
        <div class="container mx-auto text-center text-gray-300 px-6">
            <p class="text-sm md:text-base">
                © 2022 Mandajaya Rekayasa Konstruksi. All rights reserved.
            </p>
            <p class="mt-2 text-sm md:text-base leading-tight">
                Jl. Kota Mas 1 No.18, Kota Cimahi, Jawa Barat, 40511
            </p>
            <div class="flex justify-center gap-3 mt-4 flex-wrap">
                <a class="text-gray-300 hover:text-white text-lg" href="https://www.facebook.com/profile.php?id=61569553317515">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-gray-300 hover:text-white text-lg" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-gray-300 hover:text-white text-lg" href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-gray-300 hover:text-white text-lg" href="https://www.instagram.com/mandajaya_rekayasa_konstruksi?igsh=MW1kdTFxb2kycWNheg==">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Hero Section Carousel
        let currentHeroSlide = 0;
        const heroSlides = document.querySelectorAll('.carousel-item');
        const heroDots = document.querySelectorAll('.hero-dot');

        function showHeroSlide(index) {
            if (index >= heroSlides.length) {
                currentHeroSlide = 0;
            } else if (index < 0) {
                currentHeroSlide = heroSlides.length - 1;
            } else {
                currentHeroSlide = index;
            }

            const offset = -currentHeroSlide * 100;
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;

            // Update dots
            heroDots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentHeroSlide);
            });
        }

        function nextHeroSlide() {
            showHeroSlide(currentHeroSlide + 1);
        }

        function prevHeroSlide() {
            showHeroSlide(currentHeroSlide - 1);
        }

        // Client Section Carousel
        let currentClientSlide = 0;
        const clientSlides = document.querySelectorAll('.carousel-slide');
        const clientDots = document.querySelectorAll('.client-dot');

        function showClientSlide(index) {
            if (index >= clientSlides.length) {
                currentClientSlide = 0;
            } else if (index < 0) {
                currentClientSlide = clientSlides.length - 1;
            } else {
                currentClientSlide = index;
            }

            const offset = -currentClientSlide * 100;
            document.querySelector('.carousel-track').style.transform = `translateX(${offset}%)`;

            // Update dots
            document.querySelectorAll('.client-dot').forEach((dot, i) => {
                dot.classList.toggle('active', i === currentClientSlide);
            });
        }

        function nextClientSlide() {
            showClientSlide(currentClientSlide + 1);
        }

        function prevClientSlide() {
            showClientSlide(currentClientSlide - 1);
        }



        // Auto advance slides
        setInterval(nextHeroSlide, 4000);
        setInterval(() => {
            currentClientSlide = (currentClientSlide + 1) % clientSlides.length;
            showClientSlide(currentClientSlide);
        }, 5000);

        // Mobile Menu Toggle with animation
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('slide-in');
        });

        // Loading animation
        document.addEventListener('DOMContentLoaded', function() {
            document.body.classList.add('loaded');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>