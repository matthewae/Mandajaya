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

            .service-icon:hover {
                color: #f59e0b;
                transform: scale(1.1);
                transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
            }

            .service-icon:hover i {
                color: #f59e0b;
            }

            .carousel-track {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .carousel-slide {
                min-width: 100%;
                box-sizing: border-box;
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
                                    <img alt="Logo of Client 5" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/esdm.png') }}" />
                                </div>
                            </div>
                            <!-- Client 6 -->
                            <div class="w-full sm:w-1/2 md:w-1/4 p-4">
                                <div class="bg-white p-6 rounded-lg shadow-lg client-box">
                                    <img alt="Logo of Client 6" class="w-full h-24 object-contain mb-4" src="{{ asset('storage/dpkp 3.png') }}" />
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
                                    <img alt="Logo of Client 16" class="w-full h-24 object-contain mb-4" height="100" src="{{ asset('storage/POS.png') }}" width="200" />
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

                document.getElementById("menu-toggle").addEventListener("click", function() {
                    var menu = document.getElementById("mobile-menu");
                    menu.classList.toggle("hidden");
                });

                let images = document.querySelectorAll(".hero-image");
                let currentIndex = 0;

                function changeImage() {
                    images[currentIndex].classList.remove("active");
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add("active");
                }

                setInterval(changeImage, 4000);


            });


            let currentIndex = 0;
            const slides = document.querySelectorAll('.carousel-slide');
            const totalSlides = slides.length;

            function showSlide(index) {
                const track = document.querySelector('.carousel-track');
                track.style.transform = `translateX(-${index * 100}%)`;
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                showSlide(currentIndex);
            }

            setInterval(nextSlide, 7000);
        </script>
    </body>

    </html>